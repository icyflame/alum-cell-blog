<?php

class adminportalmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function homeData(){

		$query = "select * from `posts_temp` where `status`='1'"; // get all the posts that are awaiting moderation

		$res = $this->db->query($query);

		$res = $res->result_array();

		echo '<br/><br/>';

		var_dump($res);

		return $res;
	}

	public function postData($postid){
		return;
	}
}

?>