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

<!-- Podcast Section Begin -->
<section class="podcast podcast--page spad">
    <div class="container">
        <div class="podcast__top">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <h2>آخرین پادکست ها</h2>
                </div>
                <div class="col-lg-7 col-md-7">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">همه پادکست ها</li>
                        <li data-filter=".entrepreneurship">تکنولوژی</li>
                        <li data-filter=".media">سینما</li>
                        <li data-filter=".tech">علمی</li>
                        <li data-filter=".tutorials">آموزشی</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row podcast-filter">
            <div class="col-lg-12 mix entrepreneurship">
                <div class="podcast__item">
                    <div class="podcast__item__pic">
                        <img src="img/podcast/podcast-1.jpg" alt="">
                    </div>
                    <div class="podcast__item__text">
                        <a href="#" class="heart-icon"><i class="fa fa-heart"></i></a>
                        <ul>
                            <li><span class="icon_calendar"></span> یکشنبه 21 مهر 99</li>
                            <li><span class="icon_profile"></span> توسط سیروان ویسی</li>
                            <li><span class="icon_tags_alt"></span> آموزشی، رسانه، تکنولوژی</li>
                        </ul>
                        <h4>قسمت 04 : چگونه یک شبه پولدار شویم</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود...</p>
                        <div class="track__option ltr">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container-1"
                                 data-url="music-files/3.mp3"></div>
                            <div class="jp-audio jp_container-1" role="application" aria-label="media player">
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
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00
                                        </div>
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
            <div class="col-lg-12 mix media">
                <div class="podcast__item">
                    <div class="podcast__item__pic">
                        <img src="img/podcast/podcast-2.jpg" alt="">
                    </div>
                    <div class="podcast__item__text">
                        <a href="#" class="heart-icon"><i class="fa fa-heart"></i></a>
                        <ul>
                            <li><span class="icon_calendar"></span> یکشنبه 21 مهر 99</li>
                            <li><span class="icon_profile"></span> توسط سیروان ویسی</li>
                            <li><span class="icon_tags_alt"></span> آموزشی، رسانه، تکنولوژی</li>
                        </ul>
                        <h4>قسمت 07 : چگونه یک مهندس نرم افزار موفق شویم</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود...</p>
                        <div class="track__option ltr">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container-2"
                                 data-url="music-files/4.mp3"></div>
                            <div class="jp-audio jp_container-2" role="application" aria-label="media player">
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
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00
                                        </div>
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
            <div class="col-lg-12 mix tech">
                <div class="podcast__item ">
                    <div class="podcast__item__pic">
                        <img src="img/podcast/podcast-3.jpg" alt="">
                    </div>
                    <div class="podcast__item__text">
                        <a href="#" class="heart-icon"><i class="fa fa-heart"></i></a>
                        <ul>
                            <li><span class="icon_calendar"></span> یکشنبه 21 مهر 99</li>
                            <li><span class="icon_profile"></span> توسط سیروان ویسی</li>
                            <li><span class="icon_tags_alt"></span> آموزشی، رسانه، تکنولوژی</li>
                        </ul>
                        <h4>قسمت 03 : رازهای جهان هستی و کهکشان ها</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود...</p>
                        <div class="track__option ltr">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container-3"
                                 data-url="music-files/5.mp3"></div>
                            <div class="jp-audio jp_container-3" role="application" aria-label="media player">
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
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00
                                        </div>
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
            <div class="col-lg-12 mix tutorials">
                <div class="podcast__item">
                    <div class="podcast__item__pic">
                        <img src="img/podcast/podcast-4.jpg" alt="">
                    </div>
                    <div class="podcast__item__text">
                        <a href="#" class="heart-icon"><i class="fa fa-heart"></i></a>
                        <ul>
                            <li><span class="icon_calendar"></span> یکشنبه 21 مهر 99</li>
                            <li><span class="icon_profile"></span> توسط سیروان ویسی</li>
                            <li><span class="icon_tags_alt"></span> آموزشی، رسانه، تکنولوژی</li>
                        </ul>
                        <h4>قسمت 21 : رادیو صدای شب</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود...</p>
                        <div class="track__option ltr">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container-4"
                                 data-url="music-files/6.mp3"></div>
                            <div class="jp-audio jp_container-4" role="application" aria-label="media player">
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
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00
                                        </div>
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
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="load__more">
                    <a href="#">بیشتر</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Podcast Section End -->

    <!-- Footer Section Begin -->
<?php get_footer()?>
<!-- Footer Section End -->

</body>

</html>