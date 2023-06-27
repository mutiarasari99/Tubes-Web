<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
public function __construct()
{
  parent::__construct();
  $this->load->model('Anggota_model');
  $this->load->library('form_validation');
  $this->load->model('model_login');
  $this->model_login->keamanan();
   
}
 public function index()
 {
  // load library
  $this->load->library('pagination');

  // ambil data keyword
  if($this->input->post('submit')){
    $data['keyword']=$this->input->post('keyword');
  }else{
    $data['keyword']='';
  }

  
  // configurasi
  
  $this->db->like('nama', $data['keyword']);
  $this->db->or_like('email', $data['keyword']);
  $this->db->or_like('no_hp', $data['keyword']);
  $this->db->or_like('alamat', $data['keyword']);
  $this->db->from('anggota');
  $config['total_rows']=$this->db->count_all_results();
  
  $config['per_page']=5;
  

  // inisialissasi
  $this->pagination->initialize($config);

  

     $data['title']='Data Anggota';
     $data['start']= $this->uri->segment(3);
     $data['anggota']=$this->Anggota_model->getAnggota($config['per_page'], $data['start'], $data['keyword']);
     
  
  $this->load->view('anggota/index', $data);
  
 }
 public function tambah(){
  $data['title']='Tambah Data Anggota';
  $this->form_validation->set_rules('nama', 'Nama', 'required');
  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
  $this->form_validation->set_rules('no_hp', 'No. Hp', 'required|numeric');
  $this->form_validation->set_rules('alamat', 'Alamat', 'required');

  if($this->form_validation->run()==FALSE){
   
    $this->load->view('anggota/tambah', $data);
   
  }else{
    $this->Anggota_model->tambahDataAnggota();
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('anggota');
  }
  
 }
 public function hapus($id)
 {
  $this->Anggota_model->hapusDataAnggota($id);
  $this->session->set_flashdata('flash', 'Dihapus');
  redirect('anggota');
 }
 public function ubah($id){
  $data['title']='Ubah Data Anggota';
  $data['anggota']=$this->Anggota_model->getAnggotaById($id);
  $this->form_validation->set_rules('nama', 'Nama', 'required');
  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
  $this->form_validation->set_rules('no_hp', 'No. Hp', 'required|numeric');
  $this->form_validation->set_rules('alamat', 'Alamat', 'required');

  if($this->form_validation->run()==FALSE){
    
    $this->load->view('anggota/ubah', $data);
    ;
  }else{
    $this->Anggota_model->ubahDataAnggota();
    $this->session->set_flashdata('flash', 'Diubah');
    redirect('anggota');
  }
  
 }
}
?>