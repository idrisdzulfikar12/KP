<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_ebook extends CI_Model {
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_ebook');
        $this->db->order_by('id_ebook', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_ebook', $data); 
    }

    public function edit($data)
    {
        $this->db->where('id_ebook', $data['id_ebook']);
        $this->db->update('tbl_ebook', $data); 
    }

    public function delete($data)
    {
        $this->db->where('id_ebook', $data['id_ebook']);
        $this->db->delete('tbl_ebook', $data); 
    }
}