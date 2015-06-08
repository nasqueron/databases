<?php

/**
 * Homepage
 *
 * (c) 2013, Dereckson, some rights reserved.
 * Released under BSD license.
 *
 * This controller handle the / URL.
 *
 * @package     Databases
 * @subpackage  Controllers
 * @author      Sébastien Santoro aka Dereckson <dereckson@espace-win.org>
 * @copyright   2013 Sébastien Santoro aka Dereckson
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD
 * @filesource
 */

//
// Lists of database
//
$databases = Databases::getDatabases();

//
// HTML output
//

//Serves header
$smarty->assign('PAGE_TITLE', lang_get('Welcome'));
include('header.php');

//Serves body
$smarty->assign('databases', $databases);
$smarty->display('home.tpl');

//Serves footer
$smarty->assign("screen", "Home console");
include('footer.php');

?>
