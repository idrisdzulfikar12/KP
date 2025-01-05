<style>
/* Judul hasil pencarian */
h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

/* Konten berita dan artikel */
.news-content, .article-content {
    flex: 1;
}

/* Judul berita dan artikel */
.news-content h4 a, .article-content h4 a {
    font-size: 18px;
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.news-content h4 a:hover, .article-content h4 a:hover {
    color: #0056b3;
}

/* Deskripsi singkat berita dan artikel */
.news-content p, .article-content p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}
</style>

<section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle text-center fade-in" id="headline">Hasil Pencarian</h2>
                </div>
            </div>
        </div>
</section>



<section>
    <div class="container">
        <div class="row">
            <?php if (!empty($search_results_berita)): ?>
                <!-- Jika berita ditemukan -->
                <div class="row courses_row">
                    <h2>Hasil Pencarian Berita</h2>
                    <?php foreach ($search_results_berita as $value): ?>
                        <div class="col-lg-4 course_col">
                            <div class="course">
                                <div class="course_image">
                                    <img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" width="100%" height="250">
                                </div>
                                <div class="course_body">
                                    <h3 class="course_title">
                                        <a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 30) ?>....</a>
                                    </h3>
                                    <div class="course_text">
                                        <p><?= substr(strip_tags($value->isi_berita), 0, 100) ?></p>
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
                    <?php endforeach; ?>
                </div>

                <?php if (!empty($search_results_artikel)): ?>
                    <!-- Jika artikel juga ditemukan -->
                    <div class="row courses_row">
                        <h2>Hasil Pencarian Artikel</h2>
                        <?php foreach ($search_results_artikel as $value): ?>
                            <div class="col-lg-4 course_col">
                                <div class="course">
                                    <div class="course_image">
                                        <img src="<?= base_url('gambar_artikel/'.$value->gambar_artikel) ?>" width="100%" height="250">
                                    </div>
                                    <div class="course_body">
                                        <h3 class="course_title">
                                            <a href="<?= base_url('home/detail_artikel/'.$value->slug_artikel) ?>"><?= substr(strip_tags($value->judul_artikel), 0, 30) ?>....</a>
                                        </h3>
                                        <div class="course_text">
                                            <p><?= substr(strip_tags($value->isi_artikel), 0, 100) ?></p>
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
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <!-- Jika artikel tidak ditemukan -->
                    <p>Tidak ada artikel yang ditemukan.</p>
                <?php endif; ?>

            <?php elseif (!empty($search_results_artikel)): ?>
                <!-- Jika berita tidak ditemukan tetapi artikel ada -->
                <div class="row courses_row">
                    <h2>Hasil Pencarian Artikel</h2>
                    <?php foreach ($search_results_artikel as $value): ?>
                        <div class="col-lg-4 course_col">
                            <div class="course">
                                <div class="course_image">
                                    <img src="<?= base_url('gambar_artikel/'.$value->gambar_artikel) ?>" width="100%" height="250">
                                </div>
                                <div class="course_body">
                                    <h3 class="course_title">
                                        <a href="<?= base_url('home/detail_artikel/'.$value->slug_artikel) ?>"><?= substr(strip_tags($value->judul_artikel), 0, 30) ?>....</a>
                                    </h3>
                                    <div class="course_text">
                                        <p><?= substr(strip_tags($value->isi_artikel), 0, 100) ?></p>
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
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <!-- Jika berita dan artikel tidak ditemukan -->
                <p style="margin-left: 18px;">Tidak ada berita atau artikel yang ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</section>



