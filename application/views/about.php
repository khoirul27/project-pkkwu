<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>About</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="<?= base_url('aset/constra/theme/') ?>images/logo.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick.css">
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>css/style.css">

</head>

<body>
  <div class="body-inner">
    <!-- Header start -->
    <header id="header" class="header-one">
      <!-- <div class="bg-white">
        <div class="container">
          <div class="logo-area">
            <div class="row align-items-center">
              <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/logo.png" alt="Constra">
                </a>
              </div>

              <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <p class="info-box-title">Email</p>
                        <p class="info-box-subtitle"><?= $konfigurasi->email ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" target="_blank" href="<?= $konfigurasi->wa ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mx-1" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                      </svg>Whatsapp</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div> -->

      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item dropdown active">
                      <a href="<?= base_url('beranda/') ?>" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="<?= base_url('beranda/about') ?>" class="nav-link">About us</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="<?= base_url('beranda/#galeri') ?>" class="nav-link">Galeri</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="<?= base_url('beranda/#kontak') ?>" class="nav-link">contact</a>
                    </li>

                  </ul>
                </div>
              </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->

           <!-- <div class="nav-search">
            <img src="<?= base_url('aset/constra/theme/') ?>images/logo.png" width="60">
          </div> -->
          <!-- Search end -->

          <div class="search-block" style="display: none;">
            <label for="search-field" class="w-100 mb-0">
              <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
            </label>
            <span class="search-close">&times;</span>
          </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

      </div>
      <!--/ Navigation end -->
    </header>
    <!--/ Header end -->
    <div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('aset/constra/theme/images/banner/bg.png') ?>)">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">About</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                  </ol>
                </nav>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title"><?= $about->judul ?></h3>
            <p></p>
            <blockquote>
              <p>Semporibus autem quibusdam et aut officiis debitis aut rerum est aut optio cumque nihil necessitatibus autemn ec tincidunt nunc posuere ut</p>
            </blockquote>
            <p><?= $about->keterangan ?></p>

          </div><!-- Col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">
            <!-- foto logo -->
            <!-- <img src="<?= base_url('aset/constra/theme/') ?>images/logo.png" alt="" style="width: 330px; height: 300px;"> -->

            <!-- foto inputan  -->
            <img src="<?= base_url('aset/temadmin/img/about/' . $about->foto) ?>" alt="" width="200" style="margin-left: 25%;">
          </div><!-- Col end -->
        </div><!-- Content row end -->

      </div><!-- Container end -->
    </section><!-- Main container end -->

    <footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-4 col-md-6 footer-widget footer-about">
							<h3 class="widget-title">Media sosial</h3>
							<!-- <img loading="lazy" width="200px" class="footer-logo" src="<?= base_url('aset/constra/source/') ?>images/footer-logo.png" alt="Constra"> -->
							<p>Kami memililiki, baerbagai akun media sosial yang dapat anda kunjungi. ikuti dan nantikan konten-konten kami selanjutnya</p>
							<div class="footer-social">
								<ul>
									<li><a href="<?= $konfigurasi->wa ?>" aria-label="Facebook"><i class="fab fa-whatsapp"></i></a></li>
									<li><a href="<?= $konfigurasi->tiktok ?>" aria-label="Twitter"><i class="fab fa-tiktok"></i></a></li>
									<li><a href="<?= $konfigurasi->ig ?>" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div><!-- Footer social end -->
						</div><!-- Col end -->

						<div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
							<h3 class="widget-title">kunjungi</h3>
							<div class="working-hours">
								hubungi kami melalui media sosial kami. atau anda juga bisa datang langsung ke tempat kami
								<br><br> Senin - Sabtu: <span class="text-right">08:00 - 16:00 </span>
							</div>
						</div><!-- Col end -->

						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
							<h3 class="widget-title">Lokasi</h3>
							<iframe src="<?= $konfigurasi->alamat ?>" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div><!-- Col end -->


					</div><!-- Row end -->
				</div><!-- Container end -->
			</div><!-- Footer main end -->

			<div class="copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="copyright-info">
								<span>Copyright &copy; <script>
										document.write(new Date().getFullYear())
									</script>, Designed &amp; Developed by <a href="https://themefisher.com">Fawwaz</a></span>
							</div>
						</div>

						<div class="col-md-6">
							<div class="footer-menu text-center text-md-right">
								<ul class="list-unstyled">
									<li>
										<a href="#">Home</a>
									</li>
									<li>
										<a href="<?= base_url('beranda/about') ?>">About Us</a>
									</li>
									<li>
										<a href="#galeri">Galeri</a>
									</li>
									<li>
										<a href="#penjualan">Penjualan</a>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div><!-- Row end -->

					<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
						<button class="btn btn-primary" title="Back to Top">
							<i class="fa fa-angle-double-up"></i>
						</button>
					</div>

				</div><!-- Container end -->
			</div><!-- Copyright end -->
		</footer><!-- Footer end -->

    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick.min.js"></script>
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="<?= base_url('aset/constra/theme/') ?>plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="<?= base_url('aset/constra/theme/') ?>js/script.js"></script>

  </div><!-- Body inner end -->
</body>

</html>