<?php

function load_bootstrap()
{

    wp_register_style('bootstrap_css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap_css');

    wp_enqueue_style('bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap_js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap_js');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');




function load_css_js()
{
    wp_register_style('styles', get_template_directory_uri() . '/styles/style.css', array(), false, 'all');
    wp_enqueue_style('styles');

    wp_register_script('scripts', get_template_directory_uri() . '/scripts/script.js', 'jquery', false, true);
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'load_css_js');


function load_swiper()
{
    wp_register_style('styles_swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('styles_swiper');
    https: //cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css


    wp_enqueue_script('script_swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    wp_enqueue_script('script_swiper');
}
add_action('wp_enqueue_scripts', 'load_swiper');


//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-logo');



//Menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'footer Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

// Register Sidebars

function my_sidebars()
{
    register_sidebar(

        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}

add_action('widgets_init', 'my_sidebars');


function recipes()
{
    $args = array(
        'labels' => array(
            'name' => 'Recipes',
            'singular_name' => 'Recipe',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-food',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),

    );

    register_post_type('recipes', $args);
}

add_action('init', 'recipes');


function my_first_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Genres',
            'singular_name' => 'Genre',
        ),
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('genres', array('recipes'), $args);
}

add_action('init', 'my_first_taxonomy');

function my_shortcode()
{
    ob_start();
    get_template_part('includes/latest', 'recipes');
    return ob_get_clean();
}

add_shortcode('latest_recipes', 'my_shortcode');


// Footer Widget One

function custom_footer_widget_one()
{
    $args = array(
        'id' => 'footer-widget-col-one',
        'name' => __('Footer Column One', 'text_domain'),
        'description' => __('Column One', 'text_domain'),
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>'

    );
    register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_one');



function custom_footer_widget_two()
{
    $args = array(
        'id' => 'footer-widget-col-two',
        'name' => __('Footer Column two', 'text_domain'),
        'description' => __('Column two', 'text_domain'),
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>'

    );
    register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_two');


function custom_footer_widget_three()
{
    $args = array(
        'id' => 'footer-widget-col-three',
        'name' => __('Footer Column three', 'text_domain'),
        'description' => __('Column three', 'text_domain'),
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>'

    );
    register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_three');
