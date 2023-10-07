
<?php get_header()?>

<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option normal-breadcrumb spad set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>تماس با ما</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html"><i class="fa fa-home"></i> خانه</a>
                            <span>تماس با ما</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207371.9779489534!2d51.20973516646492!3d35.6970117847622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00491ff3dcd9%3A0xf0b3697c567024bc!2sTehran%2C%20Tehran%20Province%2C%20Iran!5e0!3m2!1sen!2snl!4v1602521536653!5m2!1sen!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/icons/ci-1.png" alt="">
                    <h4>آدرس</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/icons/ci-2.png" alt="">
                    <h4>شماره تماس</h4>
                    <p class="text-center ltr">(+98) 333 333 3333 <span>(+98) 555 555 5555</span></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/icons/ci-3.png" alt="">
                    <h4>ساعات کاری</h4>
                    <p class="text-center">بازگشایی: 9 صبح تا 5 بعدازظهر <span>(جمعه ها تعطیل)</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form">
                    <h2>دیدگاه خود را بنویسید</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" placeholder="نام شما">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" placeholder="آدرس ایمیل">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="متن دیدگاه"></textarea>
                                <button type="submit" class="site-btn">ثبت دیدگاه</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Footer Section Begin -->
<?php get_footer()?>

</body>

</html>