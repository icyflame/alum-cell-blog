<?php

class blogcont extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->library('session');

		$this->load->helper('url');

		$this->load->model('blogfullmodel');

		$this->load->model('adminportalmodel');
	}

	public function index(){

		$data = $this->adminportalmodel->homeData(1); // get all the posts that have been approved.

		// var_dump($data);

		$c = 0;

		$final_data = array();

		foreach($data as $post){

			$postid = $post['postid'];
			
			$data = $this->adminportalmodel->postData($postid);

			$filename = $data['tempid'].'.txt';

			$filepath = $this->session->userdata('postloc').$filename;

			if(file_exists($filepath)){

				$output_arr = file($filepath);

				$output_arr = $output_arr[0];

				$decodedString = json_decode($output_arr, true); // convert the Json encoded string to an array

				var_dump($decodedString);

				$post_data = $decodedString;

				$post_data = array_merge($post_data, array('postid'=>$postid));

				$final_data = array_merge($final_data, array($c=>$post_data));

				$c = $c + 1;

				// $this->load->view('templates/header.html');
				// $this->load->view('admin/adminpostview.php', $final_data);
				// $this->load->view('templates/footer.html');

			}

			else{

				echo "The file does not exist. Contact site admin.";
			}

		}

		var_dump($final_data);

		$data_send = array('data'=>$final_data);

		$this->load->view('templates/header.html');
		$this->load->view('blogview.php', $data_send);
		$this->load->view('templates/footer.html');
	}

}
