<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
<section class="ftco-section" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Skills</h1>
					<h2 class="mb-4">My Skills</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>HTML</h3>
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:90%">
								<span>90%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>CSS</h3>
						<div class="progress">
							<div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0"
								aria-valuemax="100" style="width:80%">
								<span>80%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>JavaScript</h3>
						<div class="progress">
							<div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0"
								aria-valuemax="100" style="width:70%">
								<span>70%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>PHP</h3>
						<div class="progress">
							<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:70%">
								<span>70%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>MySQL</h3>
						<div class="progress">
							<div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0"
								aria-valuemax="100" style="width:70%">
								<span>70%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>TailWind CSS</h3>
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