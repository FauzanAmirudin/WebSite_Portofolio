<?= $this->extend('layouts/template'); ?>  <!-- Memanggil Template Navbar dan Footer -->

<?= $this->section('content'); ?>
<body style="margin-top: 100px;">

  <div class="container py-5">

    <div class="text-center mb-4">
      <h1 class="fw-bold">Dashboard Admin</h1>
      <p class="text-secondary mb-1">Halo, <strong><?= session()->get('name') ?></strong></p>
      <p class="text-muted small">Role: <?= session()->get('role') ?> | Email: <?= session()->get('email') ?></p>
      <a href="/login" class="btn btn-outline-danger btn-sm mt-2">Logout</a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title text-primary">Data Pengguna</h5>
            <p class="card-text text-muted">Lihat dan kelola data pengguna sistem.</p>
            <a href="#" class="btn btn-primary btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title text-success">Manajemen Konten</h5>
            <p class="card-text text-muted">Kelola berita, artikel, dan informasi penting.</p>
            <a href="#" class="btn btn-success btn-sm">Kelola Konten</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title text-warning">Laporan Sistem</h5>
            <p class="card-text text-muted">Lihat statistik penggunaan aplikasi.</p>
            <a href="#" class="btn btn-warning btn-sm">Lihat Laporan</a>
          </div>
        </div>
      </div>
    </div>

  </div>
<?= $this->endSection();?> 