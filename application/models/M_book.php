<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_book extends CI_Model {
    
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_book');
        $this->db->order_by('id_book','desc');
        return $this->db->get()->result();
    }

    public function detail($id_book)
    {
        $this->db->select('*');
        $this->db->from('tbl_book');
        $this->db->where('id_book',$id_book);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_book',$data); 
    }

    public function edit($data)
    {
        $this->db->where('id_book', $data['id_book']);
        $this->db->update('tbl_book', $data); 
    }

    public function delete($data)
    {
        $this->db->where('id_book', $data['id_book']);
        $this->db->delete('tbl_book', $data); 
    }
}