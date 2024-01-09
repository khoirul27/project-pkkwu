<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">
	<title>Atmo Putro Junior</title>

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
		<header id="header" class="header-two">
			<div class="site-navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<nav class="navbar navbar-expand-lg navbar-light p-0">

								<div class="logo">
									<a class="d-block" href="<?= base_url('admin/dashboard/') ?>">
										<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/logo.png" alt="Constra" style="width: 70px; height: 60px;">
									</a>
								</div><!-- logo end -->

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div id="navbar-collapse" class="collapse navbar-collapse">
									<ul class="nav navbar-nav ml-auto align-items-center">
										<li class="nav-item dropdown active">
											<a href="#" class="nav-link">Home</a>
										</li>
										<li class="nav-item">
											<a href="<?= base_url('beranda/about') ?>" class="nav-link">About Us</a>
										</li>
										<li class="nav-item">
											<a href="#galeri" class="nav-link">Galeri</a>
										</li>
										<li class="nav-item">
											<a href="#penjualan" class="nav-link">Penjualan</a>
										</li>
										<li class="nav-item"><a class="nav-link" href="#kontak">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->
				</div>
				<!--/ Container end -->

			</div>
			<!--/ Navigation end -->
		</header>
		<!--/ Header end -->

		<div class="banner-carousel banner-carousel-2 mb-0">
			<div class="banner-carousel-item" style="background-image:url(<?= base_url('aset/temadmin/img/config/' . $konfigurasi->foto) ?>)">
				<div class="container">
					<div class="box-slider-content">
						<div class="box-slider-text">
							<h3 class="box-slide-sub-title">Atmo Putro Junior</h3>
							<p class="box-slide-description">Usaha kami bergerak dibidang jual beli transportasi dan hasil bumi. kami juga bisa mencarikan brang apapun yang anda butuhkan</p>
							<p>
								<a href="services.html" class="slider btn btn-primary">Our Service</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="subscribe no-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="subscribe-call-to-acton">
							<h3>Hubungi kami!</h3>
							<h4>(+62) 81-8989-8989</h4>
						</div>
					</div><!-- Col end -->

					<div class="col-lg-8">
						<div class="ts-newsletter row align-items-center">
							<div class="col-md-5 newsletter-introtext">
								<h4 class="text-white mb-0">Tanayakan keperluan anda!</h4>
								<p class="text-white">Kami siap membantu</p>
							</div>

							<div class="col-md-7 newsletter-form">
								<form action="#" method="post">
									<div class="form-group">
										<label for="newsletter-email" class="content-hidden">Newsletter Email</label>
										<div class="input-group mb-3">
											<input type="text" id="whatsapp-text" class="form-control" placeholder="Pertanyaan anda" aria-label="Recipient's username" aria-describedby="button-addon2">
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="sendWhatsappMessage()"><i class="fab fa-whatsapp"></i></button>
											</div>
										</div>
									</div>
								</form>

								<script>
									function sendWhatsappMessage() {
										// Get the text from the input field
										var text = document.getElementById("whatsapp-text").value;

										// Replace spaces with %20 for a proper WhatsApp link
										text = encodeURIComponent(text);

										// Create the WhatsApp link with the text
										var whatsappLink = "<?= $konfigurasi->wa ?>text=" + text;

										// Open the WhatsApp link in a new tab or window
										window.open(whatsappLink, "_blank");
									}
								</script>
							</div>
						</div><!-- Newsletter end -->
					</div><!-- Col end -->

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>

		<section id="ts-service-area" class="ts-service-area pb-0">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<h2 class="section-title"></h2>
						<h3 class="section-sub-title">Kami menyediakan</h3>
					</div>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-lg-4">
						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
									<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
								</svg>
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Jual beli truck</a></h3>
								<p>Dapatkan performa maksimal dalam bisnis pengangkutan Anda dengan truck handal. Kami menyediakan pilihan terbaik untuk memenuhi kebutuhan transportasi Anda.</p>
							</div>
						</div><!-- Service 1 end -->

						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
									<path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
								</svg>
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Modifikasi truck</a></h3>
								<p>Berikan kehidupan baru pada truck Anda! Layanan modifikasi kami tidak hanya merubah penampilan, tetapi juga meningkatkan performa dan kenyamanan.</p>
							</div>
						</div><!-- Service 2 end -->
					</div><!-- Col end -->

					<div class="col-lg-4 text-center">
						<img loading="lazy" width="200px" class="img-fluid" src="<?= base_url('aset/temadmin/img/about/' . $about->foto) ?>" alt="service-avater-image">
					</div><!-- Col end -->

					<div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
									<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
								</svg>
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Jual beli kacang</a></h3>
								<p>Kacang yang berkualitas adalah kunci kelezatan sejati. Jual beli kacang di sini untuk memastikan pengalaman rasa yang memuaskan</p>
							</div>
						</div><!-- Service 4 end -->

						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
									<path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
									<path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
								</svg>
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Jual beli hasil bumi</a></h3>
								<p>Jual beli hasil bumi dengan keberlanjutan. Dapatkan produk lokal berkualitas tinggi dan dukung petani setempat untuk masa depan yang berkelanjutan.</p>
							</div>
						</div><!-- Service 5 end -->

					</div><!-- Col end -->
				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Service end -->

		<section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<h2 class="section-title" id="galeri"></h2>
						<h3 class="section-sub-title">Galeri</h3>
					</div>
				</div>
				<!--/ Title row end -->
				<div class="row">
					<div class="col-12">
						<div class="row shuffle-wrapper m-3">
							<?php foreach ($galeri as $galeri) { ?>
								<div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
									<div class="project-img-container">
										<a class="gallery-popup" href="<?= base_url('aset/temadmin/img/galeri/') . $galeri['foto'] ?>" aria-label="project-img">
											<img class="img-fluid" src="<?= base_url('aset/temadmin/img/galeri/') . $galeri['foto'] ?>" alt="project-img">
											<span class="gallery-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
													<path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
													<path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
												</svg></span>
										</a>
										<div class="project-item-info">
											<div class="project-item-info-content">
												<h3 class="project-item-title">
													<a href="projects-single.html"><?= $galeri['judul'] ?></a>
													<p class="ts-designation text-light"><?= $galeri['keterangan'] ?></p>
												</h3>
											</div>
										</div>
									</div>
								</div><!-- shuffle item 6 end -->
							<?php } ?>
						</div><!-- shuffle end -->
					</div>


					<div class="col-12">
						<div class="general-btn text-center">
							<?= $this->pagination->create_links() ?>
						</div>
					</div>

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Project area end -->

		<section id="ts-team" class="ts-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<h2 class="section-title" id="penjualan"></h2>
						<h3 class="section-sub-title">Unit tersedia</h3>
					</div>
				</div><!--/ Title row end -->
				<div class="row">
					<div class="col-lg-12">
						<div id="team-slide" class="team-slide">
							<?php foreach ($barang as $brg) { ?>
								<div class="item">
									<div class="ts-team-wrapper">
										<div class="team-img-wrapper">
											<img loading="lazy" class="w-100" src="<?= base_url('aset/temadmin/img/barang/') ?><?= $this->Cms_model->foto($brg['id_barang']) ?>" alt="team-img">
										</div>
										<div class="ts-team-content">
											<h3 class="ts-name"><?= $brg['nama_barang'] ?></h3>
											<p class="ts-designation"><?= $brg['tahun'] ?></p>
											<a href="<?= base_url('beranda/detail/') . $brg['id_barang'] ?>" class="btn btn-warning btn-sm text-white mt-4">detail</a>
										</div>
									</div><!--/ Team wrapper end -->
								</div><!-- Team 1 end -->
							<?php } ?>
						</div><!-- Team slide end -->
					</div>
				</div><!--/ Content row end -->
			</div><!--/ Container end -->
		</section><!--/ Team end -->

		<footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-4 col-md-6 footer-widget footer-about">
							<h3 class="widget-title" id="kontak">Media sosial</h3>
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