<?php

class newpostmodel extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function addNewPost(){

		echo '<br/><br/>';

		var_dump($_POST);

		echo '<br/><br/>';

		$timestamp = time();

		$finaldata = array_merge($_POST, array("time"=>$timestamp));

		$jsonString = json_encode($finaldata);

		echo $jsonString;

		$response = $this->createnewpaste($jsonString, $timestamp);

		echo '<br/><br/>';

		var_dump(spliti('/', $response));

		$pasteid = spliti('/', $response);

		// There will be three parts in a paste link.

		// Eg: http://pastebin.com/HC5nARnw

		$pasteid = $pasteid[2];
		$userid = $this->session->userdata('userid');
		$status = 1;

		/*****

		1 - Pending moderation
		2 - Moderated. Awaiting further approval
		3 - Approved

		******/
		
		$query = "INSERT INTO `posts_temp`(userid, pasteid, status) values('$pasteid', '$userid', '$status')";

		if($res = $this->db->query($query))

			echo '<br/><br/>Temp Insert Query executed successfully<br/><br/>';

	}

	public function createnewpaste($content, $name){

		$ch = curl_init("http://pastebin.com/api/api_post.php");

		// directly from their API help page

		$api_dev_key 			= 'b4fb5dd493cf49565ebae3ccdeeb86e4'; // your api_developer_key
		$api_paste_code 		= $content; // json encoded text
		$api_paste_private 		= '0'; // 0=public 1=unlisted 2=private
		$api_paste_name			= $name.'.txt'; // name or title of your paste
		$api_paste_expire_date 		= '10M';
		$api_paste_format 		= 'text';
		$api_user_key 			= ''; // if an invalid api_user_key or no key is used, the paste will be create as a guest
		$api_paste_name			= urlencode($api_paste_name);
		$api_paste_code			= urlencode($api_paste_code);

		$url 				= 'http://pastebin.com/api/api_post.php';
		$ch 				= curl_init($url);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_paste_format='.$api_paste_format.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_NOBODY, 0);

		$response  			= curl_exec($ch);

		echo '<br/><br/>';

		echo $response;

		echo '<br/><br/>';

		curl_close($ch);

		return $response;

	}
}

?>