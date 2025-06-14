<?php
function tango_kingdom_enqueue_assets() {
    $theme_uri = get_template_directory_uri();
    wp_enqueue_style( 'tango-styles', $theme_uri . '/../assets/css/styles.css', array(), '1.0' );
    wp_enqueue_style( 'tango-site',   $theme_uri . '/../assets/css/site.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'tango_kingdom_enqueue_assets' );

function tango_kingdom_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tango_kingdom_setup' );
