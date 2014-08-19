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

	private function addpost(){

		echo 'We will talk with the model now.';
		$this->load->model('newpostmodel');
		$this->newpostmodel->addNewPost();

	}
}
