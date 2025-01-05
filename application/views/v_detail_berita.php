<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/front-end/styles/blog_single_responsive.css">	

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
<!-- Blog -->

	<div style="margin-top: 20px;">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?= $berita->judul_berita ?></div>
						<div class="blog_meta">
								<strong>Post on <?= $berita->tgl_berita ?> | By <?= $berita->nama_user ?></strong>
						</div>
						<div class="blog_image"><img src="<?= base_url('gambar_berita/').$berita->gambar_berita ?>" alt=""></div>
						<p><?= $berita->isi_berita ?></p>
					</div>
					<!-- Comments -->
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Posts</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<?php foreach($latest_berita as $key => $value){ ?>
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div class="latest_image">
											<div>
												<img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>">
											</div>
											
										</div>
										<div>
											<div class="latest_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
											<div class="latest_price"><?= $value->tgl_berita ?></div>
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

    <script src="<?= base_url() ?>template/front-end/js/blog_single.js"></script>