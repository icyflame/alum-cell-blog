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
		date_default_timezone_set('Asia/Calcutta');

		$finaldata = array_merge($_POST, array("time"=>date('H:i jS F, Y')));

		$jsonString = json_encode($finaldata);

		echo $jsonString;

		$filename = $this->storetemp($jsonString);

		$tempid = $filename;
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

	public function storetemp($content){

		// to ensure that the name of the file is unique

		$filename = sha1($this->session->userdata('userid') + urlencode(microtime(true) * 10000));

		$fileLocation = POSTS_LOCATION.$filename.".cms";
		
		$file = fopen($fileLocation,"wb");
		
		fwrite($file,$content);
		fclose($file);

		return $filename;

	}
}

?>
