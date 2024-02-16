<?= $this->extend('template_admin') ?>
<?= $this->section('content') ?>

<div class="container mt-5 mb-5">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                            <a href="<?= base_url(); ?>admin/files-mitra/create" ><button type="button" class="btn btn-primary" ><i class="fa fa-plus-circle"></i>&nbsp;Tambah Galeri</button></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Galeri</li>
                                <li class="breadcrumb-item active">Daftar Foto</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Container-fluid Ends-->


            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                 <?php foreach ($files as $key => $row): ?>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body product-box">
                                <div class="img-wrapper">
                                 <?php
                                  $files_gambar = $gambarFilesModel->where('files_id', $row['files_id'])->first();
                                  ?>
                                  <!--<div class="lable-block"><span class="lable3"><?= $row['kategori'] ?></span></div>-->
                                    <div class="front">
                                        <a href="<?= base_url('files-mitra/' . $row['slug']); ?>"><img src="<?= base_url($files_gambar->url_gambar ?? 'path/default.jpg'); ?>" class="img-fluid blur-up lazyload bg-img" alt="" target="_blank"></a>
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <button class="btn" type="button" ><i class="fa fa-link font-success" data-bs-toggle="modal" data-bs-target="#linkModal<?= $row['files_id'] ?>" data-toggle='tooltip' title='Embed Link'></i></button>
                                                </li>
                                                <!--<li>
                                                   <a href="<?= base_url('files/' . $row['slug']); ?>" target="_blank"  ><button class="btn" type="button" ><i class="fa fa-list-alt font-success" data-toggle='tooltip' title='Detail' > </i></button></a>
                                                </li> -->
                                                <li>
                                                    <button class="btn" type="button" ><i class="fa fa-edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['files_id'] ?>" data-toggle='tooltip' title='Edit'></i></button>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <button class="btn" type="button" ><i class="fa fa-trash font-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['files_id'] ?>" data-toggle='tooltip' title='Hapus'></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a href="<?= base_url('files-mitra/' . $row['slug']); ?>" target="_blank">
                                        <b><?= $row['nama'] ?></b>
                                    </a>
                                    <br />
                                    <i class="fa fa-calendar"></i>&nbsp;<?= $row['date_create'] ?><!--<del>$600.00</del>-->
                                    <ul class="color-variant">
                                        <?php if ($row['status']=='Y') :?>
                                                 <span class="badge badge-success" data-bs-toggle="modal" data-bs-target="#publishModal<?= $row['files_id'] ?>" data-toggle='tooltip' title='UnPublish'>Publish</span>
                                              <?php elseif($row['status']=='N'):  ?>
                                                 <span class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#unpublishModal<?= $row['files_id'] ?>"data-toggle='tooltip' title='Publish'>UnPublish</span>
                                               <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php endforeach; ?>
                </div>
            </div>
            <!-- Container-fluid Ends-->
