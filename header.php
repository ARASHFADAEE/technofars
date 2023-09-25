<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Megapod Template">
    <meta name="keywords" content="Megapod, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">
          <?php wp_head()?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css" type="text/css">

</head>

<body>
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__search">
        <form action="#">
            <input type="text" placeholder="کلمه کلیدی + اینتر..">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="offcanvas__logo">
        <a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="header__logo">
                    <a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>
                </div>
                <nav class="header__menu mobile-menu">
                <?php 
$args = array(

    'theme_location'=>'main-menu');
wp_nav_menu( $args ); 
?>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="header__left">
                    <div class="header__left__search">
                        <form action="#">
                            <input type="text" placeholder="کلمه کلیدی + اینتر..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="header__left__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
