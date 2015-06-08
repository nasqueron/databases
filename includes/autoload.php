<?php

/**
 * Autoloads classes
 */
spl_autoload_register(function ($className) {
    //Classes
    $classes['Database'] = './includes/databases/database.php';
    $classes['Databases'] = './includes/databases/databases.php';

    $classes['User'] = './includes/objects/user.php';

    //Loader
    if (array_key_exists($className, $classes)) {
        require_once($classes[$className]);
    }
});
