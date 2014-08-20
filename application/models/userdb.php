<?php

class userdb extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function checklogin(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		$res = $this->db->query("SELECT password FROM users_blog WHERE username='$username'");

		$pw = '';

		foreach($res->result() as $row){

			$pw = $row->password;

		}

		if ($pw == ''){
			echo 'Username or password incorrect. Try again.';
		}

		return ($pw === md5($pwentered));

	}

	public function getdata(){

		$username = $this->input->post('username');
		$pwentered = $this->input->post('password');

		$res = $this->db->query("SELECT * FROM users_blog WHERE username='$username'");

		$pw = '';

		foreach($res->result() as $row){

			$privi = $row->privilege;
			$un = $row->username;
			$uid = $row->userid;
			$fullname = $row->name;

		}

		return array('loggedin'=>1,
			'username' => $un,
			'userid'=>$uid,
			'privilege' => $privi,
			'fullname'=>$fullname,
			'threshpriv'=>4, // if privilege value is below this then the user has admin privileges
			);

	}

	public function getusername($userid=0){

		if($userid == 0)

			return 'unknown';

		else{
			$res = $this->db->query("SELECT username FROM users_blog WHERE userid='$userid'");

			$d = $res->result_array();

			return $d[0]['username'];
		}
	}

	public function registernewuser(){

		var_dump($_POST);

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$name = $_POST['name'];

		$query = "INSERT INTO `users_blog`(`name`, `username`, `password`, `email`) VALUES ('$name', '$username', '$password', '$email')";

		$res = $this->db->query($query);

		if($res)

			return true;

		else

			return false;

	}

}

?>