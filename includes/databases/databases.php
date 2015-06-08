<?php

/**
 * Databases utilities
 *
 * (c) 2010, Dereckson, some rights reserved.
 * Released under BSD license.
 *
 * @package     Databases
 * @subpackage  Databases
 * @author      Sébastien Santoro aka Dereckson <dereckson@espace-win.org>
 * @copyright   2013 Sébastien Santoro aka Dereckson
 * @license     http://www.opensource.org/licenses/bsd-license.php BSD
 * @link        http://zed.dereckson.be/
 * @filesource
 */

class Databases {
    public static function getDatabases () {
        $dirs = array_filter(glob(DATABASES_DIR . '/*'), 'is_dir');
        $len = strlen(DATABASES_DIR) + 1;
        array_walk(
            $dirs,
            function (&$value) use ($len) {
                $value = substr($value, $len);
            }
        );
        return $dirs;
    }
}
