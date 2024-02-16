<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
	    <meta charset="utf-8">
    <title><?= esc($web_title) ?></title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="">
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url('public/img/web/' . esc($web_icon)) ?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= base_url('public/img/web/' . esc($web_icon)) ?>">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/bootstrap/css/bootstrap.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/fontawesome-free/css/all.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/animate/animate.compat.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/simple-line-icons/css/simple-line-icons.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/owl.carousel/assets/owl.carousel.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/vendor/magnific-popup/magnific-popup.min.css') ?>">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/css/theme.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/css/theme-elements.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/css/theme-blog.css') ?>">
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/css/theme-shop.css') ?>">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?= base_url('public/pusdok/template/css/skins/default.css') ?>">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url('public/pusdok/template/css/custom.css') ?>">
		<!-- Head Libs -->
		<script src="<?= base_url('public/pusdok/template/vendor/modernizr/modernizr.min.js') ?>"></script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
													<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Bahasa Indonesia
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
														<a class="dropdown-item" href="#"> English</a>
													</div>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="<?= base_url(); ?>">
											<img alt="<?= esc($web_title) ?>" width="195.5" height="50" data-sticky-width="195.5" data-sticky-height="50" src="<?= base_url('public/pusdok/images/logo-jakgo-black.png') ?>">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-dark header-nav-bottom-line-effect-1 order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">

										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
										   		<a class="napoli-shop-icon fa fa-home" href="<?= base_url(); ?>" title="View Dashboard" aria-hidden="true">
                                         </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main">

			    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-white overlay-show overlay-op-5" style="background-image: url(../public/pusdok/images/banner/slide.jpg);">
					<div class="container">
						<div class="row">
									<div class="col-md-12 align-self-center p-static order-2 text-center">
										<div class="overflow-hidden pb-2">
											<h1 class="text-white font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Galeri Foto Kemitraan</h2>
										</div>
									</div>
								</div>
					</div>
				</section>
				<div class="container py-4">
                       <div class="single-pagination">
                            <div class="pag-back">
                                <a href="<?= base_url(); ?>files-mitra" class="content"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;Kembali Ke Galeri &nbsp;</a>
                            </div>
                        </div><br />

					<div class="row">
						<div class="col" style="min-height: 250px;">
							<div class="row portfolio-list lightbox" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                              <?php foreach ($gambar_produk as $key => $gambar): ?>
                               <div class='col-12 col-sm-6 col-lg-3 appear-animation' data-appear-animation='expandIn' data-appear-animation-delay='200'>
									<div class='portfolio-item'>
										<span class='thumb-info thumb-info-lighten thumb-info-centered-icons border-radius-0'>
											<span class='thumb-info-wrapper border-radius-0'>
												<img src='<?= base_url($gambar->url_gambar); ?>' class='img-fluid border-radius-0' alt=''>
												<span class='thumb-info-action'>
													<a href='<?= base_url($gambar->url_gambar); ?>' class='lightbox-portfolio'>
														<span class='thumb-info-action-icon thumb-info-action-icon-light'><i class='fas fa-search text-dark'></i></span>
													</a>
                                                    <a href='<?= base_url('files-mitra/download/'.$gambar->files_alias); ?>' target="_blank">
														<span class='thumb-info-action-icon thumb-info-action-icon-light'><i class='fas fa-download text-dark'></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>
								</div>
                                <?php endforeach; ?>

                                <div class="grid__item  one-half  lap-and-up-one-quarter">
                                <hr class="solid my-5">
                                <!--
                                    <div class="entry__meta-box">
                                        <button class="button-download a-btn-2 js-download">Download All </button>
                                    </div>
                                -->
                                </div>
							</div>
						</div>
					</div>
					<div class="row pt-4 mt-2 mb-5">
						<div class="col-md-7 mb-4 mb-md-0">
							<div class="overflow-hidden mb-2">
								<h2 class="text-color-dark font-weight-normal text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Galeri :&nbsp;<strong class="font-weight-extra-bold"><?= $produk_data['nama']; ?> </strong></h2>
							</div>
							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"><?= $produk_data['deskripsi']; ?>.</p>
							<hr class="solid my-5">
							<strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">Share</strong>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
						<div class="col-md-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1400">
							<h2 class="text-color-dark font-weight-normal text-5 mb-2">Galeri <strong class="font-weight-extra-bold">Details</strong></h2>
							<ul class="list list-icons list-primary list-borders text-2">
								<!--<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Kategori:</strong> <?= $produk_data['kategori']; ?></li>-->
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Lokasi/Alamat Kegiatan:</strong> <?= $produk_data['lokasi']; ?></li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> <?= $produk_data['date_create']; ?></li>
								<!--<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Keywords:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1"><?= $produk_data['kategori']; ?></a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">Pak PJ</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="footer-texts-more-lighten">
				<div class="container">
					<div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
						<div class="row">
							<div class="col-12 text-center">
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	  	<!-- Vendor -->
		<script src="<?= base_url('public/pusdok/template/vendor/plugins/js/plugins.min.js') ?>"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url('public/pusdok/template/js/theme.js') ?>"></script>

		<!-- Theme Custom -->
		<script src="<?= base_url('public/pusdok/template/js/custom.js') ?>"></script>
		<!-- Theme Initialization Files -->
		<script src="<?= base_url('public/pusdok/template/js/theme.init.js') ?>"></script>

	</body>
</html>
