<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelapor extends CI_Model {

    // Fungsi untuk menyimpan data pelapor
    public function save_pelapor($data) {
        $this->db->insert('pelapor', $data);
        return $this->db->insert_id(); // Mengembalikan ID pelapor yang baru saja disimpan
    }

    // Fungsi untuk menyimpan data kasus
    public function save_kasus($data) {
        $this->db->insert('kasus', $data);
    }

    // Fungsi untuk menyimpan data korban
    public function save_korban($data) {
        $this->db->insert('korban', $data);
    }

    // Fungsi untuk menyimpan data pelaku
    public function save_pelaku($data) {
        $this->db->insert('pelaku', $data);
    }
}
?>
