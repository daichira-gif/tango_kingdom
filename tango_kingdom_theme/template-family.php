<?php
/*
Template Name: Family Page
*/
get_header();
?>
<main>
  <section class="hero" style="background:url('<?php echo esc_url( get_template_directory_uri() . '/../assets/img/hero/berry-picking.webp' ); ?>') center/cover no-repeat">
    <div class="hero-overlay">
      <h1 class="hero-title">家族で一日まるごと体験</h1>
      <p class="hero-subtitle">芝すべり・動物ふれあい・季節の収穫体験が勢ぞろい</p>
    </div>
  </section>

  <section class="section">
    <div class="section__inner">
      <h2 class="section__title">人気体験</h2>
      <div class="cards">
        <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/../assets/img/family/grass-slide.jpg' ); ?>" alt="芝すべり"><h4>芝すべり</h4></div>
        <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/../assets/img/family/petting-zoo.webp' ); ?>" alt="動物ふれあい"><h4>動物ふれあい</h4></div>
        <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/../assets/img/hero/berry-picking.webp' ); ?>" alt="果実狩り"><h4>果実狩り</h4></div>
        <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/../assets/img/dog/zoo_tortoise.jpg' ); ?>" alt="リクガメ散歩"><h4>リクガメ散歩</h4></div>
      </div>
    </div>
  </section>

  <section class="section alt">
    <div class="section__inner">
      <h2 class="section__title">モデルコース（幼児連れ 3h）</h2>
      <ol class="news-list">
        <li class="news-item"><time>10:00</time><a>芝すべりでウォームアップ</a></li>
        <li class="news-item"><time>11:00</time><a>動物ふれあいでエサやり体験</a></li>
        <li class="news-item"><time>12:00</time><a>フードコート七姫殿でランチ</a></li>
        <li class="news-item"><time>13:00</time><a>お土産ショップでお買い物＆解散</a></li>
      </ol>
    </div>
  </section>
</main>
<?php get_footer(); ?>
