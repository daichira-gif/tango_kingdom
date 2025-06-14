<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="header__inner">
    <div class="logo-wrap">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/../assets/img/common/lgo_head.png' ); ?>" class="logo-img" alt="<?php esc_attr_e( '丹後王国 食のみやこ ロゴ', 'tango_kingdom' ); ?>">
        <span class="site-name">丹後王国 食のみやこ</span>
      </a>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/#experience' ) ); ?>">体験</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#dog' ) ); ?>">愛犬と楽しむ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#gourmet' ) ); ?>">グルメ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#stay' ) ); ?>">泊まる</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#news' ) ); ?>">新着</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#access' ) ); ?>">アクセス</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dog/' ) ); ?>">ワンちゃん特集</a></li>
        <li><a href="<?php echo esc_url( home_url( '/family/' ) ); ?>">ファミリー特集</a></li>
      </ul>
    </nav>
    <div class="lang"><a href="?lang=en">EN</a></div>
  </div>
</header>
