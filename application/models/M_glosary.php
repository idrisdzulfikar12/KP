<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_glosary extends CI_Model {
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_glosary');
        $this->db->order_by('id_glosary', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_glosary)
    {
        $this->db->select('*');
        $this->db->from('tbl_glosary');
        $this->db->where('id_glosary',$id_glosary);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_glosary', $data); 
    }

    public function edit($data)
    {
        $this->db->where('id_glosary', $data['id_glosary']);
        $this->db->update('tbl_glosary', $data); 
    }

    public function delete($data)
    {
        $this->db->where('id_glosary', $data['id_glosary']);
        $this->db->delete('tbl_glosary', $data); 
    }
}