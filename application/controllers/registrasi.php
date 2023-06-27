<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
    public function __construct()
   {
      parent::__construct();
      $this->load->model('Registrasi_model');
   }


 public function index()
 {
   $data['title']='Registration';
  $this->load->view('regis_view', $data);
 }

 public function input()
   {
      $this->form_validation->set_rules('username', 'username', 'required');

      $this->form_validation->set_rules('password', 'password', 'required', [
         'required' => '%s tidak boleh kosong'
      ]);

      if ($this->form_validation->run() == TRUE) {
         $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            
         ];

         $this->Registrasi_model->simpan($data);
         $this->session->set_flashdata('pesan' , 'User berhasil ditambahkan, silahkan login untuk melanjutkan!');
         redirect('login');
      }
   }
}