<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kasus extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk menyimpan data kasus
    public function insert_kasus($data) {
        $this->db->insert('kasus', $data);
    }
}
