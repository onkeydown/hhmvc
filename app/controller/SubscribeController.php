<?php
// namespace hhmvc\app\controller\IndexController

class SubscribeController extends BaseController{

    public function __construct(){

        parent::__construct();

    }

    public function action(){

        $content = array(
           
           'sitepath'=>'public/themes/default/',
           'content' =>self::article()
        );

        ## this model content is for database
         //return $this->view->set_content($this->model->Content(),'index.tpl')
        
        return $this->view->set_content($content, 'subscribe.tpl');

    }

    private function article(){
        
        $article =array(

         'first_p'=> 'This demo application script demonstrate the power of MVC methodologies in web development. 
          This demo application also demonstrate the implementation of the capabilities of the following:',
                   'lists' => array('Smarty templating engine','Twitter Bootstrap Front-end framework,Smarty template inheritance','Youtube API version 2,Clean extensible PHP script,Pure OOP as written in Model View Controller design Pattern','Request routing to web or public directory only','Auto redirect to the index, if the page request does not exist','Pages have their own controller to better manage the content delivery','No HTML tags in the business logic pages','Written in PHP 5.5.1 > standards'),
             'more_info'=>'This template may appear to be simple in its form, but it demonstrated the advance implementation
          of Object Oriented PHP.',
              'copyright'=> 'Property of Lorenzo D. Alipio');
          


        return $article;
    }

 }