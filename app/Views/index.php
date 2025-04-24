<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
	<section id="home-section" class="hero">
		<div class="home-slider  owl-carousel">
			<div class="slider-item ">
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img"
							style="background-image:url(images/bg1-hero.png);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello!</span>
								<h1 class="mb-4 mt-3">I'm <span>Fauzan Amirudin Basith</span></h1>
								<h2 class="mb-4">A Freelance Front-End Developer</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img"
							style="background-image:url(images/bg2-hero.png);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello!</span>
								<h1 class="mb-4 mt-3">I'm a <span>Front-End Developer</span> based in Indonesia</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb" id="resume-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<h1 class="big big-2">Resume</h1>
					<h2 class="mb-4">Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<h2>Web Developer</h2>
						<span class="position">Lampung University</span>
						<p class="mt-4">Building a website using HTML, CSS & Javascript. Several times also made with 
							frameworks such as Tailwind, Bootstrap, CodeIgniter, and Laravel.
						</p>
					</div>
					<div class="resume-wrap ftco-animate">
						<h2>Web Designer</h2>
						<span class="position">Lampung University</span>
						<p class="mt-4">Creating a web design project using figma and so on.</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<h2>graphic designer</h2>
						<span class="position">Lampung University</span>
						<p class="mt-4">Create various forms of designs such as posters, pamphlets, logos and so on using Adobe Photoshop, Adobe Illustrator and Canva.</p>
					</div>
					<div class="resume-wrap ftco-animate">
						<h2>Mobile Developer</h2>
						<span class="position">Lampung University</span>
						<p class="mt-4">build a mobile application with dart & flutter.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-md-6 text-center ftco-animate">
					<p><a href="resume" class="btn btn-primary py-4 px-5">Lainnya</a></p>
				</div>
			</div>
		</div>
	</section>

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


	<section class="ftco-section" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Blog</h1>
					<h2 class="mb-4">My Blog</h2>
				</div>
			</div>

			<div class="row d-flex flex-wrap">
			<?php foreach ($blogs as $blog): ?>
				<div class="col-md-4 d-flex mb-4"> <!-- Pastikan ada margin bawah (mb-4) -->
					<div class="blog-entry justify-content-end">
					<img src="/uploads/<?= esc($blog['gambar']); ?>" class="img-fluid mb-3 block-20">  
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="<?= base_url('single/' . $blog['id']) ?>"><?= esc($blog['judul']) ?></a></h3>
							<p>Click here to read my full opinion on something</p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
				</div>
			</div>

			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-4">Address</h3>
						<p>Bandar Lampung, Lampung, Indonesia</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">083169959031</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">fauzan223360@gmail.com</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-linkedin"></span>
						</div>
						<h3 class="mb-4">Profile</h3>
						<p><a href="https://www.linkedin.com/in/fauzan-amirudin-basith-a7ab701a3/">Fauzan Amirudin</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?= $this->endSection();?>