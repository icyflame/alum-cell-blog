<?php

class adminportalcont extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->library('session');

		$this->load->helper('url');

		$this->load->model('adminportalmodel');
	}

	public function index(){

		$threshPriv = $this->session->userdata('threshpriv');

		if($this->session->userdata('privi') < $threshPriv)

			$this->showHome();

		else{

			echo $this->load->view('templates/header.html', array(), TRUE);

			echo "<h2>You don't have the privileges to view this page. Contact Site Admin, if you think you should have privileges.</h2>";

			echo $this->load->view('templates/footer.html', array(), TRUE);

			die;

		}

	}

	public function showHome(){

		$data = $this->adminportalmodel->homeData();

		$final_data = array('data'=>$data);

		$this->load->view('templates/header.html');
		$this->load->view('adminportalview.php', $final_data);
		$this->load->view('templates/footer.html');

	}
}
