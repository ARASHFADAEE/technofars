<?php


// function add_theme_scripts(){
//     wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false , 'all');
//     wp_enqueue_style('elegant-icons.css' , get_template_directory_uri() . '/css/elegant-icons.css' , array() , false , 'all');
//     wp_enqueue_style('font-asome' , get_template_directory_uri() . '/css/font-awesome.min.css' , array() , false , 'all');
//     wp_enqueue_style('magnific-popup' , get_template_directory_uri() . '/css/magnific-popup.css' , array() , false , 'all');
//     wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');
//     wp_enqueue_style('style' , get_template_directory_uri() . '/css/style.css' , array() , false , 'all');

//     // javascript source

//     wp_enqueue_script('jq' , get_template_directory_uri() . '/js/code.jquery.com_jquery-3.7.1.min' , array('jquery') , false , true);
//     wp_enqueue_script('magnific-popup' , get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' , array('jquery') , false , true);
//     wp_enqueue_script('mixitup' , get_template_directory_uri() . '/js/mixitup.min.js' , array('jquery') , false , true);
//     wp_enqueue_script('slicknav' , get_template_directory_uri() . '/js/jquery.slicknav.js' , array('jquery') , false , true);
//     wp_enqueue_script('owl.carousel' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery') , false , true);
//     wp_enqueue_script('bootstrap.min.js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery') , false , true);
//     wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , false , true);
    
// }
// add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//add support img and title tag in site
function title_setup(){
    add_theme_support('title-tag');
    // add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'main-menu' => __( 'فهرست اصلی ' ),
        )
    );
}
add_action('after_setup_theme' , 'title_setup');



//the_expert()
function custom_excerpt_length($length) {
    return 20; // تعداد کلمات مورد نظر برای نمایش خلاصه
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return ' ...'; // متن بعد از خلاصه نوشته (می‌توانید تغییر دهید)
}
add_filter('excerpt_more', 'custom_excerpt_more');


//add post-type padcast

function post_type_padcast() {
    $labels = array(
        'name'               => __( 'پادکست' ),
        'singular_name'      => __( 'پادکست' ),
        'menu_name'          => __( 'پادکست' ),
        'name_admin_bar'     => __( 'پادکست' ),
        'add_new'            => __( ' افزودن جدید' ),
        'add_new_item'       => __( 'پست مخصوص پادکستی' ),
        'new_item'           => __( 'پست جدید' ),
        'edit_item'          => __( 'ویرایش پادکست' ),
        'view_item'          => __( 'مشاهده پادکست' ),
        'all_items'          => __( 'همه پادکست ها' ),
        'search_items'       => __( 'جستجو در بین پادکست ها' ),
        'parent_item_colon'  => __( 'مادر' ),
        'not_found'          => __( 'مطلب یافت نشد' ),
        'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'padcast', $args );
}
add_action( 'init', 'post_type_padcast' );

// add taxonomy(category) in padcast posttype


function create_taxonomies_for_padcast() {
    $labels = array(
        'name'              => _x( 'دسته بندی', 'دسته بندی' ),
        'singular_name'     => _x( 'دسته بندی پست ها ', 'دسته بندی' ),
        'search_items'      => __( 'جستجویه دسته' ),
        'all_items'         => __( 'تمام دسته ها' ),
        'parent_item'       => __( 'زیر دسته' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'ویرایش دسته' ),
        'update_item'       => __( 'بروزرسانی دسته' ),
        'add_new_item'      => __( 'افزودن دسته جدید' ),
        'new_item_name'     => __( 'نام جدید دسته' ),
        'menu_name'         => __( 'دسته بندی' ),
    );

    $ar = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy( 'padcast', 'padcast' , $ar );
}
add_action( 'init', 'create_taxonomies_for_padcast');



add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});


// function custom_submenu_class($args) {
//     $args['submenu_class'] = 'dropdown';
//     return $args;
// }
// add_filter('wp_nav_menu_args', 'custom_submenu_class');