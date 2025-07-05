<?php
// Child テーマでビルダーを無効化して front-page.php にフォールバック
get_header();
include get_stylesheet_directory() . '/front-page.php';
get_footer();

// Lightning G3 のホームページビルダーを無効化
add_filter( 'lightning_use_home_page_builder', '__return_false' );

// フロントページは強制的に front-page.php を返す
add_filter( 'template_include', function($template){
    if ( is_front_page() ) {
        return get_stylesheet_directory() . '/front-page.php';
    }
    return $template;
}, 1000 );
