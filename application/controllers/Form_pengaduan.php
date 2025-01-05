<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pengaduan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_form_pengaduan'); // Memuat model
    }

    public function index()
    {
        $data = array(
            'title' => 'Form Pengaduan',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'kasus' => $this->m_form_pengaduan->get_all_kasus(),
            'pelapor' => $this->m_form_pengaduan->get_all_pelapor(),
            'korban' => $this->m_form_pengaduan->get_all_korban(),
            'pelaku' => $this->m_form_pengaduan->get_all_pelaku(),
            'isi' => 'admin/form_pengaduan/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

//     public function detail($id)
//     {
//     $data = array(
//         'title' => 'Detail Pengaduan',
//         'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
//         'kasus' => $this->m_form_pengaduan->get_all_kasus($id),
//         'pelapor' => $this->m_form_pengaduan->get_all_pelapor($id),
//         'korban' => $this->m_form_pengaduan->get_all_korban($id),
//         'pelaku' => $this->m_form_pengaduan->get_all_pelaku($id),
//         'isi' => 'admin/form_pengaduan/v_detail'
//     );
//     $this->load->view('admin/layout/v_wrapper', $data, FALSE);
// }

    public function detail($id)
    {
        $data = array(
            'title' => 'Detail Pengaduan',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'pelapor' => $this->m_form_pengaduan->get_pelapor_detail($id)['pelapor'],
            'kasus' => $this->m_form_pengaduan->get_pelapor_detail($id)['kasus'],
            'korban' => $this->m_form_pengaduan->get_pelapor_detail($id)['korban'],
            'pelaku' => $this->m_form_pengaduan->get_pelapor_detail($id)['pelaku'],
            'isi' => 'admin/form_pengaduan/v_detail'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


}
?>
