<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section style="margin-top: 100px;" class="d-flex justify-content-center align-items-center">
<div class="card p-4 shadow-sm" style="width: 350px;">
        <h4 class="text-center mb-3 text-dark">Login Admin</h4>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="/login" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label for="pass    word" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</section>

<?= $this->endSection();?>