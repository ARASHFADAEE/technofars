
<body>
<?php get_header()?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option normal-breadcrumb spad set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/breadcrumb-bg.jpg" style="background-image: url(<?php echo get_template_directory_uri()?>/img/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2><?php echo get_the_archive_title()?></h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo get_home_url()?>"><i class="fa fa-home"></i> خانه</a>
                            <span><?php echo get_the_archive_title()?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
    
                 <div class="blog__item__list">
                    <?php 
            
            $loop = new WP_Query(
                array(
                    'post_type'      => 'padcast',
                    'posts_per_page' => 3,
                )
            );
            
            
            while ( $loop->have_posts() ) :
                $loop->the_post();


                ?>
        
                    <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="" >
                                <div class="label">پادکست</div>
                            </div>
                            <div class="blog__item__text">
                                <div class="blog__date"><span class="icon_calendar blog-date"></span> یکشنبه 21 مهر 99</div>
                                <h4><?php the_title()?></h4>
                                <ul>
                                    <li><span class="icon_profile"></span><?php echo esc_html( get_field('Podcast-creator') ); ?></li>
                                    <li><span class="fa fa-comments-o"></span></li>
                                </ul>
                                <p>
                                    <?php the_excerpt()?>
                                </p>
                                <a class="read-more" href="<?php the_permalink()?>">ادامه مطلب <span class="fa fa-angle-double-left"></span></a>
                            </div>
                        </div>
                        <?php endwhile;
wp_reset_postdata();?>

                    </div>

                    
                    <div class="blog__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">بعدی</a>
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
    <?php
    $custom_post_type = ''; // نام پست‌های نوع سفارشی شما
    $categories = get_categories(array(
        'taxonomy' => 'padcast', // نام دسته‌بندی‌های پست‌های نوع سفارشی
        'post_type' => $custom_post_type,
        'hide_empty' => false, // نمایش دسته‌بندی‌های خالی
    ));

    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        echo '<li><a href="' . esc_url($category_link) . '"><i class="fa fa-angle-double-left"></i> ' . esc_html($category->name) . '</a></li>';
    }
    ?>
</ul>

                        </div>
                        <div class="sidebar__recent">
                            <h4>پست های جدید</h4>
                            <a href="#" class="sidebar__recent__item">
                                <h6>قسمت 04 : چگونه یک شبه پولدار شویم - نقد و بررسی</h6>
                                <p><span class="icon_calendar"></span> یکشنبه 21 مهر 99</p>
                            </a>
                            <a href="#" class="sidebar__recent__item">
                                <h6>قسمت 07 : چگونه یک مهندس نرم افزار موفق شویم</h6>
                                <p><span class="icon_calendar"></span> یکشنبه 21 مهر 99</p>
                            </a>
                            <a href="#" class="sidebar__recent__item">
                                <h6>قسمت 03 : رازهای جهان هستی و کهکشان ها</h6>
                                <p><span class="icon_calendar"></span> یکشنبه 21 مهر 99</p>
                            </a>
                            <a href="#" class="sidebar__recent__item">
                                <h6> قسمت 21 : رادیو صدای شب - ایده پردازی و اجرا</h6>
                                <p><span class="icon_calendar"></span> یکشنبه 21 مهر 99</p>
                            </a>
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
    <!-- Blog Section End -->

<?php get_footer()?>



</html>