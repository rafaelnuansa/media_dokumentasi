<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= esc($web_title) ?></title>
    <meta name="description" content="<?= esc($web_description) ?>">
    <meta name="keywords" content="<?= esc($web_keywords) ?>">
    <meta name="author" content="<?= esc($web_author) ?>">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="icon" type="image/ico" href="<?= base_url('public/img/web/' . esc($web_icon)) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FONTS -->
    <link rel='stylesheet' id='napoli-fonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C100%2C300%2C500%2C600%2C700%2C800%2C900%7CRoboto%3A400%2C100%2C300%2C700%2C900%2C300italic%7CLibre+Baskerville%3A400%2C400i%2C700%7CLora%3A400%2C700%7CRoboto+Slab%3A400%2C300%2C700%2C100%7CUbuntu%3A400%2C300%2C500%2C700%7CDroid+Serif%3A400%2C400italic%2C700%2C700italic%7CGreat+Vibes%7CMontserrat%3A400%2C700%7CNoto+Sans%3A400%2C700%2C400italic%2C700italic%7COpen+Sans%26subset%3Dlatin%2Clatin-ext&#038;ver=1478770331'
        type='text/css' media='all' />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/font-icons/font-awesome.min.css') ?> "/>
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/font-icons/pe-icon-7-stroke.css') ?> " />
    <!-- STYLES -->
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/bootstrap.min.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/animsition.min.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/jquery.flipster.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/monthly.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/default-skin.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/justifiedGallery.min.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/css/libs/magnific-popup.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/photoswipe.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/libs/animate.css') ?> " />
    <link rel='stylesheet' href="<?= base_url('public/pusdok/css/main.css') ?> " />
</head>

<body class=" animsition">
    <div class="main-wrapper ">
        <div class="  ">
            <div class="container no-padd">
                <div class="row">
                    <div class="col-xs-12 no-padd-md no-padd-mob">
                        <header class="right-menu">
                            <a href="<?= base_url(); ?>" class="logo">
                               <img alt="<?= esc($web_title) ?>" width="150" height="110" data-sticky-width="150" data-sticky-height="110" data-sticky-top="0" src="<?= base_url('public/img/web/' . esc($web_logo)) ?>">
                            </a><br />
                           <nav id="topmenu">
                            <div class="napoli-top-social">
                                    <span class="social-icon fa fa-share-alt" aria-hidden="true"></span>
                                    <ul class="social ">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                </nav>
                        </header>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid top-banner margin-lg-60b margin-xs-25b">
            <img data-lazy-src="<?= base_url('public/pusdok/images/banner/banner.jpg') ?>" src="data:image/gif;base64,R0lGODdhAQABAIAAAAAAAMzMzCwAAAAAAQABAAACAkQBADs=" class="s-img-switch" alt="" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <div class="row text-light">
                            <div class="col-xs-12">
                               <h4 class="subtitle"><b>Selamat Datang Di,</b></h4>
                                <h1 class="title"><b>Pusat Dokumentasi</b></h1>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container no-padd">
            <div class="hero">
               <div class="row margin-lg-5t margin-lg-65b margin-xs-25b">
                    <div class="col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                               <div class="services" >
                                   <a href="<?= base_url('dokumen'); ?>" target='_blank'>
                                        <div class="img-wrap"><img src="<?= base_url('public/pusdok/images/galeri_foto_biru.png') ?>" class="img" alt=""></div>
                                        <div class="content">
                                        <u><h4 class="title">Galeri Dokumen</h4></u>
                                        </div>
                                     </a>
                                        <div align="center"><b>Galeri Dokumen.</b></div>
                                    </div>
                               </div>
                          <div class="col-lg-4 col-sm-6 col-xs-12">
                               <div class="services" >
                                   <a href="<?= base_url(); ?>video" target="blank_">
                                        <div class="img-wrap"><img src="<?= base_url('public/pusdok/images/galeri_reels_biru.png') ?>" class="img" alt=""></div>
                                        <div class="content">
                                        <u><h4 class="title">Video i</h4></u>
                                        </div>
                                     </a>
                                        <div class="text" align="center"><b>Video </b></div>
                                    </div>
                               </div>


                            <div class="col-lg-4 col-sm-6 col-xs-12">
                               <div class="services" >
                                   <a href="<?= base_url('gallery'); ?>" target="blank_">
                                        <div class="img-wrap"><img src="<?= base_url('public/pusdok/images/galeri_infografis_biru.png') ?>" class="img" alt=""></div>
                                        <div class="content">
                                        <u><h4 class="title">KEGIATAN KEMITRAAN</h4></u>
                                        </div>
                                     </a>
                                        <div class="text" align="center"><b>Dokumentasi Kegiatan Kemitraan .</b></div>
                                    </div>
                               </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <footer id="footer" class=" ">
            <div class="container no-padd-md">
                <div class="copyright">
                   
                </div>
                <!--
                <div class="social-links">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
                </div>
                -->
            </div>
        </footer>
    </div>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/monthly.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.flexslider.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.mb.YTPlayer.src.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.matchHeight-min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.fitvids.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/photoswipe-ui-default.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/photoswipe.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/modernizr.custom.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/modernizr-2.6.2.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery-migrate.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.sliphover.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.justifiedGallery.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.gridrotator.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.animsition.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.stellar.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/idangerous.swiper.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/date.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/filmstrim.gallery.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/foxlazy.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.countTo.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.easings.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.flipster.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/jquery.multiscroll.min.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/foxlazy.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/lib/scripts_gallery.js') ?>"></script>
    <script src="<?= base_url('public/pusdok/js/script.js') ?>"></script>
</body>

</html>
