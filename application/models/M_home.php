<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function sop()
    {
        $this->db->select('*');
        $this->db->from('tbl_sop');
        $this->db->order_by('id_sop', 'desc');
        return $this->db->get()->result();
    }

    public function glosary()
    {
        $this->db->select('*');
        $this->db->from('tbl_glosary');
        $this->db->order_by('id_glosary', 'desc');
        return $this->db->get()->result();
    }

    public function galeri()
    {
        $this->db->select('tbl_galeri.*,count(tbl_foto.id_galeri) as jml_foto');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_foto', 'tbl_foto.id_galeri = tbl_galeri.id_galeri', 'left');
        $this->db->group_by('tbl_galeri.id_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function detail_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function nama_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function book()
    {
        $this->db->select('*');
        $this->db->from('tbl_book');
        $this->db->order_by('id_book', 'desc');
        return $this->db->get()->result();
    }

    public function dok()
    {
        $this->db->select('*');
        $this->db->from('tbl_dok_rencana');
        $this->db->order_by('id_dok', 'desc');
        return $this->db->get()->result();
    }

    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita', 'desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function artikel($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_artikel.id_user', 'left');
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_artikel()
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_artikel.id_user', 'left');
        $this->db->order_by('id_artikel', 'desc');
        return $this->db->get()->result();
    }

    public function detail_artikel($slug_artikel)
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_artikel.id_user', 'left');
        $this->db->where('slug_artikel', $slug_artikel);
        return $this->db->get()->row();
    }

    public function latest_artikel()
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_artikel.id_user', 'left');
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function latest_berita_home()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->order_by('id_berita', 'desc');  // Mengurutkan berita berdasarkan id_berita terbaru
        $this->db->limit(3);  // Ambil 3 berita terbaru
        return $this->db->get()->result();  // Mengembalikan hasil query sebagai array objek
    }

    public function search_berita($query)
    {
        $this->db->like('judul_berita', $query);
        $this->db->or_like('isi_berita', $query);
        $this->db->select('*');
        $this->db->from('tbl_berita');
        return $this->db->get()->result();
    }

    public function search_artikel($query)
    {
        $this->db->like('judul_artikel', $query);
        $this->db->or_like('isi_artikel', $query);
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        return $this->db->get()->result();
}
}