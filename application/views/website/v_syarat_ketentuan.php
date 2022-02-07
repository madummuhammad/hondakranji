  <!-- ======= Hero Section ======= -->
  <section id="heros" class="heros">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 hero-img text-dark" data-aos="zoom-out" data-aos-delay="200">
         <h1>Syarat dan Ketentuan</h1>
         <?php echo $syarat['content'] ?>
       </div>
     </div>
   </div>
 </section><!-- End Hero -->
 <footer id="footer" class="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <span class="text-white"><?php echo $footer['nama_perusahaan'] ?></span>
          </a>
          <p class="text-white"><?php echo $footer['keterangan'] ?></p>
          <div class="social-links mt-3">
            <a href="#" class="instagram text-white"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links ">
          <h4 class="text-white">Link</h4>
          <ul>
            <li><i class="bi bi-chevron-right text-white"></i> <a class="text-white" href="<?php echo base_url() ?>">Home</a></li>
            <li><i class="bi bi-chevron-right text-white"></i> <a class="text-white" href="#hero">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right text-white"></i> <a class="text-white" href="#mengapa-kami">Mengapa Kami</a></li>
            <li><i class="bi bi-chevron-right text-white"></i> <a class="text-white" href="#best-honda">Best Honda</a></li>
            <li><i class="bi bi-chevron-right text-white"></i> <a class="text-white" href="#hubungi-kami">Hubungi Kami</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4 class="text-white">Informasi</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a class="text-white" href="<?php echo base_url('kebijakan_privasi') ?>">Kebijakan Privasi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a class="text-white" href="<?php echo base_url('syarat_dan_ketentuan') ?>">Syarat & Ketentuan</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
  <div class="bg-white d-flex align-items-center justify-content-center">
    <div class="copyright">
      &copy; Copyright <strong><span>Honda Kranji Bekasi</span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>