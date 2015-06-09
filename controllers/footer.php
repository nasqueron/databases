<?php

/**
 * Footer
 *
 * @package     Databases
 * @subpackage  Controllers
 * @author      Sébastien Santoro aka Dereckson <dereckson@espace-win.org>
 * @copyright   2013 Sébastien Santoro aka Dereckson
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD
 * @filesource
 */

///
/// Version
///

$revision = substr(`git rev-list --reverse HEAD | nl | tail -n1 | awk '{print $2}'`, 0, 8);
$build  = 'r';
$build .= trim(`git rev-list --reverse HEAD | nl | tail -n1 | awk '{print $1}'`);
$version = "Git revision: $revision | Version: alpha preview (build $build)";


///
/// HTML output
///
$smarty->assign('version', $version);
$smarty->display('footer.tpl');
