<?php

error_reporting(E_ALL);

$files = glob(dirname(__FILE__) . '/cache/precache/*'); // get all file names
print_r($files);
foreach($files as $file){ // iterate files
  if(is_file($file))
    if(unlink($file))		echo $file . 'geloescht<br>';
 // delete file
}



$files = glob(dirname(__FILE__)  . '/cache/templates_c/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    if(unlink($file)){ // delete file
		echo $file . 'geloescht<br>';
	}
}



?>