<?= $this->extend('layouts/template'); ?> <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
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
		</div>
	</section>
<?= $this->endSection(); ?>