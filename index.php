<?php

/**
 * Application entry point
 *
 * (c) 2010, Dereckson, some rights reserved.
 * Released under BSD license.
 *
 * @package     Databases
 * @subpackage  EntryPoints
 * @author      Sébastien Santoro aka Dereckson <dereckson@espace-win.org>
 * @copyright   2013 Sébastien Santoro aka Dereckson
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD
 * @link        http://zed.dereckson.be/
 * @filesource
 */

////////////////////////////////////////////////////////////////////////////////
///
/// Initialization
///

//Keruald (formelly Pluton) library
include('includes/core.php');

//Session
$IP = encode_ip($_SERVER["REMOTE_ADDR"]);
session_start();
$_SESSION['ID'] = session_id();
session_update(); //updates or creates the session

include("includes/login.php"); //login/logout
$CurrentUser = get_logged_user(); //Gets current user infos

//Skin and accent to load
define('THEME', 'NotInKnowledgeExtinction');

//Loads Smarty
require('includes/Smarty/Smarty.class.php');
$smarty = new Smarty();
$current_dir = dirname(__FILE__);
$smarty->setTemplateDir($current_dir . '/skins/' . THEME);

$smarty->compile_dir = CACHE_DIR . '/compiled';
$smarty->cache_dir = CACHE_DIR;
$smarty->config_dir = $current_dir;

$smarty->config_vars['StaticContentURL'] = $Config['StaticContentURL'];

//Loads language files
initialize_lang();
lang_load('core.conf');

//Gets URL
$url = get_current_url_fragments();

////////////////////////////////////////////////////////////////
///
/// Calls the specific controller to serve the requested page
///

switch ($controller = $url[0]) {
    case '':
        include('controllers/home.php');
        break;

    case 'foo':
    case 'bar':
        include("controllers/$controller.php");
        break;

    case 'quux':
        //It's like a test/debug console/sandbox, you put what you want into
        if (file_exists('dev/quux.php')) {
            include('dev/quux.php');
        } else {
            message_die(GENERAL_ERROR, "Quux lost in Hollywood.", "Nay");
        }
        break;

    default:
        //TODO: returns a prettier 404 page
        header("Status: 404 Not Found");
        dieprint_r($url, 'Unknown URL');
}

?>
