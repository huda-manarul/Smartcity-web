<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertamanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->library('upload');
		$this->load->library('pagination');
		$this->load->model('admin');
		$this->load->helper('url');
		$this->load->view("layout/main_header");			
	}

	public function index()
	{
		if($this->admin->logged_id())
		{	
			echo "string";		
			$this->load->view("Pertamanan/taman");			

		}else{
			// redirect('smartcity');
			$this->load->view("Pertamanan/taman");			
			

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pendaftaran');
	}


}
