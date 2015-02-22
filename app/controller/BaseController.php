<?php

// namespace hhmvc\app\controller\BaseController

Abstract Class BaseController {

	protected $config;
	protected $router;
	protected $model;
	protected $view;
	protected $tools;

	function __construct() 
	{

	  $this->config 	= parse_ini_file( CONFIG_DIR, TRUE );
	  $this->router 	= Record::instance('Router');        
	  $this->model 		= Record::instance(ucfirst($this->config['DB']['type']));
	  $this->view 		= Record::instance('View');
	  $this->tools 		= Record::instance('Tools');

	  $_SESSION['nav']['0'] = $this->config['gast'];
	  $_SESSION['nav']['1'] = $this->config['user'];
	  $_SESSION['crud'] = $this->config['crud'];

	  // self::request($_SERVER['REQUEST_URI']);
	}

	abstract function action();

	// public function request($string){
	// 	$_SESSION['req'] =  substr(strrchr($string, "/"), 1);;
	// }
}