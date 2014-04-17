<?php

class QueryMysql extends Mysql{
	    
	protected	$result;
	private 	$config = array();
	private 	$database;
	private 	$table;
	private 	$query;
	private 	$fullQuery;
	private 	$columns;

	public function __construct( $dbConfig = array() ){

		if(!is_array($dbConfig)){
			throw new Exception("Error: No loggin credentials", 1);
		}

		$this->model->connect(	$this->config['DB']['host'], 
								$this->config['DB']['user'], 
								$this->config['DB']['password'], 
								$this->config['DB']['name']	);               
	}

	public function prepareDB($query, $database, $table, $rows = '*')
	{
		$this->query 	= $query;
		$this->database = $database;
		$this->table 	= $table;
	}

	public function selectUser($username = NULL)
	{
		$dbTable		=	$this->database . '.' . $this->table;

		$query 			=  'SELECT '. $this->rows .' 
							FROM '. $database . ' . ' . $table .'
				 			WHERE ' . $dbTable . '.user_name = "' . $username . '" 
				 			AND ' . $dbTable . '.status = 1';
		
		$result    		= 	$this->model->query($query);
    	$array_result 	= 	$this->model->fetch_array($result);
    				  		$this->model->close();

    	return $array_result;

	}

    // public function selectUser($dbTable = NULL, $set = array())
    // {
    //     $dbTable        =   $this->database . '.' . $this->table;

    //     $query          =  'SELECT '. $this->rows .' 
    //                         FROM '. $database . ' . ' . $table .'
    //                         WHERE ' . $dbTable . '.user_name = "' . $username . '" 
    //                         AND ' . $dbTable . '.status = 1';
        
    //     $result         =   $this->model->query($query);
    //     $array_result   =   $this->model->fetch_array($result);
    //                         $this->model->close();

    //     return $array_result;

    // }    

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