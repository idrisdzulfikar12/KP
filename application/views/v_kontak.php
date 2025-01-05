<section id="inner-headline">
	<div class="container">
		<div class="row">
        <div class="col-lg-12">
            <h2 class="pageTitle">Kontak</h2>
        </div>

		</div>
	</div>
</section>

<!--------------------------------------------------------------------------------------------------->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <!-- Formulir Kontak -->
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown animated" 
                        data-wow-duration="500ms" 
                        data-wow-delay=".3s">
                        Kontak Kami
                    </h2><br>
                    
                    <div class="contact-form">
                        <form action="<?php echo base_url('kontak/submit'); ?>" method="post">
                            
                            <div class="form-group wow fadeInDown animated" 
                                 data-wow-duration="500ms" 
                                 data-wow-delay=".6s">
                                <input type="text" 
                                       placeholder="Nama" 
                                       class="form-control" 
                                       name="nama_kontak" 
                                       id="nama_kontak">
                            </div>
                            
                            <div class="form-group wow fadeInDown animated" 
                                 data-wow-duration="500ms" 
                                 data-wow-delay=".8s">
                                <input type="email" 
                                       placeholder="Email" 
                                       class="form-control" 
                                       name="email_kontak" 
                                       id="email_kontak">
                            </div>
                            
                            <div class="form-group wow fadeInDown animated" 
                                 data-wow-duration="500ms" 
                                 data-wow-delay="1s">
                                <input type="text" 
                                       placeholder="Subjek" 
                                       class="form-control" 
                                       name="subjek_kontak" 
                                       id="subjek_kontak">
                            </div>
                            
                            <div class="form-group wow fadeInDown animated" 
                                 data-wow-duration="500ms" 
                                 data-wow-delay="1.2s">
                                <textarea rows="6" 
                                          placeholder="Pesan" 
                                          class="form-control" 
                                          name="pesan_kontak" 
                                          id="pesan_kontak"></textarea>    
                            </div>
                            
                            <div id="submit" 
                                 class="wow fadeInDown animated" 
                                 data-wow-duration="500ms" 
                                 data-wow-delay="1.4s">
                                <input type="submit" 
                                       id="contact-submit" 
                                       class="btn btn-default btn-send"
                                       style="border-radius: 5px;" 
                                       value="Kirim Pesan">
                            </div>
                            <div id="notification" class="notification">
                                Data berhasil disimpan
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Peta -->
            <div class="col-md-6">
                <div class="map-area">
                    <h2 class="subtitle wow fadeInDown animated" 
                        data-wow-duration="500ms" 
                        data-wow-delay=".3s">
                        Temukan Kami
                    </h2><br><br><br>
                    
                    <div class="map wow fadeInDown animated">
                        <div class="mapouter">
                            <iframe 
                                width="600" 
                                height="300" 
                                id="gmap_canvas" 
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15838.512727076839!2d110.4280968!3d-7.0529021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c00e19e3db1%3A0xde471feee960ce9f!2sDinas%20Pemberdayaan%20Perempuan%20Dan%20Perlindungan%20Anak!5e0!3m2!1sid!2sid!4v1733627435140!5m2!1sid!2sid"
                                frameborder="0" 
                                scrolling="no" 
                                marginheight="0" 
                                marginwidth="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Detail Alamat -->
        <div class="row address-details">
            <div class="col-md-4">
                <div class="address wow fadeInLeft animated" 
                     data-wow-duration="500ms" 
                     data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <p>
                        Jl. Pemuda No. 175 Gd. Pandanaran Lt.3<br>
                        Semarang 50132
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="email wow fadeInLeft animated" 
                     data-wow-duration="500ms" 
                     data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>dinasp3a.kotasemarang@gmail.com</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="phone wow fadeInLeft animated" 
                     data-wow-duration="500ms" 
                     data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>
                        Phone   :  (024) 76402252 <br>
                        Fax     : 024-3547-998
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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