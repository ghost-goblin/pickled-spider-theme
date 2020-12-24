<?php
function loadFiles() {
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('roboto-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('dmserif-google-fonts', '//fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri().'/css/main.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'loadFiles');
function addFeatures() {
    add_theme_support('title-tag');
    add_action('after_setup_theme', 'addFeatures');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
        
        ));
    }
?>

