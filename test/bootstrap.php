<?php
defined('DS') 
    || define('DS', DIRECTORY_SEPARATOR);

require_once __DIR__ . '/../src/Nsclassloader.php';

spl_autoload_register(function($class) {
    if (strpos($class, 'PhpLoaderLite\\') === 0) {
        $dir = strcasecmp(substr($class, -4), 'Test') ? 'src' : 'test';
        $name = substr($class, strlen('PhpLoaderLite'));
        require __DIR__ . DS. $dir . strtr($name, '\\', DS) . '.php';
    }
});
