<?php
class PlayController extends BaseController {
 
 public $v_id;
 public $title;
 public $description ;
 public $q = "funnies";
 public $index = '1';
 public $orderby = "viewCount";
 public $i = 10;
 public $count ='';

 public function __construct() {

  parent::__construct();
  Use_Class::autoload(YOUTUBE);
  

  if(isset($_GET['vid'])){
   $this->v_id = filter_var($_GET['vid'], FILTER_SANITIZE_STRIPPED);
   $this->title = filter_var($_GET['title'], FILTER_SANITIZE_STRIPPED);
   $this->category = filter_var($_GET['cat'], FILTER_SANITIZE_STRIPPED);
   $this->q = $this->category;
   // set video data feed URL
         

        
    
   
  }

 
 }

 public function index(){
  
  $object = new YoutubeVideo($this->q,$this->index,$this->orderby,$this->i);
  $relatedObject = new YoutubeVideo($this->q, 2 ,$this->orderby,15);
  
  $video = array(

      'v_id' => $this->v_id,
      'title' => $this->title,
      'video'=> $object->getVideo(),
      'related'=>$relatedObject->getVideo(),
      
      'sitepath' => SITEPATH,
      'cat' =>$this->category
  );

  return $this->view->set_content($video,'play.tpl');

 }


}