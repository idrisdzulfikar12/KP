<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_book');
    }

    public function index()
    {
        $data = array(
            'title'     => 'E-Book',
            'title2'    => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'book'       => $this->m_book->lists(),
            'isi'       => 'admin/book/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function add()
    {
        $this->form_validation->set_rules('judul_book', 'Judul Book', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './file/file_b/';
            $config['allowed_types']    = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size']         = 10000;
            $this->upload->initialize($config);
            
                if (!$this->upload->do_upload('file_book'))
                {
                    $data = array(
                        'title' => 'Add E-Book',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => 'admin/book/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './file/file_b/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'judul_book' => $this->input->post('judul_book'),
                        'file_book'  => $upload_data['uploads']['file_name']
                    );
                    $this->m_book->add($data);
                    $this->session->set_flashdata('pesan','Berhasil Ditambahkan');
                    redirect('book');
                }
        }
        $data = array(
            'title' => 'Add E-Book',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'isi' => 'admin/book/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_book)
    {
        $this->form_validation->set_rules('judul_book', 'Judul Book', 'required');
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']      = './file/file_b/';
            $config['allowed_types']    = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size']         = 10000;
            $this->upload->initialize($config);
            
                if (!$this->upload->do_upload('file_book'))
                {
                    $data = array(
                        'title' => 'Edit E-Book',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'book' => $this->m_book->detail($id_book),
                        'error_upload' => $this->upload->display_errors(),
                        'isi' => 'admin/book/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $book=$this->m_book->detail($id_book);
                    if ($book->file_book !="") {
                        unlink('./file/file_b/'.$book->file_book);
                    }

                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './file/file_b/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'id_book'    => $id_book,
                        'judul_book' => $this->input->post('judul_book'),
                        'file_book'  => $upload_data['uploads']['file_name']
                    );
                    $this->m_book->edit($data);
                    $this->session->set_flashdata('pesan','Berhasil Di Edit');
                    redirect('book');
                }

                $data = array(
                    'id_book'    => $id_book,
                    'judul_book' => $this->input->post('judul_book')
                );
                $this->m_book->edit($data);
                $this->session->set_flashdata('pesan','Berhasil Di Edit');
                redirect('book');
        }
        $data = array(
            'title' => 'Edit E-Book',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'book' => $this->m_book->detail($id_book),
            'isi' => 'admin/book/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete($id_book)
    {
        $book=$this->m_book->detail($id_book);
        if ($book->file_book !="") {
            unlink('./file/file_b/'.$book->file_book);
        }

        $data = array('id_book' => $id_book);
        $this->m_book->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('book');
    }

}

/* End of file Controllername.php*/
