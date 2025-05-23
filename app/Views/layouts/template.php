<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Membuat file template untuk navbar dan footer web -->
	<title>Portofolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('css/open-iconic-bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/animate.css') ?>">

	<link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>">

	<link rel="stylesheet" href="<?= base_url('css/aos.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/ionicons.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('css/flaticon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/icomoon.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<!-- Navbar -->
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<!-- <a class="navbar-brand" href="/">Fauzan</a> -->
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="about" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="resume" class="nav-link"><span>Resume</span></a></li>
					<li class="nav-item"><a href="skills" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="projects" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="detail" class="nav-link"><span>My Blog</span></a></li>
					<li class="nav-item"><a href="login" class="nav-link"><span>Admin</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

    <?= $this->renderSection('content') ; ?>

	<!-- Footer -->
    <footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>a student who is interested in technology, I am studying web development especially front-end development, nice to meet you.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://www.linkedin.com/in/fauzan-amirudin-basith-a7ab701a3/"><span class="icon-linkedin"></span></a></li>
							<li class="ftco-animate"><a href="https://github.com/FauzanAmirudin"><span class="icon-github"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/fauzanbasith_/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="/"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="about"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="skills"><span class="icon-long-arrow-right mr-2"></span>Skills</a></li>
							<li><a href="projects"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<li><a href="contact"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Bandar Lampung, Lampung, Indonesia</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">083169959031</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">fauzan223360@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved | This template
						is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
							href="https://colorlib.com" target="_blank">Colorlib</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/jquery-migrate-3.0.1.min.js') ?>"></script>
	<script src="<?= base_url('js/popper.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('js/jquery.easing.1.3.js') ?>"></script>
	<script src="<?= base_url('js/jquery.waypoints.min.js') ?>"></script>
	<script src="<?= base_url('js/jquery.stellar.min.js') ?>"></script>
	<script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?= base_url('js/aos.js') ?>"></script>
	<script src="<?= base_url('js/jquery.animateNumber.min.js') ?>"></script>
	<script src="<?= base_url('js/scrollax.min.js') ?>"></script>
	<script src="<?= base_url('js/main.js') ?>"></script>

</body>

</html>