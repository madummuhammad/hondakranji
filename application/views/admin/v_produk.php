<!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <h2 class="text-center">Produk</h2>
                    <div class="row">
                        <?php foreach ($produk as $key => $value): ?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="stat-widget-two card-body">
                                        <div class="stat-content">
                                            <div class="stat-text"><?php echo $value['judul'] ?></div>
                                            <div class="logo produk-logo">
                                                <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['logo'] ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="stat-digit">Rp. <?php echo $value['harga_mulai'] ?></div>
                                        </div>
                                        <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['gambar'] ?>" alt="" class="img-fluid">
                                        <div class="stat-content mt-2">
                                         <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalProjectEdit<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></button>
                                            <form action="<?php echo admin_url('produk') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal fade" id="modalProjectEdit<?php echo $value['id'] ?>">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                      <?php echo method('_patch') ?>
                                                      <?php echo get_id($value['id']) ?>
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
                                                                  <label for="" class="text-center p-2">Nama Produk</label>
                                                                  <input type="text" class="form-control <?php if (form_error('nama_produk')): ?>
                                                                  <?php echo 'is-invalid' ?>
                                                                  <?php endif ?>" id="email" name="nama_produk" value="<?php echo $value['judul'] ?><?php echo set_value('nama_produk') ?><?php echo $this->session->flashdata('nama_produk') ?>">
                                                                  <div class="invalid-feedback">
                                                                    <?= form_error('nama_produk') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group text-center">
                                                                <label for="" class="p-2">Harga Mulai</label>
                                                                <input type="number" class="form-control <?php if (form_error('harga_mulai')): ?>
                                                                <?php echo 'is-invalid' ?>
                                                                <?php endif ?>" name="harga_mulai" placeholder="" value="<?php echo $value['harga_mulai'] ?><?php echo set_value('harga_mulai') ?><?php echo $this->session->flashdata('harga_mulai') ?>">
                                                                <div class="invalid-feedback">
                                                                    <?= form_error('harga_mulai') ?>
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
                                                                <label for="" class="text-center p-2">Logo Produk</label>
                                                                <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['logo'] ?>" alt="" data-toggle="logo" class="img-fluid">
                                                                <input type="file" class="form-control logo" name="logo">
                                                                <div class="invalid-feedback">
                                                                    <?= form_error('nama_project') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group text-center">
                                                                <label for="" class="text-center p-2">Gambar</label>
                                                                <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['gambar'] ?>" data-toggle="gambar" alt="" class="img-fluid ">
                                                                <input type="file" class="form-control gambar" name="gambar">
                                                                <div class="invalid-feedback">
                                                                    <?= form_error('nama_project') ?>
                                                                </div>
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
                              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalProjectHapus<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></button>
                              <a href="<?php echo admin_url('produk/variasi/').$value['id'] ?>" class="btn btn-outline-warning">Variasi</a>
                              <form action="<?php echo admin_url('produk') ?>" method="POST">
                                  <div class="modal fade" id="modalProjectHapus<?php echo $value['id'] ?>">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <?php echo method('_get') ?>
                                      <?php echo get_id($value['id']) ?>
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
  <div class="modal-dialog modal-dialog-centered">
    <form action="<?php echo admin_url('produk') ?>" method="POST" enctype="multipart/form-data">
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
                  <label for="" class="text-center p-2">Nama Produk</label>
                  <input type="text" class="form-control <?php if (form_error('nama_produk')): ?>
                  <?php echo 'is-invalid' ?>
                  <?php endif ?>" id="email" name="nama_produk" value="<?php echo set_value('nama_produk') ?><?php echo $this->session->flashdata('nama_produk') ?>">
                  <div class="invalid-feedback">
                    <?= form_error('nama_produk') ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group text-center">
                <label for="" class="p-2">Harga Mulai</label>
                <input type="number" class="form-control <?php if (form_error('harga_mulai')): ?>
                <?php echo 'is-invalid' ?>
            <?php endif ?><?php if ($this->session->flashdata('request')=='create'): ?>
            <?php echo 'is-invalid' ?>
            <?php endif ?>" name="harga_mulai" placeholder="" value="<?php echo set_value('harga_mulai') ?><?php echo $this->session->flashdata('harga_mulai') ?>">
            <div class="invalid-feedback">
                <?= form_error('harga_mulai') ?>
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
            <label for="" class="text-center p-2">Logo Produk</label>
            <img src="<?php echo base_url() ?>assets/img/product/default.png" alt="" data-toggle="logo" class="img-fluid">
            <input type="file" class="form-control logo" name="logo">
            <div class="invalid-feedback">
                <?= form_error('nama_project') ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group text-center">
            <label for="" class="text-center p-2">Gambar</label>
            <img src="<?php echo base_url() ?>assets/img/product/default.png" data-toggle="gambar" alt="" class="img-fluid ">
            <input type="file" class="form-control gambar" name="gambar">
            <div class="invalid-feedback">
                <?= form_error('nama_project') ?>
            </div>
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