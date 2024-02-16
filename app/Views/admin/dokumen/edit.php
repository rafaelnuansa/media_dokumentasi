<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2>Edit Dokumen</h2>
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
			<form action="<?= base_url('admin/dokumen/update/' . $dokumen['id']) ?>" method="POST" enctype="multipart/form-data">

				<?= csrf_field() ?>
				<div class="mb-3">
					<label for="nama" class="form-label">Nama Dokumen</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $dokumen['nama'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="deskripsi" class="form-label">Deskripsi</label>
					<textarea class="form-control" id="deskripsi" name="deskripsi" required><?= $dokumen['deskripsi'] ?></textarea>
				</div>
				<div class="mb-3">
					<label for="keyword" class="form-label">Keyword</label>
					<input type="text" class="form-control" id="keyword" name="keyword" value="<?= $dokumen['keyword'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="thumbnail" class="form-label">Thumbnail</label>
					<input type="file" class="form-control" id="thumbnail" name="thumbnail">
					<img src="<?= base_url('img/dokumen/' . $dokumen['thumbnail']) ?>" class="img-thumbnail mt-2" alt="<?= $dokumen['thumbnail'] ?>">
					<input type="hidden" name="old_thumbnail" value="<?= $dokumen['thumbnail'] ?>">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<a href="<?= base_url('admin/dokumen') ?>" class="btn btn-secondary">Kembali</a>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
