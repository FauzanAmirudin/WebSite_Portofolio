<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h2>Edit Blog</h2>

    <form action="/admin/update/<?= $blog['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="<?= esc($blog['judul']); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Isi</label>
            <textarea name="isi" class="form-control" rows="6" required><?= esc($blog['isi']); ?></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            <img src="/uploads/<?= esc($blog['gambar']); ?>" width="150"><br><br>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/admin" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?= $this->endSection(); ?>
