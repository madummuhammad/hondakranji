<?php if ($this->session->userdata('role_id')== 1 OR $this->session->userdata('role_id')== 3): ?>
            <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li><a href="<?php echo admin_url() ?>" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Dashboard</span></a></li>
                        <li class="nav-label">Pengaturan</li>
                        <li><a target="_blank" href="<?php echo base_url('website') ?>" aria-expanded="false"><i
                            class="icon icon-world-2"></i><span class="nav-text">Website</span></a>
                        </li>
                        <?php if ($this->session->userdata('role_id')==1): ?>
                            <li class="nav-label">Admin</li>
                            <li><a href="<?php echo admin_url('admin') ?>" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Admin</span></a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <?php endif ?>