<?php
session_start();
error_reporting(0);

define('ROOT_DIR', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('CONFIG_DIR', ROOT_DIR . DIRECTORY_SEPARATOR . 'configs' . DIRECTORY_SEPARATOR . 'config.ini');
require_once(ROOT_DIR."/app/Loader.php");
$load = new Loader();
// register class directories
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controller' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'model' );
$load->addPrefix('', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'view' );

$load->register();
// init router
$req = new Router;
// init controller
$con = Record::instance($req->controller);
$con->action($req->action, $req->params);
?>