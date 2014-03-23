<?php

// namespace hhmvc\app\controller\LatestController

class LatestController extends BaseController {

 public $q = "most_recent";
 public $index = '1';
 public $orderby = "published";
 public $i = 48;
 public $count ='';
 function __construct() {
  
  parent::__construct();
  //Use_Class::autoload(YOUTUBE);
  
 }

public function index(){

 //$object = Ini_object::instance('YoutubeVideo');
 if(isset($_GET['q'])){
 $q = $_GET['q'];
    $q = preg_replace('/[[:space:]]+/', '/', trim($q));
    $q = str_replace('/', '+', $q);
 $index = $_GET['start-index'];
 $orderby = $_GET['orderby'];
 $i = 25;
}
else{
  $q = "AC+DC";
  $index = "1";
  $orderby = "published";
  $i = 25;
}

$object = new YoutubeVideo($q,$index,$orderby,$i);
 
 $video = array(
     'count'=> $object->getCount(),
     'video'=> $object->getVideo(),
     'sitepath'=>SITEPATH,
     'cat' => $q,
     'pagination'=>$object->pagenate('latest.php')
  );
 
 return $this->view->set_content($video,'latest.tpl');
 
}


}  