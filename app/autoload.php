<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

$loader = require __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
return $loader;


//$loader->registerNamespaces(array(
//    // ...
//    'Propel' => __DIR__.'/../vendor/bundles',
//));
//$loader->registerPrefixes(array(
//    // ...
//    'Phing'  => __DIR__.'/../vendor/phing/classes/phing',
//));
