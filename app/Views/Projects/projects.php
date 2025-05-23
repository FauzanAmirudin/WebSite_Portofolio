<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
<section class="ftco-section ftco-project" id="projects-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Projects</h1>
					<h2 class="mb-4">My Projects</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/project-4.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/project-5.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>

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
				<div class="col-md-4">
					<div class="row">
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
					</div>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection();?> <!-- Menutup section 'content' -->