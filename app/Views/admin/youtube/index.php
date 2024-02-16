<?= $this->extend('template_admin'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
    <div class="card bg-light border-0 shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-4">Tambah Video</h4>
            
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
            
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                Tambah Link Video
            </button>

            <!-- Tabel Data -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-light" id="paymentTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($youtube as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><img src="<?= base_url('public/img/youtube/' . $row['gambar']); ?>" alt="Gambar" style="max-width: 100px;"></td>
                                <td><?= $row['judul']; ?></td>
                                <td><?= $row['link']; ?></td>
                                <td>
                                    <!-- Hapus Button -->
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id']; ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Metode Pembayaran -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Link Youtube</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('admin/youtube/create') ?>" method="post" enctype="multipart/form-data">
                  <!-- Nama Bank -->
                  <div class="mb-3">
                      <label for="judul" class="form-label">Judul</label>
                      <input type="text" class="form-control" id="judul" name="judul" required>
                  </div>
              
                  <!-- Nama Rekening -->
                  <div class="mb-3">
                      <label for="keterangan" class="form-label">Keterangan</label>
                      <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                  </div>

                  <!-- Nama Rekening -->
                  <div class="mb-3">
                      <label for="link" class="form-label">Link Youtube</label>
                      <input type="text" class="form-control" id="link" name="link" required>
                  </div>
                  <!-- Gambar -->
                  <div class="mb-3">
                      <label for="gambar" class="form-label">Gambar</label>
                      <input type="file" class="form-control" id="gambar" name="gambar" required>
                  </div>
              
                  <!-- Tombol Simpan -->
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<?php foreach ($youtube as $row): ?>
<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="hapusModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel<?= $row['id']; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel<?= $row['id']; ?>">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus metode ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('admin/youtube/hapus/' . $row['id']) ?>" class="btn btn-danger mx-1">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
    $(document).ready(function() {
        $('#paymentTable').DataTable();
    });
</script>

<?= $this->endSection(); ?>