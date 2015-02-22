<?php
// namespace hhmvc\app\controller\IndexController

class IndexController extends BaseController{

    private $control;
    private $session_store = array();

    public function __construct(){
        parent::__construct();
    }

    public function action($action = "index")
    {
        $this->control = 'index';
        $_SESSION['nav'] = array($this->config['gast'], $this->config['user']);

        $this->session_store = $_SESSION;
        $this->session_store = array();
        
        $content = array(
           'sitepath'=> 'public/themes/default/',
           'content' => self::article()
        );
        
        ## this model content is for database
         //return $this->view->set_content($this->model->Content(),'index.tpl')
        return $this->view->set_content($content, 'index.tpl');
    }

    private function article(){
        $article =array(
          
          'splash_msg' => 'Hey, what\'s going on? <br />This is a mvc tryout from Robs...',
          'info_msg' => '<h3 class="infoHeadline"><i class="fa fa-wrench"></i>     HHMVC_FRMWORK_PROJECT_a000.1</h3>  <p class="infoTXT">Please try to <a href="/member/login">login</a> and through an eye on <a href="efforts">efforts</a> for more details.</p>',
          'error_msg' => 'Oh shit, there was an Error. Try again later...',
          'headline_h2' => 'THX in advance, &ndash;Robs'
          );

        return $article;
    }

 }