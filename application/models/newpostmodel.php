<?php

class newpostmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->library('session');

	}

	public function addNewPost(){

		echo '<br/><br/>';

		var_dump($_POST);

		echo '<br/><br/>';

		$timestamp = time();

		$finaldata = array_merge($_POST, array("time"=>$timestamp));

		$jsonString = json_encode($finaldata);

		echo $jsonString;

		$response = $this->storetemp($jsonString, $timestamp);

		$tempid = $response;
		$userid = $this->session->userdata('userid');
		$status = 1;

		/*****

		1 - Pending moderation
		2 - Moderated. Awaiting further approval
		3 - Approved

		******/
		
		$query = "INSERT INTO `posts_temp`(`userid`, `tempid`, `status`) values('$userid', '$tempid', '$status')";

		echo '<br/><br/>'.$query;

		if($res = $this->db->query($query))

			echo '<br/><br/>Temp Insert Query executed successfully<br/><br/>';

	}

	public function storetemp($content, $name){

		// to ensure that the name of the file is unique

		$timestamp = sha1($this->session->userdata('userid') + urlencode(microtime(true) * 10000));

		$fileLocation = $this->session->userdata('postloc').$timestamp.".txt";
		
		$file = fopen($fileLocation,"wb");
		
		fwrite($file,$content);
		fclose($file);

		return $timestamp;

	}
}

?>