<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
<section class="ftco-section ftco-project" id="projects-section"> <!-- Section utama untuk menampilkan daftar proyek -->
	<div class="container"> <!-- Container utama untuk mengatur tata letak konten -->
		<div class="row justify-content-center pb-5"> <!-- Baris untuk heading dengan teks tengah -->
			<div class="col-md-12 heading-section text-center ftco-animate"> <!-- Kolom untuk judul dan deskripsi -->
				<h1 class="big big-2">Projects</h1> <!-- Judul besar -->
				<h2 class="mb-4">Our Projects</h2> <!-- Sub-judul -->
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> <!-- Deskripsi -->
			</div>
		</div>

		<div class="row"> <!-- Baris utama yang berisi proyek-proyek -->

			<!-- Proyek dengan ukuran 4 kolom -->
			<div class="col-md-4"> 
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-4.jpg);"> <!-- Menampilkan gambar proyek -->
					<div class="overlay"></div> <!-- Overlay untuk efek transparan pada hover -->
					<div class="text text-center p-4"> <!-- Bagian teks proyek -->
						<h3><a href="#">Branding &amp; Illustration Design</a></h3> <!-- Judul proyek -->
						<span>Web Design</span> <!-- Kategori proyek -->
					</div>
				</div>
			</div>

			<!-- Proyek dengan ukuran 8 kolom -->
			<div class="col-md-8">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-5.jpg);"> <!-- Gambar proyek -->
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>

			<!-- Dua proyek dalam satu kolom besar -->
			<div class="col-md-8">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-1.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>

				<div class="project img ftco-animate d-flex justify-content-center align-items-center"
					style="background-image: url(images/project-6.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>

			<!-- Kolom dengan dua proyek kecil -->
			<div class="col-md-4">
				<div class="row"> <!-- Membagi dua proyek dalam satu kolom -->
					<div class="col-md-12">
						<div class="project img ftco-animate d-flex justify-content-center align-items-center"
							style="background-image: url(images/project-2.jpg);">
							<div class="overlay"></div>
							<div class="text text-center p-4">
								<h3><a href="#">Branding &amp; Illustration Design</a></h3>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="project img ftco-animate d-flex justify-content-center align-items-center"
							style="background-image: url(images/project-3.jpg);">
							<div class="overlay"></div>
							<div class="text text-center p-4">
								<h3><a href="#">Branding &amp; Illustration Design</a></h3>
								<span>Web Design</span>
							</div>
						</div>
					</div>
				</div> <!-- Akhir div.row -->
			</div>
		</div> <!-- Akhir div.row -->
	</div> <!-- Akhir div.container -->
</section>

<?= $this->endSection();?> <!-- Menutup section 'content' -->