<?php

Class View extends BaseView{

    public function  __construct(){
    	parent::__construct();
    }

    public function set_content($content=array(),$templateName = NULL){
        $this->tpl->assign('content', $content, TRUE);
        $this->tpl->assign('main_nav', $content['main_nav'], TRUE);
        $this->tpl->assign('session', $_SESSION, TRUE);
        return $this->tpl->display(ROOT_DIR . 'public/themes/default/'.$templateName);
    }
 
 
} 