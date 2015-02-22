<?php

class Tools extends Router{

	public $httpPost = array();


	public function __construct(){}

	public function stripSlashesDeep($value) {

	    $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
	    return $value;
	}
	 
	public function removeMagicQuotes() {
	
		if ( get_magic_quotes_gpc() ) {
		    $_GET    = stripSlashesDeep($_GET   );
		    $_POST   = stripSlashesDeep($_POST  );
		    $_COOKIE = stripSlashesDeep($_COOKIE);
		}
	
	}

	public function unregisterGlobals() {

	    if (ini_get('register_globals')) {
	        $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
	        foreach ($array as $value) {
	            foreach ($GLOBALS[$value] as $key => $var) {
	                if ($var === $GLOBALS[$key]) {
	                    unset($GLOBALS[$key]);
	                }
	            }
	        }
	    }

	}

	public function filterHttpMethods($post){

		foreach($post as $key => $value){
			$key = filter_input(INPUT_POST | INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
		}
	}

	public function filterArray($array, $filter = FILTER_SANITIZE_STRING){
		
		if(!is_array($array))
		{
			return false;
			exit;
		}

		function trimValue(&$value)
		{

		    return !is_array($value) ? trim($value) : ''; 
		}
		
		$array_trim = array_filter($array, 'trimValue');
		
		return (is_array($array_trim))?filter_var_array($array_trim, $filter):filter_var_array($array, $filter);
	}

	public function cryptString($string = '', $salt = FALSE){

		$crypt = !$salt ? crypt($string) : crypt($string, $salt);
		return strlen($crypt) > "13" ? $crypt : FALSE;
	}

	public function setSession($array, $key = false){
		$_SESSION = is_array($array) ? $array : ( $key ) ? array( $key => $array ) : false;
	}

	public function getRole($session){
		return $session['USER']['role'] > 0 ? TRUE : FALSE; 
	}

	public function sayHello($array = FALSE){
		return is_array($array) ? $array[mt_rand(0,sizeof($array))] : $array;
	}

	public function getHttpHeader(){
		return explode(',' , $_SERVER['HTTP_ACCEPT']);
		unset($_SERVER);
	}

	public function goUrl($location, $action, $status, $cache = FALSE)
	{
		if($cache)
		{
			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	    	header("Cache-Control: no-cache");
	    	header("Pragma: no-cache");
	    }
		$_SESSION['action'] = $action;
		header("Location: ".$location, TRUE, $status ? $status : "303");
	}

	public function isProtected($level = 1, $controller = FALSE, $modul = FALSE)
	{
	    if($_SESSION['USER']['role'] < $level){
	    	$this->goUrl("/member/login", array( "error"   =>  "ACCESS DINIED"), "301");
        }
    }

	public function htmlEncodeDecode($string, $method = "encode")
	{	
		if(is_array($string))
		{
			foreach ($string as $k => $v) {
					$strings[$k] = $method == "encode" ? htmlentities($v) : html_entity_decode($v);
			}
			return $strings;
		}
		else
		{
			return $string = $method == "encode" ? htmlentities($string) : html_entity_decode($string);
		}

	}

	public function validateDBFields($post = array(), $whitelist = array(), $prefix){

	    foreach($post as $row => $value)
        {
            if(isset($whitelist[strtolower($row)])){
            	$key		=  strtolower($row);
            	$val 		=  $this->htmlEncodeDecode(trim($value));
				$db[$key] 	=  $val;	
            }
        }
		return $db;   
	}

	public function updateSetString( $val ){ 		

	    foreach($val as $row => $value)
	    {
		
			$set .= ' '.$row.' = "'.$value.'", ';
	    }

        return substr(trim($set), 0, -1); 
	}
	
	public function insertIntoString( $val ){
		
	    foreach($val as $row => $value)
		{

			$rows 	.= $row.', ';
			$values .= '"'.$value.'", ';
		}		
		
		return '('.substr(trim($rows), 0, -1).') VALUES ('.substr(trim($values), 0, -1).')'; 
	}
}