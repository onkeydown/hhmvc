<?php

class Router{

	public $controller;

	public $action;
		
	public $params = array();

	public $uri;

	private $reroute;

	
	function __construct() {
	    self::getController();
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
		
			$parts = explode('/', $this->charFilter($route));
			$this->controller = ucfirst($parts[0]).'Controller';
		
			if(isset($parts[1]))
			{
				$this->action = strtolower(trim($parts[1]));
			}
		}

		if(empty($this->controller))
		{
			$this->controller = 'Index'.'Controller';
		}

		if(empty($this->action))
		{
			$this->action = 'index';
		}

		if(isset($parts[2]))
		{
			unset( $parts[0], $parts[1] );
			$this->params = array_values($parts);
		}
		unset($parts);
	}

	public function charFilter($str, $opt = null)
	{
	
		$regEx = isset($opt) ? $opt : '/[^a-zA-Z0-9\/\_.]/i';		
		return $string = preg_replace($regEx, '', $str);
	}
}

?>
