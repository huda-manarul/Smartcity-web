<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smartcity extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin');
		$this->load->view('layout/main_header');
	}

	public function index(){
		if($this->admin->logged_id()){
			redirect('login');
		}
		else{
			// $this->load->view('layout/header');
			$this->load->view('Smartcity/main');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('smartcity');
	}


	public function pengaduan(){
		$this->load->view('Smartcity/pengaduan');
	}

	public function tambahpengaduan(){
		$jenis = $this->input->post('jenis');
		$judul = $this->input->post('judul');
		$pengaduan = $this->input->post('pengaduan');
		$tanggal = date('Y-m-d');
		$data = array(
			'bid_pengaduan' => $jenis,
			'obj_pengaduan' => $judul,
			'tanggal' => $tanggal,
			'isi' => $pengaduan
		);
		$this->admin->Insertdata($data,'tbl_pengaduan');
		redirect(base_url().'smartcity/pengaduan','refresh');
	}
	
}
