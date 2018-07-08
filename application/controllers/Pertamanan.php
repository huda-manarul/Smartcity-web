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
			$this->load->view("Pertamanan/listtaman");			

		}else{
			redirect('pertamanan/listtaman');
			// $this->load->view("Pertamanan/taman");			
			

		}
	}

	public function listtaman(){
		$jumlah_data = $this->admin->Getcount('tbl_taman');
		$config['base_url'] = base_url().'pertamanan/listtaman';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		// $this->db->order_by("id_berita", "desc");
		$data['user'] = $this->admin->Getdata('tbl_taman',$config['per_page'],$from);
		$this->load->view('pertamanan/listtaman',$data);
	}

	public function viewtaman($no){
		$where = array(
			'id_taman' => $no
		);
		$data['user'] = $this->admin->Editdata($where,'tbl_taman')->result();
		$data['komen'] = $this->admin->Editdata($where,'tbl_acara')->result();
		$this->load->view('pertamanan/taman',$data);
	}

	public function listacara(){
		$jumlah_data = $this->admin->Getcount('tbl_acara');
		$config['base_url'] = base_url().'pertamanan/listacara';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 106;

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$this->db->order_by("tanggal", "asc");
		$data['user'] = $this->admin->Getdata('tbl_acara',$config['per_page'],$from);
		// $data['user'] = $this->admin->Selectdata('tbl_acara');
		// $this->load->view('pertamanan/listacara',$data);
		$this->load->view('pertamanan/listacara',$data);
	}

	public function viewacara($no){
		$where = array(
			'id_acara' => $no
		);
		$data['user'] = $this->admin->Editdata($where,'tbl_acara')->result();
		$this->load->view('pertamanan/detailacara',$data);
	}

	public function laporan(){
		$this->load->view('pertamanan/laporan');	

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pendaftaran');
	}


}
