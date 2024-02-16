<?= $this->extend('template_admin') ?>

<?= $this->section('content') ?>
 <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Tambah Foto Kemitraan</h5>
                    </div>
                    <div class="card-body">
                         <?= form_open_multipart('admin/files-mitra/store', ['id' => 'myForm']) ?>

                <div class="form-group row">
                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Nama Kegiatan</label>
                                        <div class="col-xl-8 col-md-7">
                                           <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                </div>

                <div class="form-group row editor-label">
                                    <label class="col-xl-3 col-md-4"><span>&nbsp;</span>Rincian Kegiatan</label>
                                        <div class="col-xl-8 col-md-7">
                                            <textarea rows="4" class="form-control"name="deskripsi" id="deskripsi"></textarea>
                                        </div>
                                        </div>

                 <div class="form-group row">
                  <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Kategori</label>
                   <div class="col-xl-8 col-md-7">
                       <select class="form-select" id="kategori" name="kategori" required>
                              <option value="">--Pilih Kategori</option>
                              <option value="5">File Mitra 1</option>
                              <option value="6">File Mitra 2</option>
                              <option value="7">File Mitra 3</option>
                          </select>
                    </div>
                </div>
                  <div class="form-group row">
                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Fotografer</label>
                                        <div class="col-xl-8 col-md-7">
                                          <select class="form-select" id="fotografer" name="fotografer" required>
                                              <option value="">--Pilih Fotografer</option>
                                              <option value="Om Bob">Om Bob</option>
                                              <option value="Safran Hasibuan">Safran Hasibuan</option>
                                          </select>
                                         </div>
                                          <div class="col-xl-1 col-md-1">
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Add</button>
                                          </div>

                </div>
                 <div class="form-group row">
                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Tanggal Kegiatan</label>
                                        <div class="col-xl-8 col-md-7">
                                           <input class="form-control"  data-val-required="Date is required" id="tanggal_kegiatan" name="tanggal_kegiatan" type="date"  />
                                        </div>
                </div>

               <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Lokasi/Alamat Kegiatan</label>
                                        <div class="col-xl-8 col-md-7">
                                           <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                                        </div>
                                    </div>

                <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Status</label>
                                        <div class="col-xl-8 col-md-7">
                                            <div class="checkbox checkbox-primary ">
                                                <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="" id="status" name="status">
                                                <label for="checkbox-primary-2">Ceklis Publish Galeri</label>
                                            </div>
                                        </div>
                                    </div>

                  <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Keyword</label>
                                        <div class="col-xl-8 col-md-7">
                                           <input type="text" class="form-control" id="keyword" name="keyword" required>
                                        </div>
                                    </div>

                 <div class="form-group row">
                     <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Upload Gambar </label>
                            <div class="col-xl-6 col-md-6">
                                <input type="file" class="form-control" id="gambar" name="gambar[]" multiple accept="image/*" required>
                            </div>
                            <label for="validationCustom0" class="col-xl-3 col-md-2">
                               <i class="fa fa-cloud-upload"></i> (Max 20Foto / 30Mb)
                            </label>
                 </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url(); ?>/admin/files-mitra" type="submit" class="btn btn-danger">Batal</a>

            <?= form_close() ?>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

<?= $this->endSection() ?>