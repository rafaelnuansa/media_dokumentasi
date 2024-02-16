<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="my-4">Edit Galeri</h2>
			<form action="<?= base_url('admin/gallery/update/' . $gallery['id']) ?>" method="post">
				<div class="mb-3">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $gallery['nama'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="deskripsi" class="form-label">Deskripsi</label>
					<textarea class="form-control" id="deskripsi" name="deskripsi" required><?= $gallery['deskripsi'] ?></textarea>
				</div>
				<div class="mb-3">
					<label for="keyword" class="form-label">Keyword</label>
					<input type="text" class="form-control" id="keyword" name="keyword" value="<?= $gallery['keyword'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="date_kegiatan" class="form-label">Tanggal Kegiatan</label>
					<input type="date" class="form-control" id="date_kegiatan" name="date_kegiatan" value="<?= $gallery['date_kegiatan'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="lokasi" class="form-label">Lokasi</label>
					<input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $gallery['lokasi'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="user_id" class="form-label">Fotografer</label>
					<select class="form-select" id="user_id" name="user_id" required>
						<?php foreach ($users as $user) : ?>
							<option value="<?= $user['id'] ?>" <?= $user['id'] === $gallery['user_id'] ? 'selected' : '' ?>><?= $user['username'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="mb-3">
					<label for="kategori_id" class="form-label">ID Kategori</label>
					<select class="form-select" id="kategori_id" name="kategori_id" required>
						<?php foreach ($categories as $category) : ?>
							<option value="<?= $category['id'] ?>" <?= $category['id'] === $gallery['kategori_id'] ? 'selected' : '' ?>><?= $category['nama'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="mb-3">
					<label for="status" class="form-label">Status</label>
					<select class="form-select" id="status" name="status" required>
						<option value="publish" <?= $gallery['status'] === 'publish' ? 'selected' : '' ?>>Publish</option>
						<option value="draft" <?= $gallery['status'] === 'draft' ? 'selected' : '' ?>>Draft</option>
					</select>
				</div>
				
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
