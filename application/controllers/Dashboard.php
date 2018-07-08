<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->library('pagination');
		$this->load->model('admin');
		$this->load->view('layout/admin_header');			
		$this->load->view('layout/admin_sidebar');			
	}

	public function index()
	{
		if($this->admin->logged_id())
		{
			$this->load->view('admin/dashboard');			

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
		$jumlah_data = $this->admin->Getcount('tbl_informasi');
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
		$this->db->order_by("id_berita", "desc");
		$this->pagination->initialize($config);		
		$data['user'] = $this->admin->Getdata('tbl_informasi',$config['per_page'],$from);
		$this->load->view('admin/databerita',$data);
	}

	public function datakomentar(){
		$data['user'] = $this->admin->getkomen()->result();
		$this->load->view('admin/datakomentar',$data);
	}

	
	public function hapuskomentar($no){
		$where = array(
			'no' => $no
		);
		$this->admin->Deletedata($where,'tbl_komentar');
		redirect(base_url().'dashboard/datakomentar','refresh');
	}

	

	public function tambahberita(){
		$this->load->view('admin/postinfo');
	}


	public function prosestamabahinformasi(){

		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
		$config['encrypt_name'] = FALSE; 

		$this->upload->initialize($config);
		$this->upload->do_upload('gambar');
		$gambar = $this->upload->data();
		$gambar_berita=$gambar['file_name'];

		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');
		$data = array(
			'judul_berita' => $judul,
			'gambar_berita' => $gambar_berita,
			'isi_berita' => $berita
		);
		$this->admin->Insertdata($data,'tbl_informasi');
		redirect(base_url().'dashboard/databerita','refresh');
	}

	public function hapusberita($no){
		$where = array(
			'id_berita' => $no
		);
		$this->admin->Deletedata($where,'tbl_informasi');
		redirect(base_url().'dashboard/databerita','refresh');
	}

	public function editberita($no){
		$where = array(
			'id_berita' => $no
		);
		$data['user'] = $this->admin->Editdata($where,'tbl_informasi')->result();
		$this->load->view('admin/editberita',$data);
	}

	public function proseseditberita(){
		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
		$config['encrypt_name'] = FALSE; 

		$this->upload->initialize($config);
		$this->upload->do_upload('gambar');
		$gambar = $this->upload->data();
		$gambar_berita=$gambar['file_name'];
		
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('berita');

		$where = array(
			'id_berita' => $id
		);

		if ($gambar_berita=='') {
			$data = array(
				'judul_berita' => $judul,
				'isi_berita' => $isi
			);
		}
		else{
			$data = array(
				'judul_berita' => $judul,
				'isi_berita' => $isi,
				'gambar_berita' => $gambar_berita
			);
		}

		$this->admin->Updatedata($where,$data,'tbl_informasi');
		redirect(base_url().'dashboard/databerita','refresh');
	}

	public function jadwal(){
		$data['user'] = $this->admin->Selectdata('tbl_jadwal')->result();
		$this->load->view('admin/jadwal',$data);	
	}

	public function hapusjadwal($no){
		$where = array(
			'no' => $no
		);
		$this->admin->Deletedata($where,'tbl_jadwal');
		redirect(base_url().'dashboard/jadwal','refresh');
	}

	public function tambahjadwal(){
		$data['wilayah'] = $this->admin->Selectdata('tbl_wilayah')->result();
		$data['mobil'] = $this->admin->Selectdata('tbl_mobil')->result();
		$this->load->view('admin/tambahjadwal',$data);	
	}

	public function prosestambahjadwal(){
		$wilayah = $this->input->post('wilayah');
		$mobil = $this->input->post('mobil');
		$senin = $this->input->post('senin');
		$selasa = $this->input->post('selasa');
		$rabu = $this->input->post('rabu');
		$kamis = $this->input->post('kamis');
		$jumat = $this->input->post('jumat');

		$data = array(
			'id_wilayah' => $wilayah,
			'id_mobil' => $mobil,
			'senin' => $senin,
			'selasa' => $selasa,
			'rabu' => $rabu,
			'kamis' => $kamis,
			'jumat' => $jumat
		);

		$this->admin->Insertdata($data,'tbl_jadwal');
		redirect(base_url().'dashboard/jadwal','refresh');
	}

	public function editjadwal($no){
		$where = array(
			'no' => $no
		);
		$data['wilayah'] = $this->admin->Selectdata('tbl_wilayah')->result();
		$data['mobil'] = $this->admin->Selectdata('tbl_mobil')->result();
		$data['user'] = $this->admin->Editdata($where,'tbl_jadwal')->result();
		$this->load->view('admin/editjadwal',$data);
	}

	public function proseseditjadwal(){
		$id = $this->input->post('no');
		$wilayah = $this->input->post('wilayah');
		$mobil = $this->input->post('mobil');
		$senin = $this->input->post('senin');
		$selasa = $this->input->post('selasa');
		$rabu = $this->input->post('rabu');
		$kamis = $this->input->post('kamis');
		$jumat = $this->input->post('jumat');

		$where = array(
			'no' => $id
		);

		$data = array(
			'id_wilayah' => $wilayah,
			'id_mobil' => $mobil,
			'senin' => $senin,
			'selasa' => $selasa,
			'rabu' => $rabu,
			'kamis' => $kamis,
			'jumat' => $jumat
		);
		$this->admin->Updatedata($where,$data,'tbl_jadwal');
		redirect(base_url().'dashboard/jadwal','refresh');

	}

	public function mobil(){
		$data['user'] = $this->admin->Selectdata('tbl_mobil')->result();
		$data['petugas'] = $this->admin->Selectdata('tbl_petugas')->result();
		$this->load->view('admin/mobil',$data);
		
	}

	public function tambahmobil(){
		$nopol = $this->input->post('nopol');
		$petugas = $this->input->post('petugas');
		$data = array(
			'nopol' => $nopol,
			'id_petugas' => $petugas
		);
		$this->admin->Insertdata($data,'tbl_mobil');
		redirect(base_url().'dashboard/mobil','refresh');
	}

	public function hapusmobil($no){
		$where = array(
			'id_mobil' => $no
		);
		$this->admin->Deletedata($where,'tbl_mobil');
		redirect(base_url().'dashboard/mobil','refresh');
	}

	public function editmobil($no){
		$where = array(
			'id_mobil' => $no
		);
		$data['petugas'] = $this->admin->Selectdata('tbl_petugas')->result();
		$data['user'] = $this->admin->Editdata($where,'tbl_mobil')->result();
		$this->load->view('admin/editmobil',$data);
	}

	public function updatemobil(){
		$id = $this->input->post('id');
		$nopol = $this->input->post('nopol');
		$petugas = $this->input->post('petugas');

		$where = array(
			'id_mobil' => $id
		);

		$data = array(
			'nopol' => $nopol,
			'id_petugas' => $petugas			
		);
		$this->admin->Updatedata($where,$data,'tbl_mobil');
		redirect(base_url().'dashboard/mobil','refresh');

	}
//kene woi
	public function wilayah(){
		$data['user'] = $this->admin->Selectdata('tbl_wilayah')->result();
		$this->load->view('admin/wilayah',$data);	
	}

	public function hapuswilayah($no){
		$where = array(
			'id_wilayah' => $no
		);
		$this->admin->Deletedata($where,'tbl_wilayah');
		redirect(base_url().'dashboard/wilayah','refresh');
	}

	public function tambahwilayah(){
		$this->load->view('admin/tambahwilayah');	
	}

	public function prosestambahwilayah(){
		$nama = $this->input->post('nama');
		$isi = $this->input->post('isi');

		$data = array(
			'nama' => $nama,
			'isi' => $isi
		);

		$this->admin->Insertdata($data,'tbl_wilayah');
		redirect(base_url().'dashboard/wilayah','refresh');
	}

	public function editwilayah($no){
		$where = array(
			'id_wilayah' => $no
		);
		$data['user'] = $this->admin->Editdata($where,'tbl_wilayah')->result();
		$this->load->view('admin/editwilayah',$data);
	}

	public function proseseditwilayah(){
		$id = $this->input->post('no');
		$nama = $this->input->post('nama');
		$isi = $this->input->post('isi');

		$where = array(
			'id_wilayah' => $id
		);

		$data = array(
			'nama' => $nama,
			'isi' => $isi
		);
		$this->admin->Updatedata($where,$data,'tbl_wilayah');
		redirect(base_url().'dashboard/wilayah','refresh');

	}
	

}
