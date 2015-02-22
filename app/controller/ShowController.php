<?php
// namespace hhmvc\app\controller\IndexController

class ShowController extends BaseController{

    private $control;
    private $session_stroe = array();
    private $content = array();

    public function __construct(){

        parent::__construct();
    }

    public function action($action = "index")
    {
        $action = strtolower(trim($action));
        $this->control = 'show';
        $post = isset($_POST) ? $this->tools->filterArray($_POST, FILTER_SANITIZE_STRING) : FALSE;

        if( $action == "efforts"){

		    	//$this->tools->setSession(array('action' => $action));
                $cols = "id, artikel_id, parent_id, subnavi, html, categories, excerpt, rating, footer, sidebar, keywords, init_date, edit_date, link_url, status, user_id ";
                $query = 'select '.$cols.' from hhmvc.cms where hhmvc.cms.status = "1" AND hhmvc.cms.link_id = "'.$action.'" order by id desc';
                $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);               
                $result    =   $this->model->query($query);
                while($content[] =  $this->tools->htmlEncodeDecode($this->model->fetch_array($result, MYSQL_ASSOC), 'dec'));                

                $this->view->set_content($content, $this->control.'/'.$action.'.tpl');
                exit;
        }

        if( $action == "subscribe" && $post ){

                $crypted_pwd = $this->tools->cryptString($post["pwd"]);
                $query = 'INSERT   INTO  hhmvc.users (hhmvc.users.user_name, hhmvc.users.user_email, hhmvc.users.user_pass, hhmvc.users.status, hhmvc.users.role)
                                        VALUES ("'.$post["username"].'", "'.$post["email"].'", "'.$crypted_pwd.'", "1", "2")';
                $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);
                $this->model->query($query);
                $this->model->close();
                $this->tools->setSession( array( "action" => $action, "sys_msg"  =>  "Your account was created! Please login...", "action"   =>  "created_account"), 'USER');
         		$this->tools->goUrl("/".$this->control."/login", $action, "303");
         		exit;
        }


        if(!$this->content){
                $this->content = array(  
                    'action'=>$action,
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
        $article = array(
        );
        return $article;
    }
}