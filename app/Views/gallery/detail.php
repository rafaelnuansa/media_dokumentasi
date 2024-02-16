<?php $this->extend('template_frontend'); ?>
<?php $this->section('title') ?>
<?= $gallery['nama'] ?>
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?= $gallery['nama'] ?></h2>
            <div class="card mb-4">
                <img src="<?= base_url('img/files_mitra/' . $gallery['thumbnail']) ?>" class="card-img-top" alt="<?= $gallery['nama'] ?>">
                <div class="card-body">
                    <p><?= $gallery['deskripsi'] ?></p>
                </div>
            </div>
            <h3>Gallery Images</h3>
            <div class="row">
                <?php if (!empty($images)) : ?>
                    <?php foreach ($images as $image) : ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?= base_url('img/files_mitra/' . $image['image']) ?>" class="card-img-top" alt="<?= $image['image'] ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="col-md-12">
                        <p>No images found for this gallery.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>
