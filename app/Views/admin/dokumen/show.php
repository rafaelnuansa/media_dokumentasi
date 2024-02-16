<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h2>Detail Dokumen</h2>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?= $dokumen['nama'] ?></h5>
					<p class="card-text"><?= $dokumen['deskripsi'] ?></p>
					<p class="card-text"><strong>Keyword:</strong> <?= $dokumen['keyword'] ?></p>
					<p class="card-text"><strong>Thumbnail:</strong></p>
					<img class="img-thumbnail" style="max-height: 60px;" src="<?= base_url('img/dokumen/' . $dokumen['thumbnail']) ?>" class="img-thumbnail" alt="<?= $dokumen['thumbnail'] ?>">
				</div>
			</div>
			<div class="mt-3">
    <h5>File Dokumen</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama File</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dokumenFiles as $index => $file) : ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
					<td><a href="<?= base_url('uploads/' . $file['file']) ?>" target="_blank"><?= $file['file'] ?></a></td>

                    <td>
                        <a href="<?= base_url('admin/dokumen/deleteFile/' . $file['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

				</div>
	</div>

	<div class="row">
		<!-- Form untuk menambahkan file dokumen -->
		<form action="<?= base_url('admin/dokumen/addFile/' . $dokumen['id']) ?>" method="post" enctype="multipart/form-data" class="mt-3">
			<div class="form-group">
				<label for="file">File Dokumen Baru</label>
				<input type="file" class="form-control" id="file" name="file[]" multiple>
			</div>
			<button type="submit" class="btn btn-primary">Unggah</button>
		</form>
	</div>
</div>

<?= $this->endSection(); ?>
