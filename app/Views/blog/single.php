<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?> <!-- Menginisiasi Section Content -->
	  <section class="hero-wrap js-fullheight" style="background-image: url('<?= base_url('images/bg_1.jpg') ?>')";" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
            <h1 class="mb-3 bread">Blog Single Post</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.php">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- < -->
      <div class="container" style="margin-top: 50px;">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?= esc($blog['judul']) ?></h2>
            <p>
              <img src="/uploads/<?= esc($blog['gambar']) ?>" alt="<?= esc($blog['judul']) ?>" class="img-fluid mb-4 w-50">
            </p>
            <p><?= esc($blog['isi']) ?></p>
            <p><?= esc($blog['isi']) ?></p>
          </div>
        </div>
      </div>
    </section>  

<?= $this->endSection();?> <!-- Menutup section 'content' -->