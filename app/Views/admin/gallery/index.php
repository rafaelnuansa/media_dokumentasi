<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="my-4">Daftar Galeri</h2>
			<a href="<?= base_url('admin/gallery/create'); ?>" class="btn btn-primary mb-3">Tambah Galeri</a>
			<?php if (session()->get('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->get('success'); ?>
				</div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">Deskripsi</th>
							<th scope="col">User</th>
							<th scope="col">Kategori</th>
							<th scope="col">Status</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($galleries['data'] as $gallery) : ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $gallery->nama; ?></td>
								<td><?= $gallery->deskripsi; ?></td>
								<td><?= $gallery->username; ?></td>
								<td><?= $gallery->nama_kategori; ?></td>
								<td><?= $gallery->status; ?></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</button>
										<ul class="dropdown-menu">
											<li class="d-block"><a class="dropdown-item" href="<?= base_url('admin/gallery/download/' . $gallery->id) ?>">Download Gallery</a></li>
										    <li class="d-block"><hr class="dropdown-divider"></li>
											<li class="d-block"><a class="dropdown-item" href="<?= base_url('admin/gallery/show/' . $gallery->id) ?>">Lihat</a></li>
											<li class="d-block"><a class="dropdown-item" href="<?= base_url('admin/gallery/edit/' . $gallery->id) ?>">Edit</a></li>
											<li class="d-block">
												<form action="<?= base_url('admin/gallery/delete/' . $gallery->id) ?>" method="post">
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
			<div class="row mb-3">
				<?= $galleries['links'] ?>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
