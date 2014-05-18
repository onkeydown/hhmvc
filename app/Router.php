<?php

class Router{

	public $controller;
	public $action;	
	public $params = array();
    public $uri;
    private $reroute;
	
    #protected $config = array();
	#protected $user = array();
	#protected $contentType = array();

	function __construct() {
	    $this->getController();
	}

	private function getController() {

		$this->reroute = array("efforts"	=> "show/efforts",
								"blog" 		=> "show/blog",
								"cv" 		=> "show/cv");
		$route = isset($this->reroute[strtolower($_GET['url'])]) ? $this->reroute[strtolower($_GET['url'])] : strtolower($_GET['url']);

		if (empty($route))
		{
			$route = 'Index';
		}
		else
		{
		
			$parts = explode('/', $route);
			$this->controller = ucfirst($parts[0]).'Controller';
		
			if(isset($parts[1]))
			{
				$this->action = ucfirst($parts[1]);
			}
		}

		if(empty($this->controller))
		{
			$this->controller = 'Index'.'Controller';
		}

		if(empty($this->action))
		{
			$this->action = 'Index';
		}

		if(isset($parts[2]))
		{
			unset( $parts[0], $parts[1] );
			$this->params = array_values($parts);
		}
		unset($parts);
	}
}

?>
