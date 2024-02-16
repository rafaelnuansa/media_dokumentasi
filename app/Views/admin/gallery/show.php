<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Detail Galeri</h2>
			<?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success'); ?>
                </div>
            <?php endif; ?>
            <h3><?= $gallery['nama']; ?></h3>
            <p>Deskripsi: <?= $gallery['deskripsi']; ?></p>
            <p>Keyword: <?= $gallery['keyword']; ?></p>
            <p>Tanggal Kegiatan: <?= $gallery['date_kegiatan']; ?></p>
            <p>Lokasi: <?= $gallery['lokasi']; ?></p>
            <p>Fotografer: <?= $gallery['user_id']; ?></p>
            <p>Kategori: <?= $gallery['kategori_id']; ?></p>
            <p>Status: <?= $gallery['status']; ?></p>
            <p>Thumbnail:
				<div class="row">
					<div class="col-3">
					<img class="img-fluid img-thumbnail" src="<?= base_url('img/files_mitra/' . $gallery['thumbnail']); ?>" class="img-thumbnail" alt="<?= $gallery['thumbnail']; ?>">
					</div>
				</div>
			</p>
            <form action="<?= base_url('admin/gallery/addImageGallery/' . $gallery['id']); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan Gambar</button>
            </form>
			
			<h3>Gambar-gambar:</h3>
            <div class="row">
                <?php foreach ($images as $image) : ?>
                    <div class="col-md-3 mb-3">
                        <img src="<?= base_url('img/files_mitra/' . $image['image']); ?>" class="img-thumbnail" alt="<?= $image['image']; ?>">
                        <form action="<?= base_url('admin/gallery/deleteImageGallery/' . $image['id'] . '/' . $gallery['id']); ?>" method="post" class="mt-2">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
