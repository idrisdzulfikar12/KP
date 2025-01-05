<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_dok extends CI_Model {
    
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_dok_rencana');
        $this->db->order_by('id_dok','desc');
        return $this->db->get()->result();
    }

    public function detail($id_dok)
    {
        $this->db->select('*');
        $this->db->from('tbl_dok_rencana');
        $this->db->where('id_dok',$id_dok);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_dok_rencana',$data); 
    }

    public function edit($data)
    {
        $this->db->where('id_dok', $data['id_dok']);
        $this->db->update('tbl_dok_rencana', $data); 
    }

    public function delete($data)
    {
        $this->db->where('id_dok', $data['id_dok']);
        $this->db->delete('tbl_dok_rencana', $data); 
    }
}