<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('admin');
		$this->load->view('layout/admin_header');			
	}

	public function index()
	{
		if($this->admin->logged_id())
		{
			echo "logged in";

		}else{
			redirect('smartcity');
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('smartcity');
	}
	

	public function databerita(){
		$jumlah_data = $this->admin->Getcountinfo('tbl_informasi');
		$config['base_url'] = base_url().'dashboard/databerita';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

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
		$data['judul'] = "Informasi";
		$data['user'] = $this->admin->Getdatainfo('tbl_informasi',$config['per_page'],$from);

		$data['judul'] = "Daftar Informasi KP";
		$this->load->view('admin/databerita',$data);
	}

	public function datapertanyaan(){
		$jumlah_data = $this->admin->Getcountinfo('tbl_diskusi');
		$config['base_url'] = base_url().'dashboard/datapertanyaan';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

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
		$data['judul'] = "Informasi";
		$data['user'] = $this->admin->Getdatainfo('tbl_diskusi',$config['per_page'],$from);

		$this->load->view('admin/datapertanyaan',$data);
	}

	public function jawabpertanyaan($no){
		$where = array(
			'no' => $no
		);
		$data['user'] = $this->admin->Editdatainfo($where,'tbl_diskusi')->result();
		$this->load->view('admin/jawab',$data);
	}

	public function jawab(){
		$tanya = $this->input->post('pertanyaan');
		$jawab = $this->input->post('jawaban');

		$where = array(
			'pertanyaan' => $tanya
		);

		$data = array(
			'jawaban' => $jawab
		);
		$this->admin->jawab($where,$data,'tbl_diskusi');
		redirect(base_url().'dashboard/datapertanyaan','refresh');
	}

	public function hapuspertanyaan($no){
		$where = array(
			'no' => $no
		);
		$this->admin->hapus_data($where,'tbl_diskusi');
		redirect(base_url().'dashboard/datapertanyaan','refresh');
	}

	

	public function tambahberita(){
		$this->load->view('admin/postinfo');
	}


	public function prosestamabahinformasi(){
		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');
		$data = array(
			'judul_berita' => $judul,
			'isi_berita' => $berita
		);
		$this->admin->Insertdatainfo($data,'tbl_informasi');
		redirect(base_url().'dashboard/databerita','refresh');
	}

	public function hapusberita($no){
		$where = array(
			'id_berita' => $no
		);
		$this->admin->hapus_data($where,'tbl_informasi');
		redirect(base_url().'dashboard/databerita','refresh');
	}

	public function editberita($no){
		$where = array(
			'id_berita' => $no
		);
		$data['user'] = $this->admin->Editdatainfo($where,'tbl_informasi')->result();
		$this->load->view('admin/editinfo',$data);
	}

	public function proseseditinformasi(){
		
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('berita');

		$where = array(
			'id_berita' => $id
		);

		$data = array(
			'judul_berita' => $judul,
			'isi_berita' => $isi
		);
		$this->admin->jawab($where,$data,'tbl_informasi');
		redirect(base_url().'dashboard/databerita','refresh');
	}

	

}
