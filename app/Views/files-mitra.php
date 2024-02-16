<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
	    <meta charset="utf-8">
    <title>Dokumen</title>
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
											<img alt="<?= esc($web_title) ?>" width="195.5" height="50" data-sticky-width="195.5" data-sticky-height="50" src="<?= base_url('public/pusdok/images/logo.png') ?>">
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
			   <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-white overlay-show overlay-op-5" style="background-image: url(./public/pusdok/images/banner/slide.jpg);">
					<div class="container">
						<div class="row">
									<div class="col-md-12 align-self-center p-static order-2 text-center">
										<div class="overflow-hidden pb-2">
											<h1 class="text-white font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Galeri Foto Kemitraan Pemprov DKI Jakarta.</h2>
										</div>
									</div>
								</div>
					</div>
				</section>
				<div class="container py-2">
					<div class="row mt-3 pt-2">
						<div class="col-lg-3 order-2 order-lg-1">
							<aside class="sidebar">
                            	<form action="#" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control text-1" placeholder="Masukan Pencarian..." name="s" id="s" type="text">
										<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
									</div>
								</form>
								<h5 class="font-weight-semi-bold">Filter By</h5>
								<ul class="nav nav-list flex-column sort-source mb-5" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
									<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
								</ul>
							   </aside>
						</div>
						<div class="col-lg-9 order-1 order-lg-2">
							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                                     <?php foreach ($files_data as $files): ?>
									<div class='col-md-6 col-lg-4 isotope-item <?= $files['kategori']; ?>'>
                                    <?php
                                          $produk_gambar = $gambarProdukModel->where('files_id', $files['files_id'])->first();
                                          ?>
										<div class='portfolio-item'>
											<a href='<?= base_url('files-mitra/' . $files['slug']); ?>'>
												<span class='thumb-info thumb-info-lighten border-radius-0'>
													<span class='thumb-info-wrapper border-radius-0'>
														<img src='<?= base_url($produk_gambar->url_gambar ?? 'path/default.jpg'); ?>' class='img-fluid border-radius-0' alt=''>
														<span class='thumb-info-title'>
															<!--<span class='thumb-info-inner'>$aname</span>
															<span class='thumb-info-type'><?= $files['kategori']; ?></span>
                                                            -->
														</span>
														<span class='thumb-info-action'>
															<span class='thumb-info-action-icon bg-dark opacity-8'><i class='fas fa-plus'></i></span>
														</span>
													</span>
												</span>
											</a>
                                            <div class='post-content'>
											   <p><?= $files['nama']; ?></p>
												<div class='post-meta'>
													<!--<span><i class='far fa-user'></i> By <a href='#'><?= $files['fotografer']; ?></a> </span>&nbsp;-->
													<span><i class='far fa-calendar-alt'></i> <a href='#'><?= $files['date_create']; ?></a> </span>
													<span>&nbsp;</span>
												</div>
											</div>
										</div>
									</div>
                                     <?php endforeach; ?>
								</div>
							</div>
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
