<?php

class TidyUp extends Router{

	public $httpPost = array();

	public static  function stripSlashesDeep($value) {

	    $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
	    return $value;
	
	}
	 
	public static function removeMagicQuotes() {
	
		if ( get_magic_quotes_gpc() ) {
		    $_GET    = stripSlashesDeep($_GET   );
		    $_POST   = stripSlashesDeep($_POST  );
		    $_COOKIE = stripSlashesDeep($_COOKIE);
		}
	
	}

	public static function unregisterGlobals() {

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

	public static function filterHttpMethods($post){

		foreach($post as $key => $value){
			$key = filter_input(INPUT_POST | INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
		}
	}
}