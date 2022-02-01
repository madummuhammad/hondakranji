    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center flex-column">
                    <!-- <img class="logo-abbr" src="<?php echo base_url() ?>/assets/img/logo.png" alt=""> -->
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                            </div>
                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-account"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <?php if ($this->session->userdata('role_id')==1 OR $this->session->userdata('role_id')== 3): ?>
                                        <a href="<?php echo admin_url('profile') ?>" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                    <?php endif ?>
                                    <a href="#modalLogout" data-toggle="modal" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <?php if ($this->session->userdata('role_id')==1): ?>
            <form action="<?php echo admin_url('login') ?>" method="POST">
              <div class="modal fade" id="modalLogout">
                <div class="modal-dialog modal-dialog-centered">
                    <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                    <?php echo method('_patch') ?>
                    <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Konfirmasi Logout</h4>
                          <a type="button" class="close" data-dismiss="modal">&times;</a>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-outline-primary">Logout</button>
                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </form>
  <?php endif ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->