<?php

class adminportalmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function homeData($status_param=1){

		$query = "select * from `posts_temp` where `status`='$status_param' order by `postid` desc"; // get all the posts that are awaiting moderation

		$res = $this->db->query($query);

		$res = $res->result_array();

		return $res;
	}

	public function postData($postid){
		
		$query = "select * from `posts_temp` where `postid`='$postid'"; // get all the posts that are awaiting moderation

		$res = $this->db->query($query);

		$res = $res->result_array();

		return $res[0];

	}

	public function editstatus($postid, $status){

		$query = "update posts_temp set status='$status' where postid='$postid'"; // get all the posts that are awaiting moderation

		if($res = $this->db->query($query))

			return true;

		else

			return false;

	}
}

?>