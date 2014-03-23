<?php

class Router {

	public $controller;

	public $action; 
	
	public $httpPost = array();
	
	private $args = array();

	protected $config = array();

	protected $user = array();

	protected $contentType = array();

	function __construct() {

	    $this->getController();
	    $this->getHttpHeader();

	}

	private function getController() {

		$route = (empty($_GET['url'])) ? '' : strtolower($_GET['url']);

		if (empty($route))
		{
			$route = 'Index';
		}
		else
		{

			$parts = explode('/', $route);
			$this->controller = ucfirst($parts[0]).'Controller';
			if(isset( $parts[1]))
			{
				$this->action = ucfirst($parts[1]);
			}
		}

		if (empty($this->controller))
		{
			$this->controller = 'Index'.'Controller';
		}

		if (empty($this->action))
		{
			$this->action = 'Index';
		}
	}

	public function getHttpHeader(){
		$httpAccept = explode(',' , $_SERVER['HTTP_ACCEPT']);
		$this->contentType = $httpAccept;
	}

	public function setConfig($filename){
		$config_values = parse_ini_file($filename, TRUE);
		$this->config = $config_values;
	}

 
}

?>
