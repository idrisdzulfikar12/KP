<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Web Dinas',
                    'latest_berita_home' => $this->m_home->latest_berita_home(),
                    'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);      
    }

    public function search()
    {
        // Ambil query pencarian dari URL atau input form
        $query = $this->input->get('query');

        // Jika query pencarian tidak kosong
        if (!empty($query)) {
            // Lakukan pencarian untuk berita dan artikel
            $data['search_results_berita'] = $this->m_home->search_berita($query);
            $data['search_results_artikel'] = $this->m_home->search_artikel($query);
        } else {
            // Jika tidak ada query, tampilkan hasil kosong
            $data['search_results_berita'] = [];
            $data['search_results_artikel'] = [];
        }

        // Mengambil berita terbaru untuk ditampilkan di samping hasil pencarian
        $data['latest_berita'] = $this->m_home->latest_berita();

        // Set title dan view untuk halaman pencarian
        $data['title'] = 'Hasil Pencarian';
        $data['isi'] = 'v_search_results'; // View baru untuk menampilkan hasil pencarian

        // Muat view layout
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function sambutan()
    {
        $data = array(
                    'title' => 'Visi Misi',
                    'isi' => 'v_sambutan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function struktur()
    {
        $data = array(
                    'title' => 'Struktur',
                    'isi' => 'v_struktur'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function sekretariat()
    {
        $data = array(
                    'title' => 'Sekretariat',
                    'isi' => 'v_sekretariat'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_pemberdayaan_perempuan()
    {
        $data = array(
                    'title' => 'Bidang Pemberdayaan Perempuan dan Pengarustamaan Gender',
                    'isi' => 'v_bidang_pemberdayaan_perempuan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_pemenuhan()
    {
        $data = array(
                    'title' => 'Bidang Pemenuhan Hak Anak',
                    'isi' => 'v_bidang_pemenuhan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_perlindungan()
    {
        $data = array(
                    'title' => 'Bidang Perlindungan Perempuan dan Anak',
                    'isi' => 'v_bidang_perlindungan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_pemberdayaan_manusia()
    {
        $data = array(
                    'title' => 'Bidang Pemberdayaan Manusia dan Data Informasi',
                    'isi' => 'v_bidang_pemberdayaan_manusia'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function seruni()
    {
        $data = array(
                    'title' => 'Seruni',
                    'isi' => 'v_seruni'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function form_pengaduan()
    {
        $data = array(
                    'title' => 'Form Pengaduan',
                    'isi' => 'v_form_pengaduan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function sop()
    {
        $data = array(
                    'title' => 'Standar Operasional Prosedur',
                    'sop' => $this->m_home->sop(),
                    'isi' => 'v_sop'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function jadwal_kunjungan()
    {
        $data = array(
            'title' => 'Jadwal Kunjungan',
            'isi' => 'v_jadwal_kunjungan'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['url_segmen'] = 3;

            $limit= $config['per_page'];
            $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link']           = 'First';
        $config['last_link']            = 'Last';
        $config['next_link']            = 'Next';
        $config['prev_link']            = 'Prev';
        $config['full_tag_open']        = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open']         = '<li>';
        $config['num_tag_close']        = '</li>';
        $config['cur_tag_open']         = '<li class="active"><a>';
        $config['cur_tag_close']        = '</a></li>';
        $config['next_tag_open']         = '<li>';
        $config['next_tag_close']        = '</li>';
        $config['prev_tag_open']         = '<li>';
        $config['prev_tag_close']        = '</li>';
        $config['first_tag_open']         = '<li>';
        $config['first_tag_close']        = '</li>';
        $config['last_tag_open']         = '<li>';
        $config['last_tag_close']        = '</li>';
        $config['full_tag_close']        = '</ul></div>';

        $this->pagination->initialize($config);

        $data = array(
                    'paginasi' =>$this->pagination->create_links(),
                    'latest_berita' => $this->m_home->latest_berita(),
                    'berita'    => $this->m_home->berita($limit,$start),
                    'title' => 'Berita',
                    'isi' => 'v_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function detail_berita($slug_berita)
    {
        $data = array(
            'title' => 'Detail Berita',
            'latest_berita' => $this->m_home->latest_berita(),
            'berita' => $this->m_home->detail_berita($slug_berita),
            'isi' => 'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }
    public function artikel()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/artikel');
        $config['total_rows'] = count($this->m_home->total_artikel());
        $config['per_page'] = 8;
        $config['url_segmen'] = 3;

            $limit= $config['per_page'];
            $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link']           = 'First';
        $config['last_link']            = 'Last';
        $config['next_link']            = 'Next';
        $config['prev_link']            = 'Prev';
        $config['full_tag_open']        = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open']         = '<li>';
        $config['num_tag_close']        = '</li>';
        $config['cur_tag_open']         = '<li class="active"><a>';
        $config['cur_tag_close']        = '</a></li>';
        $config['next_tag_open']         = '<li>';
        $config['next_tag_close']        = '</li>';
        $config['prev_tag_open']         = '<li>';
        $config['prev_tag_close']        = '</li>';
        $config['first_tag_open']         = '<li>';
        $config['first_tag_close']        = '</li>';
        $config['last_tag_open']         = '<li>';
        $config['last_tag_close']        = '</li>';
        $config['full_tag_close']        = '</ul></div>';

        $this->pagination->initialize($config);

        $data = array(
                    'paginasi' =>$this->pagination->create_links(),
                    'latest_artikel' => $this->m_home->latest_artikel(),
                    'artikel'    => $this->m_home->artikel($limit,$start),
                    'title' => 'Artikel',
                    'isi' => 'v_artikel'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function detail_artikel($slug_artikel)
    {
        $data = array(
            'title' => 'Detail Artikel',
            'latest_artikel' => $this->m_home->latest_artikel(),
            'artikel' => $this->m_home->detail_artikel($slug_artikel),
            'isi' => 'v_detail_artikel'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function book()
    {
        $data = array(
                    'title' => 'E-Book',
                    'book' => $this->m_home->book(),
                    'isi' => 'v_book'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function galeri()
    {
        $data = array(
                    'title' => 'Galeri',
                    'galeri' => $this->m_home->galeri(),
                    'isi' => 'v_galeri'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function detail_galeri($id_galeri)
    {
        $data = array(
                    'title' => 'Detail Galeri',
                    'galeri' => $this->m_home->detail_galeri($id_galeri),
                    'nama_galeri' => $this->m_home->nama_galeri($id_galeri),
                    'isi' => 'v_detail_galeri'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function glosary()
    {
        $data = array(
                    'title' => 'Glosary',
                    'glosary' => $this->m_home->glosary(),
                    'isi' => 'v_glosary'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function dok()
    {
        $data = array(
                    'title' => 'Dokumen Perencanaan',
                    'dok' => $this->m_home->dok(),
                    'isi' => 'v_dok'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function kontak()
    {
        $data = array(
                    'title' => 'Kontak',
                    'isi' => 'v_kontak'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }
}