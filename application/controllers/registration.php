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

		$this->form_validation->set_rules('username', "That username is taken",'trim|required|xss_clean|min_length[4]|is_unique[users_blog.username]');
		$this->form_validation->set_rules('password','Password','trim|required|md5|min_length[4]');
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email', "That Email ID is already registered." ,'trim|required|valid_email|is_unique[users_blog.email]');
		$this->form_validation->set_rules('repassword','Confirm Password','trim|required|matches[password]');

		$this->form_validation->set_message('is_unique', "%s");

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

			if($this->userdb->registernewuser()){

				redirect('blogcont/showall/regdone', 'refresh');

			}

			else{

				redirect('registration/showall/regincomplete', 'refresh');
			}
			
		}
	}

}

?>