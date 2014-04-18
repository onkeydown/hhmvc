<?php
// namespace hhmvc\app\controller\IndexController

class JsonController extends BaseController{

    private $control;
    private $para;
    private $session_store = array();
    private $sqlfield = array();

    public function __construct(){
        parent::__construct();
    }

    public function action($action = "index", $parameter = false)
    {
 
        $this->tools->isProtected();
        $action = strtolower(trim($action));
        $this->control = 'json';
        $this->session_store = $_SESSION;

        $this->sqlfield = array_flip(array(
            'artikel_id', 'parent_id','status','link_id','subnavi','html','categories','excerpt','rating','footer','sidebar','keywords','init_date','edit_date','link_url','ajax_url','user_id'
        ));


        $json['id'] = $_POST['id'];
        $json['tid'] = $_POST['tid'];
        $json['pid'] = $_POST['pid'];

        $post = ($_POST) ? $this->tools->filterArray($_POST, FILTER_SANITIZE_STRING) : FALSE;

        $cmsId = str_replace('tid_', '', trim($post['tid']));
        $post['Html'] = $this->tools->htmlEncodeDecode($_POST['Html']);
 
        if($action == "edit")
        {
            $post['status'] = 1;
            $post['show'] = 1;
            $post['msg'] = "";
        }

        if($action == "new")
        {
            $post['status'] = "1";
            $post['ajax_url']= "/json";
            $post['link_url']= "/cms/efforts";
            $post['link_id']= "efforts";
            $post['artikel_id'] = "id_".time();
            
            $predb  = $this->tools->validateDBFields($post, $this->sqlfield, "hhmvc.cms.");
            $set    = $this->tools->insertIntoString($predb);
            $query = 'INSERT INTO hhmvc.cms ' . $set;
            $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);
            $result = $this->model->query($query);
            $this->model->close();

            $post['callback'] = "$('#new-article').destroy();";
            $post['message'] = "Post SAVED!";

            $request = array_merge($post, $json);
            
            return $this->view->set_content_JSON($request);                    

        }

        if($action == "save")
        {
            
            $json['status'] = 1;
            $json['show'] = 1;
            $json['msg'] = "";
            
            $id = $post['id'] ? $post['id'] : $post['artikel_id'];

            $predb  = $this->tools->validateDBFields($post, $this->sqlfield, "hhmvc.cms.");
            $set    = $this->tools->updateSetString($predb);

            $query = 'UPDATE hhmvc.cms
                      SET ' . $set . ' 
                      WHERE hhmvc.cms.id = '.$cmsId;
            $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);               
            $result    =   $this->model->query($query);
            $this->model->close();

            $post['callback'] = "$('#".$post['tid']."').destroy();";
            $post['message'] = "Post updated successfully";

            $request = array_merge($post, $json);
            
            return $this->view->set_content_JSON($request);             // return $this->view->set_content($this->model->selectUser('hhmvc.cms', $post['Code']), 'JSON');
        }

        if($action == "online")
        {

            $query = "UPDATE hhmvc.cms
                      SET hhmvc.cms.status = " .($post['status'] == 1 ? '0' : '1') . " 
                      WHERE hhmvc.cms.id = ".$cmsId;

            $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);               
            $result    =   $this->model->query($query);
            $this->model->close();

            $post['callback'] = "$('#".$post['CharId']."').toggleClass('fa-online').toggleClass('fa-offline');";
            $post['message'] = "Post Status switched!";

            $request = array_merge($post, $json);
            return $this->view->set_content_JSON($request); 
        }

        if($action == 'delete')
        {   
            $data['status'] = 1;
            $data['show'] = 1; 
            $data['status'] = 1;
            $data['msg'] = "content removed!";
            $data['callback'] = "location.reload(true)";
            
            $query =   "UPDATE hhmvc.cms
                        SET status=9 
                        WHERE id=".$cmsId;
            
            $data['q'] = $query;
            $this->model->connect($this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);               
            $result    =   $this->model->query($query);
            $this->model->close();

            return $this->view->set_content_JSON($data); 
        }

        if(!is_array($content)){
                $content = array(  
                   'sitepath'=>'public/themes/default/'.$this->control.'/'.$action,
                   'breadcrump'=>array('start', $this->control, $action),
                   'content' =>self::article(),
                );
        }

        ## this model content is for database
        return $this->view->set_content($this->model->Content(),'index.tpl');
        return $this->view->set_content($content, $this->control.'/'.$action.'.tpl');

    }

    private function article(){
        $article = array();
        return $article;
    }

 }