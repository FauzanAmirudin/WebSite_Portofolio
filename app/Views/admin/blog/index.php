<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 pt-4">
    <h2>List Blog</h2>
    <a href="admin/create" class="btn btn-primary mb-3">Tambah Blog</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td><?= esc($blog['judul']); ?></td>
                    <td><?= word_limiter(strip_tags($blog['isi']), 10); ?></td>
                    <td><img src="/uploads/<?= esc($blog['gambar']); ?>" width="100"></td>
                    <td>
                    <a href="<?= base_url('admin/edit/' . $blog['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?= base_url('admin/delete/' . $blog['id']) ?>" method="post" style="display:inline;">
                            <?= csrf_field(); ?>
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
