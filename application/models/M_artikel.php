<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_artikel.id_user', 'left');
        $this->db->order_by('id_artikel', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->where('id_artikel',$id_artikel);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_artikel', $data); 
    }

    public function edit($data)
    {
        $this->db->where('id_artikel', $data['id_artikel']);
        $this->db->update('tbl_artikel', $data); 
    }

    public function delete($data)
    {
        $this->db->where('id_artikel', $data['id_artikel']);
        $this->db->delete('tbl_artikel', $data); 
    }
}