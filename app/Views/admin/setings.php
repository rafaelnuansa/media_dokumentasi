<?php $this->extend('template_admin'); ?>
<?php $this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  border-0 rounded-4 shadow-sm mb-5">
                <div class="card-body">
                    <h3 class="text-center mb-4">Settings Web</h3>

                    <?php if (session()->has('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('success') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->has('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('admin/settings-web/update') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label class="form-label">Web Title</label>
                            <input type="text" class="form-control" name="web_title" value="<?= $settings['web_title'] ?>" required>
                        </div>
                    <div class="mb-3">
                                              <?php if (!empty($settings['web_icon'])) : ?>
                                              <div class="web-logo">
                            <img src="<?= base_url('public/img/web/' . $settings['web_icon']) ?>" alt="Web Icon" class="img-thumbnail mb-2" style="max-width: 100px;">
                      </div>
                        <?php endif; ?>
                        <label class="form-label">Web Icon</label>
                        <input type="file" class="form-control" name="web_icon" accept="image/*">
                        <small class="text-muted">Format: JPEG, PNG, GIF. Maksimum ukuran: 2MB.</small>
                    </div>
                    <div class="mb-3">
                      <?php if (!empty($settings['web_logo'])) : ?>
                      <div class="web-logo">
                            <img src="<?= base_url('public/img/web/' . $settings['web_logo']) ?>" alt="Web Logo" class="img-thumbnail mb-2" style="max-width: 100px;">
                        <?php endif; ?>
                      </div>
                        <label class="form-label">Web Logo</label>
                        <input type="file" class="form-control" name="web_logo" accept="image/*">
                        <small class="text-muted">Format: JPEG, PNG, GIF. Maksimum ukuran: 2MB.</small>
                    </div>
                        <div class="mb-3">
                            <label class="form-label">Web Author</label>
                            <input type="text" class="form-control" name="web_author" value="<?= $settings['web_author'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Web Keywords</label>
                            <input type="text" class="form-control" name="web_keywords" value="<?= $settings['web_keywords'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Web Description</label>
                            <textarea class="form-control" name="web_description" required><?= $settings['web_description'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Wa API Key</label>
                            <input type="text" class="form-control" name="wa_apikey" value="<?= $settings['wa_apikey'] ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>