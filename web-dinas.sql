-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2024 pada 09.36
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-dinas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL,
  `jenis_kasus` enum('kekerasan terhadap anak','kekerasan terhadap perempuan','traffiking') NOT NULL,
  `bentuk_kekerasan` enum('fisik','seksual','psikis') NOT NULL,
  `tempat_kejadian` enum('rumah tangga','sekolah','tempat kerja') NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `status_laporan` enum('Kepolisian','Pengadilan','LSM') NOT NULL,
  `kronologi_singkat` text NOT NULL,
  `pelapor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id`, `jenis_kasus`, `bentuk_kekerasan`, `tempat_kejadian`, `kecamatan`, `tanggal_kejadian`, `status_laporan`, `kronologi_singkat`, `pelapor_id`) VALUES
(1, 'kekerasan terhadap perempuan', 'fisik', 'rumah tangga', 'Semarang Timur', '2024-12-09', 'Kepolisian', 'Jadi si pelaku melakukan', 1),
(2, 'traffiking', 'seksual', 'sekolah', 'Semarang Tengah', '2024-12-02', 'LSM', 'saat korban berada disekolah', 2),
(3, 'kekerasan terhadap perempuan', 'seksual', 'sekolah', 'Semarang Timur', '2024-11-27', 'Kepolisian', 'Jadi si pelaku melakukan', 3),
(4, 'kekerasan terhadap anak', 'fisik', 'rumah tangga', 'Mijen', '2024-12-28', 'Kepolisian', 'Jadi si pelaku melakukan', 4),
(5, 'kekerasan terhadap anak', 'fisik', 'rumah tangga', 'Mijen', '2024-12-07', 'Kepolisian', 'Jadi si pelaku melakukan sesuatu pada si korban', 5),
(6, 'kekerasan terhadap perempuan', 'seksual', 'sekolah', 'Semarang Timur', '2024-12-11', 'Kepolisian', 'Jadi saat itu si a lalu si a', 6),
(7, 'kekerasan terhadap perempuan', 'psikis', 'rumah tangga', 'Semarang Timur', '2024-12-02', 'Pengadilan', 'Jadi si a melakukan ini ke si b', 7),
(8, 'kekerasan terhadap perempuan', 'psikis', 'rumah tangga', 'Semarang Timur', '2024-12-02', 'LSM', 'Jadi si a melakukan ini ke si b', 8),
(9, 'kekerasan terhadap anak', 'fisik', 'rumah tangga', 'Mijen', '2024-12-02', 'Kepolisian', 'Jadi kronologinya', 9),
(10, 'kekerasan terhadap perempuan', 'seksual', 'rumah tangga', 'Semarang Timur', '2024-12-03', 'Kepolisian', 'Jadi si pelaku melakukan sesuatu ke b', 10),
(11, 'traffiking', 'fisik', 'sekolah', 'Semarang Timur', '2024-12-01', 'Kepolisian', 'Jadi saat iki korban sedang pulang ke rumah diikuti oleh si pelaku', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `korban`
--

CREATE TABLE `korban` (
  `id` int(11) NOT NULL,
  `pelapor_id` int(11) DEFAULT NULL,
  `nama_korban` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki laki','perempuan') NOT NULL,
  `disabilitas` enum('iya','tidak') NOT NULL,
  `usia` int(11) NOT NULL,
  `pendidikan` enum('SD','SMP','SMA') NOT NULL,
  `pekerjaan` enum('bekerja','tidak bekerja') NOT NULL,
  `status_perkawinan` enum('kawin','cerai','belum kawin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `korban`
--

INSERT INTO `korban` (`id`, `pelapor_id`, `nama_korban`, `jenis_kelamin`, `disabilitas`, `usia`, `pendidikan`, `pekerjaan`, `status_perkawinan`) VALUES
(1, 1, 'nbvnnmj', 'laki laki', 'tidak', 45, 'SMP', 'tidak bekerja', 'kawin'),
(2, 2, 'Sasa', 'perempuan', 'tidak', 13, 'SD', 'tidak bekerja', 'belum kawin'),
(3, 3, 'Ani', 'perempuan', 'iya', 12, 'SMP', 'tidak bekerja', 'belum kawin'),
(4, 4, 'Andi', 'laki laki', 'iya', 23, 'SMA', 'bekerja', 'kawin'),
(5, 5, 'Andian', 'laki laki', 'iya', 23, 'SMA', 'bekerja', 'kawin'),
(6, 6, 'Andin', 'perempuan', 'tidak', 24, 'SMA', 'tidak bekerja', 'cerai'),
(8, 8, 'Odi', 'laki laki', 'tidak', 21, 'SMA', 'tidak bekerja', 'belum kawin'),
(9, 9, 'Alda', 'laki laki', 'tidak', 23, 'SMA', 'tidak bekerja', 'belum kawin'),
(10, 10, 'Yanti', 'perempuan', 'tidak', 21, 'SMA', 'tidak bekerja', 'belum kawin'),
(11, 11, 'Adriana', 'perempuan', 'tidak', 18, 'SMA', 'tidak bekerja', 'belum kawin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaku`
--

CREATE TABLE `pelaku` (
  `id` int(11) NOT NULL,
  `pelapor_id` int(11) DEFAULT NULL,
  `nama_pelaku` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `usia` int(11) NOT NULL,
  `pendidikan` enum('SD','SMP','SMA') NOT NULL,
  `pekerjaan` enum('bekerja','tidak bekerja') NOT NULL,
  `hubungan_dengan_korban` enum('Orang tua','Teman','Pacar') NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelaku`
--

INSERT INTO `pelaku` (`id`, `pelapor_id`, `nama_pelaku`, `jenis_kelamin`, `usia`, `pendidikan`, `pekerjaan`, `hubungan_dengan_korban`, `kewarganegaraan`) VALUES
(1, 1, 'Yanti', 'Perempuan', 13, 'SD', 'tidak bekerja', 'Orang tua', 'WNI'),
(2, 2, 'Ilham', 'Laki - laki', 17, 'SMA', 'tidak bekerja', 'Pacar', 'WNI'),
(5, 5, 'Sabrian', 'Perempuan', 40, 'SMA', 'tidak bekerja', 'Teman', 'WNI'),
(6, 6, 'Adonis', 'Laki - laki', 20, 'SMA', 'tidak bekerja', 'Pacar', 'WNI'),
(7, 9, 'Aldi', 'Laki - laki', 24, 'SMA', 'bekerja', 'Pacar', 'WNI'),
(8, 10, 'Riko', 'Laki - laki', 32, 'SMA', 'tidak bekerja', 'Pacar', 'WNA'),
(9, 11, 'Yanto', 'Laki - laki', 21, 'SMA', 'tidak bekerja', 'Teman', 'WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `pelapor_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sebagai` enum('korban','orang tua','orang lain','saudara') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`pelapor_id`, `nama`, `sebagai`, `alamat`, `no_hp`, `email`) VALUES
(1, 'ilham', 'orang tua', 'Jl Kaliawan', '08212156564', 'anggitprayogo@gmail.com'),
(2, 'Galuh', 'orang lain', 'punden selatan', '081325787980', 'skizorito@gmail.com'),
(3, 'Muh Alde', 'orang tua', 'Jl Kawi', '0877291021', 'rizalroe@gmail.com'),
(4, 'Muh Aldea', 'orang tua', 'Jl akmaksma', '094304839437', 'galuh@gmail.com'),
(5, 'Muh Aldeam', 'orang tua', 'Jl akmaksma', '094304839434', 'galuh12@gmail.com'),
(6, 'Andika', 'saudara', 'Jl jembatan', '087729102132', 'uglh@gmail.com'),
(7, 'Jeje', 'orang tua', 'Jl Gunung Pati', '08321431212', 'jeje@gmail.com'),
(8, 'Jeje', 'orang tua', 'Jl Gunung Pati', '08321431212', 'jeje@gmail.com'),
(9, 'Yudhis', 'orang tua', 'Jl Kalibatu', '086765665', 'dhis@gmail.com'),
(10, 'Yanto', 'orang lain', 'Jl Batu', '08321431214', 'yanto@gmail.com'),
(11, 'Adrian', 'orang tua', 'Jl Kaliwatu', '082132322', 'adrian@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) DEFAULT NULL,
  `slug_artikel` varchar(255) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `gambar_artikel` varchar(30) DEFAULT NULL,
  `tgl_artikel` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul_artikel`, `slug_artikel`, `isi_artikel`, `gambar_artikel`, `tgl_artikel`, `id_user`) VALUES
(2, 'UPAYA MENGATASI BULLYING DALAM LINGKUP SEKOLAH', 'upaya-mengatasi-bullying-dalam-lingkup-sekolah', '<div>Anak merupakan aset masa depan bangsa dan generasi penerus cita-cita bangsa, sehingga setiap anak berhak atas kelangsungan hidup, tumbuh, dan berkembang, berpartisipasi serta berhak atas perlindungan dari tindak kekerasan dan diskriminasi serta hak sipil dan kebebasan. Indonesia telah mengatur perlindungan bagi anak di dalam Undang- Undang Nomor 23 Tahun 2002 jo. Undang- Undang Nomor 35 Tahun 2014 Tentang Perlindungan Anak Pasal 54 telah disebutkan bahwa :<br><br>- Anak di dalam dan di lingkungan sekolah wajib dilindungi dari tindakan kekerasan yang dilakukan oleh guru, pengelola sekolah atau teman-temannya di dalam sekolah yang bersangkutan, atau lembaga pendidikan lainnya.<br>- Perlindungan sebagaimana dimaksud pada ayat (1) dilakukan oleh pendidik, tenaga kependidikan, aparat pemerintah, dan/atau Masyarakat.</div><div><br>Tindakan bullying memiliki dampak yang sangat parah bagi korban, diantaranya kognitif, afeksi, serta konatif. Dampak kognitif yang dirasakan korban ialah hilangnya konsentrasi belajar sampai menurunnya jumlah nilai dalam pelajaran. Sedangkan dampak afeksi pada korban bullying sering merasa malu, pilu, marah, serta dendam. Adapun dampak konatif pada korban bullying ialah membalas dendam dengan memakai kekerasan secara raga, dan membalas dengan mencari celah dan melakukan cyberbullying pada pelaku agar merasakan hal yang sama, dan ada pula yang merusak benda-benda sekitar ketika korban bullying tidak dapat melawan dan diam untuk memendamnya sendiri, bahkan tak sedikit yang melakukan tindakan putus asa seperti bunuh diri. Korban perundungan sering merasa tidak nyaman, akibatnya bisa terbawa sampai mereka dewasa. Bullying yang sering dirasakan korban bisa mengurangi bahkan menghilangkan rasa percaya dirinya dengan adanya tekanan mental, sehingga tak sedikit pula yang berani melakukan bunuh diri. Bukan hanya kesehatan mental yang terganggu pada korban perundungan, dampak kesehatan raga juga dirasakan seperti timbul sakit kepala, otot tegang, perut terasa sakit, jantungan yang bisa menyebabkan penyakit kronis.<br><br></div><div>Hal demikian yang dapat dilakukan dalam menangani tindakan kekerasan berupa bullying, dengan melakukan beberapa cara atau tindakan untuk mengatasi terjadinya bullying, yaitu :<br><br></div><div><strong>Mengatasi Bullying Melalui Konseling Behavior<br></strong><br></div><div>Selama ini, beberapa upaya telah dilakukan sekolah untuk pelaku tindakan bullying, dengan memberikan hukuman sanksi dan dipanggilnya orang tua pelaku ke sekolah untuk bekerja sama dalam memberi penanganan. Namun hasil yang didapat belum cukup efektif, sebab perubahan sikap dan perilaku pelaku bullying hanya sementara. Solusi alternatif dilakukan sekolah dalam menangani bullying dengan melakukan konseling behavioral. Konseling behavioral adalah suatu proses membantu orang agar belajar menangani masalah interpersonal, emosional, serta kepentingan tertentu. Konselor memiliki peran dalam membantu orang belajar atau mengubah perilaku. Selain itu, konselor memiliki peran untuk menciptakan proses belajar konvisi sehingga klien dalam mengubah perilakunya serta memecahkan masalahnya.<br><br></div><div><strong>Pembentukan Tim Anti-Bullying<br></strong><br></div><div>Strategi ini disampaikan langsung oleh kepala sekolah serta di ketuai oleh guru bimbingan konseling. Guru bimbingan konseling dan kepala sekolah masing-masing mengambil 4 orang dalam tiap kelas tanpa diketahui oleh siswa lainnya, dengan begitu setiap terjadi tindakan bullying, tugas tim anti-bullying melaporkan kepada guru BK tanpa diketahui siswa lainnya, dengan tujuan pelaku tidak dendam dengan tim antibullying yang sudah melaporkan tindakannya tersebut. Selanjutnya, proses itu dilakukan oleh guru bimbingan konseling dalam menindak lanjuti proses itu. Tim anti-bullying dibentuk dengan harapan dan tujuan untuk mencegah siswa yang ingin melakukan bullying tanpa diketahui oleh siapapun.<br><br></div><div><strong>Memantau Media Sosial Siswa<br></strong><br></div><div>Salah satu strategi Ismaeliyah School dalam mencegah tindakan bullying adalah dengan memantau media sosial para siswa, dengan membuat akun khusus sekolah serta melakukan pertemanan dengan seluruh siswa yang memiliki akun Facebook, Instagram, Twitter, dan Media sosial lainnya. Dengan begitu kegiatan siswa di jaringan internet bisa di pantau agar tidak terjadinya tindakan cyberbullying.<br><br></div><div><strong>Menanamkan Ajaran Aqidah Akhlak Untuk Siswa<br></strong><br></div><div>Perkembangan karakter anak dan penanaman akhlak yang baik sangat dipengaruhi oleh pendidikan agama. Dalam kerangka ini, guru Aqidah Akhlak mempunyai peranan penting dalam mencegah dan mengatasi kasus-kasus bullying. Untuk mengatasi perundungan secara efektif, guru Aqidah Akhlak menggunakan berbagai strategi, antara lain meningkatkan pemahaman siswa tentang prinsip-prinsip moral dan memberikan teladan keteladanan melalui ajaran dan kehidupan Nabi dan Nabi lainnya. Selain itu, guru menetapkan komitmen yang tegas, menerapkan aturan yang ketat, dan menerapkan sanksi yang jelas bagi mereka yang terlibat dalam insiden intimidasi. Selanjutnya pengenalan kegiatan ekstrakurikuler seperti kegiatan tahfiz Al-Qur\'an bertujuan untuk mengoptimalkan waktu siswa dan membina hubungan lebih dekat dengan Al-Qur\'an. Pembentukan tim Nasyid khusus mahasiswi juga digalakkan. Selain itu, praktik menyapa orang lain ditegaskan sebagai kegiatan wajib, dengan tujuan untuk mengecilkan hierarki sosial berdasarkan kasta atau usia, karena salam dipandang sebagai tindakan kebaikan dan doa.</div>', 'artikel1.png', '2024-12-08', 1),
(3, 'PERAN AYAH DALAM PENGASUHAN ANAK', 'peran-ayah-dalam-pengasuhan-anak', '<div>Ayah bertanggung jawab secara primer terhadap kebutuhan finansial keluarga. Ibu bertanggung jawab terhadap pengasuhan dasar. Bermain dengan anak, dukungan emosional, <em>monitoring</em>, dan hal yang berkaitan dengan disiplin dan aturan cenderung dibagi bersama oleh ayah dan ibu. Lamb,dkk membagi keterlibatan ayah dalam 3 komponen yaitu ;<br><br>- <em>Paternal engagement</em>: pengasuhan yang melibatkan interaksi langsung antara ayah dan &nbsp; anaknya, misalnya lewat bermain, mengajari sesuatu, atau aktivitas santai lainnya.<br><br>- Aksesibiltas atau ketersediaan berinteraksi dengan anak pada saat dibutuhkan saja. Hal ini lebih bersifat temporal.<br>Tanggung jawab dan peran dalam hal menyusun rencana pengasuhan bagi anak. Pada &nbsp; komponen ini ayah tidak terlibat dalam pengasuhan (interaksi) dengan anaknya.<br><br></div><div>- Dari hal diatas dapat disimpulkan keterlibatan ayah dalam pengasuhan akan membawa manfaat besar bagi perkembangan anak, hanya apabila keterlibatan tersebut cocok, hangat, bersifat positif, membangun dan memfasilitasi anak untuk berkembang.<br><br></div><div><strong>Manfaat Keterlibatan Pengasuhan Ayah bagi Anak<br>- </strong>Perkembangan kognitif.</div><div>Bayi yang telah menerima perlakuan serta pengasuhan dari figur ayah akan menunjukkan peningkatan kemampuan kognitif pada usia 6 bulan. Pada saat menginjak usia 1 tahun, mereka akan menunjukkan peningkatan fungsi kognitif, baik dalam hal pemecahan masalah, pada usia 3 tahun memiliki tingkat intelegensi lebih tinggi dari seusianya. Ketika diperbandingkan dengan ibu, pola pembicaraan ayah dengan balita lebih diarahkan ke hal yang sifatnya pertanyaan misalnya apa, kemana; hal ini mengakibatkan anak akan lebih komunikatif dalam berinteraksi, menggunakan kosakata dan kalimat yang lebih bervariasi. Mereka yang mendapat pengasuhan dari ayah, akan menunjukkan prestasi akademik. Dukungan akademik yang diberikan oleh ayah, berkorelasi positif dengan motivasi akademik remaja. Mereka akan termotivasi untuk melakukan performansi akademik terbaik, dan mengutamakan nilai akademik dalam hidup. Secara jangka panjang, anak yang dibesarkan dengan keterlibatan ayah dalam pengasuhan akan memiliki prestasi akademik serta ekonomi yang baik, kesuksesan dalam karir, pencapaian pendidikan terbaik, dan kesejahteraan psikologis.<br><br>- Perkembangan&nbsp; &nbsp; emosi&nbsp; &nbsp; dan&nbsp; &nbsp; kesejahteraan psikologis</div><div>Keterlibatan ayah dalam kehidupan anak berkorelasi positif dengan kepuasan hidup anak, kebahagiaan dan rendahnya pengalaman depresi. Penerimaan ayah secara signifikan mempengaruhi&nbsp; &nbsp; &nbsp;penyesuaian&nbsp; &nbsp; &nbsp;diri&nbsp; &nbsp; &nbsp;remaja, salah &nbsp; satu &nbsp; faktor &nbsp; yang memainkan peranan penting bagi pembentukan konsep diri dan harga diri. Secara keseluruhan kehangatan yang ditunjukkan oleh ayah akan berpengaruh besar bagi kesehatan dan kesejahteraan psikologis anak, dan meminimalkan masalah perilaku yang terjadi pada anak.<br><br>- Perkembangan sosial</div><div>Keterlibatan ayah dalam pengasuhan secara positif berkorelasi dengan kompetensi, inisiatif, kematangan sosial dan relatedness. Salah satu contoh dikemukakan oleh Kato, bahwa partisipasi langsung pria dalam pengasuhan anak membawa pengaruh bagi perkembangan perilaku prososial bagi anak usia tiga tahun. Remaja yang memiliki kelekatan dengan ayah memiliki interaksi yang minimal konflik dengan teman sebayanya. Kehangatan, bimbingan serta pengasuhan yang diberikan oleh ayah memprediksi kematangan moral, yang diasosiasikan dengan perilaku prososial dan perilaku positif yang dilakukan baik oleh anak perempuan maupun anak laki-laki.<br><br>- Kesehatan fisik</div><div>Ayah secara tidak langsung berperan terhadapkesehatan fisik dan kesejahteraan psikologis anak, ketika memberikan dukungan optimal terhadap pasangannya (istri). Suami yang memberikan dukungan emosional kepada istri yang hamil, mengakibatkan terjadinya kondisi kehamilan prima dan proses persalinan normal serta anak yang sehat. Horndan Sylvester menyatakan anak-anak yang tidak tinggal bersama ayah, sebagian besar mengalami masalah kesehatan.<br><br></div><div><strong>Manfaat Keterlibatan dalam Pengasuhan bagi Ayah<br></strong><br></div><div>Keterlibatan ayah dalam pengasuhan&nbsp; juga&nbsp; memberikan&nbsp; manfaat&nbsp; bagi&nbsp; ayah&nbsp; itu&nbsp; sendiri diantaranya yaitu, seorang&nbsp; ayah&nbsp; yang&nbsp; terlibat&nbsp; dalam&nbsp; pengasuhan&nbsp; akan&nbsp; merasa&nbsp; lebih&nbsp; percaya diri menjadi orang tua dan lebih efektif berperan sebagai orang tua, menemukan peran sebagai orang tua yang lebih memuaskan, merasa lebih penting secara intrinsik bagi anak dan merasa terdorong untuk lebih terlibat lagi, memiliki kematangan psikososial lebih besar, menjadi lebih puas dengan kehidupannya, merasakan tekanan psikologis yang lebih rendah, lebih bisa&nbsp; memahami&nbsp; diri&nbsp; sendiri&nbsp; dan&nbsp; orang&nbsp; lain,&nbsp; empatik,&nbsp; serta memiliki stabilitas perkawinan.<br><br></div><div>&nbsp;Sumber : F. Hidayati, D. V. S. Kaloeti, and K. Karyono,&nbsp;</div>', 'artikel2.png', '2024-12-08', 1),
(5, 'BERSAMA KITA HENTIKAN TINDAKAN STOP KDRT', 'bersama-kita-hentikan-tindakan-stop-kdrt', '<div>Menurut UU PKDRT No 23 tahun 2004 Kekerasan Dalam Rumah Tangga adalah setiap perbuatan terhadap seseorang terutama perempuan, yang berakibat timbulnya kesengsaraan atau penderitaan secara fisik, seksual, psikologis, dan/atau penelantaran rumah tangga termasuk ancaman untuk melakukan perbuatan, pemaksaan atau perampasan kemerdekaan secara melawan hukum dalam lingkup rumah tangga<br><br></div><div><strong>Siapa saja yang dilindungi dalam UU PKDRT?</strong><br>- Suami, Istri, Anak<br>- Hubungan keluarga (sedarah, perkawinan, persusuan) dan siapa saja yang menetap dalam rumah tangga<br>- ART/orang yang membantu dalam rumah tangga dan tinggal menetap</div><div><br><strong>Dampak KDRT pada Anak</strong><br>- Anak cedera terkena kekerasan fisik di dalam rumah<br>- Anak mencontoh kekerasan sebagai jalan keluar terbaik/pemakluman terhadap kekerasan<br>- Ibu/Ayah yang mendapatkan kekerasan melampiaskan frustasi/kemarahannya kembali kepada anak<br>- Perkembangan psikologis anak terganggu (trauma, penakut, tidak percaya diri, dll)<br>- Anak bisa terjerumus ke lingkungan yang salah karena merasa tidak nyaman di dalam rumah</div><div><br><strong>Keluarga adalah pondasi utama tumbuh kembang anak</strong><br>Anak yang tumbuh dalam lingkungan keluarga yang tidak harmonis, penuh dengan kekerasan akan menjadi pribadi yang cenderung agresif dan bersikap kasar kepada orang lain<br>KDRT menyumbang angka korban kekerasan terhadap anak tertinggi kedua di Kota Semarang<br><br>Untuk itu mari kita jadikan rumah sebagai tempat ternyaman bagi tumbuh kembang anak<br><br></div>', 'artikel3.png', '2024-12-08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'WUJUDKAN KELUARGA BERKUALITAS MELALUI KETAHANAN KELUARGA', 'wujudkan-keluarga-berkualitas-melalui-ketahanan-keluarga', '<div>Dinas Pemberdayaan Perempuan dan perlindungan Anak (DP3A) Kota Semarang mengadakan program \"Wujudkan Keluarga Berkualitas Melalui Ketahanan Keluarga\" yang dilaksanakan pada bulan Juni 2024. Program ini merupakan sebuah upaya untuk mendukung Program Kelurahan Ramah Perempuan dan Peduli Anak.<br><br></div><div>Kegiatan ini bertujuan untuk mewujudkan keluarga berkualitas, berketahanan, dan sejahtera yang hidup dalam lingkungan sehat, seperti yang telah ada pada Undang-Undang Nomor 52 Tahun 2009 tentang perkembangan kependudukan dan pembangunan keluarga. Sebagaimana telah kita ketahui bersama, bahwa keluarga merupakan unit dasar masyarakat yang berperan penting dalam menghasilkan Sumber Daya Manusia yang berkualitas. Namun, saat ini ada banyak sekali permasalahan sosial yang berawal dari kegagalan atau ketidakberfungsian keluarga. Pesatnya perkembangan teknologi turut menjadi alasan renggangnya pola relasi dalam keluarga. Selain itu, menurunnya fungsi pengawasan, perlindungan, dan penanaman nilai serta karakter dalam keluarga memperburuk situasi.<br><br></div><div>Kegiatan ini akan dilaksanakan di empat kelurahan, yaitu kelurahan Kemijen, Bugangan, Rejosari, dan Sarirejo. Narasumber yang dihadirkan termasuk psikolog dari Pusat Pembelajaran Keluarga (PUSPAGA) Kota Semarang dan Kepala Puskesmas setempat.<br><br></div>', 'berita4.png', '2024-12-04', 1),
(9, 'Jauhi Narkoba Selamatkan Generasi Penerus Bangsa', 'jauhi-narkoba-selamatkan-generasi-penerus-bangsa', '<div>United Nations Office on Drugs and Crime (UNODC) pada 7 Desember 1987 telah mentapkan Hari Anti Narkoba Internasional yang akan diperingati pada setiap tanggal 26 Juni. Peringatan ini bertujuan untuk meningkatkan kesadaran masyarakat secara luas terhadap penyalahgunaan dan pengedaran gelap narkoba.<br><br></div><div>Narkoba adalah obat-obatan yang meliputi berbagai jenis zat yang dapat memengaruhi fungsi tubuh dan pikiran. Jenis yang sering disalahgunakan termasuk ganja, kokain, heroin, dan berbagai jenis obat-obatan terlarang lainnya. Penyalahgunaan narkoba tidak hanya berdampak pada kesehatan individu, tetapi juga memiliki konsekuensi sosial dan ekonomi yang luas.<br><br></div><div>Pemakaian narkoba di luar indikasi medik, tanpa petunjuk atau resep dokter, dan pemakaiannya bersifat patologik (menimbulkan kelainan) dan menimbulkan hambatan dalam aktivitas di rumah, sekolah atau kampus, tempat kerja dan lingkungan sosial. Ketergantungan narkoba diakibatkan oleh penyalahgunaan zat yang disertai dengan adanya toleransi zat (dosis semakin tinggi) dan gejala putus asa, yang memiliki sifat-sifat keinginan yang tak tertahankan, kecenderungan untuk menambah takaran (dosis), ketergantungan fisik dan psikologis. umumnya orang yang pernah menggunakan narkoba cenderung akan merusak diri sendiri.<br><br></div>', 'berita3.png', '2024-12-04', 1),
(10, 'Pudakpayung Banyumanik masuk 4 besar dalam Lomba Kelurahan Tingkat Provinsi Jawa Tengah Tahun 2024', 'pudakpayung-banyumanik-masuk-4-besar-dalam-lomba-kelurahan-tingkat-provinsi-jawa-tengah-tahun-2024', '<div>DP3A pada Tanggal 20 Juni 2024 selesai dalam acara Pemaparan dan Klarifikasi Lapangan Lomba Desa/Kelurahan Tingkat Provinsi Jawa Tengah Tahun 2024 di Kelurahan Pudakpayung Kecamatan Banyumanik.<br><br></div><div>Masuk dalam 4 besar Lomba Desa/Kelurahan bersama dengan Surakarta, Pekalongan, dan Kudus, Pemerintah Kota Semarang berharap bisa menjadi juara I dalam Lomba Desa/Kelurahan<br><br></div><div>Lomba Desa dan Kelurahan yang diselenggarakan tahun ini mengusung tema “Stabilitas Politik, Sosial, dan Ekonomi Mewujudkan Desa/Kelurahan Berdaya Saing Menuju Indonesia Emas”. Tujuan lomba ini adalah untuk mengevaluasi dan menilai kinerja pemerintah desa dan kelurahan dalam melaksanakan tugas pokok dan fungsi pemerintahan, kewilayahan, dan kemasyarakatan. Selain itu juga, bertujuan untuk mengetahui capaian desa dan kelurahan dalam meningkatkan kualitas hidup masyarakat serta memberi apresiasi kepada desa dan kelurahan yang berprestasi.<br><br></div>', 'berita2.jpg', '2024-12-04', 1),
(13, 'Deklarasi Satgas PPKS UNDIP : Bentuk Komitmen Menciptakan Ruang Aman dari Kekerasan Seksual', 'deklarasi-satgas-ppks-undip-bentuk-komitmen-menciptakan-ruang-aman-dari-kekerasan-seksual', '<div>Kota Semarang – Seiring maraknya kasus kekerasan seksual yang terjadi di lingkungan universitas, telah mendorong kesadaran dari seluruh civitas akademika untuk mengambil tindakan tegas dalam bentuk upaya preventif dan represif dalam menindaklanjuti setiap kasus kekerasan seksual. Tak terkecuali Universitas Diponegoro yang mengimplementasikan bentuk kepekaan tersebut dalam wujud sosialisasi sekaligus deklarasi ‘Kampus Aman dari Kekerasan Seksual’ pada Selasa, 25 Juni 2024 di <em>Engineering Hall </em>Lantai 5 Gedung Dekanat Fakultas Teknik.</div>', 'berita11.png', '2024-12-04', 1),
(14, 'Lomba Kampung Hebat Kota Semarang Tahun 2024 Roadshow Putaran Pertama', 'lomba-kampung-hebat-kota-semarang-tahun-2024-roadshow-putaran-pertama', '<div>Jawa Pos Radar Semarang bekerja sama dengan Pemerintah Kota Semarang dengan kembali menggelar Lomba Kampung Hebat Kota Semarang tahun 2024. Pelaksanaan program ini merupakan kali ke-6 diselenggarakan sejak pertama kali diadakan, yaitu pada tahun 2016.<br><br></div><div>Lomba Kampung Hebat Kota Semarang 2024 mengusung tema \"Bergerak Bersama Menuju Semarang Semakin Hebat\". Lomba ini bertujuan untuk meningkatkan partisipasi masyarakat Kota Semarang dalam merawat dan memajukan kampung mereka melalui program-program kreatif dan inovatif.&nbsp; Terdapat 4 kategori lomba, yaitu&nbsp;<br><br></div><ol><li>Kampung Pro Lingkungan,&nbsp;</li><li>Kampung Kreatif dan Inovatif,&nbsp;</li><li>Kampung Sehat, dan&nbsp;</li><li>Kampung Tanam Bawang Merah.</li></ol>', 'berita5.jpg', '2024-12-04', 1),
(15, 'Kunjungan KemenPPA ke PUSPAGA Kota Semarang', 'kunjungan-kemenppa-ke-puspaga-kota-semarang', '<div>Kemen PPA bermaksud menjaring masukan dari Pemerintah Daerah Provinsi Jawa Tengah, dimana Provinsi Jawa Tengah telah memperoleh predikat Mentor dalam evaluasi PUG Tahun 2022 dan telah berkomitmen kuat dalam pembangunan kualitas keluarga sejak diterbitkannya Peraturan Daerah (PERDA) Provinsi Jawa Tengah Nomor 2 Tahun 2018 tentang Penyelenggaraan Pembangunan Ketahanan Keluarga. Selain itu dalam rangka memperoleh gambaran yang komprehensif terkait penyelenggaraan kualitas keluarga melalui layanan yang diberikan langsung kepada masyarakat, maka akan dilakukan juga kunjungan lapangan ke Dinas PPPA Kota Semarang, dan Lembaga Layanan Peningkatan Kualitas Keluarga (LPLPKK) di Kota Semarang. Tujuan kunjungan ke LPLPKK dalam rangka Penyusunan Rekomendasi Kebijakan ini antara<br>lain:<br>- Pengumpulan data dan informasi lapangan terkait pelaksanaan program, jumlah dan profil penerima manfaat, serta hasil yang telah dicapai. Informasi ini mencakup aspekaspek seperti jenis layanan yang diberikan, metode yang digunakan, dan dampak yang dirasakan oleh masyarakat;<br>- Identifikasi Tantangan, seperti kendala sumber daya, hambatan budaya, atau masalah koordinasi antar lembaga;<br>- Evaluasi Penyelenggaraan layanan dengan menilai efektivitas program LPLPKK dalam meningkatkan kualitas keluarga, kesetaraan gender, dan hak anak melalui indikator kualias keluarga yang telah ditetapkan;<br>- Mengidentifikasi Praktik Terbaik dan Inovasi, seperti pendekatan inovatif dalam pemberdayaan keluarga, program pelatihan, dan layanan pendukung lainnya; dan<br>- Penguatan Kelembagaan dengan memahami cara kerja dan struktur kelembagaan LPLPKK untuk meningkatkan efektivitas layanan, termasuk bagaimana LPLPKK mengorganisir dan mengelola layanan, pelatihan yang diberikan pada SDM Layanan, dan mekanisme kerja.<br>Sasaran kunjungan ke LPLPKK dalam rangka penyusunan Rekomendasi Kebijakan ini adalah lembaga yang memberikan layanan terkait 29 Indikator Kualitas Keluarga seperti Puspaga, Posyandu, Tri Bina (BKB, BKL, BKR), LK3, dan lainnya.</div>', 'berita6.jpg', '2024-12-04', 1),
(16, 'Kegiatan Sosialisasi Perlindungan Anak Korban Pornografi di Kota Semarang', 'kegiatan-sosialisasi-perlindungan-anak-korban-pornografi-di-kota-semarang', '<div>Seiring dengan pesatnya kemajuan teknologi dewasa ini, pesat pula berbagai informasi yang dapat diakses oleh anak baik secara sengaja maupun tanpa sengaja. Membanjirnya informasi dimaksud seringkali tidak disertai dengan proses penyaringan yang memadai dari para orang dewasa yang hidup di sekitar anak. Tanpa dapat dipungkiri, berbagai dampak negatif dari hal-hal tersebut, termasuk di antaranya paparan pornografi, pada gilirannya telah banyak menimpa anak, termasuk di Kota Semarang. Dari data kekerasan yang dilaporkan di aplikasi pelaporan kekerasan di Kota Semarang pada tahun 2023, terdapat 77 kasus kekerasan seksual (dengan korban berbagai usia).<br><br></div><div>Perlindungan anak secara khusus harus diberikan pada korban kekerasan seksual maupun pornografi. Salah satu bentuk dukungan yang dapat diberikan pada anak dalam situasi tersebut adalah peran koordinasi yang mumpuni agar berbagai potensi dan sumber daya yang dimiliki dapat dimanfaatkan semaksimal mungkin dalam perlindungan anak korban pronografi. Oleh karena itu, Dinas Pemberdayaan Perempuan dan Perlindungan Anak maupun perangkat daerah lain yang terkait harus senantiasa memaksimalkan peran koordinasi dimaksud agar meminimalisasi terpaparnya anak dengan pornografi dalam berbagai asal dan bentuknya.<br><br>Berpijak dari hal-hal tersebut di atas, Dinas Pemberdayaan Perempuan dan Perlindungan Anak (DP3A) Kota Semarang selaku pengampu perlindungan anak menyelenggarakan kegiatan Sosialisasi Perlindungan Anak Korban Pornografi di Kota Semarang. Hal ini merupakan realisasi dari program Perlindungan Perempuan dan Anak pada sub Kegiatan Koordinasi dan Sinkronisasi Pelaksanaan Kebijakan, Program dan Kegiatan Pencegahan Kekerasan Terhadap Perempuan dan Anak<br><br></div><div>Kegiatan ini bertujuan memberikan tambahan pengetahuan dan pemahaman mengenai kebijakan perlindungan anak di Kota Semarang, dampak pornografi pada anak, upaya-upaya meminimalisasi paparan pornografi pada anak, dan deteksi dini serta penanganan anak yang terpapar pornografi.&nbsp;<br><br></div><div>Dan dari kegiatan ini diharapkan peserta yang diundang dari guru BK SMP Negeri dan Swasta mendapatkan peningkatan pengetahuan dan pemahaman mengenai dampak pornografi pada anak, upaya-upaya meminimalisasi paparan pornografi pada anak, deteksi dini dan upaya-upaya penanganan anak yang terpapar pornografi, kebijakan perlindungan anak di Kota Semarang dan terwujudnya perlindungan khusus anak utamanya anak korban pronografi di Kota Semarang.<br><br></div>', 'berita7.jpeg', '2024-12-04', 1),
(17, 'Survey Kepuasan Masyarakat Pada DP3A Kota Semarang Tahun 2024', 'survey-kepuasan-masyarakat-pada-dp3a-kota-semarang-tahun-2024', '<div>Kualitas pelayanan publik merupakan sebuah indikator utama dalam penyelenggaraan pemerintahan yang baik. Karena itu, Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN dan RB) mendorong peningkatan kualitas pelayanan publik secara berkelanjutan, salah satunya adalah melalui penetapan kebijakan untuk melaksanakan Survey Kepuasan Masyarakat bagi instansi penyelenggara pelayanan publik.<br><br></div><div>Sesuai Peraturan Wali Kota Semarang Nomor 33 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, Serta Tata Kerja Dinas Pemberdayaan Perempuan dan Perlindungan Anak Kota Semarang merupakan dinas yang melaksanakan urusan pemerintahan bidang pemberdayaan perempuan&nbsp; dan perlindungan anak serta bidang pemberdayaan masyarakat dan desa yang menjadi kewenangan daerah dan tugas pembantuan yang ditugaskan kepada daerah. DP3A Kota Semarang dalam pelayanannya terhadap masyarakat memiliki beberapa layanan antara lain pelayanan konsultasi dan penanganan korban kekerasan (pendampingan oleh PPTK di tiap kecamatan, UPTD PPA serta melalui kanal pengaduan dan konsultasi secara online), pelayanan data, magang dan penelitian serta pelayanan pemberdayaan perempuan dengan pelatihan-pelatihan keterampilan.<br><br></div><div>Terkait hal tersebut, dalam rangka meningkatkan kualitas pelayanan yang diberikan kepada masyarakat, maka kemudian dilakukan survei sederhana terhadap tingkat kepuasan masyarakat yang menerima layanan pada Dinas Pemberdayaan Perempuan dan Perlindungan Anak Kota Semarang. Melalui survei sederhana ini diharapkan akan mendorong partisipasi masyarakat pengguna layanan dalam menilai kinerja layanan Dinas Pemberdayaan Perempuan dan Perlindungan Anak Kota Semarang, serta dapat mendorong aparatur DP3A Kota Semarang untuk terus meningkatkan kualitas pelayanan pada masyarakat Kota Semarang.<br><br></div>', 'berita8.png', '2024-12-04', 1),
(18, 'Lomba Kelurahan Tahun 2024', 'lomba-kelurahan-tahun-2024', '<div>Lomba Evaluasi Perkembangan Kelurahan Tingkat Kota Semarang Tahun 2024<br><br></div><div>Serangkaian kegiatan Lomba Kelurahan Tahun 2024 yang telah melalui tahapan/proses yang panjang dengan peserta 16 Kelurahan dari masing-masing Kecamatan, telah di evaluasi dan dinilai oleh tim Juri sehingga masuklah menjadi 6 besar yang terdiri dari Kelurahan Pudak Payung (Kecamatan Banyumanik), Kelurahan Karanganyar Gunung (Kecamatan Candisari), Kelurahan Bulu Lor (Kecamatan Semarang Utara), Kelurahan Pekunden (Kecamatan Semarang Tengah), Kelurahan Sarirejo (Kecamatan Semarang Timur), dan Kelurahan Tlogosari Wetan (Kecamatan Pedurungan)<br><br></div><div>Dari hasil kunjungan lapangan pada hari Rabu, Kamis dan Senin 17, 18, dan 22 April 2024 akan diambil 3 besar untuk menjadi juara I, II, dan III<br><br></div>', 'berita9.png', '2024-12-04', 1),
(20, 'Penguatan Pemahaman untuk Mewujudkan Kota Semarang Layak Anak', 'penguatan-pemahaman-untuk-mewujudkan-kota-semarang-layak-anak', '<div>Semarang, Sabtu, 11 Februari 2023 - Pemerintah Kota Semarang menyambut antusiasme dari para peserta Pelatihan Konvensi Hak Anak (KHA) yang diadakan untuk Forum Anak Kota Semarang dan Kecamatan. Kegiatan berlangsung di lokasi yang berbeda dengan acara sebelumnya, tepatnya di salah satu ruangan yang ramai oleh para peserta yang bersemangat untuk memahami Konvensi Hak Anak. Dalam sambutannya, Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak (DP3A) Kota Semarang, Drs. Ulfi Imran Basuki, M.Si., menyampaikan pentingnya pelatihan ini dalam pemenuhan hak anak. Sebagai negara yang telah meratifikasi Konvensi Hak Anak, Indonesia dan Kota Semarang memiliki tanggung jawab untuk menjalankannya sesuai dengan hukum internasional.<br><br></div>', 'artikel3.png', '2024-12-08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id_book` int(11) NOT NULL,
  `judul_book` varchar(255) DEFAULT NULL,
  `file_book` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_book`
--

INSERT INTO `tbl_book` (`id_book`, `judul_book`, `file_book`) VALUES
(3, 'Pembangunan Manusia Berbasis Gender', 'Pembangunan_Manusia_Berbasis_Gender_2016.pdf'),
(5, 'Buku Saku Mendidik Anak di Era Digital', 'Buku-Saku-Mendidik-Anak-D-Era-Digital.pdf'),
(6, 'Mengakhiri Kekerasan Terhadap Perempuan dan Anak', 'Mengakhiri_Kekerasan_Terhadap_Perempuan_dan_Anak1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dok_rencana`
--

CREATE TABLE `tbl_dok_rencana` (
  `id_dok` int(11) NOT NULL,
  `judul_dok` varchar(255) DEFAULT NULL,
  `file_dok` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dok_rencana`
--

INSERT INTO `tbl_dok_rencana` (`id_dok`, `judul_dok`, `file_dok`) VALUES
(3, '2020 - LKJIP', 'LKJIP_2020.pdf'),
(4, '2020 - LKPJ', 'LKPJ_2020.pdf'),
(5, '2020 - Renja DP3A', 'Renja_2020.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ebook`
--

CREATE TABLE `tbl_ebook` (
  `id_ebook` int(2) NOT NULL,
  `judul_ebook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ebook`
--

INSERT INTO `tbl_ebook` (`id_ebook`, `judul_ebook`) VALUES
(1, 'Pembangunan Manusia Berbasis Gender'),
(2, 'Mengakhiri Kekerasan Terhadap Perempuan dan Anak'),
(3, 'Buku Saku Mendidik Anak di Era Digital'),
(4, 'Buku Perlindungan Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(8, 4, 'Kegiatan 1', '5c1b400a768db435979039.jpg'),
(9, 4, 'Kegiatan 2', '5c1b403d7a9c7475232978.jpg'),
(10, 4, 'Kegiatan 3', '5c1b4013acf62083040230.jpg'),
(11, 4, 'Kegiatan 4', '5c1b4033f01c5311957494.jpg'),
(12, 4, 'Kegiatan 5', '5c1b40311dd59282163671.jpg'),
(13, 4, 'Kegiatan 6', '5c1b40456d196751989228.jpg'),
(16, 3, 'Kegiatan 1', 'bim1.jpg'),
(17, 3, 'Kegiatan 2', 'bim2.jpg'),
(18, 6, 'Kegiatan 1', 'artikel2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_galeri`, `sampul`) VALUES
(1, 'Kampanye dan Diskusi Terbuka \"Kilau Generasi Bebas HIV dan AIDS\"', 'kampanye.jpg'),
(2, 'Bimtek Peningkatan Kapasitas PPT Kecamatan', 'bimtek1.jpg'),
(3, 'Bimtek Relawan Duta Revolusi Mental', 'bimtek2.jpg'),
(4, 'Pengumuman Penghargaan APE Kota Semarang 2018', 'ape.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_glosary`
--

CREATE TABLE `tbl_glosary` (
  `id_glosary` int(11) NOT NULL,
  `judul_glosary` varchar(25) DEFAULT NULL,
  `materi_glosary` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_glosary`
--

INSERT INTO `tbl_glosary` (`id_glosary`, `judul_glosary`, `materi_glosary`) VALUES
(1, 'Sex', 'Sex adalah perbedaan-perbedaan biologis antara laki-laki dan perempuan . Contoh: perempuan dapat melahirkan, laki-laki memproduksi sperma.'),
(2, 'Gender ', 'Gender adalah hubungan sosial antara laki-laki dan perempuan. Gender merujuk pada hubungan antara laki-laki dan perempuan, anak laki-laki dan anak perempuan, dan bagaimana hubungan sosial ini dikonstruksikan. Peran gender bersifat dinamis dan berubah antar waktu.'),
(3, 'Kesetaraan Gender', 'Kesetaraan Gender adalah hasil dari ketiadaan diskriminasi berdasarkan jenis kelamin atas dasar kesempatan, alokasi sumber daya atau manfaat dan akses terhadap pelayanan.'),
(5, 'Pengarusutamaan Gender', 'Pengarusutamaan Gender adalah proses untuk menjamin perempuan dan laki-laki mempunyai akses dan kontrol terhadap sumber daya, memperoleh manfaat pembangunan dan pengambilan keputusan yang sama di semua tahapan proses pembangunan dan seluruh proyek, program dan kebijakan pemerintah.'),
(6, 'Kesadaran Gender', 'Kesadaran Gender adalah suatu pengertian bahwa ada faktor-faktor sosial yang menentukan antara laki-laki dan perempuan atas dasar tingkah laku, yang mempengaruhi kemampuan mereka untuk mengakses dan mengontrol sumber daya. Kesadaran ini membutuhkan penerapan melalui analisa gender menjadi proyek, program dan kegiatan.'),
(7, 'Analisa Gender', 'Analisa Gender adalah metodologi untuk pengumpulan dan pengolahan informasi tentang gender. Analisa gender membutuhkan data terpilah berdasarkan jenis kelamin dan suatu pengertian dari konstruksi sosial dari peran gender, bagaimana pembagian kerja dan dinilai. Analisa gender adalah proses dari analisa informasi agar supaya menjamin manfaat dan sumberdaya pembangunan secara efektif dan adil ditujukan baik bagi laki-laki maupun perempuan. Analisa Gender digunakan juga untuk mengantisipasi dan menolak akibat negatif dari pembangunan yang mungkin terjadi pada perempuan atau karena relasi gender. Analisa gender dilakukan menggunakan bermacam alat dan kerangka kerja.'),
(8, 'Perencanaan Gender', 'Perencanaan Gender (atau Perencanaan yang sensititif Gender) adalah proses dari perencanaan program-program dan proyek-proyek pembangunan yang sensitif gender dan dimana mempertimbangkan impact dari peran gender dan kebutuhan gender dari laki-laki dan perempuan di dalam sasaran masyarakat atau sektor.'),
(9, 'Peran Gender', 'Peran Gender adalah perilaku yang dipelajari di dalam suatu masyarakat/komunitas yang dikondisikan bahwa kegiatan, tugas-tugas atau tanggung jawab patut diterima baik oleh laki-laki maupun perempuan. Peran gender dapat berubah, dan dipengaruhi oleh umur, kelas, ras, etnik, agama dan lingkungan geografi, ekonomi dan politik. Baik perempuan maupun laki-laki memiliki peran ganda di dalam masyarakat. Perempuan kerap mempunyai peran dalam mengatur reproduksi, produksi dan kemasyarakatan. Laki-laki lebih terfokus pada produksi dan politik kemasyarakatan.'),
(10, 'Peran Produksi', 'Peran produksi adalah kegiatan yang dilakukan baik oleh laki-laki dan perempuan agar supaya menghasilkan barang dan layanan untuk diperdagangkan, dipertukarkan atau memenuhi nafkah bagi keluarga. Sebagai contoh di pertanian, kegiatan produksi termasuk penanaman, penyiangan, peternakan.'),
(11, 'Peran Reproduksi', 'Peran Reproduksi adalah aktivitas untuk menjamin reproduksi angkatan kerja. Hal ini termasuk pembatasan anak, penjarangan anak, perawatan terhadap anggota keluarga seperti orang tua, anak-anak dan pekerja. Tugas-tugas tersebut umumnya tidak mendapatkan upah dan kebanyakan dilakukan oleh perempuan.'),
(12, 'Peran Masyarakat', 'Peran masyarakat adalah kegiatan-kegiatan yang dilakukan di tingkat masyarakat untuk menjamin ketersediaan dan pengelolaan sumberdaya yang terbatas seperti air, perawatan kesehatan dan pendidikan. Pekerjaan ini biasanya tidak dibayar dan kebanyakan dilakukan oleh perempuan.'),
(13, 'Peran Politik Perempuan', 'Peran politik perempuan adalah kegiatan-kegiatan di tingkat masyarakat, mengorganisir di tingkatan formal politik, sering kali dalam kerangka kerja politik nasional. Pekerjaan ini biasanya dilakukan oleh pria, dan biasanya dibayar secara langsung (uang) atau tidak langsung (meningkatnya kekuasaan dan status).'),
(14, 'Beban Ganda', 'Beban ganda merujuk kepada kenyataan bahwa perempuan cenderung bekerja lebih lama dan lebih sedikit harinya dibandingkan laki-laki sebagaimana biasanya mereka terlibat dalam tiga peran gender yang berbeda-reproduksi, produksi dan dan peran di masyarakat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) DEFAULT NULL,
  `email_kontak` varchar(100) DEFAULT NULL,
  `subjek_kontak` varchar(255) DEFAULT NULL,
  `pesan_kontak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `subjek_kontak`, `pesan_kontak`) VALUES
(1, 'Galuh', 'muhgaluh@gmail.com', 'Bug website', 'Jadi web ini'),
(2, 'Ilham', 'ilham@gmail.com', 'Error website', 'Jadi web ini memiliki error'),
(3, 'Alfi', 'alfi@gmail.com', 'Bug website', 'Bug di bagian a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sop`
--

CREATE TABLE `tbl_sop` (
  `id_sop` int(11) NOT NULL,
  `judul_sop` varchar(255) DEFAULT NULL,
  `file_sop` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sop`
--

INSERT INTO `tbl_sop` (`id_sop`, `judul_sop`, `file_sop`) VALUES
(12, 'SOP Penanganan Keberatan Permohonan Informasi', 'SOP_Penanganan_Keberatan.pdf'),
(13, 'SOP Permohonan Informasi', 'SOP_Permohonan_Informasi.pdf'),
(14, 'SOP Pelayanan Psikologi DP3A UPTD PPA', 'SOP_PELAYANAN_PSIKOLOGI_DP3A_UPTD_PPA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Galuh', 'admin1', 'admin123', 1),
(2, 'Ilham', 'user1', 'user123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indeks untuk tabel `pelaku`
--
ALTER TABLE `pelaku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelapor_id` (`pelapor_id`);

--
-- Indeks untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`pelapor_id`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indeks untuk tabel `tbl_dok_rencana`
--
ALTER TABLE `tbl_dok_rencana`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `tbl_ebook`
--
ALTER TABLE `tbl_ebook`
  ADD PRIMARY KEY (`id_ebook`);

--
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tbl_glosary`
--
ALTER TABLE `tbl_glosary`
  ADD PRIMARY KEY (`id_glosary`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `korban`
--
ALTER TABLE `korban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pelaku`
--
ALTER TABLE `pelaku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `pelapor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_dok_rencana`
--
ALTER TABLE `tbl_dok_rencana`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_ebook`
--
ALTER TABLE `tbl_ebook`
  MODIFY `id_ebook` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_glosary`
--
ALTER TABLE `tbl_glosary`
  MODIFY `id_glosary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
