<?php
    require_once("config/conexion.php");

    require_once("models/Socialmedia.php");
    $socialmedia = new Socialmedia();
    $smx = $socialmedia->get_socialmedia();


    require_once("models/Curso.php");
    $cursodestacado = new Curso();
    $curdx = $cursodestacado->get_curso_destacado();

    $curx = $cursodestacado->get_curso();
?>

<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web - JeanCode</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets\imgs\theme\favicon.png">
    <!-- Listado CSS  -->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\widgets.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets\imgs\news\thumb-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets\imgs\news\thumb-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets\imgs\news\thumb-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The 22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">
                    <img class="advertise-img border-radius-5" src="assets\imgs\ads\ads-1.jpg" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="#"><img class="logo" src="assets\imgs\theme\logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                             <li><a href="index.php">Inicio</a> </li>
                            <li><a href="sobre.php">About</a> </li>
                            <li><a href="#">Proyectos</a> </li>
            
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li><a href="index.php">Inicio</a> </li>
                            <li><a href="sobre.php">About</a> </li>
                            <li><a href="#">Proyectos</a> </li>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <?php
                            for($i=0;$i<sizeof($smx);$i++){
                        ?>
                            <li class="list-inline-item"><a class="social-icon <?php echo $smx[$i]["sm_icon1"] ?> text-xs-center" target="_blank" href="<?php echo $smx[$i]["sm_rutaweb"] ?>"><i class="elegant-icon <?php echo $smx[$i]["sm_icon2"] ?>"></i></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
        <!-- Start Main content -->
    <main class="bg-grey pb-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50 text-center">
                <h1 class="entry-title mb-20 font-weight-900 ">
                    Sobre mi
                </h1>
            </div>
            <!--end single header-->
            <!--figure-->
            <article class="entry-wraper">
                <p class="font-large">We are AliThemes , a creative and dedicated group of individuals who love web development almost as much as we love our customers.
                    We are passionate team with the mission for achieving the perfection in web design.
                    All designs are made by love with pixel perfect design and excellent coding quality. Speed, security and SEO friendly alway in our mind.</p>
                <hr class="wp-block-separator is-style-wide">
                <p><span class="mr-5">
                        <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline"></ion-icon>
                    </span><strong>Direccion:</strong>: Lorem 142 Str., 2352, Ipsum, State, USA</p>
                <p><span class="mr-5">
                        <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
                    </span><strong>Correo Electronico:</strong>: <a href="https://alithemes.com">https://alithemes.com</a></p>
                <p><span class="mr-5">
                        <ion-icon name="planet-outline" role="img" class="md hydrated" aria-label="planet outline"></ion-icon>
                    </span><strong>Telefono:</strong>: <a href="https://alithemes.ticksy.com">https://alithemes.ticksy.com</a></p>
            </article>
        </div>
        <!--container-->
    </main>
    <!-- End Main content -->
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                    </div>
                </div>
            </div>
            <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Skill</h5>
                </div>
                
                <div class="carausel-3-columns">
                    <div class="carausel-3-columns-item  hover-up-2 transition-normal ">
                        <div class="">
                            <a class="" href="single.html">
                                <img src="assets/imgs/news/Javscript.png" alt="" width="100px" >
                            </a>
                        </div>
                    </div>
                    <div class="carausel-3-columns-item  hover-up-2 transition-normal ">
                        <div class="">
                            <a class="" href="single.html">
                                <img src="assets/imgs/news/Html5.png" alt="" width="100px" >
                            </a>
                        </div>
                    </div>
                    <div class="carausel-3-columns-item  hover-up-2 transition-normal ">
                        <div class="">
                            <a class="" href="single.html">
                                <img src="assets/imgs/news/css.png" alt="" width="100px" >
                            </a>
                        </div>
                    </div>
                    <div class="carausel-3-columns-item  hover-up-2 transition-normal ">
                        <div class="">
                            <a class="" href="single.html">
                                <img src="assets/imgs/news/Javscript.png" alt="" width="100px" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar-widget wow fadeInUp animated mb-30 text-center">
                        <div class="textwidget">
                            <strong class="color-black">Sigueme</strong><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <?php
                                    for($i=0;$i<sizeof($smx);$i++){
                                ?>
                                    <li class="list-inline-item"><a class="<?php echo $smx[$i]["sm_icon1"] ?>" href="<?php echo $smx[$i]["sm_rutaweb"] ?>" target="_blank" title="<?php echo $smx[$i]["sm_nom"] ?>"><i class="elegant-icon <?php echo $smx[$i]["sm_icon2"] ?>"></i></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2021, Stories - Personal Blog HTML Template </p>
                <p class="float-md-right font-small text-muted">
                    Design by <a href="https://alithemes.com" target="_blank">AliThemes</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="assets\js\vendor\modernizr-3.5.0.min.js"></script>
    <script src="assets\js\vendor\jquery-1.12.4.min.js"></script>
    <script src="assets\js\vendor\popper.min.js"></script>
    <script src="assets\js\vendor\bootstrap.min.js"></script>
    <script src="assets\js\vendor\jquery.slicknav.js"></script>
    <script src="assets\js\vendor\slick.min.js"></script>
    <script src="assets\js\vendor\wow.min.js"></script>
    <script src="assets\js\vendor\jquery.ticker.js"></script>
    <script src="assets\js\vendor\jquery.vticker-min.js"></script>
    <script src="assets\js\vendor\jquery.scrollUp.min.js"></script>
    <script src="assets\js\vendor\jquery.nice-select.min.js"></script>
    <script src="assets\js\vendor\jquery.magnific-popup.js"></script>
    <script src="assets\js\vendor\jquery.sticky.js"></script>
    <script src="assets\js\vendor\perfect-scrollbar.js"></script>
    <script src="assets\js\vendor\waypoints.min.js"></script>
    <script src="assets\js\vendor\jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="assets\js\main.js"></script>
</body>

</html>