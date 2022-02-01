  <?php $this->load->view('website/v_header') ?>
  <?php $this->load->view('website/v_navbar') ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container">
      <?php foreach ($home as $row => $value): ?>
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up"><?php echo $value['judul'] ?></h1>
            <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $value['content'] ?></h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Hubungi Kami</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo base_url('/assets/img/main/').$value['gambar'] ?>" class="img-fluid" alt="">
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </section><!-- End Hero -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9e9e9" fill-opacity="1" d="M0,128L60,112C120,96,240,64,360,64C480,64,600,96,720,133.3C840,171,960,213,1080,213.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <?php foreach ($about as $row => $value): ?>
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h2><?php echo $value['judul'] ?></h2>
                <svg width="221" height="4" viewBox="0 0 221 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="221" height="4" fill="#FF8A00"/>
                </svg>

                <p>
                  <?php echo $value['content'] ?>
                </p>
              <!-- <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo base_url('/assets/img/about/').$value['gambar'] ?>" class="img-fluid" alt="">
          </div>

        </div>
      <?php endforeach ?>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
    <!-- <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services">

      <div class="container d-flex justify-content-center" data-aos="fade-up">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/aS_Ma8yVy64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>X
      </div>

    </section><!-- End Services Section -->

    <section id="section-wa-1" class="wa">
      <div class="container d-flex flex-column justify-content-center">
        <h2 class="text-center"><?php echo $section_wa_1['judul'] ?></h2>
        <a href="" class="btn-wa scrollto d-inline-flex align-items-center justify-content-center align-self-center">
          <span><i class="fab fa-whatsapp"></i> <?php echo $section_wa_1['button'] ?></span>
          <!-- <i class="bi bi-arrow-right"></i> -->
        </a>
      </div>
    </section>

    <!-- ======= Pricing Section ======= -->
    <section id="mengapa-kami" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Mengapa Kami?</h2>
          <svg width="221" height="4" viewBox="0 0 221 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="221" height="4" fill="#FF8A00"/>
          </svg>
        </header>
        <div class="row gy-4 d-flex justify-content-center" data-aos="fade-left">
          <?php foreach ($mengapa_kami as $key => $value): ?>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">
                <h2><?php echo $value['judul'] ?></h2>
                <div class="icon">
                  <?php echo $value['icon'] ?>
                </div>
                <p><?php echo $value['content'] ?></p>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>

    </section>
    <!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="best-honda" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Best Honda Kami</h2>
          <div class="divider"></div>
        </header>
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($portofolio as $key => $value): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?php echo base_url('assets/img/portfolio/').$value['gambar'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $value['judul'] ?></h4>
                  <p><?php echo $value['content'] ?></p>
                  <div class="portfolio-links">
                    <a href="<?php echo base_url('assets/img/portfolio/').$value['gambar'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?php echo $value['judul'] ?>"><i class="bi bi-plus"></i></a>
                    <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <section id="wa-footer1" class="wa section-wa-2">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-12">
            <h2 class="text-center"><?php echo $section_wa_2['judul'] ?></h2>
            <h3 class="text-center"><?php echo $section_wa_2['tagline'] ?></h3>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <a class="btn-wa px-5 py-3"><i  class="fab fa-whatsapp "></i> <?php echo $section_wa_2['button'] ?></a>
          </div>
        </div>
      </div>

    </section><!-- End Contact Section -->
    <!-- ======= Contact Section ======= -->
    <section id="hubungi-kami" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jl Jendral Sudirman KM.31, Kranji, <br>Bekasi Selatan, Bekasi, Kode POS 17143</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>087878810366</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>Rijal4355@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Pelayanan</h3>
                  <p>Senin - Minggu<br>9:00 - 17:00</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="No Hp" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button class="custom-btn-orange" type="submit">Kirim</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->
    <!-- ======= Contact Section ======= -->
    <section id="wa-footer1" class="wa">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-12">
            <h2 class="text-center"><?php echo $section_wa_3['judul'] ?></h2>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <a class="btn-wa px-5 py-3"><i  class="fab fa-whatsapp "></i><?php echo $section_wa_3['button'] ?></a>
          </div>
        </div>
      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-5 col-md-12 footer-info d-flex flex-column align-items-center">
            <a class="logo d-flex align-items-center">
              <span style="color: black;"><?php echo $footer['nama_perusahaan'] ?></span>
            </a>
            <p class="text-center"><?php echo $footer['keterangan'] ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright" style="color: black;">
        &copy; Copyright <strong><span>Honda Bekasi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('website/v_footer') ?>