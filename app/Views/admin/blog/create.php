<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h2>Tambah Blog Baru</h2>

    <form action="/admin/store" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Isi</label>
            <textarea name="isi" class="form-control" rows="6" required></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/admin/blog" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
