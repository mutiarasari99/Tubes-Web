<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 public function index()
 {
  $this->load->model('model_login');
  $this->model_login->keamanan();
    $data['title']='Review Webtoon';
  $this->load->view('dashboard_view', $data);
 }

}