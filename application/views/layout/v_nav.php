<style>
	.dropdown{
		background-color: black;
		border-radius: 5px;
	}
</style>


<div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url('home')?>">Home</a></li> 
						<li>
							<a href="#">Profil</a>
							<ul class="dropdown">
								<li><a href="<?= base_url('home/sambutan') ?>">Visi Misi</a></li>
								<li><a href="<?= base_url('home/struktur')?>">Sejarah</a></li>
								<li><a href="<?= base_url('home/sekretariat')?>">Struktur Organisasi</a></li>
								<li><a href="<?= base_url('home/bidang_pemberdayaan_perempuan')?>">Tugas Dan Fungsi</a></li>
								<li><a href="<?= base_url('home/bidang_pemenuhan')?>">Dasar Hukum</a></li>
								<li><a href="<?= base_url('home/bidang_perlindungan')?>">Sarana Dan Prasarana</a></li>
								<li><a href="<?= base_url('home/bidang_pemberdayaan_manusia')?>">Sumber Daya Manusia </a></li>
								<li><a href="<?= base_url('home/bidang_pemberdayaan_manusia')?>">Data kebakaran </a></li>
							</ul>
						</li> 
						<li><a href="https://ppid.damkar.semarangkota.go.id/">PPID</a></li>
                        <li>
							<a href="#">Publikasi</a>
							<ul class="dropdown">
								<li><a href="<?= base_url('home/berita')?>">Berita</a></li>
								<li><a href="<?= base_url('home/form_pengaduan')?>">Form Pengaduan</a></li>
								<li><a href="<?= base_url('home/sop')?>">Bencana Kebakaran</a></li>
								<li><a href="<?= base_url('home/seruni')?>">Pengetahuan SATLAKAR</a></li>
							</ul>
						</li>
                        <li>
							<a href="<?= base_url('home/jadwal_kunjungan')?>">Jadwal Kunjungan</a></li>
                        <li>
							<a href="<?= base_url('home/sop')?>">SOP</a></li>
						</li>
                    </ul>
                </div>
            </div>
        </div>
	</header>