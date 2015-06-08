<?php

/**
 * Autogenerable configuration file
 *
 * (c) 2013, Dereckson, some rights reserved.
 * Released under BSD license.
 *
 * @package     Databases
 * @subpackage  Keruald
 * @author      Sébastien Santoro aka Dereckson <dereckson@espace-win.org>
 * @copyright   2013 Sébastien Santoro aka Dereckson
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD
 * @filesource
 */

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// I. SQL configuration                                                     ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//SQL configuration
$Config['sql']['product'] = 'MySQL';    //Only MySQL is currently implemented
$Config['sql']['host'] = 'localhost';
$Config['sql']['username'] = 'db51';
$Config['sql']['password'] = 'databases51';
$Config['sql']['database'] = 'db51';

//SQL tables
$prefix = '';
define('TABLE_MOTD', $prefix . 'motd');
define('TABLE_SESSIONS', $prefix . 'sessions');
define('TABLE_USERS', $prefix . 'users');
define('TABLE_USERS_AUTH', $prefix . 'users_auth');

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// II. Site configuration                                                   ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//Default theme
$Config['DefaultTheme'] = "NotInKnowledgeExtinction";

//Dates
date_default_timezone_set("UTC");

//Secret key, used for some verification hashes in URLs or forms.
$Config['SecretKey'] = 'Lorem ipsum dolor';

//When reading files, buffer size
define('BUFFER_SIZE', 4096);

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// III. Script URLs                                                         ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

$Config['SiteURL'] = get_server_url();
$Config['BaseURL'] = '';

//AJAX callbacks URL
$Config['DoURL'] = $Config['SiteURL'] . "/do.php";

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// IV. Static content                                                       ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//Where the static content is located?
//Static content = 4 directories: js, css, img and content
//On default installation, those directories are at site root.
//To improve site performance, you can use a CDN for that.
//
//Recommanded setting: $Config['StaticContentURL'] = $Config['SiteURL'];
//Or if Zed is the site root: $Config['StaticContentURL'] = '';
//With CoralCDN: $Config['StaticContentURL'] =  . '.nyud.net';
//
$Config['StaticContentURL'] = '';
//$Config['StaticContentURL'] = get_server_url() . '.nyud.net';

//ImageMagick paths
//Be careful on Windows platform convert could match the NTFS convert command.
$Config['ImageMagick']['convert'] = 'convert';
$Config['ImageMagick']['mogrify'] = 'mogrify';
$Config['ImageMagick']['composite'] = 'composite';
$Config['ImageMagick']['identify'] = 'identify';

//Databases
define('DATABASES_DIR', 'data');

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// V. Caching                                                               ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

/*
 * Some data (Smarty, OpenID and sessions) are cached in the cache directory.
 *
 * Security tip: you can move this cache directory outside the webserver tree.
 */
define('CACHE_DIR', 'cache');

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// VI. Sessions and authentication code                                     ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//If you want to use a common table of sessions / user handling
//with several websites, specify a different resource id for each site.
$Config['ResourceID'] = 24;

?>
