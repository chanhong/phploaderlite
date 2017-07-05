<?php
namespace PhpLoaderLite;

use PhpLoaderLite\NsClassLoader;

defined('DS') 
    || define('DS', DIRECTORY_SEPARATOR);

    if (!class_exists('ClassLoaderLite\NsClassLoader')) {
        include ('src\Nsclassloader.php');
        NsClassLoader::addPath( "test\src" );
        // create class and register auto loader
        $autoloader = new NsClassLoader();
        echo "NsClassLoader is loaded";
    } else {
        echo "NsClassLoader is not loaded";
    }

$t = new FrontController;
$m = new FrontModel;
$t->me();
$m->me();
