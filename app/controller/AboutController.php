<?php

//namespace hhmvc\app\controller\AboutController

class AboutController extends BaseController{

public function __construct(){
 parent::__construct();
 
 }
 
private function aboutContent(){
 return array(
  'about'=> 'Created with L.D.Alipio light MVC, twitter bootstrap, smarty template engine.',
  'email' => 'YourEmail@domain.com',
  'name' => 'Lorenzo Alipio',
  'motto' => 'You can do it (not like the Nike though.)',
  'sitepath'=>'public/themes/default/'
  );
 
} 
public function action(){
 
   return $this->view->set_content(self::aboutContent(),'about.tpl');
 
}
 
}