<?php get_header()?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/hero/hero-bg.jpg" style="background-image: url(<?php echo get_template_directory_uri()?>/img/hero/hero-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text episodes__breadcrumb__text">
                    <?php 
            
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                        <ul>
                            <li><span class="icon_calendar"></span><?php the_date()?></li>
                            <li><span class="icon_tags_alt"></span><?php the_category()?></li>
                        </ul>
                        <h2><?php the_title()?></h2>

                        <?php
                endwhile;
            endif;
            
            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="single__track">
            <?php 
            
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single__track__item">
                            <div class="single__track__item__pic">

                            <?php the_post_thumbnail()?>
                                
                            </div>
                            <div class="single__track__item__text">
                                <h5><?php the_title(); ?></h5>
                                <span><?php echo esc_html( get_field('Podcast-creator') ); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" style="direction: ltr !important;">
                        <div class="single__track__option ltr">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container" data-url="<?php echo  esc_attr( get_field('padcast_link') ); ?>">
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
                                    <a href="<?php echo  esc_attr( get_field('padcast_link') ); ?>"><i class="fa fa-download"></i> دانلود</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
            endif;
            
            ?>
        </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Episodes Details Section Begin -->
        <section class="episodes-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="episodes__details__content">
                            <?php the_content()?>

                            <div class="episodes__details__btns">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <a href="#" class="episodes__details__btns__item episodes__details__btns__item--next">
                                            <p><span class="arrow_right"></span> قسمت بعدی</p>
                                            <h6>قسمت 23 : بازاریابی دیجیتال و تبلیغات هدفمند</h6>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <a href="#" class="episodes__details__btns__item text-left">
                                            <p class="text-left">قسمت قبلی <span class="arrow_left"></span></p>
                                            <h6>قسمت 21 : بازاریابی دیجیتال و تبلیغات هدفمند</h6>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="episodes__details__form">
                            <h4>دیدگاه خود را بنویسید</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text" placeholder="نام شما">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text" placeholder="آدرس ایمیل">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text" placeholder="شماره تماس">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="متن دیدگاه"></textarea>
                                        <button type="submit" class="site-btn">ثبت دیدگاه</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="جستجو...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__categories">
                            <h4>دسته بندی ها</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i> کارآفرینی</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i> رسانه</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i> تکنولوژی</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i> آموزشی</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i> کسب و کار</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-left"></i> سرگرمی</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__recent">
                            <h4>جدید ترین پادکست ها</h4>
                            <?php
                            $array = array(

                                'post_type' => 'padcast',
                            
                                'posts_per_page' => 3,

                            
                            );
                            $query=new WP_Query($array);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) : $query->the_post(); 

                            ?>


                            <a href="<?php the_permalink()?>" class="sidebar__recent__item">
                                <h6><?php the_title()?></h6>
                                <p><span class="icon_calendar"></span><?php the_title()?></p>
                            </a>

                            <?php
   endwhile;
}

?>
                        </div>
                        <div class="sidebar__banner set-bg" data-setbg="img/episodes-single/sidebar-banner.jpg">
                            <span>بهترین قالب سفارشی</span>
                            <h2>پادکست</h2>
                        </div>
                        <div class="sidebar__tags">
                            <h4>برچسب های محبوب</h4>
                            <a href="#">رمان</a>
                            <a href="#">ایده_پردازی</a>
                            <a href="#">پادکست</a>
                            <a href="#">ویدیو</a>
                            <a href="#">خلاقیت</a>
                            <a href="#">ورزش</a>
                            <a href="#">موزیک</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Episodes Details Section End -->

<?php get_footer()?>

</html>