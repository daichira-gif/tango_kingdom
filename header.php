<?php
/**
 * Tango Kingdom Child Header
 * 子テーマでオリジナルヘッダーを追加しつつ、
 * 親テーマの lightning_header フックで組み立てられる部分も出力する
 */

// 親テーマ同様にヘッダー取得フック
do_action( 'get_header' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 子テーマ独自に読み込むフォントやメタを追加してもOK -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
}
?>

<?php
// ① 親テーマのヘッダー出力（ロゴ／ナビ／モバイルメニューなど）
do_action( 'lightning_header' );
?>

<?php
// ② その下に子テーマ独自のヘッダーを追加する例
?>
<header class="header header--child">
  <div class="header__inner">
    <div class="logo-wrap">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/lgo_head.png' ); ?>"
          alt="<?php esc_attr_e( '丹後王国 食のみやこ ロゴ', '丹後王国「食のみやこ」' ); ?>"
          class="logo-img"
        >
        <span class="site-name"><?php bloginfo( 'name' ); ?></span>
      </a>
    </div>
    <nav class="nav">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'header',
          'container'      => false,
          'menu_class'     => 'header-menu',
        ) );
      ?>
    </nav>
    <div class="lang">
      <a href="?lang=en">EN</a>
    </div>
  </div>
</header>
