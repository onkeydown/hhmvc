<?php

//namespace hhmvc\app\model\BaseModel;

Abstract Class BaseModel{

	protected $db;

	public function __construct(){
			    $this->db = Record::instance('MySql');
			    $this->db->connect($server='', $username='', $password='', $new_dblink=true, $client_flags=0);
	}


}