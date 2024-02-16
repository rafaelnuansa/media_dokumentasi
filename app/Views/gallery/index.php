<?php $this->extend('template_frontend'); ?>
<?php $this->section('title') ?>
Gallery
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Gallery</h2>
			<div class="row">
				<?php if (!empty($galleries)) : ?>
					<?php foreach ($galleries as $gallery) : ?>
						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="<?= base_url('img/files_mitra/' . $gallery['thumbnail']) ?>" class="card-img-top" alt="<?= $gallery['nama'] ?>">
								<div class="card-body">
									<h5 class="card-title"><?= $gallery['nama'] ?></h5>
									<a href="<?= base_url('gallery/' . $gallery['slug']) ?>" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
					<div class="col-md-12">
						<p>No galleries found.</p>
					</div>
				<?php endif; ?>
			</div>
			<!-- Pagination links -->
            <?= $pager->links('pager', 'custom_pager') ?>
		</div>
	</div>
</div>
<?php $this->endSection(); ?>
