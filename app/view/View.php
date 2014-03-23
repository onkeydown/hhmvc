<?php

Class View{

    public function  __construct(){

        require( ROOT_DIR . 'plugins' . DIRECTORY_SEPARATOR . 'Smarty' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'Smarty.php');
        $this->tpl = new Smarty();

    }

    public function set_content($content=array(),$templateName = null){
        
        $this->tpl->assign('content', $content);
        return $this->tpl->display(ROOT_DIR . 'public/themes/default/'.$templateName);

    }
 
 
} 