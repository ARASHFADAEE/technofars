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

</head>

<body>
<div id="preloder">
    <div class="loader"></div>
</div>
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
        <a href="./index.html"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>
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
                    <a href="./index.html"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></a>
                </div>
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">خانه</a></li>
                        <li><a href="./about.html">درباره ما</a></li>
                        <li><a href="./episodes.html">پادکست ها</a></li>
                        <li><a href="#">صفحات</a>
                            <ul class="dropdown">
                                <li><a href="./episodes-details.html">مشخصات پادکست</a></li>
                                <li><a href="./blog.html">بلاگ</a></li>
                                <li><a href="./blog-details.html">مشخصات بلاگ</a></li>
                            </ul>
                        </li>
                        <li><a href="./contact.html">ارتباط با ما</a></li>
                    </ul>
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
