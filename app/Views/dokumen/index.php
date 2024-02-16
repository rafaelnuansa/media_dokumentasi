<?php $this->extend('template_frontend'); ?>

<?php $this->section('title') ?>
Dokumen
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Dokumen</h2>
            <div class="row">
                <?php if (!empty($dokumen)) : ?>
                    <?php foreach ($dokumen as $item) : ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <?php if (!empty($item['thumbnail'])) : ?>
                                    <img src="<?= base_url('img/dokumen/' . $item['thumbnail']) ?>" class="card-img-top" alt="<?= $item['nama'] ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item['nama'] ?></h5>
                                    <a href="<?= base_url('dokumen/' . $item['slug']) ?>" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="col-md-12">
                        <p>No documents found.</p>
                    </div>
                <?php endif; ?>
            </div>
            <!-- Pagination links -->
            <?= $pager->links('pager', 'custom_pager') ?>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>
