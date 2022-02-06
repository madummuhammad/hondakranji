<!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <h2 class="text-center">Variasi Produk</h2>
                    <div class="row">
                        <?php foreach ($variasi as $key => $value): ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="stat-widget-two card-body">
                                        <div class="stat-content">
                                            <div class="stat-text"><?php echo $value['judul'].' '.$value['tipe'] ?></div>
                                            <div class="logo">
                                                <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['gambar_varian'] ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="stat-digit">Rp. <?php echo $value['harga'] ?></div>
                                            <div class="keterangan">
                                                <?php echo $value['spesifikasi'] ?>
                                            </div>
                                        </div>
                                        <div class="stat-content mt-2">
                                         <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalProjectEdit<?php echo $value['id_varian'] ?>"><i class="fas fa-edit"></i></button>
                                            <form action="<?php echo admin_url('produk/variasi/'.$this->uri->segment(4)) ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal fade" id="modalProjectEdit<?php echo $value['id_varian'] ?>">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                      <?php echo method('_patch') ?>
                                                      <?php echo get_id($value['id_varian']) ?>
                                                      <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Produk</h4>
                                                            <a type="button" class="close" data-dismiss="modal">&times;</a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                              <div class="col">
                                                                <div class="form-group text-center">
                                                                  <label for="" class="text-center p-2">Tipe</label>
                                                                  <input type="text" class="form-control <?php if (form_error('tipe')): ?>
                                                                  <?php echo 'is-invalid' ?>
                                                                  <?php endif ?>" id="email" name="tipe" value="<?php echo $value['tipe'] ?><?php echo set_value('tipe') ?><?php echo $this->session->flashdata('tipe') ?>">
                                                                  <div class="invalid-feedback">
                                                                    <?= form_error('tipe') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group text-center">
                                                                <label for="" class="p-2">Harga</label>
                                                                <input type="number" class="form-control <?php if (form_error('harga')): ?>
                                                                <?php echo 'is-invalid' ?>
                                                                <?php endif ?>" name="harga" placeholder="" value="<?php echo $value['harga'] ?><?php echo set_value('harga') ?><?php echo $this->session->flashdata('harga') ?>">
                                                                <div class="invalid-feedback">
                                                                    <?= form_error('harga') ?>
                                                                    <?php if ($this->session->flashdata('request')=='create'): ?>
                                                                        <?php echo $this->session->flashdata('description') ?>
                                                                    <?php endif ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group text-center">
                                                                <label for="" class="text-center p-2">Gambar</label>
                                                                <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['gambar_varian'] ?>" data-toggle="gambar" alt="" class="img-fluid ">
                                                                <input type="file" class="form-control gambar" name="gambar">
                                                                <div class="invalid-feedback">
                                                                    <?= form_error('gambar') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p class="text-left">Spesifikasi</p>
                                                                <textarea class="summernote" name="spesifikasi"><?php echo set_value('spesifikasi') ?><?php echo $value['spesifikasi'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-outline-primary">Kirim</button>
                                                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalProjectHapus<?php echo $value['id_varian'] ?>"><i class="fas fa-trash"></i></button>
                              <form action="<?php echo admin_url('produk/variasi/'.$this->uri->segment(4)) ?>" method="POST">
                                  <div class="modal fade" id="modalProjectHapus<?php echo $value['id_varian'] ?>">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <?php echo method('_get') ?>
                                      <?php echo get_id($value['id_varian']) ?>
                                      <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Konfirmasi Hapus</h4>
                                          <a type="button" class="close" data-dismiss="modal">&times;</a>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-outline-primary">Konfirmasi</button>
                                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php endforeach ?>
<div class="col-lg-3 col-sm-6">
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalProject"><i class="fas fa-plus"></i></button>
</div>
<div class="modal fade" id="modalProject">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <form action="<?php echo admin_url('produk/variasi/'.$this->uri->segment(4)) ?>" method="POST" enctype="multipart/form-data">
        <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <?php echo method('_post') ?>
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Produk</h4>
            <a type="button" class="close" data-dismiss="modal">&times;</a>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="text-center p-2">Tipe</label>
                  <input type="text" class="form-control <?php if (form_error('tipe')): ?>
                  <?php echo 'is-invalid' ?>
                  <?php endif ?>" id="email" name="tipe" value="<?php echo set_value('tipe') ?><?php echo $this->session->flashdata('tipe') ?>">
                  <div class="invalid-feedback">
                    <?= form_error('tipe') ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group text-center">
                <label for="" class="p-2">Harga</label>
                <input type="number" class="form-control <?php if (form_error('harga')): ?>
                <?php echo 'is-invalid' ?>
                <?php endif ?>" name="harga" placeholder="" value="<?php echo set_value('harga') ?><?php echo $this->session->flashdata('harga') ?>">
                <div class="invalid-feedback">
                    <?= form_error('harga') ?>
                    <?php if ($this->session->flashdata('request')=='create'): ?>
                        <?php echo $this->session->flashdata('description') ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group text-center">
                <label for="" class="text-center p-2">Gambar</label>
                <img src="<?php echo base_url() ?>assets/img/product/default.png" data-toggle="gambar" alt="" class="img-fluid ">
                <input type="file" class="form-control gambar" name="gambar">
                <div class="invalid-feedback">
                    <?= form_error('gambar') ?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card-body">
                <p class="text-left">Spesifikasi</p>
                <textarea class="summernote" name="spesifikasi"><?php echo set_value('spesifikasi') ?></textarea>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-outline-primary">Kirim</button>
    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>
<!-- /# column -->
</div>
</div>
</div>
        <!--**********************************
            Content body end
            ***********************************-->
            <?php $this->load->view('admin/partial/v_footer'); ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    <?php if ($this->session->flashdata('request')=='create'): ?>
                        <?php if ($this->session->flashdata('message')=='success'): ?>
                            toastr.success("Mohon tunggu sebentar", "Tambah Produk berhasil", {
                                timeOut: 2000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-center",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                        <?php endif ?>
                        <?php if ($this->session->flashdata('message')=='gagal'): ?>
                            toastr.error("Isi form dengan benar!", "Tambah Produk gagal", {
                                timeOut: 2000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-center",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                        <?php endif ?>
                    <?php endif ?>
                    
                    <?php if ($this->session->flashdata('request')=='update'): ?>
                        <?php if ($this->session->flashdata('message')=='success'): ?>
                            toastr.success("Edit data berhasil", {
                                timeOut: 2000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-center",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                        <?php endif ?>
                        <?php if ($this->session->flashdata('message')=='gagal'): ?>
                            toastr.error("Isi form dengan benar!", "Edit Produk gagal", {
                                timeOut: 2000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-center",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                        <?php endif ?>
                    <?php endif ?>

                    <?php if ($this->session->flashdata('request')=='delete'): ?>
                        <?php if ($this->session->flashdata('message')=='success'): ?>
                            toastr.success("Hapus data berhasil", {
                                timeOut: 2000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-center",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                        <?php endif ?>
                    <?php endif ?>
                })
            </script>