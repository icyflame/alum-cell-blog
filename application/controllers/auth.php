<?php

session_start();

class auth extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->model('userdb');

		$this->load->library('session');

		$this->load->helper('url');

	}

	public function index(){

		if(isset($_SESSION['loggedin'])){

			redirect('blogcont/', 'refresh');
		}

		else{

			echo "<h3>Access Denied. Try Again.</h3>"

			$this->loginval();

		}
	}

	public function loginval()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			// echo 'Form not yet validated successfully. Try Again.';

			$this->load->view('authentication/login');

		}
		else
		{

			$data['status'] = 'Not logged in.';

			$res = $this->userdb->checklogin();

			if($res){

				$sessdat = $this->userdb->getdata();

				$this->session->set_userdata($sessdat);

				$_SESSION['loggedin'] = '0';
				$_SESSION['time'] = time();

				// $this->load->view('authentication/viewstat', $data);

				redirect('blogcont/', 'refresh');

			}

			else{

				$this->load->view('authentication/login');

				// $this->loginval();

			}

		}

	}

	public function logout(){

		$this->session->sess_destroy();

		unset($_SESSION['loggedin']);

		redirect('blogcont/', 'refresh');
	}

}

?>