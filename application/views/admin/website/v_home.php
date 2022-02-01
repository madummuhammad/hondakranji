<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Honda Bekasi</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?php echo base_url() ?>assets/img/logo.png" rel="icon"> -->
  <link href="<?php echo base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/vendor/toastr/css/toastr.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
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
              <i class="fab fa-facebook-square"></i>
            </div>
            <div class="header-icon mx-2">
              <i class="fab fa-twitter-square"></i>
            </div>
            <div class="header-icon mx-2">
              <i class="fab fa-linkedin"></i>
            </div>
            <div class="header-icon mx-2">
              <i class="fab fa-instagram-square"></i>
            </div>
          </div>
          <div class="phone">
            <a href="" class="btn-phone">Hubungi Kami</a>
          </div>
        </div>
      </div>
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <!-- <img src="<?php echo base_url() ?>assets/img/logo.png" alt=""> -->
          <!-- <span>Atoze Capital</span> -->
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#about">Tentang Kami</a></li>
            <li><a class="nav-link scrollto" href="#mengapa-kami">Mengapa Kami</a></li>
            <li><a class="nav-link scrollto" href="#best-honda">Best Honda</a></li>
            <li><a class="nav-link scrollto" href="#hubungi-kami">Hubungi Kami</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- .navbar -->

      </div>
    </header><!-- End Header -->
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container">
      <?php foreach ($home as $row => $value): ?>
        <div class="row">
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-edit"></i>
          </button>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <form action="<?php echo base_url('adminsystem/website') ?>" method="POST" enctype="multipart/form-data">
                <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Home</h4>
                    <a type="button" class="close" data-dismiss="modal">&times;</a>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col">
                        <input type="text" name="_bahasa" value="<?php echo $this->uri->segment(2) ?>" hidden>
                        <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="<?php echo $value['judul'] ?>">
                        <img src="<?php echo base_url('/assets/img/main/').$value['gambar'] ?>" data-toggle="gambar" class="img-thumbnail mt-2" alt="">
                        <input type="file" class="form-control mt-2" id="email" placeholder="Masukan Gambar" name="gambar">
                      </div>
                      <div class="col">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Masukan Keterangan"><?php echo $value['content'] ?></textarea>
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
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up"><?php echo $value['judul'] ?></h1>
            <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $value['content'] ?></h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <?php if ($this->uri->segment(2)=='indonesia'): ?>
                    <span>Gabung Bersama Kami</span>
                  <?php else: ?>
                    <span>Join With Us</span>
                  <?php endif ?>
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
      <?php foreach ($about as $row => $value): ?>
        <div class="container">
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAbout">
            <i class="fas fa-edit"></i>
          </button>
          <div class="modal fade" id="modalAbout">
            <div class="modal-dialog modal-dialog-centered">
             <form action="<?php echo admin_url('website/about') ?>" method="POST" enctype="multipart/form-data">
              <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">About</h4>
                  <a type="button" class="close" data-dismiss="modal">&times;</a>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <div class="form-group text-center">
                        <label for="" class="text-center p-2">Judul</label>
                        <input type="text" name="_bahasa" value="<?php echo $this->uri->segment(2) ?>" hidden>
                        <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="<?php echo $value['judul'] ?>">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group text-center">
                        <label for="" class="p-2">Konten</label>
                        <textarea name="content" id="" cols="30" rows="4" class="form-control" placeholder="Masukan Tagline"><?php echo $value['content'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row d-flex justify-content-center">
                    <div class="col-6">
                     <div class="form-grop text-center">
                      <img src="<?php echo base_url('/assets/img/about/').$value['gambar'] ?>" data-toggle="gambar" class="img-thumbnail mt-2" alt="">
                      <input type="file" class="form-control mt-2" id="email" placeholder="Masukan Gambar" name="gambar">
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
    </div>
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
  <?php endforeach ?>
</section><!-- End About Section -->
<!-- ======= Services Section ======= -->
<section id="service" class="services">

  <div class="container d-flex justify-content-center" data-aos="fade-up">
    <iframe width="100%" height="500" src="https://www.youtube.com/embed/aS_Ma8yVy64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>X
  </div>

</section><!-- End Services Section -->
<section id="section-wa-1" class="wa">
  <div class="container">
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-section-wa-1">
      <i class="fas fa-edit"></i>
    </button>
    <div class="modal fade" id="modal-section-wa-1">
      <div class="modal-dialog modal-dialog-centered">
       <form action="<?php echo admin_url('website/section_wa_1') ?>" method="POST" enctype="multipart/form-data">
        <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <a type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="text-center p-2">Judul</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="<?php echo $section_wa_1['judul'] ?>">
                </div>
              </div>
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="p-2">Button</label>
                  <input name="button" id="" class="form-control" placeholder="Masukan Tagline BUtton" value="<?php echo $section_wa_1['button'] ?>">
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-6">
               <div class="form-group text-center">
                <label for="" class="p-2">Nomor WA</label>
                <input name="wa" id="" class="form-control" placeholder="Masukan Nomor Wa" value="<?php echo $section_wa_1['wa'] ?>">
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
</div>

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
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-mengapa-kami<?php echo $value['id'] ?>">
              <i class="fas fa-edit"></i>
            </button>
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#hapus-mengapa-kami<?php echo $value['id'] ?>">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </div>
      <?php endforeach ?>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-mengapa-kami">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  </div>
  <?php foreach ($mengapa_kami as $key => $value): ?>
    <form action="<?php echo admin_url('website/mengapa_kami') ?>" method="POST">
      <div class="modal fade" id="hapus-mengapa-kami<?php echo $value['id'] ?>">
        <div class="modal-dialog modal-dialog-centered">
          <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
          <?php echo method('_get') ?>
          <?php echo get_id($value['id']) ?>
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
    <div class="modal fade" id="modal-mengapa-kami<?php echo $value['id'] ?>">
      <div class="modal-dialog modal-dialog-centered">
       <form action="<?php echo admin_url('website/mengapa_kami') ?>" method="POST" enctype="multipart/form-data">
        <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <?php echo get_id($value['id']) ?>
        <?php echo method('_patch') ?>
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Mengapa Kami?</h4>
            <a type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="text-center p-2">Judul</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="<?php echo $value['judul'] ?>">
                </div>
              </div>
              <div class="col">
               <div class="form-group text-center">
                <label for="" class="p-2">Icon</label>
                <textarea class="form-control" name="icon" id="" cols="30" rows="1"><?php echo $value['icon'] ?></textarea>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-6">
              <div class="form-group text-center">
                <label for="" class="p-2">Content</label>
                <textarea class="form-control" name="content" id="" cols="30" rows="8"><?php echo $value['content'] ?></textarea>
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
<div class="modal fade" id="modal-mengapa-kami">
  <div class="modal-dialog modal-dialog-centered">
   <form action="<?php echo admin_url('website/mengapa_kami') ?>" method="POST" enctype="multipart/form-data">
    <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
    <?php echo get_id($value['id']) ?>
    <?php echo method('_post') ?>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Mengapa Kami?</h4>
        <a type="button" class="close" data-dismiss="modal">&times;</a>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <div class="form-group text-center">
              <label for="" class="text-center p-2">Judul</label>
              <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="">
            </div>
          </div>
          <div class="col">
           <div class="form-group text-center">
            <label for="" class="p-2">Icon</label>
            <textarea class="form-control" name="icon" id="" cols="30" rows="1" placeholder="Masukan Icon"></textarea>
            <div class="icon-message">
              <p>* Copy icon dari fontawesome.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-6">
          <div class="form-group text-center">
            <label for="" class="p-2">Content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="8" placeholder="Masukan konten"></textarea>
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
<?php endforeach ?>
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

</section>
<!-- End Portfolio Section -->
<!-- ======= Contact Section ======= -->
<section id="wa-footer1" class="wa section-wa-2">
  <div class="modal fade" id="modal-section-wa-2">
    <div class="modal-dialog modal-dialog-centered">
      <form action="<?php echo admin_url('website/section_wa_2') ?>" method="POST" enctype="multipart/form-data">
        <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <a type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="text-center p-2">Judul</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="<?php echo $section_wa_2['judul'] ?>">
                </div>
              </div>
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="p-2">Button</label>
                  <input name="button" id="" class="form-control" placeholder="Masukan Tagline BUtton" value="<?php echo $section_wa_2['button'] ?>">
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-6">
               <div class="form-group text-center">
                <label for="" class="p-2">Tagline</label>
                <input name="tagline" id="" class="form-control" placeholder="Masukan Nomor Wa" value="<?php echo $section_wa_2['tagline'] ?>">
              </div>
            </div>
            <div class="col-6">
             <div class="form-group text-center">
              <label for="" class="p-2">Nomor WA</label>
              <input name="wa" id="" class="form-control" placeholder="Masukan Nomor Wa" value="<?php echo $section_wa_2['wa'] ?>">
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
<div class="container" data-aos="fade-up">
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-section-wa-2">
    <i class="fas fa-edit"></i>
  </button>
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
<section id="wa-footer1" class="wa">
  <div class="modal fade" id="modal-section-wa-3">
    <div class="modal-dialog modal-dialog-centered">
      <form action="<?php echo admin_url('website/section_wa_3') ?>" method="POST" enctype="multipart/form-data">
        <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <a type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="text-center p-2">Judul</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukan Judul" name="judul" value="<?php echo $section_wa_3['judul'] ?>">
                </div>
              </div>
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="p-2">Button</label>
                  <input name="button" id="" class="form-control" placeholder="Masukan Tagline BUtton" value="<?php echo $section_wa_3['button'] ?>">
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-6">
               <div class="form-group text-center">
                <label for="" class="p-2">Nomor WA</label>
                <input name="wa" id="" class="form-control" placeholder="Masukan Nomor Wa" value="<?php echo $section_wa_3['wa'] ?>">
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
<div class="container" data-aos="fade-up">
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-section-wa-3">
    <i class="fas fa-edit"></i>
  </button>
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
      <div class="col-lg-12">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalFooter"><i class="fas fa-edit"></i></button>
      </div>
      <div class="row gy-4 d-flex justify-content-center">
        <div class="col-lg-5 col-md-12 footer-info d-flex flex-column align-items-center">
          <a class="logo d-flex align-items-center">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <span style="color: black;"><?php echo $footer['nama_perusahaan'] ?></span>
          </a>
          <p class="text-center"><?php echo $footer['keterangan'] ?></p>
            <!-- <div class="social-links mt-3">
              <a href="<?php echo $footer['twiter'] ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="<?php echo $footer['telegram'] ?>" target="_black" class="linkedin"><i class="bi bi-telegram"></i></a>
            </div> -->
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
    <div class="modal fade" id="modalFooter">
      <div class="modal-dialog modal-dialog-centered">
       <form action="<?php echo admin_url('website/footer') ?>" method="POST">
        <?php echo method('_patch') ?>
        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Footer</h4>
            <a type="button" class="close" data-dismiss="modal">&times;</a>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="text-center p-2">Nama Perusahaan</label>
                  <textarea name="nama_perusahaan" id="" cols="30" rows="4" class="form-control" placeholder="Masukan Isi Konten"><?php echo $footer['nama_perusahaan'] ?></textarea>
                </div>
              </div>
              <div class="col">
                <div class="form-group text-center">
                  <label for="" class="p-2">Keterangan</label>
                  <textarea name="keterangan" id="" cols="30" rows="4" class="form-control" placeholder="Masukan Isi Konten"><?php echo $footer['keterangan'] ?></textarea>
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
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>assets/vendor/purecounter/purecounter.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $(document).ready(function(){
    <?php if ($this->session->flashdata('request')): ?>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: '<?php echo $this->session->flashdata('icon') ?>',
        title: '<?php echo $this->session->flashdata('title') ?>',
      })
    <?php endif ?>
  })
</script>
</body>

</html>