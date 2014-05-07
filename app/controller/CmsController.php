<?php
// namespace hhmvc\app\controller\IndexController

class CmsController extends BaseController{

    private $control;
    private $para;
    private $session_store = array();

    public function __construct(){
        parent::__construct();
    }

    public function action($action = "index", $parameter = false)
    {
        // move out to method
        $this->tools->isProtected();
        $this->control = 'cms';
        $this->session_store = $_SESSION;
        // move out to method
        $post = ($_POST) ? $this->tools->filterArray($_POST, FILTER_SANITIZE_STRING) : FALSE;

        if($action == "efforts"){
    
            $query = 'select * from hhmvc.cms where hhmvc.cms.id > "0" AND hhmvc.cms.status < "3" order by id desc ';
            // move out to method move to model method
            $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);
            // move out to model method
            $result  = $this->model->query($query);
            // move out to model method
	        while($content[] =  $this->tools->htmlEncodeDecode($this->model->fetch_array($result, MYSQL_ASSOC), 'dec'));                     
			
			return $this->view->set_content($content, $this->control.'/'.$action.'.tpl');
            $this->tools->setSession(array('action' => $action));

			exit;
        }

        if($parameter['0'] = '')
        {



        }



        if(!is_array($content)){
                $content = array(  
                   'sitepath'=>'public/themes/default/'.$this->control.'/'.$action,
                   'breadcrump'=>array('start', $this->control, $action),
                   'content' =>self::article(),
                );
        }
        ## this model content is for database
         //return $this->view->set_content($this->model->Content(),'index.tpl'
        return $this->view->set_content($content, $this->control.'/'.$action.'.tpl');
        exit;
    }

    private function article(){
        
        $article = array();
        return $article;
    }

 }