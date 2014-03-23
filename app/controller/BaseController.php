<?php

// namespace hhmvc\app\controller\BaseController

Abstract Class BaseController {

	protected $router;
	protected $model;
	protected $view;

	function __construct() {

	  $this->router = Record::instance('Router');        
	  $this->model = Record::instance('IndexModel');
	  $this->view =  Record::instance('View');
	}

	abstract function action();

}