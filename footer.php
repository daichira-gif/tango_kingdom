<?php
/**
 * Tango Kingdom Child Footer
 * 子テーマ独自のフッターを追加しつつ、
 * 親テーマの Lightning G3 フッターも併用します。
 */

// 親テーマの G3 フッター要素を先に出力
if ( function_exists( 'lightning_footer' ) ) {
  do_action( 'lightning_footer' );
}
?>

<footer class="footer footer--child">
  <div class="footer__inner">
    <div class="footer-menu">
      <?php
      // 子テーマ用のフッターメニュー (登録済みなら)
      if ( has_nav_menu( 'footer' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'container'      => false,
          'menu_class'     => 'footer-nav',
        ) );
      }
      ?>
    </div>
    <div class="site-info">
      &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
    </div>
  </div>
</footer>

<?php
// WP標準のフッター処理
wp_footer();
?>

</body>
</html>
