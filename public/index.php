<?php
session_start();

// error reporting
error_reporting(E_ALL);

// define root dir
define('ROOT_DIR', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

// init class Loader
require( ROOT_DIR . 'app' . DIRECTORY_SEPARATOR . 'Loader.php' );

$load = new Loader();

// register class directories
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controller' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'model' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' );

// activate the autoloader
$load->register();

// init router
$req = new Router;
$req->setConfig( dirname(dirname(__FILE__)) . '/configs/config.ini' );

$cont = Record::instance($req->controller);
$cont->action($req->action);

// print_r($req);
// print_r($cont);
// print_r($_POST);
// print_r($cont)
?>