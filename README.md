PHPLoaderLite
================

Very lite Class auto loader

One class file with the size of 4 KB.


Installation
------------

$ ./composer.phar require chanhong/phploaderlite 1.0.x-dev

Usage
-----

Use Case: Use with composer

use PhpLoaderLite\NsClassLoader;

    NsClassLoader::addPath("src" .DS. "controller");

    NsClassLoader::addPath("src" .DS. "model");

    // create class and register auto loader

    $autoloader = new NsClassLoader();

Use Case: Use with your own code: 
--------

use PhpLoaderLite\NsClassLoader;

    if (!class_exists('PhpLoaderLite\NsClassLoader')) {

        require_once('src/nsclassloader.php');

        NsClassLoader::addPath( "src" .DS. "controller");

        NsClassLoader::addPath( "src" .DS. "model");

        // create class and register auto loader
        
        $autoloader = new NsClassLoader();
    }  


Please see testcase.php for more detail

PHPUnit Usage
-------------

cd phploaderlite

phpunit test\NsClassLoaderTest.php 

