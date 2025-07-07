<?php
/**
 * Tango Kingdom Child Theme functions.php
 */

// 1) 親テーマ／Lightning／プラグイン等の自動登録スタイルをまとめて削除
add_action( 'wp_enqueue_scripts', function() {
    // 削除したいスタイルハンドルをすべて列挙
    $handles = [
        'admin-bar',
        'vkExUnit_common_style',
        'wp-emoji-styles',
        'wp-block-library',
        'global-styles',
        'wp-block-template-skip-link',
        'vk-swiper-style',
        'tango-child-style',
        'lightning-design-style',
        'vk-blog-card',
        'veu-cta',
        'vk-blocks-build-css',
        'lightning-common-style',
        'lightning-theme-style',
        'vk-font-awesome',
    ];

    foreach ( $handles as $handle ) {
        wp_dequeue_style(  $handle );
        wp_deregister_style( $handle );
    }
}, 1 );


// 2) 子テーマの style.css と JS を読み込み直し
add_action( 'wp_enqueue_scripts', function() {
    // 子テーマ style.css
    /*
    wp_enqueue_style(
        'tango-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [], 
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // jQuery（WPコア同梱）
    wp_enqueue_script( 'jquery' );

    // slider.js
    wp_enqueue_script(
        'tango-slider',
        get_stylesheet_directory_uri() . '/assets/js/slider.js',
        [ 'jquery' ],
        filemtime( get_stylesheet_directory() . '/assets/js/slider.js' ),
        true
    );
    */
}, 10 );

// Lightning のホームページビルダーを無効化
add_filter( 'lightning_use_home_page_builder', '__return_false' );

// ヘッダーメニューを登録
add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'header' => __( 'ヘッダーナビゲーション', 'tango-kingdom' ),
    ] );

    // Allow block templates and template parts with fallback to PHP files.
    add_theme_support( 'block-templates' );
} );


