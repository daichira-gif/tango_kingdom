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
add_filter( 'render_block', 'tango_kingdom_child_rewrite_image_paths', 10, 2 );

function tango_kingdom_child_rewrite_image_paths( $block_content, $block ) {
    // front-page.html のブロックのみを対象とする
    if ( is_front_page() && strpos( $block_content, 'assets/' ) !== false ) {
        $theme_uri = get_stylesheet_directory_uri();
        $block_content = preg_replace( '/src="(assets\/[^"]+)"/', 'src="' . esc_url( $theme_uri ) . '/$1"', $block_content );
    }
    return $block_content;
}


