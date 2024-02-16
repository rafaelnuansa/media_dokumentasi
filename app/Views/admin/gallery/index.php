<?= $this->extend('template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Daftar Galeri</h2>
            <a href="<?= base_url('admin/gallery/create'); ?>" class="btn btn-primary mb-3">Tambah Galeri</a>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success'); ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">User</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($galleries as $gallery) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $gallery['nama']; ?></td>
                                <td><?= $gallery['deskripsi']; ?></td>
                                 <td>
                                    <a href="<?= base_url('admin/gallery/show/' . $gallery['id']); ?>" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="<?= base_url('admin/gallery/edit/' . $gallery['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?= base_url('admin/gallery/delete/' . $gallery['id']); ?>" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
			<div class="row mb-3">
            <?= $pager->links('default', 'custom_pager') ?> 
			</div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
