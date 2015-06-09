<?php

/**
 * Header
 *
 * (c) 2013, Dereckson, some rights reserved.
 * Released under BSD license.
 *
 * This controller handle the header (MOTD, html header)
 *
 * @package     Zed
 * @subpackage  Controllers
 * @author      Sébastien Santoro aka Dereckson <dereckson@espace-win.org>
 * @copyright   2013 Sébastien Santoro aka Dereckson
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD
 * @filesource
 *
 * @todo cache MOTD fragments (sql performance)
 */

//
// HTML output
//

//Prints the template
$smarty->display('header.tpl');

/**
 * This constant indicates the header have been printed
 */
define('HEADER_PRINTED', true);
