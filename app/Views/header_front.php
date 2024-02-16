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
						   
						</div>
					</div>
				</div>
			</header>