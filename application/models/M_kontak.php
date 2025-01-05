<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model {

    
    public function lists() {
        return $this->db->get('tbl_kontak')->result();
    }

    public function add($data) {
        $this->db->insert('tbl_kontak', $data);
    }
}
?>
