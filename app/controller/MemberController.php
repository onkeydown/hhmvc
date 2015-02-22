<?php
// namespace hhmvc\app\controller\IndexController

class MemberController extends BaseController{

    private $control;
    private $session_store = array();
    private $content = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function action($action = "index")
    {
        $action = strtolower(trim($action));
        $this->control = 'member';
        $this->session_store = $_SESSION;
        $post = isset($_POST) ? $this->tools->filterArray($_POST, FILTER_SANITIZE_STRING) : FALSE;
        $post = $_POST;
        if( $action == "login" && $post ){

                $query = 'select id, user_name, user_pass, user_email, lastseen, role from hhmvc.users where hhmvc.users.user_name = "' . $post['username'] . '" AND hhmvc.users.status = 1';
                $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);               
                $result    =   $this->model->query($query);
                $array_result = $this->model->fetch_array($result, MYSQL_ASSOC);
                $this->model->close();

                if($array_result){

                    $crypted_pwd = $this->tools->cryptString($post['pwd'],$array_result['user_pass']);

                    if($crypted_pwd == $array_result['user_pass']){
                         
                        $array_result['headline_h2']	=	'You are logged in';
						$array_result['login_time']		=	time(); 
                        $this->tools->setSession($array_result, 'USER');
                    }
                }
                            
                $this->tools->goUrl("/users/welcome", $action, "303");
                exit;
        }

        if( $action == "subscribe" && $post ){
                
                $crypted_pwd = $this->tools->cryptString($post["pwd"]);

                $query = 'INSERT   INTO  hhmvc.users (hhmvc.users.user_name, hhmvc.users.user_email, hhmvc.users.user_pass, hhmvc.users.status, hhmvc.users.role)
                                        VALUES ("'.$post["username"].'", "'.$post["email"].'", "'.$crypted_pwd.'", "1", "'.$post['role'].'")';
                $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);
                $this->model->query($query);
                $this->model->close();
                $this->tools->setSession( array( "sys_msg"  =>  "Your account was created! Please login...", "action"   =>  "join"), 'USER');
         		$this->tools->goUrl("/".$this->control."/login", "join", "303");
         		exit;
        }


        if(!$this->content){
                $this->content = array(   
                    'sitepath'=>'public/themes/default/'.$this->control.'/'.$action,
                    'breadcrump'=>array('start', $this->control, $action),
                    'content' =>self::article()
                );
        }

           ## this model content is for database
         //return $this->view->set_content($this->model->Content(),'index.tpl'
        # print_r($this->content);
        return $this->view->set_content($this->content, $this->control.'/'.$action.'.tpl');
    }

    private function article(){
        $article = array();
        return $article;
    }
}