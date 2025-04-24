<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="ftco-section" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Blog</h1>
					<h2 class="mb-4">My Blog</h2>
				</div>
			</div>

			<div class="row d-flex flex-wrap">
			<?php foreach ($blog as $blog): ?>
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
	
<?= $this->endSection(); ?>