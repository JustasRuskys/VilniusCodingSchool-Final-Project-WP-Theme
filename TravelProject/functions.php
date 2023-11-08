<?php
/*========== TITLE ==========*/
function travel_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'travel_theme_support');

/*========== MEMU ==========*/
function travel_menus(){
    $locations = array(
        'primary' => "Desktop Primary Navbar",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'travel_menus');

/*===== FOOTER MENU =====*/
register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer__title">',
    'after_title' => '</h3>'
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer__title">',
    'after_title' => '</h3>'
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title footer__title">',
    'after_title' => '</h3>'
    ) );

/*========== HOME IMAGE ==========*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'Home-bg',
    'posts_per_page' => 1
);
$home_bg = new WP_Query($args);

/*========== HOME CARDS ==========*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'Home images',
    'posts_per_page' => 4
);
$home_cards = new WP_Query($args);

/*========== ABOUT ==========*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'about-main-page',
    'posts_per_page' => 1
);
$about_post = new WP_Query($args);

/*========== POPULAR CARDS ==========*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'Popular images',
    'posts_per_page' => 6
);
$popular_cards = new WP_Query($args);

/*========== EXPLORE ==========*/

/*===== EXPLORE BACKGROUND =====*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'Explore-bg',
    'posts_per_page' => 1
);
$explore_bg = new WP_Query($args);
/*===== EXPLORE POST =====*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'explore-main-page',
    'posts_per_page' => 1
);
$explore_post = new WP_Query($args);

/*========== JOIN IMAGE ==========*/
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'category_name' => 'Join-bg',
    'posts_per_page' => 1
);
$join_bg = new WP_Query($args);


/*========== LINKS & SCRIPTS ===========*/
/*===== STYLE =====*/
function travel_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('travel-remixicon', "https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css", array(), '3.5.0', 'all');
    wp_enqueue_style('travel-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css", array(), '2.3.4', 'all');
    wp_enqueue_style('travel-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'travel_register_styles');

/*===== SCRIPTS =====*/
function travel_register_scripts(){
    wp_enqueue_script('travel-jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', ['jquery'], false, true);
    wp_enqueue_script('travel-reveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', ['jquery'], false, true);
    wp_enqueue_script('travel-owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], false, true);
    wp_enqueue_script('travel-script', get_template_directory_uri() . '/assets/js/index.js', ['jquery'], false, true);
    
}
add_action('wp_enqueue_scripts', 'travel_register_scripts');

function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );