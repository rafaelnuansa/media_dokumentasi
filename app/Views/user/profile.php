<?php $this->extend('template'); ?>
<?php $this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?= base_url('profile/update-password') ?>" method="post">
                <div class="card bg-secondary border-0 rounded-4 shadow-sm mb-5">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Profile</h3>
                        <?php if (session()->has('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session('success') ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->has('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session('error') ?>
                            </div>
                        <?php endif; ?>
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Username</label>
                            <input type="text" class="form-control bg-dark" placeholder="<?= $username ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control bg-dark" name="email" placeholder="<?= $email ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="wa" class="form-label">No WhatsApp</label>
                            <input type="number" class="form-control bg-dark" name="no_whatsapp" placeholder="<?= $no_whatsapp ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bergabung</label>
                            <input type="text" class="form-control bg-dark" placeholder="<?= $date_create ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password lama</label>
                            <input type="password" name="current_password" class="form-control" placeholder="Masukkan password lama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password baru</label>
                            <input type="password" name="new_password" class="form-control" placeholder="Masukkan password baru" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi password baru</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi password baru" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>