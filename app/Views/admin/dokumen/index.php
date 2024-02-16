<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Daftar Dokumen</h2>
            <a href="<?= base_url('admin/dokumen/create'); ?>" class="btn btn-primary mb-3">Tambah Dokumen</a>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success'); ?>
                </div>
            <?php endif; ?>
			<?php if (session()->get('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->get('error'); ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Keyword</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($dokumen as $doc) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $doc['nama']; ?></td>
                                <td><?= $doc['deskripsi']; ?></td>
                                <td><?= $doc['keyword']; ?></td>
                                <td><img style="max-width: 48px;" class="img-thumbnail" src="<?= base_url('img/dokumen/' . $doc['thumbnail']); ?>" class="img-thumbnail" alt="<?= $doc['thumbnail']; ?>"></td>
                                <td>
								<div class="dropdown">
										<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</button>
										<ul class="dropdown-menu">
											<li class="d-block"><a class="dropdown-item" href="<?= base_url('admin/dokumen/download/' . $doc['id']) ?>">Download dokumen</a></li>
										    <li class="d-block"><hr class="dropdown-divider"></li>
											<li class="d-block"><a class="dropdown-item" href="<?= base_url('admin/dokumen/show/' . $doc['id']) ?>">Lihat</a></li>
											<li class="d-block"><a class="dropdown-item" href="<?= base_url('admin/dokumen/edit/' . $doc['id']) ?>">Edit</a></li>
											<li class="d-block">
												<form action="<?= base_url('admin/dokumen/delete/' . $doc['id']) ?>" method="post">
													<input type="hidden" name="_method" value="DELETE">
													<button type="submit" class="dropdown-item">Hapus</button>
												</form>
											</li>
										</ul>
									</div>
                                </td>
								
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?= $pager->links('default', 'custom_pager'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
