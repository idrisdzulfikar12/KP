<title>Visi Misi</title>
    <style>
        /* Keyframes for fade-in effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px); /* Slightly move down for dynamic effect */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Add fade-in animation to the card */
        .fade-in {
            opacity: 0; /* Initial state */
            animation: fadeIn 1s ease-in-out forwards; /* Animation properties */
            animation-delay: 0.3s; /* Optional delay */
        }

        /* Additional styling for layout */
        .text-justify {
            text-align: justify;
        }

        /* Custom Card Styles */
        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px auto;
            padding: 0 20px;
            flex-wrap: wrap;
            transition: all 0.3s ease-in-out; /* Smooth transition for warp effect */
        }

        .card {
            background: linear-gradient(135deg,rgb(0, 0, 0) 0%,rgb(94, 94, 94) 100%); /* Lighter and brighter gradient */
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 535px;
            text-align: center;
            margin-bottom: 30px;
            padding: 10px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        /* Adding responsiveness and flex-wrap enhancements */
        @media (max-width: 768px) {
            .card {
                width: 90%;
            }
        }
        .container {
            text-align: center;
            position: relative;
            padding: 20px;
        }
        .logo {
            margin-top: 20px;
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle fade-in">Dasar Hukum</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="callaction">
        <div class="container">
                <!-- Logo Utama -->
                <img src="https://damkar.semarangkota.go.id/assets/images/logo-damkar-jumbotron.png" alt="Logo Damkar">
                
                <!-- Deskripsi Teks -->
                <h2 class="aligncenter">DINAS PEMADAM KEBAKARAN KOTA SEMARANG</h2>
                <h1>YUDHA BRAMA JAYA</h1>
        </div>	
    </section>
    <section>
        <div class="container py-5">
            <div class="card-container fade-in">
            <div class="card">
                <h3 style="color:rgb(4, 0, 255);"><u>Peraturan Daerah</u></h3>
                    <ul class="list-disc">
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/PERDA_No.2_Thn_1994_-_Penanggulangan_Kebakaran_Tingkat_II__5.pdf"><strong>PERDA No.2 Thn 1994</strong> - Penanggulangan Kebakaran Tingkat II </a>
                            <p>Tentang penanggulangan Kebakaran</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/PERDA_No.5_Thn_2009_-_Bangunan_Gedung_4.pdf"><strong>PERDA No.5 Thn 2009</strong> - Bangunan Gedung 4 </a>
                            <p>Tentang Bangunan Gedung</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/Perda_OPD_Nomor_14_Tahun_2016.smg.pdf"><strong>Peraturan Daerah nomor 14 tahun 2016</strong></a>
                            <p>Tentang Pembentukan dan Susunan Perangkat Daerah kota Semarang</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h3 style="color:rgb(4, 0, 255);"><u>Peraturan Menteri</u></h3>
                    <ul class="list-disc">
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/KEPMENTK_No.186_Thn_1999_-_Unit_Penanggulangan_Kebakaran.pdf"><strong>KEPMENTK No.186 Thn 1999</strong> - Unit Penanggulangan Kebakaran </a>
                            <p>Tentang Unit Penanggulangan Kebakaran</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/Permen_PU_29-2006_PERSY_TEKNIS_BG.pdf"><strong>Peraturan Menteri Pekerjaan Umum Nomor</strong> : 29/PRT/M/2006 </a>
                            <p>Tentang Pedoman Persyaratan Teknis Bangunan Gedung</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/permenpu-24-2008_pedoman-pemeliharaan-perawatan-bangunan-gedung.pdf"><strong>Peraturan Menteri Pekerjaan Umum Nomor</strong> : 24/PRT/M/2008 </a>
                            <p>Tentang Pedoman Pemeliharaan dan Perawatan Bangunan Gedung</p>
                        </li>
                    </ul>
                    <ul class="list-disc">
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/permen_25_2008_RIK_3.pdf"><strong>Peraturan Menteri Pekerjaan Umum Nomor</strong> : 25/PRT/M/2008 </a>
                            <p>Tentang Pedoman Teknis Penyusunan Rencana Induk Sistem Proteksi Kebakaran</p>
                        </li>
                        <li>
                            <a href="#"><strong>PERMEN No.26 Thn 2008</strong> - Proteksi Kebakaran </a>
                            <p>Tentang Proteksi Kebakaran</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/permendagri_16_2009_STANDAR_KUALIFIKASI_APARATUR_PEMADAM_KEBAKARAN_DI_DAERAH.pdf"><strong>Peraturan Menteri Dalam Negeri</strong> Nomor 16 Tahun 2009 </a>
                            <p>Tentang Standar Kualifikasi Aparatur Pemadam Kebakaran di Daerah</p>
                        </li>
                    </ul>
                    <ul class="list-disc">
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/permen_20_2009.pdf"><strong>PERATURAN MENTERI PEKERJAAN UMUM</strong> NOMOR: 20/PRT/M/2009 </a>
                            <p>Tentang Pedoman Teknis Manajemen Proteksi Kebakaran di Perkotaan</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/PermenPUPR_5_2016.pdf"><strong>Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat</strong> Nomor 05/PRT/M/2016 </a>
                            <p>Tentang Izin Mendirikan Bangunan Gedung</p>
                        </li>
                    </ul>
                    <ul class="list-disc">
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/PERMENDAGRI_114_TH_2018_TENTANG_PELAYANAN_DASAR_PADA_SPM_5.pdf"><strong>PERMENDAGRI_114_TH_2018_</strong></a>
                            <p> Tentang Standar Teknis Pelayanan Dasar Pada Standar Pelayanan Minimal Sub Urusan Kebakaran Daerah Kabupaten/Kota</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/Permendagri_No.13_Th_2019%2BLampiran.pdf"><strong>Permendagri_No.13_Th_2019+Lampiran</strong></a>
                            <p>Tentang Pakaian Dinas Bagi Aparatur Sipil Negara Di Lingkungan Perangkat Daerah yang Menyelenggarakan Sub Urusan Kebakaran</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h3 style="color:rgb(4, 0, 255);"><u>Peraturan Walikota</u></h3>
                    <ul class="list-disc">
                        <li>
                            <a href="#"><strong>Peraturan Walikota Semarang Nomor 66 Tahun 2016</strong> </a>
                            <p>Tentang Kedudukan, Susunan Organisasi, Tugas Dan Fungsi, Serta Tata Kerja Dinas Pemadam Kebakaran Kota Semarang</p>
                        </li>
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/Peraturan_Walikota_nomor_27_tahun_2018_tentang_Perubahan_Tarif.pdf"><strong>Peraturan_Walikota_nomor_27_tahun_2018</strong> </a>
                            <p>Tentang Perubahan Tarif Retribusi Pemeriksaan Alat Pemadam Kebakaran di Kota Semarang</p>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h3 style="color:rgb(4, 0, 255);"><u>Undang Undang</u></h3>
                    <ul class="list-disc">
                        <li>
                            <a href="https://damkar.semarangkota.go.id/po-content/uploads/UU_No.28_Thn_2002_-_Bangunan_Gedung.pdf"><strong>UU No.28 Thn 2002 </strong>- Bangunan Gedung  </a>
                            <p>Tentang Bangunan Gedung</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select the card element and the headline
            const cardElement = document.querySelector(".card");
            const headlineElement = document.querySelector(".pageTitle");

            // Add fade-in class to both the card and the headline
            if (cardElement) {
                cardElement.classList.add("fade-in");
            }
            if (headlineElement) {
                headlineElement.classList.add("fade-in");
            }
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>