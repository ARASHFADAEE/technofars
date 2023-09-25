<?php get_header()?>
<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/hero/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <?php 
            
            $array = array(

                'post_type' => 'padcast',
                'posts_per_page' => 1,

            
            );
            $query=new WP_Query($array);

            if ($query->have_posts()) {
                while ($query->have_posts()) : $query->the_post(); 

            ?>
            <div class="col-lg-6">
                <div class="hero__text">
                    <h5><span class="icon_calendar"></span><?php the_date();?></h5>
                    <h2><?php the_title()?></h2>
                    <p><?php echo get_the_excerpt($query)?></p>
                    <a href="#" class="primary-btn">اشتراک ویژه</a>
                    <a href="#" class="primary-btn white-btn">ثبت نام رایگان</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero__pic set-bg" data-setbg="<?php the_post_thumbnail_url()?>" >
                    <a href="<?php the_permalink()?>"
                       class="play-btn video-popup"><img  src="<?php echo get_template_directory_uri()?>/img/hero/play-btn.png" alt=""></a>
                </div>
            </div>
            
            <?php
   endwhile;
}
wp_reset_postdata();
?>
        </div>
    </div>

</section>
<!-- Hero Section End -->

<!-- Podcast Section Begin -->
<section class="episodes spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>پادکست های بروز شده</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
$array = array(

    'posts_per_page' => 6,
    'post_type'=>'padcast',



);

$query = new WP_Query($array);

?>

<?php
                
     if ($query->have_posts()) {
     while ($query->have_posts()) : $query->the_post();
                
                ?>
   <div class="col-lg-4 col-md-6">
    <div class="episodes__item set-bg" data-setbg="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>">
        <div class="tags"><span class="icon_tags_alt"></span><?php the_category() ?></div>
        <div class="time ltr">40:00<span class="icon_clock_alt"></span></div>
        <a href="<?php the_permalink(); ?>" class="play-btn "><img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt=""></a>
        <div class="episodes__text">
            <h4><?php the_title(); ?></h4>
            <p><span class="icon_calendar"></span><?php echo get_the_date() ?></p>
        </div>
    </div>
</div>

            <?php



   endwhile;
}
wp_reset_postdata();

?>


        </div>
    </div>
</section>
<!-- Podcast Section End -->

<!-- Call To Action Section Begin -->
<section class="callto spad set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/call-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="callto__text">
                    <h2>حمایت مالی</h2>
                    <p style="text-align: unset">از گوش دادن به پادکست های ما لذت می برید؟ با اهدای یک مبلغ ما را حمایت
                        کنید!</p>
                    <a href="#" class="primary-btn">پرداخت آنلاین</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->

<!-- Episodes Section Begin -->

<!-- Episodes Section End -->


<?php get_footer()?>

</body>

</html>