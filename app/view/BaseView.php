<?php

//namespace hhmvc\app\model\BaseModel;

Abstract Class BaseView{

	protected $tpl;

	public function __construct(){
		require( ROOT_DIR . 'plugins' . DIRECTORY_SEPARATOR . 'Smarty' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'Smarty.php');
	    $this->tpl = Record::instance('Smarty');
	}

	Abstract function set_content();
 
}