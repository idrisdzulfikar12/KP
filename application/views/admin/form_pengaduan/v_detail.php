<style>
/* Container utama */
.container {
    margin-top: 30px;
    padding: 20px;
    background-color: #f3f4f6; /* Warna latar abu-abu lembut */
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih panjang dan gelap */
}

/* Judul dengan animasi warna */
h2 {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    animation: colorChange 6s infinite alternate;
    font-family: 'Arial', sans-serif;
}

/* Animasi perubahan warna */
@keyframes colorChange {
    0% { color: #5D6D7E; }  /* Abu-abu gelap */
    25% { color: #2874A6; } /* Biru lembut */
    50% { color: #1ABC9C; } /* Hijau laut */
    75% { color: #AF7AC5; } /* Ungu lembut */
    100% { color: #D5D8DC; } /* Abu-abu pucat */
}

/* Tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2); /* Bayangan lebih panjang untuk tabel */
}

/* Header tabel */
th {
    background-color: #34495E; /* Abu-abu biru */
    color: #ECEFF1;           /* Putih lembut */
    padding: 12px;
    text-align: center;
    font-size: 14px;
    text-transform: uppercase; /* Kapital */
    font-weight: bold;
    border-bottom: 2px solid #2C3E50; /* Garis bawah kontras */
}

/* Isi tabel */
td {
    padding: 10px 12px;
    text-align: center;
    color: #2C3E50; /* Warna teks abu-abu gelap */
    border-bottom: 1px solid #E5E8E8; /* Garis bawah lembut */
    font-size: 13px;
}

/* Warna latar baris bergantian */
tr:nth-child(even) {
    background-color: #F9FAFB; /* Abu-abu terang */
}

tr:nth-child(odd) {
    background-color: #FFFFFF; /* Putih */
}

/* Efek hover pada baris */
tr:hover {
    background-color: #DCE4EC; /* Abu kebiruan */
    transition: background-color 0.3s ease; /* Animasi halus */
}

/* Responsif untuk layar kecil */
@media screen and (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }

    th, td {
        padding: 8px;
        font-size: 12px;
    }
}
</style>

<div class="container">
    <h2><?= $title ?></h2>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Sebagai</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pelapor->pelapor_id ?></td>
                <td><?= $pelapor->nama ?></td>
                <td><?= $pelapor->sebagai ?></td>
                <td><?= $pelapor->alamat ?></td>
                <td><?= $pelapor->no_hp ?></td>
                <td><?= $pelapor->email ?></td>
            </tr>
        </tbody>
    </table>
    <table class="table-bordered" >
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kasus</th>
                <th>Bentuk Kekerasan</th>
                <th>Tempat Kejadian</th>
                <th>Kecamatan</th>
                <th>Tanggal Kejadian</th>
                <th>Status Laporan</th>
                <th>Kronologi Singkat</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            foreach ($kasus as $kasus_item) : ?>
                <tr>
                    <td><?= $kasus_item->pelapor_id ?></td>
                    <td><?= $kasus_item->jenis_kasus ?></td>
                    <td><?= $kasus_item->bentuk_kekerasan ?></td>
                    <td><?= $kasus_item->tempat_kejadian ?></td>
                    <td><?= $kasus_item->kecamatan ?></td>
                    <td><?= $kasus_item->tanggal_kejadian ?></td>
                    <td><?= $kasus_item->status_laporan ?></td>
                    <td><?= $kasus_item->kronologi_singkat ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Korban</th>
                <th>Jenis Kelamin Korban</th>
                <th>Usia Korban</th>
                <th>Pendidikan Korban</th>
                <th>Pekerjaan Korban</th>
                <th>Status Perkawinan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($korban as $korban_item) : ?>
                <tr>
                    <td><?= $korban_item->pelapor_id ?></td>
                    <td><?= $korban_item->nama_korban ?></td>
                    <td><?= $korban_item->jenis_kelamin ?></td>
                    <td><?= $korban_item->usia ?></td>
                    <td><?= $korban_item->pendidikan ?></td>
                    <td><?= $korban_item->pekerjaan ?></td>
                    <td><?= $korban_item->status_perkawinan ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelaku</th>
                <th>Jenis Kelamin Pelaku</th>
                <th>Usia Pelaku</th>
                <th>Pendidikan Pelaku</th>
                <th>Pekerjaan Pelaku</th>
                <th>Hubungan dengan Korban</th>
                <th>Kewarganegaraan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pelaku as $pelaku_item) : ?>
                <tr>
                    <td><?= $pelaku_item->pelapor_id ?></td>
                    <td><?= $pelaku_item->nama_pelaku ?></td>
                    <td><?= $pelaku_item->jenis_kelamin ?></td>
                    <td><?= $pelaku_item->usia ?></td>
                    <td><?= $pelaku_item->pendidikan ?></td>
                    <td><?= $pelaku_item->pekerjaan ?></td>
                    <td><?= $pelaku_item->hubungan_dengan_korban ?></td>
                    <td><?= $pelaku_item->kewarganegaraan ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
