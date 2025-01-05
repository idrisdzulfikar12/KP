<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelapor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_pelapor');
    }

    // Fungsi untuk menampilkan form
    public function index() {
        $this->load->view('v_form_pengaduan');
    }

    // Fungsi untuk menerima dan menyimpan data dari form
    public function submit() {
        // Ambil data dari form
        $data_pelapor = array(
            'nama' => $this->input->post('nama'),
            'sebagai' => $this->input->post('sebagai'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email')
        );

        // Simpan data pelapor
        $pelapor_id = $this->M_pelapor->save_pelapor($data_pelapor);

        // Simpan data kasus
        $data_kasus = array(
            'pelapor_id' => $pelapor_id,
            'jenis_kasus' => $this->input->post('jenis_kasus'),
            'bentuk_kekerasan' => $this->input->post('bentuk_kekerasan'),
            'tempat_kejadian' => $this->input->post('tempat_kejadian'),
            'kecamatan' => $this->input->post('kecamatan'),
            'tanggal_kejadian' => $this->input->post('tanggal_kejadian'),
            'status_laporan' => $this->input->post('status_laporan'),
            'kronologi_singkat' => $this->input->post('kronologi_singkat')
        );
        $this->M_pelapor->save_kasus($data_kasus);

        // Simpan data korban
        $data_korban = array(
            'pelapor_id' => $pelapor_id,
            'nama_korban' => $this->input->post('nama_korban'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'disabilitas' => $this->input->post('disabilitas'),
            'usia' => $this->input->post('usia_saat_kejadian'),
            'pendidikan' => $this->input->post('pendidikan'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'status_perkawinan' => $this->input->post('status_perkawinan')
        );
        $this->M_pelapor->save_korban($data_korban);

        // Simpan data pelaku
        $data_pelaku = array(
            'pelapor_id' => $pelapor_id,
            'nama_pelaku' => $this->input->post('pelaku_nama'),
            'jenis_kelamin' => $this->input->post('pelaku_jenis_kelamin'),
            'usia' => $this->input->post('pelaku_usia'),
            'pendidikan' => $this->input->post('pelaku_pendidikan'),
            'pekerjaan' => $this->input->post('pelaku_pekerjaan'),
            'hubungan_dengan_korban' => $this->input->post('pelaku_hubungan'),
            'kewarganegaraan' => $this->input->post('pelaku_kewarganegaraan')
        );
        $this->M_pelapor->save_pelaku($data_pelaku);

        // Tampilkan notifikasi atau halaman sukses
        redirect('home/form_pengaduan');
        
    }
}
?>
