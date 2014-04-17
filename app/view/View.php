<?php

Class View extends BaseView{

    public function  __construct(){
    	parent::__construct();
    }

    public function set_content($content=array(),$templateName = NULL)
    {
        $this->tpl->assign('content', $content, TRUE);
        return $this->tpl->display(ROOT_DIR . 'public/themes/default/'.$templateName);
    }

    public function assignVar( $key, $value ){
        $this->tpl->assign($key, $value, TRUE);
    }

    public function set_content_JSON($data)
    {
		header('Cache-Control: no-cache, must-revalidate');
	    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	    header('Content-type: application/json');
	    echo(json_encode($data));
	    exit();     
 	}

    public function set_content_Html($content){
        echo $content;
        // $this->tpl->assign('content', $content, TRUE);      
        // return $this->tpl->display(ROOT_DIR . 'public/themes/default/'.$templateName);       
    }

} 