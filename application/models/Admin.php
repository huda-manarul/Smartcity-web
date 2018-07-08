<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_nama');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    //tambah berita
    public function Insertdata($data,$table){
        $this->db->insert($table,$data);
    }

    public function Selectdata($table){
       return $this->db->get($table);
    }

    public function getkomen(){
        $this->db->select('*');
        $this->db->from('tbl_informasi');
        $this->db->join('tbl_komentar', 'tbl_komentar.id_berita = tbl_informasi.id_berita');
        return $this->db->get();
    }

    public function getlaporan(){
        $this->db->select('*');
        $this->db->from('tbl_laporan');
        $this->db->join('tbl_taman', 'tbl_taman.id_taman = tbl_laporan.id_taman');
        return $this->db->get();
    }

    //ambil data berita
    public function Editdata($where,$table){       
        return $this->db->get_where($table,$where);
    }

    //hapus berita
    public function Deletedata($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }  

    //ambil data berita
    public function Getdata($table,$number,$offset){
        return $query = $this->db->get($table,$number,$offset)->result();       
    }

    public function Getdatanon($table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id_berita','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    //ambil data berita
    public function Getcount($table){
        return $this->db->get($table)->num_rows();
    }

    public function Updatedata($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}