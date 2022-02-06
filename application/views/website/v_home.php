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
                <a href="https://api.whatsapp.com/send?phone=<?php echo $value['wa'] ?>&text=Hallo%20Admin." target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
    <!-- ======= Testimonials Section ======= -->
    <section id="promosi" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>PROMOSI</h2>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            <?php foreach ($promosi as $key => $value): ?>
              <div class="swiper-slide p-3">
                <a href="<?php echo base_url('assets/img/poster/').$value['gambar'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title='<?php echo $value['title'] ?>'><img src="<?php echo base_url('assets/img/poster/').$value['gambar'] ?>" class="img-thumbnail" alt=""></a>
              </div>    
            <?php endforeach ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <section id="section-wa-1" class="wa">
      <div class="container d-flex flex-column justify-content-center">
        <h2 class="text-center"><?php echo $section_wa_1['judul'] ?></h2>
        <a href="https://api.whatsapp.com/send?phone=<?php echo $section_wa_1['wa'] ?>&text=Hallo%20Admin." target="_blank" class="btn-wa scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
            <div class="col-lg-3 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="100">
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
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Model</h2>
        </header>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($produk as $key => $value): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?php echo base_url() ?>assets/img/product/<?php echo $value['gambar'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $value['judul'] ?></h4>
                  <div class="portfolio-links">
                    <a href="<?php echo base_url() ?>assets/img/product/<?php echo $value['gambar'] ?>" data-gallery="portfolioGallery" class="model-lightbox" title="<?php echo $value['judul'] ?>"><i class="bi bi-plus"></i></a>
                    <a href="#mobilio<?php echo $value['id'] ?>" data-toggle="modal" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
              <div class="footer-model d-flex justify-content-center mt-2">
                <div class="btn-model d-flex justify-content-center align-items-center flex-column pt-2">
                  <p class="custom-font-sm">Harga mulai dari</p>
                  <p class="custom-text-bold"><?php echo $value['harga_mulai'] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <?php foreach ($produk as $key => $value): ?>
        <div class="modal" id="mobilio<?php echo $value['id'] ?>" data-aos="fade-in" data-aos-delay="100">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="custom-modal-header">
                <a type="button" class="close text-white custom-modal-close" data-dismiss="modal"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" width="20" height="20"><g><g><path d="M505.943,6.058c-8.077-8.077-21.172-8.077-29.249,0L6.058,476.693c-8.077,8.077-8.077,21.172,0,29.249C10.096,509.982,15.39,512,20.683,512c5.293,0,10.586-2.019,14.625-6.059L505.943,35.306C514.019,27.23,514.019,14.135,505.943,6.058z" fill="#FFFFFF"></path></g></g><g><g><path d="M505.942,476.694L35.306,6.059c-8.076-8.077-21.172-8.077-29.248,0c-8.077,8.076-8.077,21.171,0,29.248l470.636,470.636c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.624-6.057C514.018,497.866,514.018,484.771,505.942,476.694z" fill="#FFFFFF"></path></g></g></svg></a>
                <img src="<?php echo base_url('assets/img/logo/').$value['logo'] ?>" alt="">
              </div>
              <div class="modal-body">
                <div class="varian-slider swiper" data-aos="fade-up" data-aos-delay="200">
                  <div class="swiper-wrapper">
                    <?php foreach ($varian as $key => $value): ?>
                      <div class="swiper-slide p-3">
                        <div class="varian-item">
                          <a href="<?php echo base_url('assets/img/product/').$value['gambar_varian'] ?>" data-gallery="portfolioGallery" class="varian-lightbox" title="Rp. 500.000.000"><img src="<?php echo base_url('assets/img/product/').$value['gambar_varian'] ?>" class="img-fluid" alt=""></a>
                          <div class="footer-model d-flex justify-content-center mt-2">
                            <div class="btn-model d-flex justify-content-center align-items-center flex-column pt-2">
                              <p class="custom-font-sm">Harga</p>
                              <p class="custom-text-bold"><?php echo $value['harga'] ?></p>
                            </div>
                          </div>
                          <div class="spesifikasi">
                            <?php echo $value['spesifikasi'] ?>
                          </div>
                        </div>
                      </div>     
                    <?php endforeach ?>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </section><!-- End Portfolio Section -->
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
            <a href="https://api.whatsapp.com/send?phone=<?php echo $section_wa_2['wa'] ?>&text=Hallo%20Admin." target="_blank" class="btn-wa px-5 py-3"><i  class="fab fa-whatsapp "></i> <?php echo $section_wa_2['button'] ?></a>
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
    <section id="wa-footer1" class="wa-footer">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-12">
            <h2 class="text-center"><?php echo $section_wa_3['judul'] ?></h2>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $section_wa_3['wa'] ?>&text=Hallo%20Admin." target="_blank" class="btn-wa px-5 py-3"><i  class="fab fa-whatsapp"></i><?php echo $section_wa_3['button'] ?></a>
          </div>
        </div>
      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
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
              <li><i class="bi bi-chevron-right"></i> <a class="text-white" href="#">Kebijakan Privasi</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-white" href="#">Syarat & Ketentuan</a></li>
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

  <?php $this->load->view('website/v_footer') ?>