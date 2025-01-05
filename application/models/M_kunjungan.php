<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kunjungan extends CI_Model {
    function __construct() { 
        parent::__construct();
        $this->tableName = 'jadwal_kunjungan'; 
    } 

    public function save_permohonan($data) {
        // Insert data ke dalam tabel kunjungan
        $this->db->insert('jadwal_kunjungan', $data);
    }
}
?>
