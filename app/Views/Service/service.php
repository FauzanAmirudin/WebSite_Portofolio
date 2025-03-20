<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
<section class="ftco-section" id="services-section">
		<div class="container">
			<!-- Bagian Header Section -->
			<div class="row justify-content-center py-5 mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Services</h1> <!-- Judul besar -->
					<h2 class="mb-4">Services</h2> <!-- Judul kecil -->
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> 
					<!-- Deskripsi singkat -->
				</div>
			</div>

			<!-- Bagian daftar layanan -->
			<div class="row">
				<!-- Service 1: Web Design -->
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-analysis"></i> <!-- Ikon untuk Web Design -->
						</span>
						<div class="desc">
							<h3 class="mb-5">Web Design</h3> <!-- Nama layanan -->
						</div>
					</a>
				</div>

				<!-- Service 2: Photography -->
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-flasks"></i> <!-- Ikon untuk Photography -->
						</span>
						<div class="desc">
							<h3 class="mb-5">Photography</h3> <!-- Nama layanan -->
						</div>
					</a>
				</div>

				<!-- Service 3: Web Developer -->
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-ideas"></i> <!-- Ikon untuk Web Developer -->
						</span>
						<div class="desc">
							<h3 class="mb-5">Web Developer</h3> <!-- Nama layanan -->
						</div>
					</a>
				</div>

				<!-- Service 4: App Developing -->
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-analysis"></i> <!-- Ikon untuk App Developing -->
						</span>
						<div class="desc">
							<h3 class="mb-5">App Developing</h3> <!-- Nama layanan -->
						</div>
					</a>
				</div>

				<!-- Service 5: Branding -->
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-flasks"></i> <!-- Ikon untuk Branding -->
						</span>
						<div class="desc">
							<h3 class="mb-5">Branding</h3> <!-- Nama layanan -->
						</div>
					</a>
				</div>

				<!-- Service 6: Product Strategy -->
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-ideas"></i> <!-- Ikon untuk Product Strategy -->
						</span>
						<div class="desc">
							<h3 class="mb-5">Product Strategy</h3> <!-- Nama layanan -->
						</div>
					</a>
				</div>
			</div>
		</div>
</section>

<?= $this->endSection(); ?> <!-- Menutup section content -->