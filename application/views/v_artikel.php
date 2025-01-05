<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/courses.css">
<link href="<?= base_url() ?>template/front-end/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>template/front-end/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/courses_responsive.css">

<style>
	.latest {
    display: flex;
    align-items: center; /* Membuat gambar dan teks sejajar secara vertikal */
    margin-bottom: 10px; /* Memberikan jarak antar item */
}

.latest_image {
    margin-right: 10px; /* Memberikan jarak antara gambar dan teks */
    width: 90px; /* Atur ukuran gambar jika diperlukan */
    height: 90px;
    overflow: hidden; /* Menjaga agar gambar tidak keluar dari kontainer */
    flex-shrink: 0; /* Agar gambar tidak mengecil */
}

.latest_image img {
    width: 100%;
    height: 90%;
    object-fit: cover; /* Mengatur gambar agar sesuai kontainer tanpa distorsi */
}

.latest_title {
    font-size: 14px; /* Atur ukuran teks */
    font-weight: bold;
}

.latest_price {
    font-size: 12px; /* Atur ukuran teks tanggal */
    color: gray; /* Opsional: warna untuk membedakan tanggal */
}

</style>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Artikel</h2>
			</div>
		</div>
	</div>
</section>
<br>
<div class="super_container">

	<!-- Courses -->

	<div >
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_container">
						<div class="row courses_row">
							
							<?php foreach($artikel as $key => $value){ ?>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="<?= base_url('gambar_artikel/'.$value->gambar_artikel) ?>" width="100%" height="170"></div>
									<div class="course_body">
										<h3 class="course_title"><a href="<?= base_url('home/detail_artikel/'.$value->slug_artikel) ?>"><?= substr(strip_tags($value->judul_artikel),0,30) ?>....</a></h3>
										<div class="course_teacher">Publisher : <?= $value->nama_user ?></div>
										<div class="course_text">
											<p><?= substr(strip_tags($value->isi_artikel),0,100) ?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-calendar" aria-hidden="true"></i>
												<span><?= $value->tgl_artikel ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php }?>	
						</div>
						

						<div class="row pagination_row">
							<div class="col">
									<?php 
										if(isset($paginasi)) {
											echo $paginasi;
										}
									?>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Posts</div>
								<div class="sidebar_latest">

									<!-- Latest Course -->
									<?php foreach($latest_artikel as $key => $value){ ?>
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div class="latest_image">
											<div>
												<img src="<?= base_url('gambar_artikel/'.$value->gambar_artikel) ?>">
											</div>
											
										</div>
										<div>
											<div class="latest_title"><a href="<?= base_url('home/detail_artikel/'.$value->slug_artikel) ?>"><?= $value->judul_artikel ?></a></div>
											<div class="latest_price"><?= $value->tgl_artikel ?></div>
										</div>
									</div>
									<?php }?>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<script src="<?= base_url() ?>template/front-end/styles/bootstrap4/popper.js"></script>
<script src="<?= base_url() ?>template/front-end/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/easing/easing.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url() ?>template/front-end/plugins/colorbox/jquery.colorbox-min.js"></script>
<!-- <script src="js/courses.js"></script> -->