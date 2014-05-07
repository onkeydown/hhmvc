<?php
// namespace hhmvc\app\controller\IndexController

class UsersController extends BaseController{

    private $control;
    private $session_store = array();
    

    public function __construct(){

        parent::__construct();
    }

    public function action($action = "index")
    {
   
        $this->tools->isProtected();

        $action = strtolower(trim($action));
        $this->control = 'users';
        $this->session_store = $_SESSION;

        $post = ($_POST) ? $this->tools->filterArray($_POST, FILTER_SANITIZE_STRING) : FALSE;
    
        if( $action == "logout"){
                
                $this->session_store = $_SESSION;
                session_unset();
                $_SESSION['USER']['role'] == "0";
                $_SESSION['nav'] = $this->session_store['nav'];
                $content = array(
                   'sitepath'       => 'public/themes/default/'.$this->control.'/'.$action,
                   'breadcrump'     => array(   'start', $this->control, $action),
                   'content'        => array(   'username' => $this->session_store['USER']['user_name'],
                                                'email' => $this->session_store['USER']['user_email'],
                                                'splash_msg' => 'See you next time',
                                                'info_msg' => 'You was logged out succesccfully from System',
                                                'error_msg' => 'Oh shit, there was an Error. Try again later...',
                                                'headline_h2' => '',                                                
                                                'more_info' => '',
                                                'copyright' => '',
                    )
                );
                $this->tools->setSession(   array(
                                                "sys_msg"       =>  "You was logged out succesfully!<br><small>Please Login to access member Area!</small>",
                                                "action"        =>  "login",
                                                "role"          =>  "0"
                                            ), 'USER');

                $this->control = 'member';
        		$this->tools->goUrl("/".$this->control."/login", 'login', "303");
        }

        if( $action == "welcome" ){
                
                $welcome = $this->tools->sayHello(array('Aloha!','Tachchen?!','Heise!','Ave!','Allet fit?','Wie gehts?', 'Hey!', 'Tach!', 'MoinMoin!','More jen!','Hallo Ballo!'));
              
                $content = array(   
                       'action'			=> 'login',
                       'sub_nav_list'   => '',                    
                       'sitepath'       => 'public/themes/default/'.$this->control.'/welcome',
                       'breadcrump'     => array('start', $this->control, 'welcome'),
                       'content'        => array(   'username' => $this->session_store['USER']['user_name'],
                                                    'email' => $this->session_store['USER']['user_email'],
                                                    'splash_msg' => 'Welcome Message for Logged in User',
                                                    'welcome_msg' => '<span class="welcomeText">'.$welcome .'</span>',
                                                    'user_name' => $this->session_store['USER']['user_name'],
                                                    'error_msg' => 'Oh shit, there was an Error. Try again later...',
                                                    'sys_msg' => 'Please do not forget to logout when u will leave.',
                                                    'more_info' => '',
                                                    'headline_h2' => 'Welcome to Member Area',
                                                    'copyright' => ''
                                                )
                   );
        }


        if(!is_array($content)){
                $content = array(  
                   'action'=>$action,
                   'sitepath'=>'public/themes/default/'.$this->control.'/'.$action,
                   'breadcrump'=>array('start', $this->control, $action),
                   'content' =>self::article()
                );
        }

        ## this model content is for database
         //return $this->view->set_content($this->model->Content(),'index.tpl'
        return $this->view->set_content($content, $this->control.'/'.$action.'.tpl');

    }

    private function article(){
        
        $article = array();
        return $article;
    }

 }