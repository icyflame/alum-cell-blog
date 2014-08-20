<?php

class newpostcont extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->library('session');

		$this->load->helper('url');
	}

	public function index(){

		$this->write();
	}

	private function write(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->load->view('templates/header.html');
		$this->load->view('newpost/newpost.php');
		$this->load->view('templates/footer.html');
	}


	public function addpost(){

		$this->load->model('newpostmodel');

		if($this->newpostmodel->addNewPost()){

			// echo "<script>alert('The blog post was added. One of our administrators will verify it, after which the	post will be shown online.')</script>";

			redirect('blogcont/showall/newpostdone', 'refresh');

		}

		else{

			echo "<script>alert('Something's not right. Your post could not be added. Please try again after some time. Redirecting you to the new post page.')</script>";

			redirect('newpostcont/', 'refresh');

		}
	}
}
