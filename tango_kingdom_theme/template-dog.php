<?php
/*
Template Name: Dog Page
*/
get_header();
?>
<main>
  <section class="hero" style="background:url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/dogrun.jpg' ); ?>') center/cover no-repeat">
    <div class="hero-overlay">
      <h1 class="hero-title">愛犬と笑顔になれる王国へ</h1>
      <p class="hero-subtitle">広大なドッグランとテラスカフェでリラックス</p>
    </div>
  </section>

  <section class="section">
    <div class="section__inner">
      <h2 class="section__title">西日本最大級ドッグラン</h2>
      <div class="cards">
        <div class="card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/dogrun.jpg' ); ?>" alt="ドッグラン全景">
          <h4>思い切り走れる2,300㎡</h4>
          <p>小型犬エリアとフリーエリアに分かれ安心して遊べます。</p>
        </div>
        <div class="card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/dog/S__24444937_0.jpg' ); ?>" alt="小型犬エリア">
          <h4>小型犬専用エリア</h4>
          <p>体格差を気にせずのびのび遊べる専用スペース。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section alt">
    <div class="section__inner">
      <h2 class="section__title">犬同伴OKテラスカフェ</h2>
      <div class="cards">
        <div class="card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/dog/f4744700fc934204928856307294cf83-650x484.jpg' ); ?>" alt="JIGGY テラスカフェ">
          <h4>JIGGY キッチン</h4>
          <p>緑に囲まれたテラスで地元食材ランチやドリンクを愛犬と一緒に。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section__inner">
      <h2 class="section__title">モデルコース</h2>
      <ul class="news-list">
        <li class="news-item"><time>10:00</time><a>ドッグランチェックイン → たっぷり1時間ラン</a></li>
        <li class="news-item"><time>12:00</time><a>テラスカフェでランチ</a></li>
        <li class="news-item"><time>14:00</time><a>園内散策＆フォトスポット</a></li>
        <li class="news-item"><time>16:00</time><a>売店で犬用おやつ購入＆帰路</a></li>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>