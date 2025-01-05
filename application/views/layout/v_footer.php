<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
						<strong>Dinas Damkar Kota Semarang</strong>
						<br>Jl.Madukoro Raya No.6, Kelurahan Krobokan, Kecamatan Semarang Barat<br>
					</address>
					<p>
						<i class="icon-phone"></i>Phone: 024-113 / 024-7607076 / 024-7605871<br>
						<i class="icon-phone"></i>Fax: 024-7607225<br>
						<i class="icon-envelope-alt"></i>Email: kebakaran.semarangkota@gmail.com dan damkarsmg113@gmail.com
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="widget" style="color: white;">
					<h5 class="widgetheading" style="color: white;">Tentang Dinas Pemadam Kebakaran Kota Semarang</h5>
					<p style="color: white;">
					Dinas Pemadam Kebakaran adalah sebuah lembaga atau instansi yang bertanggung jawab dalam penanggulangan kebakaran dan penyelamatan jiwa serta harta benda yang terancam oleh kebakaran. Tujuan dari Dinas Pemadam Kebakaran adalah untuk melindungi masyarakat, properti, dan lingkungan dari risiko kebakaran.
					</p>
					
				</div>
			</div>
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Location</h5>
					<iframe 
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.670574999327!2d110.4078!3d-7.054567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c31a54f4c91%3A0xc3b3b6878f3a2ff5!2sDP3A%20Semarang!5e0!3m2!1sen!2sid!4v1692920930214!5m2!1sen!2sid" 
						width="100%" 
						height="200" 
						style="border:0;" 
						allowfullscreen="" 
						loading="lazy" 
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Dinas Pemberdayaan Perempuan dan Perlindungan Anak</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/dpppa.kotasemarang" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://x.com/i/flow/login?redirect_after_login=%2FDp3aSmrg" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/dp3a_kotasemarang/" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC-LWWQaUOam99RQOc4HYHFA" data-placement="top" title="YOutube"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url() ?>template/front-end/js/jquery.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>template/front-end/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.fancybox.pack.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.fancybox-media.js"></script> 
<script src="<?= base_url() ?>template/front-end/js/portfolio/jquery.quicksand.js"></script>
<script src="<?= base_url() ?>template/front-end/js/portfolio/setting.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.flexslider.js"></script>
<script src="<?= base_url() ?>template/front-end/js/animate.js"></script>
<script src="<?= base_url() ?>template/front-end/js/custom.js"></script>
<script src="<?= base_url() ?>template/front-end/js/owl-carousel/owl.carousel.js"></script>
<script src="<?= base_url() ?>template/front-end/js/about.js"></script>
<script src="<?= base_url() ?>template/front-end/js/scrollmagic/ScrollMagic.min.js"></script>
<!-- DataTables JavaScript -->
<script src="<?= base_url() ?>template/back-end/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>template/back-end/js/dataTables/dataTables.bootstrap.min.js"></script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const wrapper = document.querySelector('.slider-wrapper');
		const items = document.querySelectorAll('.slider-item');
		const prevBtn = document.querySelector('.prev');
		const nextBtn = document.querySelector('.next');
		let currentIndex = 0;

		function showSlide(index) {
			wrapper.style.transform = `translateX(-${index * 100}%)`;
		}

		nextBtn.addEventListener('click', () => {
			currentIndex = (currentIndex + 1) % items.length;
			showSlide(currentIndex);
		});

		prevBtn.addEventListener('click', () => {
			currentIndex = (currentIndex - 1 + items.length) % items.length;
			showSlide(currentIndex);
		});

		setInterval(() => {
			currentIndex = (currentIndex + 1) % items.length;
			showSlide(currentIndex);
		}, 5000);
	});
</script>
</body>
</html>