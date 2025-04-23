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
								<p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#"
										class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
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
								<p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#"
										class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
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
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
						is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">2014-2015</span>
						<h2>Master Degree of Design</h2>
						<span class="position">Cambridge University</span>
						<p class="mt-4">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
							into your mouth.</p>
					</div>
					<div class="resume-wrap ftco-animate">
						<span class="date">2014-2015</span>
						<h2>Bachelor's Degree of C.A</h2>
						<span class="position">Cambridge University</span>
						<p class="mt-4">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
							into your mouth.</p>
					</div>
					<div class="resume-wrap ftco-animate">
						<span class="date">2014-2015</span>
						<h2>Diploma in Computer</h2>
						<span class="position">Cambridge University</span>
						<p class="mt-4">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
							into your mouth.</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">2014-2015</span>
						<h2>Art &amp; Creative Director</h2>
						<span class="position">Cambridge University</span>
						<p class="mt-4">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
							into your mouth.</p>
					</div>
					<div class="resume-wrap ftco-animate">
						<span class="date">2014-2015</span>
						<h2>Wordpress Developer</h2>
						<span class="position">Cambridge University</span>
						<p class="mt-4">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
							into your mouth.</p>
					</div>
					<div class="resume-wrap ftco-animate">
						<span class="date">2017-2018</span>
						<h2>UI/UX Designer</h2>
						<span class="position">Cambridge University</span>
						<p class="mt-4">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
							into your mouth.</p>
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

	<section class="ftco-section" id="services-section">
		<div class="container">
			<div class="row justify-content-center py-5 mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Services</h1>
					<h2 class="mb-4">Services</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-analysis"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Web Design</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-flasks"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Phtography</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-ideas"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Web Developer</h3>
						</div>
					</a>
				</div>

				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-analysis"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">App Developing</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-flasks"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Branding</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="flaticon-ideas"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Product Strategy</h3>
						</div>
					</a>
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
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
								aria-valuemax="100" style="width:85%">
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
								aria-valuemax="100" style="width:95%">
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
								aria-valuemax="100" style="width:90%">
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2">June 21, 2019</span>
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a>
							</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2">June 21, 2019</span>
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a>
							</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="single" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2">June 21, 2019</span>
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a>
							</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>

			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-4">Address</h3>
						<p>198 West 21th Street, Suite 721 New York NY 10016</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<h3 class="mb-4">Website</h3>
						<p><a href="#">yoursite.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?= $this->endSection();?>