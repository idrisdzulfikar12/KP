<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_form_pengaduan extends CI_Model {

    // Ambil semua data pelapor
    public function get_all_pelapor() {
        return $this->db->get('pelapor')->result(); // Mengambil semua data dari tabel pelapor
    }

    // Ambil semua data kasus
    public function get_all_kasus() {
        return $this->db->get('kasus')->result(); // Mengambil semua data dari tabel kasus
    }

    // Ambil semua data korban
    public function get_all_korban() {
        return $this->db->get('korban')->result(); // Mengambil semua data dari tabel korban
    }

    // Ambil semua data pelaku
    public function get_all_pelaku() {
        return $this->db->get('pelaku')->result(); // Mengambil semua data dari tabel pelaku
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('pelapor');
        $this->db->where('pelapor',$id);
        return $this->db->get()->row();
    }

//     public function get_pelapor_detail($id)
//     {
//     // Ambil detail pelapor
//     $pelapor = $this->db->get_where('pelapor', ['pelapor_id' => $id])->row();

//     // Ambil data terkait berdasarkan pelapor_id
//     $kasus = $this->db->get_where('kasus', ['pelapor_id' => $id])->result();
//     $korban = $this->db->get_where('korban', ['pelapor_id' => $id])->result();
//     $pelaku = $this->db->get_where('pelaku', ['pelapor_id' => $id])->result();

//     // Gabungkan data
//     return [
//         'pelapor' => $pelapor,
//         'kasus' => $kasus,
//         'korban' => $korban,
//         'pelaku' => $pelaku
//     ];
// }

public function get_pelapor_detail($id)
{
    // Ambil detail pelapor berdasarkan pelapor_id
    $pelapor = $this->db->get_where('pelapor', ['pelapor_id' => $id])->row();

    // Ambil data kasus, korban, dan pelaku yang terkait dengan pelapor_id
    $kasus = $this->db->get_where('kasus', ['pelapor_id' => $id])->result();
    $korban = $this->db->get_where('korban', ['pelapor_id' => $id])->result();
    $pelaku = $this->db->get_where('pelaku', ['pelapor_id' => $id])->result();

    // Gabungkan semua data menjadi array
    return [
        'pelapor' => $pelapor,
        'kasus' => $kasus,
        'korban' => $korban,
        'pelaku' => $pelaku
    ];
}
}
?>
