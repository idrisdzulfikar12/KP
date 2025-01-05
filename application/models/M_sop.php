<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sop extends CI_Model {
    
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_sop');
        $this->db->order_by('id_sop','desc');
        return $this->db->get()->result();
    }

    public function detail($id_sop)
    {
        $this->db->select('*');
        $this->db->from('tbl_sop');
        $this->db->where('id_sop',$id_sop);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_sop',$data); 
    }

    public function edit($data)
    {
        $this->db->where('id_sop', $data['id_sop']);
        $this->db->update('tbl_sop', $data); 
    }

    public function delete($data)
    {
        $this->db->where('id_sop', $data['id_sop']);
        $this->db->delete('tbl_sop', $data); 
    }
}