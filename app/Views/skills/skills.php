<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
<section class="ftco-section" id="skills-section">
		<div class="container">
			<!-- Bagian Header Section -->
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Skills</h1> <!-- Judul besar -->
					<h2 class="mb-4">My Skills</h2> <!-- Judul kecil -->
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> 
					<!-- Deskripsi singkat -->
				</div>
			</div>

			<!-- Bagian daftar keterampilan -->
			<div class="row">
				<!-- Skill 1: Photoshop -->
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>Photoshop</h3> <!-- Nama keterampilan -->
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:90%">
								<span>90%</span> <!-- Persentase keterampilan -->
							</div>
						</div>
					</div>
				</div>

				<!-- Skill 2: jQuery -->
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>jQuery</h3>
						<div class="progress">
							<div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0"
								aria-valuemax="100" style="width:85%">
								<span>85%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Skill 3: HTML5 -->
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>HTML5</h3>
						<div class="progress">
							<div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0"
								aria-valuemax="100" style="width:95%">
								<span>95%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Skill 4: CSS3 -->
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>CSS3</h3>
						<div class="progress">
							<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:90%">
								<span>90%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Skill 5: WordPress -->
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>WordPress</h3>
						<div class="progress">
							<div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:70%">
								<span>70%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Skill 6: SEO -->
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>SEO</h3>
						<div class="progress">
							<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0"
								aria-valuemax="100" style="width:80%">
								<span>80%</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
</section>

<?= $this->endSection(); ?> <!-- Menutup section content -->