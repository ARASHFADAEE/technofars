<body>

<?php get_header()?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option normal-breadcrumb spad set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2><?php echo get_the_archive_title()?></h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html"><i class="fa fa-home"></i> خانه</a>
                            <span><?php echo get_the_archive_title()?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>پادکست ها</h2>
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> خانه</a>
                        <span>پادکست ها</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single__track">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single__track__item">
                        <div class="single__track__item__pic">
                            <img src="img/hero/hero-track.jpg" alt="">
                        </div>
                        <div class="single__track__item__text">
                            <h5>کهکشان راه شیری</h5>
                            <span>سیروان ویسی</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" style="direction: ltr !important;">
                    <div class="single__track__option ltr">
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container" data-url="music-files/2.mp3">
                        </div>
                        <div class="jp-audio jp_container" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><span
                                            class="icon_volume-high"></span></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-btns rtl">
                                <a href="#"><i class="social_share"></i> ارسال</a>
                                <a href="#"><i class="fa fa-download"></i> دانلود</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
<?php get_footer()?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<!-- Music Plugin -->
<script src="js/jquery.jplayer.min.js"></script>
<script src="js/jplayerInit.js"></script>
</body>

</html>