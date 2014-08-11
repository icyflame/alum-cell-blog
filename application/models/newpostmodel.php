<?php

class newpostmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function addNewPost(){

		var_dump($_POST);

		$postcontent = $_POST['postcontent'];

		

	}
}

?>