<?php

class Admin extends CI_Controller {
    public function index()
    {
        $data = array(
                    'title' => 'Dashboard',
                    'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                    'isi' => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        
    }
}