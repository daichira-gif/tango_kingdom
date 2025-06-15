<?php
function tango_kingdom_child_setup() {
    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'tango_kingdom_child_setup' );

function tango_kingdom_child_enqueue() {
    wp_enqueue_style( 'twentytwentytwo', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tango-kingdom-custom', get_stylesheet_directory_uri() . '/assets/css/custom.css' );
    wp_enqueue_script( 'hero-slider', get_stylesheet_directory_uri() . '/assets/js/hero-slider.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'tango_kingdom_child_enqueue' );
?>

