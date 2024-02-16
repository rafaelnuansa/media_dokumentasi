<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= esc($web_title ?? '') ?>">
    <meta name="keywords" content="pusdok, pusat dokumentasi dki, foto jakarta, foto gubernur dki, foto wakil gubernur">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url('public/img/web/' . esc($web_icon ?? '')) ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('public/img/web/' . esc($web_icon ?? '')) ?>" type="image/x-icon">
    <title><?= esc($web_title ?? '') ?></title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/vendors/fontawesome.css') ?>">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/vendors/flag-icon.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/vendors/themify-icons.css') ?>">

    <!-- Datatable css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/vendors/datatables.css') ?>">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/vendors/bootstrap.css') ?>">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/admin.css') ?>">

    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/vendors/dropzone.css') ?>">

</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none w-auto">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="" alt=""></a></div>
            </div>
            <div class="mobile-sidebar w-auto">
                <div class="media-body text-end switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        <h6>ID</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                           <!--
                            <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                            -->
                        </ul>
                    </li>

                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="<?= base_url('public/pusdok/images/user.png') ?>" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <!--<li><a href="#"><i data-feather="user"></i>Edit Profile</a></li>-->
                            <li><a href="<?= base_url(); ?>/auth/logout"><i data-feather=""></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="#"><img class="blur-up lazyloaded" width="140" height="72" data-sticky-width="140" data-sticky-height="72" src="<?= base_url('public/img/web/' . esc($web_logo ?? '')) ?>" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="<?= base_url(); ?>/admin"><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="<?= base_url(); ?>admin/gallery"><span>Galeri Foto KeMitraan</span></a></li>
                    <li><a class="sidebar-header" href="<?= base_url(); ?>admin/youtube"><span>Galeri Youtube</span></a></li>
                    <li><a class="sidebar-header" href="<?= base_url(); ?>admin/dokumen"><span>Galeri Dokumen</span></a></li>
                    <li><a class="sidebar-header" href="<?= base_url(); ?>admin/user"><span>User</span></a></li>
                    <li><a class="sidebar-header" href="<?= base_url(); ?>admin/settings-web"><span>Seting</span></a></li>

                    <li><a class="sidebar-header" href="<?= base_url(); ?>/auth/logout"><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Pusdok
                                    <small>Sistem <?= esc($web_title ?? '') ?></small>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                     <?= $this->renderSection('content') ?>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="<?= base_url('public/assets/js/jquery-3.3.1.min.js') ?>"></script>

<!-- Bootstrap js-->
<script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>

<!-- feather icon js
<script src="<?= base_url('public/assets/js/icons/feather-icon/feather.min.js') ?>"></script>
<script src="<?= base_url('public/assets/js/icons/feather-icon/feather-icon.js') ?>"></script>
-->
<!-- Sidebar jquery-->
<script src="<?= base_url('public/assets/js/sidebar-menu.js') ?>"></script>

<!-- Datatables js-->
<script src="<?= base_url('public/assets/js/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/assets/js/datatables/custom-basic.js') ?>"></script>

<!--Customizer admin-->
<script src="<?= base_url('public/assets/js/admin-customizer.js') ?>"></script>
<!--dropzone js-->
<script src="<?= base_url('public/assets/js/dropzone/dropzone.js') ?>"></script>
<script src="<?= base_url('public/assets/js/dropzone/dropzone-script.js') ?>"></script>

<!--ckeditor js
<script src="<?= base_url('public/assets/js/editor/ckeditor/ckeditor.js') ?>"></script>
<script src="<?= base_url('public/assets/js/editor/ckeditor/styles.js') ?>"></script>
<script src="<?= base_url('public/assets/js/editor/ckeditor/adapters/jquery.js') ?>"></script>
<script src="<?= base_url('public/assets/js/editor/ckeditor/ckeditor.custom.js') ?>"></script>
-->
<!-- lazyload js-->
<script src="<?= base_url('public/assets/js/lazysizes.min.js') ?>"></script>

<!--right sidebar js-->
<script src="<?= base_url('public/assets/js/chat-menu.js') ?>"></script>

<!--script admin-->
<script src="<?= base_url('public/assets/js/admin-script.js') ?>"></script>

</body>
</html>
