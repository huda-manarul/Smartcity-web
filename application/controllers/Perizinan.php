<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perizinan extends CI_Controller {

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
			// echo "string";
			// $this->load->view("Pertamanan/listtaman");		
			redirect('perizinan/angkutan');

		}else{
			redirect('perizinan/angkutan');
			

		}
	}

	public function angkutan(){
		$this->load->view("perizinan/angkutan");			
	}

	public function prosesdaftar(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tahun = $this->input->post('tahun');
		$tipe = $this->input->post('tipe');
		$nopol = $this->input->post('nopol');
		// $user = $this->input->post('user');
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'mobil_keluaran' => $tahun,
			'mobil_type' => $tipe,
			'plat_no' => $nopol,
			'status' => "menunggu"
		);
		$this->admin->Insertdata($data,'tbl_angkutan');
		redirect(base_url().'perizinan','refresh');
	}

	public function taman(){
		$this->load->view("perizinan/ruang");			
	}

	public function cek(){
		$this->load->view("perizinan/cek");			
		
	}

	public function cekin(){
		$nik = $this->input->post('nik');
		$jenis = $this->input->post('jenis');
		$where = array(
			'nik' => $nik
		);
		if ($jenis=='tbl_angkutan') {
			$data['user'] = $this->admin->Editdata($where,$jenis)->result();
			$this->load->view('perizinan/cekizin',$data);
		}
		else{
			$data['user'] = $this->admin->Editdata($where,$jenis)->result();
			$this->load->view('perizinan/cekizintaman',$data);
		}
	}

	public function daftarruang(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('instansi');
		$tanggal = $this->input->post('tanggal');
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'instansi' => $instansi,
			'tanggal' => $tanggal,
			'status' => "menunggu"
		);
		$this->admin->Insertdata($data,'tbl_ruang');
		redirect(base_url().'perizinan/taman','refresh');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pendaftaran');
	}


}
