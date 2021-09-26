<?php

/**
 * Personal autoload of application
 * 
 * @param string $className
 * @return void
 */
spl_autoload_register(function (string $className): void {

    $className = str_replace("Lib", "lib", $className);
    $className = str_replace("\\", DIRECTORY_SEPARATOR , $className);
    $className .= '.php';

    if (file_exists($className)) {
        require_once $className;
    }
    
});