<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_kunjungan');
    }

    public function submit()
{
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 1024; // 1MB
    $config['file_name'] = 'file_permohonan_' . time();

    if (!is_dir($config['upload_path'])) {
        echo "Folder uploads tidak ada, membuat folder baru.<br>";
        mkdir($config['upload_path'], 0777, true);
    }

    // Cek jika form sudah disubmit
    if ($this->input->post()) {
        // Ambil data dari form
        $nama_instansi = $this->input->post('nama_instansi');
        $alamat_instansi = $this->input->post('alamat_instansi');
        $jml_siswa = $this->input->post('jml_siswa');
        $jml_laki = $this->input->post('jml_laki');
        $jml_wanita = $this->input->post('jml_wanita');
        $tgl_kunjungan = $this->input->post('tgl_kunjungan');
        $nama_pic = $this->input->post('nama_pic');
        $no_pic = $this->input->post('no_pic');
        
        // Periksa apakah file ada dan valid
        if (isset($_FILES['file_permohonan']) && $_FILES['file_permohonan']['error'] == 0) {
            $file_temp = $_FILES['file_permohonan']['tmp_name'];
            $file_name = $config['file_name'] . '.' . pathinfo($_FILES['file_permohonan']['name'], PATHINFO_EXTENSION);
            $file_path = $config['upload_path'] . $file_name;

            // Pindahkan file ke folder upload
            if (move_uploaded_file($file_temp, $file_path)) {
                // Data untuk disimpan ke database
                $data = array(
                    'nama_instansi' => $nama_instansi,
                    'alamat' => $alamat_instansi,
                    'jml_siswa' => $jml_siswa,
                    'jml_laki' => $jml_laki,
                    'jml_wanita' => $jml_wanita,
                    'tgl_permohonan_kunjungan' => $tgl_kunjungan,
                    'nama_pic' => $nama_pic,
                    'wa_pic' => $no_pic,
                    'file_permohonan' => $file_name // Nama file yang diupload
                );

                // Simpan data ke database
                $this->M_kunjungan->save_permohonan($data);

                // Tampilkan pesan sukses
                echo "Permohonan berhasil dikirim dan file berhasil diupload: " . $file_name;
                redirect('Home/jadwal_kunjungan');
            } else {
                // Jika upload gagal
                echo "ERROR: Gagal upload file.";
            }
        } else {
            // Jika file tidak ada atau ada error
            echo "ERROR: File tidak ditemukan atau terjadi kesalahan saat upload.";
        }
    }

    
}
}
?>
