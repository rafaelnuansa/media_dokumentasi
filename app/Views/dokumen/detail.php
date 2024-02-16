<?php $this->extend('template_frontend'); ?>

<?php $this->section('title') ?>
<?= $dokumen['nama'] ?>
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2><?= $dokumen['nama'] ?></h2>
			<p><?= $dokumen['deskripsi'] ?></p>
			<?php if (!empty($dokumen['thumbnail'])) : ?>
				<img src="<?= base_url('img/dokumen/' . $dokumen['thumbnail']) ?>" alt="<?= $dokumen['nama'] ?>" class="img-fluid">
			<?php endif; ?>
			<p>File Dokumen:</p>
			<?php if (!empty($files)) : ?>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>File Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($files as $file) : ?>
								<tr>
									<td><?= $file['file'] ?></td>
									<td><a href="<?= base_url('uploads/' . $file['file']) ?>">Download</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			<?php else : ?>
				<p>No files available.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $this->endSection(); ?>
