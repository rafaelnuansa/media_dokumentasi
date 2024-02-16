<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                Tambah User
      </button>

    <div class="card bg-secondary border-0 shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-4">Daftar User</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-dark" id="userTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>WhatsApp</th>
                            <th>Role</th>
                            <th>Date Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $user) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td class="text-nowrap"><?= $user['username'] ?></td>
                                <td class="text-nowrap"><?= $user['email'] ?></td>
                                <td class="text-nowrap"><?= $user['no_whatsapp'] ?></td>
                                <td><?= $user['role'] ?></td>
                                <td class="text-nowrap"><?= $user['date_create'] ?></td>
                                <td class="text-nowrap">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $user['id'] ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $user['id'] ?>">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit User -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModal">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <form action="<?= base_url('admin/user/create') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"  required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"  required>
                        </div>
                        <div class="mb-3">
                            <label for="wa" class="form-label">WhatsApp</label>
                            <input type="number" class="form-control" id="wa" name="no_whatsapp" required>
                        </div>
                        <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" id="role">
                            <option value="1" <?= ($user['role'] == '1') ? 'selected' : '' ?>>Admin</option>
                            <option value="2" <?= ($user['role'] == '2') ? 'selected' : '' ?>>User</option>
                            <option value="2" <?= ($user['role'] == '3') ? 'selected' : '' ?>>Fotografer</option>
                        </select>
                    </div>
                        <hr>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php foreach ($users as $user) : ?>

<!-- Modal Edit User -->
    <div class="modal fade" id="editModal<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $user['id'] ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel<?= $user['id'] ?>">Edit User #<?= $user['id'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/user/edit/' . $user['id']) ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="wa" class="form-label">WhatsApp</label>
                            <input type="number" class="form-control" id="wa" name="no_whatsapp" value="<?= $user['no_whatsapp'] ?>" required>
                        </div>
                        <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" id="role">
                            <option value="1" <?= ($user['role'] == '1') ? 'selected' : '' ?>>Admin</option>
                            <option value="2" <?= ($user['role'] == '2') ? 'selected' : '' ?>>User</option>
                            <option value="2" <?= ($user['role'] == '3') ? 'selected' : '' ?>>Fotografer</option>
                        </select>
                    </div>
                        <hr>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="hapusModal<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel<?= $user['id'] ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel<?= $user['id'] ?>">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus pengguna ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/user/hapus/' . $user['id']) ?>" class="btn btn-danger btn- mx-1">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal Konfirmasi Hapus -->

<script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });
</script>

<?= $this->endSection(); ?>