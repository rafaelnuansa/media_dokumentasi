<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container mt-5 mb-5">
  <div class="card bg-secondary border-0 shadow-sm">
      <div class="card-body">
          <h4 class="card-title mb-4">History Orders</h4>
          <div class="table-responsive">
              <table class="table table-striped table-bordered table-dark" id="historyTable">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Order ID</th>
                          <th>Nama Produk</th>
                          <th>Harga</th>
                          <th>Status Pembayaran</th>
                          <th>Tanggal Pesanan</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($dataorder as $key => $order): ?>
                          <tr>
                              <td><?= $key + 1 ?></td>
                              <td class="text-nowrap"><?= $order->order_id ?></td>
                              <td class="text-nowrap"><?= $order->nama_produk ?></td>
                              <td class="text-nowrap">Rp <?= number_format($order->harga_produk, 0, ',', '.') ?></td>
                              <td class="text-nowrap"><?= $order->status_pembayaran ?></td>
                              <td class="text-nowrap"><?= date('d-m-Y', strtotime($order->date_create)) ?></td>
                              <td>
                                  <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal<?= $order->id ?>">Detail</button>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<!-- Modal Detail Order -->
<?php foreach ($dataorder as $order): ?>
    <div class="modal fade" id="detailModal<?= $order->id ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel<?= $order->id ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel<?= $order->order_id ?>">Detail Order #<?= $order->order_id ?></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-dark">
                        <tr>
                            <th>Order ID</th>
                            <td><?= $order->order_id ?></td>
                        </tr>
                        <tr>
                            <th>Nama Produk</th>
                            <td><?= $order->nama_produk ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp <?= number_format($order->harga_produk, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <th>Status Pembayaran</th>
                            <td><?= $order->status_pembayaran ?></td>
                        </tr>
                        <tr>
                            <th>Status Pembelian</th>
                            <td><?= $order->status_pembelian ?></td>
                        </tr>
                        <tr>
                            <th>Pesan Admin</th>
                            <td><?= $order->note_admin ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pesanan</th>
                            <td><?= date('d-m-Y', strtotime($order->date_create)) ?></td>
                        </tr>
                    </table>
                    <div class="alert alert-info" role="alert">
                      Hubungi kami jika terdapat kendala pada pesanan anda.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
    $(document).ready(function() {
        $('#historyTable').DataTable();
    });
</script>

<?= $this->endSection() ?>