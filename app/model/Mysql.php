<?php

class Mysql implements DBInterface {
	    
	    private  $dblink; 
         
        public function connect($server='', $username='', $password='', $dbname='', $new_dblink=true, $client_flags=0) 
        { 
            $this->dblink = mysql_connect($server, $username, $password, $new_dblink, $client_flags); 
        } 
     
        public function errno() 
        { 
            return mysql_errno($this->dblink); 
        } 

        public function error() 
        { 
            return mysql_error($this->dblink); 
        } 

        public static function escape_string($string) 
        { 
            return mysql_real_escape_string($string); 
        } 

        public function query($query) 
        { 
            return mysql_query($query, $this->dblink); 
        } 
         
        public function fetch_array($result, $array_type = MYSQL_BOTH) 
        { 
            return mysql_fetch_array($result, $array_type); 
        } 

        public function fetch_row($result) 
        { 
            return mysql_fetch_row($result); 
        } 
         
        public function fetch_assoc($result) 
        { 
            return mysql_fetch_assoc($result); 
        } 
         
        public function fetch_object($result) 
        { 
            return mysql_fetch_object($result); 
        } 
         
        public function num_rows($result) 
        { 
            return mysql_num_rows($result); 
        } 
         
        public function close() 
        { 
            return mysql_close($this->dblink); 
        } 
}