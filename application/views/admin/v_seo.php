        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
                <div class="container-fluid">
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pengaturan SEO</h4>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <section>
                                            <form action="<?php echo admin_url('seo') ?>" method="POST">
                                                <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                                                <?php echo method('_patch') ?>
                                                <div class="row">
                                                    <div class="col-lg-12 mb-4">
                                                        <div class="form-group">
                                                            <label class="text-label">Meta Description</label>
                                                            <input type="text" name="deskripsi" class="form-control" placeholder="Masukan meta deskripsi" value="<?php echo $seo['deskripsi'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-4">
                                                        <div class="form-group">
                                                            <label class="text-label">Meta Keyword</label>
                                                            <textarea name="keyword" id="" cols="30" rows="10" class="form-control" placeholder="Masukan meta Keyword"><?php echo $seo['keyword'] ?></textarea>
                                                            <p class="text-danger">*Pisahkan keyword dengan koma(,)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-4">
                                                        <div class="form-group">
                                                            <button class="btn btn-outline-primary">Kirim Perubahan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--**********************************
            Content body end
            ***********************************-->
            <?php $this->load->view('admin/partial/v_footer') ?>
            <script type="text/javascript">
                $(document).ready(function(){
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
                            toastr.error("Isi form dengan benar!", "Edit SEO gagal", {
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