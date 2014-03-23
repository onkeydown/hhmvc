<?php

class MostviewedController extends BaseController {

 public $q = "funnies";
 public $index = '1';
 public $orderby = "published";
 public $i = 48;
 public $count ='';
 function __construct() {
  
  parent::__construct();
  Use_Class::autoload(YOUTUBE);
  
 }

public function index(){

 
 if(isset($_GET['q'])){
 $q = $_GET['q'];
    $q = preg_replace('/[[:space:]]+/', '/', trim($q));
    $q = str_replace('/', '+', $q);
 $index = $_GET['start-index'];
 $orderby = $_GET['orderby'];
 $i = 25;
}
else{
  $q = "Metallica";
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
     'pagination'=>$object->pagenate('mostviewed.php')
  );
 
 return $this->view->set_content($video,'latest.tpl');
 
}


}  
