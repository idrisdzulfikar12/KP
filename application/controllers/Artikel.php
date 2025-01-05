<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_artikel');
    }

    public function index()
    {
        $data = array(
            'title' => 'artikel',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'artikel' => $this->m_artikel->lists(),
            'isi' => 'admin/artikel/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function add()
    {
        $this->form_validation->set_rules('judul_artikel', 'Judul artikel', 'required');
        $this->form_validation->set_rules('isi_artikel', 'Isi artikel', 'required',array('required'=>'$s Harus Diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './gambar_artikel/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 10000;
            $this->upload->initialize($config);
            
                if (!$this->upload->do_upload('gambar_artikel'))
                {
                    $data = array(
                        'title' => 'Add artikel',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => 'admin/artikel/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './gambar_artikel/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'judul_artikel' => $this->input->post('judul_artikel'),
                        'slug_artikel' => url_title($this->input->post('judul_artikel'),'dash',TRUE),
                        'isi_artikel' => $this->input->post('isi_artikel'),
                        'tgl_artikel' => date('Y-m-d H:i:s'),
                        'id_user'   => $this->session->userdata('id_user'),
                        'gambar_artikel'  => $upload_data['uploads']['file_name']
                    );
                    $this->m_artikel->add($data);
                    $this->session->set_flashdata('pesan','Berhasil Ditambahkan');
                    redirect('artikel');
                }
        }
        $data = array(
            'title' => 'Add artikel',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'isi' => 'admin/artikel/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_artikel)
    {
        $this->form_validation->set_rules('judul_artikel', 'Judul artikel', 'required');
        $this->form_validation->set_rules('isi_artikel', 'Isi artikel', 'required',array('required'=>'$s Harus Diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './gambar_artikel/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 10000;
            $this->upload->initialize($config);
            
                if (!$this->upload->do_upload('gambar_artikel'))
                {
                    $data = array(
                        'title' => 'Edit artikel',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'error_upload' => $this->upload->display_errors(),
                        'artikel' => $this->m_artikel->detail($id_artikel),
                        'isi' => 'admin/artikel/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './gambar_artikel/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $artikel=$this->m_artikel->detail($id_artikel);
                    if ($artikel->gambar_artikel !="") {
                        unlink('./gambar_artikel/'.$artikel->gambar_artikel);
                    }

                    $data = array(
                        'id_artikel' => $id_artikel,
                        'judul_artikel' => $this->input->post('judul_artikel'),
                        'slug_artikel' => url_title($this->input->post('judul_artikel'),'dash',TRUE),
                        'isi_artikel' => $this->input->post('isi_artikel'),
                        'tgl_artikel' => date('Y-m-d'),
                        'id_user'   => $this->session->userdata('id_user'),
                        'gambar_artikel'  => $upload_data['uploads']['file_name']
                    );
                    $this->m_artikel->edit($data);
                    $this->session->set_flashdata('pesan','Berhasil Diedit');
                    redirect('artikel');
                }
                $data = array(
                    'id_artikel' => $id_artikel,
                    'judul_artikel' => $this->input->post('judul_artikel'),
                    'slug_artikel' => url_title($this->input->post('judul_artikel'),'dash',TRUE),
                    'tgl_artikel' => date('Y-m-d'),
                    'isi_artikel' => $this->input->post('isi_artikel'),
                    'id_user'   => $this->session->userdata('id_user')
                );
                $this->m_artikel->edit($data);
                $this->session->set_flashdata('pesan','Berhasil Diedit');
                redirect('artikel');
        }
        $data = array(
            'title' => 'Edit artikel',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'artikel' => $this->m_artikel->detail($id_artikel),
            'isi' => 'admin/artikel/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete($id_artikel)
    {
        $artikel=$this->m_artikel->detail($id_artikel);
        if ($artikel->gambar_artikel !="") {
            unlink('./gambar_artikel/'.$artikel->gambar_artikel);
        }

        $data = array(
                    'id_artikel' => $id_artikel
                );
        $this->m_artikel->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('artikel');
    }
}