<?php foreach ($files as $key => $row): ?>
<!-- Modal Detail Produk -->
    <div class="modal fade" id="detailModal<?= $row['files_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel<?= $row['files_id'] ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel<?= $row['files_id'] ?>">Detail Foto #<?= $row['files_id'] ?></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-light">
                        <tr>
                            <th>Galeri ID</th>
                            <td><?= $row['files_id'] ?></td>
                        </tr>
                        <tr>
                            <th>Foto Galeri</th>
                            <td><img src="<?= base_url($files_gambar->url_gambar ?? 'path/default.jpg'); ?>" class="rounded" style="width:100px; height:50px; object-fit:cover;"></td>
                        </tr>
                        <tr>
                            <th>Nama Galeri</th>
                            <td><?= $row['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Lokasi/Alamat Kegiatan</th>
                            <td><?= $row['lokasi'] ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $row['status'] ?></td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td><?= $row['slug'] ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pembuatan</th>
                            <td><?= date('d-m-Y', strtotime($row['date_create'])) ?></td>
                        </tr>
                    </table>
                    <div class="mb-3">
                                            <label for="note_admin" class="form-label">Deskripsi</label>
                                            <textarea class="form-control bg-dark" name="note_admin" id="note_admin" rows="3" disabled><?= htmlspecialchars($row['deskripsi']) ?></textarea>
                                        </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Modal Edit Produk -->
  <div class="modal fade" id="editModal<?= $row['files_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $row['files_id'] ?>" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel<?= $row['files_id'] ?>">Edit Foto Kemitraan</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- Form untuk mengedit data -->
                  <form action="<?= base_url('admin/files-mitra/update/' . $row['files_id']) ?>" method="post" enctype="multipart/form-data">
                      <div class="mb-3">
                          <label for="nama" class="form-label">Nama Kegiatan</label>
                          <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama'] ?>" required>
                      </div>
                      <div class="mb-3">
                      <label for="deskripsi" class="form-label">Rincian Kegiatan</label>
                      <textarea rows="4" class="form-control"  name="deskripsi" id="deskripsi" value="<?= $row['deskripsi'] ?>"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="status" class="form-label">Fotografer</label>
                          <select class="form-select" id="fotografer" name="fotografer" required>
                              <option value="Om Bob" <?= ($row['fotografer'] == 'Om Bob') ? 'selected' : '' ?>>Om Bob</option>
                              <option value="Safran Hasibuan" <?= ($row['fotografer'] == 'Safran Hasibuan') ? 'selected' : '' ?>>Safran Hasibuan</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="kategori" class="form-label">Kategori</label>
                          <select class="form-select" id="kategori" name="kategori" required>
                              <option value="5" <?= ($row['kategori'] == '5') ? 'selected' : '' ?>>File Mitra 1</option>
                              <option value="6" <?= ($row['kategori'] == '6') ? 'selected' : '' ?>>File Mitra 2</option>
                              <option value="7" <?= ($row['kategori'] == '7') ? 'selected' : '' ?>>File Mitra 3</option>
                          </select>
                      </div>

                       <div class="mb-3">
                       <label for="keyword" class="form-label"><span>*</span>Tanggal Kegiatan</label>
                      <input class="form-control"  data-val-required="Date is required" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?= $row['date_kegiatan'] ?>" type="date"  />
                      </div>
                     <div class="mb-3">
                          <label for="lokasi" class="form-label">Lokasi/Alamat Kegiatan</label>
                          <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $row['lokasi'] ?>" required>
                      </div>

                    <div class="mb-3">
                       <label for="keyword" class="form-label"><span>*</span>Keyword</label>
                       <input type="text" class="form-control" id="keyword" name="keyword" value="<?= $row['keyword'] ?>" required>
                      </div>

                      <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar (Max 20Foto / 30Mb)</label>
                          <input type="file" class="form-control" id="gambar" name="gambar[]" multiple accept="image/*">
                          <small class="text-danger">*Jika melakukan edit anda harus melakukan upload ulang semua gambar</small>
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="hapusModal<?= $row['files_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel<?= $row['files_id'] ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel<?= $row['files_id'] ?>">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus Galeri ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('admin/files-mitra/hapus/' . $row['files_id']) ?>" class="btn btn-danger mx-1" >Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Publish -->
<div class="modal fade" id="publishModal<?= $row['files_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel<?= $row['files_id'] ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel<?= $row['files_id'] ?>">Konfirmasi UnPublish</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin Tidak Publish Galeri ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('admin/files-mitra/publish/' . $row['files_id']) ?>" class="btn btn-danger mx-1" >UnPublish</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi UnPublish -->
<div class="modal fade" id="unpublishModal<?= $row['files_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel<?= $row['files_id'] ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel<?= $row['files_id'] ?>">Konfirmasi Publish</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin Publish Galeri ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('admin/files-mitra/unpublish/' . $row['files_id']) ?>" class="btn btn-danger mx-1" >Publish</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Generate Link -->
<div class="modal fade" id="linkModal<?= $row['files_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="linkModalLabel<?= $row['files_id'] ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel<?= $row['files_id'] ?>">Embed Link Galeri</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <input type="text" class="form-control" id="link" name="link" value="<?= base_url('files-mitra/' . $row['slug']); ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button> 
                <a href="#" value="Copy Url" onclick="Copy();" class="btn btn-danger mx-1" ><i class="fa fa-copy">&nbsp;Copy Link</i></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
    <script type="text/javascript">
        function Copy() {
            var Url = document.getElementById("url");
            Url.innerHTML = window.location.href;
            console.log(Url.innerHTML)
            Url.select();
            document.execCommand("copy");
          }
    </script>
<script>
    $(document).ready(function() {
        $('#produkTable').DataTable();

        <?php foreach ($files as $key => $row): ?>
            var quill<?= $key ?> = new Quill('#editor<?= $key ?>', {
                theme: 'snow'
            });

            var existingDeskripsi<?= $key ?> = document.getElementById('deskripsi<?= $key ?>').value;
            quill<?= $key ?>.root.innerHTML = existingDeskripsi<?= $key ?>;

            quill<?= $key ?>.on('text-change', function() {
                var deskripsiInput<?= $key ?> = document.getElementById('deskripsi<?= $key ?>');
                deskripsiInput<?= $key ?>.value = quill<?= $key ?>.root.innerHTML;
            });
        <?php endforeach; ?>
    });
</script>

<?= $this->endSection() ?>