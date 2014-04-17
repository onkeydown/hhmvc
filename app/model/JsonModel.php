<?php

//namespace hhmvc\app\model\BaseModel;

Class JsonModel extends BaseModel{

	public function __construct(){
		  parent::__construct();
	}

	public function save()
	{
		$query = 'select id, user_name, user_pass, user_email, lastseen, role from hhmvc.users where hhmvc.users.user_name = "' . $post['username'] . '" AND hhmvc.users.status = 1';
		$this->model->update(
		$this->config['DB']['host'], $this->config['DB']['user'], $this->config['DB']['password'], $this->config['DB']['name']);               
		$result    =   $this->model->query($query);
		$array_result = $this->model->fetch_array($result);
		$this->model->close();
    }
}