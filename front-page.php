<?php
/**
 * Template Name: Front Page
 */
get_header();

// スライダー画像パス
$img_dir = get_stylesheet_directory() . '/assets/slider';
$img_uri = get_stylesheet_directory_uri() . '/assets/slider';
$images  = glob( $img_dir . '/*.{jpg,png}', GLOB_BRACE );
?>

<!-- メインビジュアル：.main-visual-slider を JS 側が使います -->
<div class="main-visual main-visual-slider">
  <?php foreach ( $images as $image ) :
    $basename = basename( $image );
    $headline = '家族も愛犬も、とっておきの休日を';
    $subtext  = '丹後王国「食のみやこ」で自然・体験・グルメを満喫';
  ?>
    <div class="slide">
      <img src="<?php echo esc_url( "$img_uri/$basename" ); ?>" alt="">
      <div class="slide-caption">
        <h1><?php echo esc_html( $headline ); ?></h1>
        <p><?php echo esc_html( $subtext ); ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<!-- カテゴリナビゲーション -->
<nav class="category-grid">
  <a href="#experience">体験</a>
  <a href="#dog">愛犬と楽しむ</a>
  <a href="#gourmet">グルメ</a>
  <a href="#stay">泊まる</a>
  <a href="#news">新着情報</a>
  <a href="#access">アクセス</a>
</nav>

<!-- 体験プログラム -->
<section id="experience" class="intro-cards">
  <h2>親子で楽しむ体験プログラム</h2>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/Sea_Tango-Kingdom-Shoku-no-Miyako-04-1024x683.webp" alt="ブルーベリー狩り">
    <h3>収穫体験農園</h3>
    <p>季節の野菜や果物を自分の手で収穫しよう。</p>
    <a href="<?php echo home_url('/farm/'); ?>" class="btn">詳しく見る</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/COPO488_1.jpg" alt="芝すべり">
    <h3>芝すべり</h3>
    <p>全長70m！スリル満点のロングスライダー。</p>
    <a href="<?php echo home_url('/shiba-suberi/'); ?>" class="btn">詳しく見る</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/zoo_sheep1.jpg" alt="小さな動物園">
    <h3>ふれあいミニ動物園</h3>
    <p>ヤギや羊、カメにエサやり体験。小さなお子様も安心。</p>
    <a href="<?php echo home_url('/zoo/'); ?>" class="btn">詳しく見る</a>
  </div>
</section>

<!-- ペット向けサービス -->
<section id="dog" class="intro-cards light-bg">
  <h2>ワンちゃんも主役！愛犬サービス</h2>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/dogrun.jpg" alt="ドッグラン">
    <h3>西日本最大級ドッグラン</h3>
    <p>約2,300㎡の広さでリードを外して思いきりラン！</p>
    <a href="<?php echo home_url('/dogrun/'); ?>" class="btn">詳しく見る</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/S__24444937_0.jpg" alt="小型犬エリア">
    <h3>小型犬専用エリア</h3>
    <p>安心のフェンス付き。飼い主同士の交流も。</p>
    <a href="<?php echo home_url('/pet/'); ?>" class="btn">詳しく見る</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/f4744700fc934204928856307294cf83-650x484.jpg" alt="犬同伴OKカフェ">
    <h3>犬同伴OKカフェ</h3>
    <p>テラスでタコス＆ハンバーガーを愛犬と一緒に。</p>
    <a href="<?php echo home_url('/dog-cafe/'); ?>" class="btn">詳しく見る</a>
  </div>
</section>

<!-- グルメセクション -->
<section id="gourmet" class="intro-cards">
  <h2>丹後の恵みを味わう</h2>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/restaurant.png" alt="山と海 with 日本海牧場">
    <h3>山と海 with 日本海牧場</h3>
    <p>牧場直送ビーフと地場野菜で贅沢ランチ。</p>
    <a href="<?php echo home_url('/yamatoumi/'); ?>" class="btn">詳しく見る</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/brewery.jpg" alt="クラフトビール工房">
    <h3>地ビール工房</h3>
    <p>ここでしか味わえない限定クラフトビール。</p>
    <a href="<?php echo home_url('/gourmet/'); ?>" class="btn">詳しく見る</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/9e4d3f65c3e50c539400fe707946adf8-scaled.jpg" alt="トン’sキッチン BBQ">
    <h3>トン’sキッチン BBQ</h3>
    <p>ブランド豚と季節野菜を手ぶらでBBQ。</p>
    <a href="<?php echo home_url('/tons-kitchen/'); ?>" class="btn">詳しく見る</a>
  </div>
</section>

<!-- 宿泊プラン -->
<section id="stay" class="intro-cards light-bg">
  <h2>宿泊プラン</h2>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/hotel.jpg" alt="ホテル丹後王国">
    <h3>ホテル丹後王国</h3>
    <p>レストラン＆温泉付き。家族旅行の拠点に。</p>
    <a href="<?php echo home_url('/stay/'); ?>" class="btn">空室検索</a>
  </div>
  <div class="card">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/image-type-a.png" alt="愛犬同伴グランピング">
    <h3>愛犬同伴グランピング</h3>
    <p>ドームテントで贅沢ステイ。ドッグラン直結！</p>
    <a href="<?php echo home_url('/stay/'); ?>" class="btn">空室検索</a>
  </div>
</section>

<!-- 新着情報 -->
<section id="news" class="latest-news">
  <h2>新着情報</h2>
  <ul>
    <?php
    $news = new WP_Query( [
      'post_type'      => 'post',
      'posts_per_page' => 3,
    ] );
    if ( $news->have_posts() ) :
      while ( $news->have_posts() ) : $news->the_post();
    ?>
      <li>
        <time><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </ul>
  <p class="more"><a href="<?php echo home_url('/news/'); ?>">もっと見る</a></p>
</section>

<!-- アクセス -->
<section id="access" class="access-map">
  <h2>アクセス</h2>
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1080253723735!2d135.068268!3d35.674341999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5fffa4c27b6bc53b%3A0x4f7ddc708ea650ce!2z6YGT44Gu6aeFIOS4ueW-jOeOi-WbvSDpo5_jga7jgb_jgoTjgZM!5e0!3m2!1sja!2sjp!4v1750574517068!5m2!1sja!2sjp"
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<?php get_footer(); ?>
