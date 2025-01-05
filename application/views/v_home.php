<style>
  /* Hover effect for feature cards */
  .feature-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
    color: inherit;
  }

  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  }

  /* Hover effect for icon */
  .feature-icon {
    color: #4CAF50;
    transition: color 0.3s ease;
  }

  .feature-card:hover .feature-icon {
    color: #FF5722;  /* Change icon color on hover */
    transform: scale(1.2); /* Make the icon grow slightly on hover */
  }

  /* Underline effect for text */
  .feature-card h5 {
    position: relative;
    display: inline-block;
    margin-top: 30px; /* Added more margin to move text further down */
  }

  .feature-card h5::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0;
    height: 2px;
    background-color: #FF5722;
    transition: width 0.3s ease;
  }

  .feature-card:hover h5::after {
    width: 100%;
  }

  .feature-card:hover h5 {
    color: #FF5722;  /* Change text color on hover */
  }
  /* Style untuk form pencarian */
.search-form {
    display: flex;
    justify-content: center;
    margin-top: 40px;  /* Menambahkan jarak lebih jauh ke bawah */
}

.search-form input {
    width: 300px;
    padding: 10px;
    margin-right: 10px;
    border-radius: 25px; /* Membuat input lebih rounded */
    border: 1px solid #ccc;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

.search-form input:focus {
    border-color: #007bff;  /* Mengubah warna border saat input difokuskan */
}

.search-form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 25px; /* Membuat tombol lebih rounded */
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.search-form button:hover {
    background-color: #0056b3;
}

.search-form button:focus {
    outline: none; /* Menghilangkan border fokus */
}
/* Slider Wrapper */
#featured {
    position: relative;
    width: 100%;
    max-width: 100%;
    overflow: hidden;
}

/* Flexslider styles */
.flexslider {
    position: relative;
    margin: 0;
}

.flexslider .slides img {
    display: block;
    width: 100%;
    border-radius: 8px;
    height: auto;
    object-fit: cover;
}

/* Navigation arrows */
.flexslider .flex-direction-nav {
    position: absolute;
    top: 50%;
    width: 100%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    pointer-events: none; /* Allows clicks to pass through transparent areas */
}

.flexslider .flex-prev,
.flexslider .flex-next {
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    text-align: center;
    line-height: 50px;
    font-size: 20px;
    border-radius: 50%;
    cursor: pointer;
    pointer-events: all; /* Enables click functionality on the buttons */
    z-index: 10;
}

.flexslider .flex-prev {
    left: 20px;
}

.flexslider .flex-next {
    right: 20px;
}

/* Button hover effect */
.flexslider .flex-prev:hover,
.flexslider .flex-next:hover {
    background: rgba(0, 0, 0, 0.8);
}
/*-------------------------------------------------------------------- */
.section { 
    background-image: url('template/front-end/img/double-bubble.png'); 
}
/*-------------------------------------------------------------------- */

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
        h1, p {
            margin: 10px auto;
        }
        .icons {
            position: absolute;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            z-index: -1;
        }
        .icons img {
            width: 50px;
            height: auto;
            position: absolute;
        }
        .icon-1 { top: 10%; left: 10%; }
        .icon-2 { top: 20%; right: 15%; }
        .icon-3 { bottom: 20%; left: 15%; }
        .icon-4 { bottom: 10%; right: 10%; }
        .icon-5 { top: 50%; left: 50%; transform: translate(-50%, -50%); }
        footer {
            margin-top: 30px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            font-size: 14px;
        }
/*------------------------------------------------------------------------------*/
/* General Styling */
article {
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Overlay Effect */
article::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
    z-index: -1; /* Push it behind the content */
}

/* Title Styling for .judul-berita h2 */
.judul-berita h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #ffffff; /* White */
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
    text-align: center;
    font-size: 4em; /* Set size equal to h1 */
}


/* Article Grid */
.artikel {
    display: flex;
    flex-direction: row; /* Arrange items in a row */
    height: 500px;
    justify-content: center; /* Center align items */
    align-items: flex-start; /* Align items to the top */
    gap: 1.5rem; /* Add space between items */
    margin-top: 2rem;
    padding: 1rem;
    flex-wrap: wrap; /* Wrap items if they overflow */
}

/* Card Styling */
.artikel div {
    background: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    width: 250px; /* Set a consistent width for each card */
    text-align: center;
}

.artikel div:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2); /* More prominent shadow */
}

