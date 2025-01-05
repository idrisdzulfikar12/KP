<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Pengaduan</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<style>
    /* General Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Table Container */
.table-container {
    max-width: 900px;
    margin: 50px auto;
    background: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Header */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #007BFF;
}

h2 {
    text-align: left;
    margin-bottom: 20px;
    color: #007BFF;
}

/* Form Styling */
label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

button:hover {
    background-color: #0056b3;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #007BFF;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

/* Empty Data Message */
.no-data {
    text-align: center;
    color: #888;
    padding: 20px;
}
.form-container {
     max-width: 800px;
     margin: 0 auto;
     background: #fff;
     border-radius: 8px;
     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
     padding: 20px;
}

.form-section {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fafafa;
}
.form-section h2 {
      margin-top: 0;
      color: #444;
      border-bottom: 2px solid #ddd;
      padding-bottom: 5px;
 }
.notification {
        display: none; /* Tidak tampil secara default */
        position: fixed;
        top: 20px; /* Jarak dari atas layar */
        right: 20px; /* Jarak dari kanan layar */
        background-color: #28a745; /* Warna hijau untuk sukses */
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000; /* Selalu tampil di atas elemen lainnya */
        opacity: 0; /* Awal transparan untuk efek fade-in */
        transition: opacity 0.5s ease-in-out; /* Animasi transisi */
    }
</style>
<body>
<br><br><br><br><br>
<center><h1>Form Pengaduan</h1></center>
    <div class="form-container">
        <form action="<?php echo base_url('pelapor/submit'); ?>" method="post">
            <!-- Identitas Pelapor -->
            <div class="form-section">
                <h2>Identitas Pelapor</h2>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
                <label for="sebagai">Sebagai</label>
                <select id="sebagai" name="sebagai" required>
                    <option value="korban">Korban</option>
                    <option value="orang tua">Orang Tua</option>
                    <option value="orang lain">Orang Lain</option>
                    <option value="saudara">Saudara</option>
                </select>
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap Anda" required></textarea>
                <label for="no_hp">No HP</label>
                <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP Anda" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <!-- Kasus -->
            <div class="form-section">
                <h2>Kasus</h2>
                <label for="jenis_kasus">Jenis Kasus</label>
                <select id="jenis_kasus" name="jenis_kasus" required>
                    <option value="kekerasan terhadap anak">Kekerasan Terhadap Anak</option>
                    <option value="kekerasan terhadap perempuan">Kekerasan Terhadap Perempuan</option>
                    <option value="traffiking">Traffiking</option>
                </select>
                <label for="bentuk_kekerasan">Bentuk Kekerasan</label>
                <select id="bentuk_kekerasan" name="bentuk_kekerasan" required>
                    <option value="fisik">Fisik</option>
                    <option value="seksual">Seksual</option>
                    <option value="psikis">Psikis</option>
                </select>
                <label for="tempat_kejadian">Tempat Kejadian</label>
                <select id="tempat_kejadian" name="tempat_kejadian" required>
                    <option value="rumah tangga">Rumah Tangga</option>
                    <option value="sekolah">Sekolah</option>
                    <option value="tempat kerja">Tempat Kerja</option>
                </select>
                <label for="kecamatan">Kecamatan</label>
                <select id="kecamatan" name="kecamatan" required>
                    <option value="Mijen">Mijen</option>
                    <option value="Semarang Timur">Semarang Timur</option>
                    <option value="Semarang Tengah">Semarang Tengah</option>
                </select>
                <label for="tanggal_kejadian">Tanggal Kejadian</label>
                <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" required>
                <label for="status_laporan">Status Laporan</label>
                <select id="status_laporan" name="status_laporan" required>
                    <option value="Tidak Pernah">Tidak Pernah</option>
                    <option value="Kepolisian">Kepolisian</option>
                    <option value="LSM">LSM</option>
                </select>
                <label for="kronologi_singkat">Kronologi Singkat</label>
                <textarea id="kronologi_singkat" name="kronologi_singkat" rows="4" placeholder="Ceritakan kronologi singkat kejadian" required></textarea>
            </div>

            <!-- Identitas Korban -->
            <div class="form-section">
                <h2>Identitas Korban</h2>
                <label for="nama_korban">Nama Korban</label>
                <input type="text" id="nama_korban" name="nama_korban" placeholder="Masukkan nama korban" required>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="laki laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                <label for="disabilitas">Disabilitas</label>
                <select id="disabilitas" name="disabilitas" required>
                    <option value="iya">Iya</option>
                    <option value="tidak">Tidak</option>
                </select>
                <label for="usia_saat_kejadian">Usia Saat Kejadian</label>
                <input type="number" id="usia_saat_kejadian" name="usia_saat_kejadian" placeholder="Masukkan usia korban saat kejadian" required>
                <label for="pendidikan">Pendidikan</label>
                <select id="pendidikan" name="pendidikan" required>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="bekerja">Bekerja</option>
                    <option value="tidak bekerja">Tidak Bekerja</option>
                </select>
                <label for="status_perkawinan">Status Perkawinan</label>
                <select id="status_perkawinan" name="status_perkawinan" required>
                    <option value="kawin">Kawin</option>
                    <option value="cerai">Cerai</option>
                    <option value="belum kawin">Belum Kawin</option>
                </select>
            </div>

            <!-- Identitas Pelaku -->
            <div class="form-section">
                <h2>Identitas Pelaku</h2>
                <label for="pelaku_nama">Nama</label>
                <input type="text" id="pelaku_nama" name="pelaku_nama" placeholder="Masukkan nama pelaku" required>
                <label for="pelaku_jenis_kelamin">Jenis Kelamin</label>
                <select id="pelaku_jenis_kelamin" name="pelaku_jenis_kelamin" required>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="pelaku_usia">Usia Saat Kejadian</label>
                <input type="number" id="pelaku_usia" name="pelaku_usia" placeholder="Masukkan usia pelaku" required>
                <label for="pelaku_pendidikan">Pendidikan</label>
                <select id="pelaku_pendidikan" name="pelaku_pendidikan" required>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
                <label for="pelaku_pekerjaan">Pekerjaan</label>
                <select id="pelaku_pekerjaan" name="pelaku_pekerjaan" required>
                    <option value="bekerja">Bekerja</option>
                    <option value="tidak bekerja">Tidak Bekerja</option>
                </select>
                <label for="pelaku_hubungan">Hubungan dengan Korban</label>
                <select id="pelaku_hubungan" name="pelaku_hubungan" required>
                    <option value="Orang tua">Orang tua</option>
                    <option value="Teman">Teman</option>
                    <option value="Pacar">Pacar</option>
                </select>
                <label for="pelaku_kewarganegaraan">Kewarganegaraan</label>
                <select id="pelaku_kewarganegaraan" name="pelaku_kewarganegaraan" required>
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                </select>
            </div>

<button type="submit">Kirim Pengaduan Kekerasan</button>
<div id="notification" class="notification">
    Data berhasil disimpan
</div>

</form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Cek jika ada notifikasi yang harus ditampilkan
        const notification = document.getElementById("notification");
        if (notification) {
            notification.style.display = "block"; // Tampilkan notifikasi
            setTimeout(() => {
                notification.style.opacity = "1"; // Animasi fade-in
            }, 100); 

            // Hilangkan notifikasi setelah beberapa detik
            setTimeout(() => {
                notification.style.opacity = "0"; // Animasi fade-out
                setTimeout(() => {
                    notification.style.display = "none"; // Sembunyikan
                }, 500);
            }, 3000); // Notifikasi muncul selama 3 detik
        }
    });
</script>
    </body>
    </html>