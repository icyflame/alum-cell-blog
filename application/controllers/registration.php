<?php

class registration extends CI_Controller{

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

			$this->register();

		}
	}

	public function register(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|md5|min_length[4]');
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('repassword','Confirm Password','trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{	
			echo "Form not validated.";
			echo validation_errors();

			$this->load->view('templates/header.html');
			$this->load->view('authentication/registrationview.php');
			$this->load->view('templates/footer.html');
		}
		else
		{

			echo 'Form validated.';

			var_dump($_POST);

			// if($this->userdb->checkusername($username))

			// 	echo "We will talk with the model now.";

			// else

			// 	echo "That username has been taken by someone already, please select a different one.";
			
		}
	}

}

?>