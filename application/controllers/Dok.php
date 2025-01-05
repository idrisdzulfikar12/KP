<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dok extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_dok');
    }

    public function index()
    {
        $data = array(
            'title'     => 'Dokumen Perencanaan',
            'title2'    => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'dok'       => $this->m_dok->lists(),
            'isi'       => 'admin/dok/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function add()
    {
        $this->form_validation->set_rules('judul_dok', 'Judul Dok', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './file/file_r/';
            $config['allowed_types']    = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size']         = 10000;
            $this->upload->initialize($config);
            
                if (!$this->upload->do_upload('file_dok'))
                {
                    $data = array(
                        'title' => 'Add Dokumen Perencanaan',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => 'admin/dok/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './file/file_r/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'judul_dok' => $this->input->post('judul_dok'),
                        'file_dok'  => $upload_data['uploads']['file_name']
                    );
                    $this->m_dok->add($data);
                    $this->session->set_flashdata('pesan','Berhasil Ditambahkan');
                    redirect('dok');
                }
        }
        $data = array(
            'title' => 'Add Dokumen Perencanaan',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'isi' => 'admin/dok/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_dok)
    {
        $this->form_validation->set_rules('judul_dok', 'Judul Dok', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './file/file_r/';
            $config['allowed_types']    = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size']         = 10000;
            $this->upload->initialize($config);
            
                if (!$this->upload->do_upload('file_dok'))
                {
                    $data = array(
                        'title' => 'Edit Dokumen Perencanaan',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'dok' => $this->m_dok->detail($id_dok),
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => 'admin/dok/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $dok=$this->m_dok->detail($id_dok);
                    if ($dok->file_dok !="") {
                        unlink('./file/file_r/'.$dok->file_dok);
                    }

                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './file/file_r/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'id_dok'    => $id_dok,
                        'judul_dok' => $this->input->post('judul_dok'),
                        'file_dok'  => $upload_data['uploads']['file_name']
                    );
                    $this->m_dok->edit($data);
                    $this->session->set_flashdata('pesan','Berhasil Di Edit');
                    redirect('dok');
                }

                $data = array(
                    'id_dok'    => $id_dok,
                    'judul_dok' => $this->input->post('judul_dok')
                );
                $this->m_dok->edit($data);
                $this->session->set_flashdata('pesan','Berhasil Di Edit');
                redirect('dok');
        }
        $data = array(
            'title' => 'Edit Dokumen Perencanaan',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'dok' => $this->m_dok->detail($id_dok),
            'isi' => 'admin/dok/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete($id_dok)
    {
        $dok=$this->m_dok->detail($id_dok);
        if ($dok->file_dok !="") {
            unlink('./file/file_r/'.$dok->file_dok);
        }

        $data = array('id_dok' => $id_dok);
        $this->m_dok->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('dok');
    }

}

/* End of file Controllername.php*/
