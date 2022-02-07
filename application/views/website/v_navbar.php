<div class="fixed-top">
  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="top-header px-5 py-1 d-flex justify-content-between align-items-center">
      <div class="left d-flex justify-content-center">
        <div><i class="far fa-envelope"></i> Rijal4355@gmail.com</div>
      </div>
      <div class="right d-flex justify-content-between">
        <div class="media-sosial d-flex justify-content-between">
          <div class="header-icon mx-2">
            <i class="fab fa-instagram-square"></i>
          </div>
        </div>
        <div class="phone">
          <a class="scrollto text-white" href="#hubungi-kami" class="btn-phone">Hubungi Kami</a>
        </div>
      </div>
    </div>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <!-- <img src="<?php echo base_url() ?>assets/img/logo.png" alt=""> -->
        <!-- <span>Atoze Capital</span> -->
      </a>
      <?php if ($this->uri->segment(1)=='syarat_dan_ketentuan' OR $this->uri->segment(1)=='kebijakan_privasi'): ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo base_url() ?>">Home</a></li>
          <li><a class="nav-link scrollto <?php if ($this->uri->segment(1)=='syarat_dan_ketentuan'): ?>
            <?php echo 'active' ?>
          <?php endif ?>" href="<?php echo base_url('syarat_dan_ketentuan') ?>">Syarat dan Ketentuan</a></li>
          <li><a class="nav-link scrollto <?php if ($this->uri->segment(1)=='kebijakan_privasi'): ?>
            <?php echo 'active' ?>
          <?php endif ?>" href="<?php echo base_url('kebijakan_privasi') ?>">Kebijakan Privasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    <?php else: ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#promosi">Promosi</a></li>
          <li><a class="nav-link scrollto" href="#mengapa-kami">Mengapa Kami</a></li>
          <li><a class="nav-link scrollto" href="#best-honda">Best Honda</a></li>
          <li><a class="nav-link scrollto" href="#hubungi-kami">Hubungi Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    <?php endif ?>


    <!-- .navbar -->

  </div>
</header><!-- End Header -->
</div>