/* Image Styling */
.artikel img {
    border-radius: 10px 10px 0 0; /* Rounded top corners */
    width: 100%; /* Make the image fit the card */
    height: auto; /* Maintain aspect ratio */
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.artikel div:hover img {
    opacity: 0.9;
    transform: scale(1.05);
}

/* Text Styling */
.teks p {
    font-family: 'Roboto', sans-serif;
    font-weight: 1000;
    color:rgb(0, 0, 0); /* Dark gray */
    padding: 0.5rem;
    text-align: center;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .artikel {
        flex-direction: row;
        gap: 1rem;
    }

    .judul-berita h2 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .artikel {
        flex-direction: column;
        gap: 1rem;
    }

    .judul-berita h2 {
        font-size: 1.5rem;
    }
}


</style>

<section id="featured">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides" style="margin-right:30px;">
              <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/1o.png" alt="" />
              </li>
              <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/2o.png" alt="" />
              </li>
              <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/3o.png" alt="" />
              </li>
			        <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/4o.png" alt="" />
              </li>
            </ul>
        </div>
	<!-- end slider --> 
</section>

<div class="container">
    <!-- Form Pencarian -->
    <form method="get" action="<?= site_url('home/search'); ?>" class="search-form">
        <input type="text" name="query" placeholder="Cari berita atau artikel..." required>
        <button type="submit">Cari</button>
    </form>
</div>
<!---------------------------------------------------------------------------------------------------------->
<div class="video-container">
    <iframe 
        source src="https://damkar.semarangkota.go.id/assets/video/video-damkar-480p.webm" type="video/mp4" label="480p"
        source src="https://damkar.semarangkota.go.id/assets/video/video-damkar-720p.webm" type="video/mp4" label="720p"
        title="YouTube video player" 
        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
    </iframe>
</div>
<section class="callaction">
  <div class="container">
          <!-- Ikon Background -->
          <div class="icons">
              <img src="fire-icon-1.png" alt="Icon Api" class="icon-1">
              <img src="fire-extinguisher.png" alt="Pemadam" class="icon-2">
              <img src="forest-fire.png" alt="Kebakaran Hutan" class="icon-3">
              <img src="fireman-icon.png" alt="Pemadam Kebakaran" class="icon-4">
              <img src="fire-warning.png" alt="Peringatan Api" class="icon-5">
          </div>
          <!-- Logo Utama -->
          <img src="https://damkar.semarangkota.go.id/assets/images/logo-damkar-jumbotron.png" alt="Logo Damkar">
          
          <!-- Deskripsi Teks -->
          <h2 class="aligncenter">DINAS PEMADAM KEBAKARAN KOTA SEMARANG</h2>
          <h1>YUDHA BRAMA JAYA</h1>
          <p>Dinas Pemadam Kebakaran adalah sebuah lembaga atau instansi yang bertanggung jawab dalam penanggulangan kebakaran
              dan penyelamatan jiwa serta harta benda yang terancam oleh kebakaran. Tujuan dari Dinas Pemadam Kebakaran
              adalah untuk melindungi masyarakat, properti, dan lingkungan dari risiko kebakaran.</p>
  </div>	
</section>
<!---------------------------------------------------------------------------------------------------------->
<article class="w-screen md:h-screen py-5 flex justify-center flex-wrap px-5" style="background-image: url('https://damkar.semarangkota.go.id/assets/images/dinas-terkait.png');">
    <div class="judul-berita h-1/12 mt-16">
        <h2 class="text-black text-3xl">Dinas Terkait</h2>
    </div>
    <div class="artikel bg-cover w-full bg-no-repeat bg-left-top bg-opacity-10 md:flex md:items-start md:justify-evenly grid grid-cols-3 gap-2 uppercase md:gap-5 md:flex-wrap mx-auto items-center">
        <div class="flex flex-1 flex-col justify-center items-center gap-2">
            <img class="md:h-44 h-24" src="https://damkar.semarangkota.go.id/assets/images/profil/dinas-terkait/mendagri.png" alt="Kementrian Dalam Negeri">
            <div class="teks text-center md:text-base font-bold text-xs">
                <p>Kementrian Dalam Negeri Republik Indonesia</p>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-center items-center gap-2">
            <img class="md:h-44 h-24" src="https://damkar.semarangkota.go.id/assets/images/profil/dinas-terkait/pemkot.png" alt="Kementrian Dalam Negeri">
            <div class="teks text-center md:text-base font-bold text-xs">
                <p>Pemerintah Kota Semarang</p>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-center items-center gap-2">
            <img class="md:h-44 h-24" src="https://damkar.semarangkota.go.id/assets/images/profil/dinas-terkait/bpbd-indonesia.png" alt="Kementrian Dalam Negeri">
            <div class="teks text-center md:text-base font-bold text-xs">
                <p>Badan Penanggulangan Bencana Daerah Provinsi Jawa Tengah</p>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-center items-center gap-2">
            <img class="md:h-44 h-24" src="https://damkar.semarangkota.go.id/assets/images/profil/dinas-terkait/bpbd-kota.png" alt="Kementrian Dalam Negeri">
            <div class="teks text-center md:text-base font-bold text-xs">
                <p>Badan Penanggulangan Bencana Daerah Kota Semarang</p>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-center items-center gap-2">
            <img class="md:h-44 h-24" src="https://damkar.semarangkota.go.id/assets/images/profil/dinas-terkait/dinkes.png" alt="Kementrian Dalam Negeri">
            <div class="teks text-center md:text-base font-bold text-xs">
                <p>Dinas Kesehatan Kota Semarang</p>
            </div>
        </div>
    </div>
</article>
<!---------------------------------------------------------------------------------------------------------->

<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter">
                    <h2 class="aligncenter">Berita Terbaru</h2>
                    <span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
                    Semakin aku banyak membaca, semakin aku banyak berpikir; semakin aku banyak belajar, semakin aku sadar bahwa aku tak mengetahui apa pun.
                </div>
            </div>
            &nbsp;

			<div class="row courses_row">
			<?php if (!empty($latest_berita_home)): ?>
				<?php foreach($latest_berita_home as $key => $value){ ?>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" width="100%" height="250"></div>
						<div class="course_body">
							<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita),0,30) ?>....</a></h3>
							<div class="course_text">
								<p><?= substr(strip_tags($value->isi_berita),0,100) ?></p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span><?= $value->tgl_berita ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			<?php else: ?>
				<p>Tidak ada berita terbaru.</p>
			<?php endif; ?>
			</div>
        </div>
    </div>
</section>