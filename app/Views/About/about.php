<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<!-- Membuat kolom dengan lebar 5 (dari 12 grid) untuk menampilkan gambar -->
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div> <!-- Layer transparan di atas gambar -->
					<div class="img d-flex align-self-stretch align-items-center"
						style="background-image:url(images/bg1-hero.png);">
					</div> 
					<!-- Menampilkan gambar sebagai latar belakang dengan URL 'images/bg_1.png' -->
				</div>
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
				<!-- Kolom berisi teks deskripsi -->
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<!-- Deskripsi singkat tentang profil -->
						<ul class="about-info mt-4 px-md-0 px-2">
							<li class="d-flex"><span>Name:</span> <span>Fauzan Amirudin Basith</span></li>
							<li class="d-flex"><span>Date of birth:</span> <span>March 21, 2004</span></li>
							<li class="d-flex"><span>Address:</span> <span>Bandar Lampung</span></li>
							<li class="d-flex"><span>Email:</span> <span>fauzan223360@gmail.com</span></li>
							<li class="d-flex"><span>Phone: </span> <span>083169959031</span></li>
						</ul>  
						<!-- Menampilkan informasi pribadi dalam bentuk daftar -->
					</div>
				</div>
				<div class="counter-wrap ftco-animate d-flex mt-md-3">
					<!-- Bagian untuk menampilkan jumlah proyek yang telah diselesaikan -->
					<div class="text">
						<p class="mb-4">
							<span class="number" data-number="120">0</span>
							<span>Project complete</span>
						</p>
						<!-- Menampilkan jumlah proyek yang telah diselesaikan dengan efek animasi -->
						<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
						<!-- Tombol untuk mengunduh CV -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection();?>  
<!-- Mengakhiri section 'content', sehingga semua kontennya akan dimasukkan ke dalam template utama. -->