<?php
function tango_kingdom_enqueue_assets() {
    wp_enqueue_style( 'tango-kingdom-site-style', get_template_directory_uri() . '/assets/css/site.css', array(), '1.0.0' );
    wp_enqueue_style( 'tango-kingdom-main-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0' ); // こちらがメインのCSSである可能性が高いです
    // 必要であればJavaScriptもここにエンキューします
}
add_action( 'wp_enqueue_scripts', 'tango_kingdom_enqueue_assets' );

function tango_kingdom_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tango_kingdom_setup' );

// デバッグログは削除済み、またはコメントアウト済みであることを確認してください
// error_log('Theme Directory URI: ' . get_template_directory_uri());
