<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_ebook');
    }

    public function index()
    {
        $data = array(
            'title' => 'E-Book',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'ebook' => $this->m_ebook->lists(),
            'isi' => 'admin/v_ebook'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function add()
    {
        $data = array(
                    'judul_ebook' => $this->input->post('judul_ebook')
                );
        $this->m_ebook->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('ebook');
    }

    public function edit($id_ebook)
    {
        $data = array(
                    'id_ebook' => $id_ebook,
                    'judul_ebook' => $this->input->post('judul_ebook')
                );
        $this->m_ebook->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('ebook');
    }

    public function delete($id_ebook)
    {
        $data = array(
                    'id_ebook' => $id_ebook
                );
        $this->m_ebook->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('ebook');
    }
}