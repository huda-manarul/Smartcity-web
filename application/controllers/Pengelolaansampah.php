
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelolaansampah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->library('upload');
		$this->load->library('pagination');
		$this->load->model('admin');
		$this->load->helper('url');
		$this->load->view("layout/main_header");			
		$this->load->view("sampah/header");			
	}

	public function index()
	{
		if($this->admin->logged_id()){			
			// $this->load->view("sampah/listpost");
			redirect('pengelolaansampah/listpost');		

		}else{
			// $this->load->view("sampah/listpost");		
			redirect('pengelolaansampah/listpost');
		}
	}

	public function listpost(){
		$jumlah_data = $this->admin->Getcount('tbl_informasi');
		$config['base_url'] = base_url().'pengelolaansampah/listpost';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;

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
		$this->db->order_by("id_berita", "desc");
		$data['user'] = $this->admin->Getdata('tbl_informasi',$config['per_page'],$from);
			// $data['user'] = $this->admin->Getdatanon('tbl_informasi');
		$this->load->view('sampah/listpost',$data);
	}

	public function viewberita($no){
		$where = array(
			'id_berita' => $no
		);
		$data['user'] = $this->admin->Editdata($where,'tbl_informasi')->result();
		$data['komen'] = $this->admin->Editdata($where,'tbl_diskusi')->result();
		$this->load->view('sampah/detailberita',$data);
	}

	public function komentar(){
		$pertanyaan = $this->input->post('pertanyaan');
		$id = $this->input->post('id');
		$data = array(
			'id_berita' => $id,
			'komentar' => $pertanyaan
		);
		$this->admin->Insertdata($data,'tbl_diskusi');
		redirect(base_url().'pengelolaansampah/viewberita/'.$id,'refresh');
	}

	public function jadwal(){
		$this->load->view('sampah/jadwal');
	}
	public function pemetaan(){
		// $this->load->view('sampah/pemetaan');
		$data['user'] = $this->admin->Selectdata('tbl_wilayah')->result();
		$this->load->view('sampah/accordion',$data);
		// echo "pemetaan";
	}
	public function pengaduan(){
		$this->load->view('sampah/pengaduan');
		// echo "pengaduan";
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pendaftaran');
	}


}
