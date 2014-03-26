<?php
// error reporting
error_reporting(E_ALL);

session_start();

// define root dir
define('ROOT_DIR', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
// define config dir
define('CONFIG_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'configs' . DIRECTORY_SEPARATOR . 'config.ini');
// init class Loader
require( ROOT_DIR . 'app' . DIRECTORY_SEPARATOR . 'Loader.php' );

$load = new Loader();
// register class directories
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controller' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'model' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' );

$load->register();
print_r($load);
// init router
$req = new Router;
print_r($req);
// init controller
$cont = Record::instance($req->controller);
$cont->action($req->action);

// print_r($req);
// print_r($cont);
// print_r($_POST);
// print_r($cont);
// print_r($_SESSION);
?>