<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/Entities");

$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'broker',
);


$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/Entities"), $isDevMode,null,null,false);
$entityManager = EntityManager::create($dbParams, $config);

use Doctrine\Common\ClassLoader,
Entities\Actions,Entities\Users;

require_once "vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php";
$classLoader = new ClassLoader('Entities', __DIR__);
$classLoader->register();

$product = new Actions();

$users = new Users();


$productRepository = $entityManager->getRepository('Entities\Actions');
$products = $productRepository->findAll();


foreach($products as $product){
	print $product->getLabel().'<br/>';
}