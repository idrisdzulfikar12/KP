<?php if (!empty($error)): ?>
    <div class="alert alert-danger">
        <?php echo $error; ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Pengaduan</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
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

/* Styling untuk Input File */
/* Styling untuk Input File */
input[type="file"] {
    display: inline-block;
    padding: 10px 15px;
    font-size: 14px;
    color: #555;
    background-color: #f9f9f9;
    border: 2px dashed #ccc;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

input[type="file"]:hover {
    background-color: #f0f8ff;
    border-color: #007BFF;
}

input[type="file"]:focus {
    outline: none;
    border-color: #0056b3;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Teks keterangan di bawah input file */
p[for="file_permohonan"] {
    margin-top: 5px;
    font-size: 12px;
    color: #666;
    text-align: center;
}

/* Style tambahan untuk area input */
input[type="file"]::file-selector-button {
    padding: 8px 12px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

input[type="file"]::file-selector-button:hover {
    background-color: #0056b3;
}


</style>
<body>
<br><br><br><br><br>
<center><h1>Form Jadwal Kunjungan</h1></center>
    <div class="form-container">
            <form action="<?php echo base_url('Kunjungan/submit'); ?>" method="post" enctype="multipart/form-data">

            <!-- Identitas Pelapor -->
            <div class="form-section">
                <h2>Pengajuan Kunjungan</h2>
                <label for="nama_instansi">Nama Instansi</label>
                <input type="text" id="nama_instansi" name="nama_instansi" placeholder="Masukkan nama instansi" required>
                <label for="alamat_instansi">Alamat Instansi</label>
                <textarea id="alamat_instansi" name="alamat_instansi" rows="4" placeholder="Masukkan alamat instansi" required></textarea>
                <label for="jml_siswa">Jumlah Siswa</label>
                <input type="number" id="jml_siswa" name="jml_siswa" placeholder="Jumlah Siswa" required>
                <p style="margin-top: -5px;">
                    <small><em>min. 25 maks. 75</em></small>
                </p>
                <label for="jml_laki">Jumlah Peserta Laki-laki</label>
                <input type="number" id="jml_laki" name="jml_laki" placeholder="Jumlah Peserta Laki-laki" required>
                <label for="jml_wanita">Jumlah Peserta Perempuan</label>
                <input type="number" id="jml_wanita" name="jml_wanita" placeholder="Jumlah Peserta Perempuan" required>
                <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                <input type="date" id="tgl_kunjungan" name="tgl_kunjungan" placeholder="Jumlah Siswa" required>
                <label for="nama_pic">Nama PIC / Penanggung Jawab</label>
                <input type="text" id="nama_pic" name="nama_pic" placeholder="Nama PIC" required>
                <label for="no_pic">No WA PIC / Penanggung Jawab</label>
                <input type="tel" id="no_pic" name="no_pic" placeholder="No WA PIC" value="+62" required>
                <label for="file_permohonan">File Permohonan:</label>
                <input type="file" id="file_permohonan" name="file_permohonan">
                <p style="margin-top: 5px;">
                    <small><em>Maksimal pdf 1mb</em></small>
                </p>

            </div>

<button type="submit" id="kirim">Kirim Permohonan Kunjungan</button>                                                                                                                                               
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
    document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("file_permohonan");
    const fileLabel = document.querySelector('label[for="file_permohonan"]');

    fileInput.addEventListener("change", function () {
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            fileLabel.setAttribute("data-file", `File: ${fileName}`);
        } else {
            fileLabel.removeAttribute("data-file");
        }
    });
});

</script>
<script>
   const phoneInputField = document.querySelector("#no_pic");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
    </body>
    </html>