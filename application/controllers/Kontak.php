<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_kontak'); // Memuat model
    }

    public function index()
    {
        $data = array(
            'title' => 'Kontak',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'kontak' => $this->m_kontak->lists(),
            'isi' => 'admin/kontak/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function submit() {
        // Ambil data dari form
        $data = array(
            'nama_kontak' => $this->input->post('nama_kontak'),
            'email_kontak' => $this->input->post('email_kontak'),
            'subjek_kontak' => $this->input->post('subjek_kontak'),
            'pesan_kontak' => $this->input->post('pesan_kontak')
        );
        $this->m_kontak->add($data);

        redirect('home/kontak');
    }
}
?>
