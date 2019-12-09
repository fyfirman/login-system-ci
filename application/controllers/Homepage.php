<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if(!$this->session->userdata('status'))
			redirect(base_url('login'));

		$this->load->view('component/header.php');
		$this->load->view('component/navbar.php');
		$this->load->view('main-content/home.php');
		$this->load->view('component/footer.php');
	}
}
