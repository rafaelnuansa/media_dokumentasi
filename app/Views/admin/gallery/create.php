<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2 class="my-4">Tambah Galeri</h2>
			<?php if (session()->has('errors')) : ?>
				<div class="alert alert-danger" role="alert">
					<ul>
						<?php foreach (session('errors') as $error) : ?>
							<li><?= esc($error) ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			<?php endif; ?>
			<form action="<?= base_url('admin/gallery/store') ?>" enctype="multipart/form-data" method="post">
				<div class="mb-3">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama galeri" required>
				</div>
				<div class="mb-3">
					<label for="deskripsi" class="form-label">Deskripsi</label>
					<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi galeri" required></textarea>
				</div>
				<div class="mb-3">
					<label for="keyword" class="form-label">Keyword</label>
					<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan keyword galeri" required>
				</div>
				<div class="mb-3">
					<label for="date_kegiatan" class="form-label">Tanggal Kegiatan</label>
					<input type="date" class="form-control" id="date_kegiatan" name="date_kegiatan" required>
				</div>
				<div class="mb-3">
					<label for="lokasi" class="form-label">Lokasi</label>
					<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan lokasi kegiatan" required>
				</div>
				<div class="mb-3">
					<label for="user_id" class="form-label">Fotorgrafer</label>
					<select class="form-select" id="user_id" name="user_id" required>
						<option value="">Pilih Pengguna</option>
						<?php foreach ($users as $user) : ?>
							<option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="mb-3">
					<label for="kategori_id" class="form-label">Kategori</label>
					<select class="form-select" id="kategori_id" name="kategori_id" required>
						<option value="">Pilih Kategori</option>
						<?php foreach ($categories as $category) : ?>
							<option value="<?= $category['id'] ?>"><?= $category['nama'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="mb-3">
					<label for="status" class="form-label">Status</label>
					<select class="form-select" id="status" name="status" required>
						<option value="">Pilih status</option>
						<option value="publish">Publish</option>
						<option value="draft">Draft</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="thumbnail" class="form-label">Thumbnail * 1 File Image</label>
					<input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" required>
				</div>
				<div class="mb-3">
					<label for="image" class="form-label">Gambar Gallery * Bisa Lebih dari 1</label>
					<input type="file" class="form-control" id="images" name="image[]" multiple accept="image/*" required>
				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
