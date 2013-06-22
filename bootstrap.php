<?php

// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\ClassLoader;

$isDevMode = true;

require_once "vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php";
$classLoader = new ClassLoader('Entities', __DIR__);
$classLoader->register();

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'broker',
);

/*
$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode,null,null,false);
$entityManager = EntityManager::create($dbParams, $config);
*/


global $em;

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/Entities"), $isDevMode,null,null,false);
$em = EntityManager::create($dbParams, $config);
