<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_model extends CI_Model {

    public function getAll()
    {
       $query = $this->db->get('login');
       return $query->result_array();
    }
    public function simpan($data)
    {
       $this->db->insert('login', $data);
    }
}
