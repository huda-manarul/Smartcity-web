<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smartcity extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
		$this->load->view('layout/main_header');
	}

	public function index()
	{
		
		if($this->admin->logged_id()){
			redirect('login');
		}
		else{
			$this->load->view('Smartcity/main');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('smartcity');
	}
	
}
