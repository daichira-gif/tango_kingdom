<?php get_header(); ?>

<section class="hero" id="hero">
  <div class="hero-slide active" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/Sea_Tango-Kingdom-Shoku-no-Miyako-05-1024x682.webp' ); ?>')"></div>
  <div class="hero-slide" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/berry-picking.webp' ); ?>')"></div>
  <div class="hero-slide" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/dogrun.jpg' ); ?>')"></div>

  <div class="hero-overlay">
    <h1 class="hero-title">家族も愛犬も、とっておきの休日を</h1>
    <p class="hero-sub">丹後王国「食のみやこ」で自然・体験・グルメを満喫</p>
  </div>
</section>

<div class="cta-wrap">
  <div class="plan" onclick="location.href='#dogPlan'">
    <div class="plan__media">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/dogrun.jpg' ); ?>" alt="ドッグラン">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/jiggys-kitchen-488x650.jpg' ); ?>" alt="テラスカフェ">
    </div>
    <div class="plan__overlay">
      <h3>ワンちゃん満喫パス</h3>
      <span class="btn-primary">詳細</span>
    </div>
  </div>
  <div class="plan" onclick="location.href='#kidsPlan'">
    <div class="plan__media">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/family/petting-zoo.webp' ); ?>" alt="ふれあい動物園">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/family/COPO488_1.jpg' ); ?>" alt="芝すべり">
    </div>
    <div class="plan__overlay">
      <h3>ファミリー体験パス</h3>
      <span class="btn-primary">詳細</span>
    </div>
  </div>
  <div class="plan" onclick="location.href='#stay'">
    <div class="plan__media">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/hotel.jpg' ); ?>" alt="ホテル丹後王国">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/room.jpg' ); ?>" alt="和洋室">
    </div>
    <div class="plan__overlay">
      <h3>宿泊プラン</h3>
      <span class="btn-primary">空室検索</span>
    </div>
  </div>
</div>

<section id="experience" class="section">
  <div class="section__inner">
    <h2 class="section__title">親子で楽しむ体験プログラム</h2>
    <div class="cards">
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/berry-picking.webp' ); ?>" alt="果実狩り"><h4>果実狩り</h4><p>季節のブルーベリーやイチゴを摘みたてで味わおう。</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/family/grass-slide.jpg' ); ?>" alt="芝すべり"><h4>芝すべり</h4><p>全長70m！スリル満点のロングスライダー。</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/family/petting-zoo.webp' ); ?>" alt="ふれあい動物園"><h4>ふれあいミニ動物園</h4><p>ヤギや羊、カメにエサやり体験。小さなお子様も安心。</p></div>
    </div>
  </div>
</section>

<section id="dog" class="section" style="background:#f4fbf7;">
  <div class="section__inner">
    <h2 class="section__title">ワンちゃんも主役！愛犬サービス</h2>
    <div class="cards">
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/dogrun.jpg' ); ?>" alt="ドッグラン"><h4>西日本最大級ドッグラン</h4><p>約2,300㎡の広さでリードを外して思いきりラン！</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/dog/S__24444937_0.jpg' ); ?>" alt="小型犬エリア"><h4>小型犬専用エリア</h4><p>安心のフェンス付き。飼い主同士の交流も。</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/dog/f4744700fc934204928856307294cf83-650x484.jpg' ); ?>" alt="犬同伴カフェ"><h4>犬同伴OKカフェ</h4><p>テラスでタコス＆クラフトビールを愛犬と一緒に。</p></div>
    </div>
  </div>
</section>

<section id="gourmet" class="section">
  <div class="section__inner">
    <h2 class="section__title">丹後の恵みを味わう</h2>
    <div class="cards">
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/restaurant.png' ); ?>" alt="山と海with日本海牧場"><h4>山と海 with 日本海牧場</h4><p>牧場直送ビーフと地野菜で贅沢ランチ。</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/brewery.jpg' ); ?>" alt="クラフトビール"><h4>地ビール工房</h4><p>ここでしか飲めない限定クラフトビール。</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/9e4d3f65c3e50c539400fe707946adf8-scaled.jpg' ); ?>" alt="トン's キッチン BBQ"><h4>トン's キッチン BBQ</h4><p>ブランド豚と季節野菜を手ぶらでBBQ。</p></div>
    </div>
  </div>
</section>

<section id="stay" class="section" style="background:#f9f9f9;">
  <div class="section__inner">
    <h2 class="section__title">宿泊プラン</h2>
    <div class="cards">
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/common/hotel.jpg' ); ?>" alt="ホテル丹後王国"><h4>ホテル丹後王国</h4><p>レストラン＆温浴付き。家族旅行の拠点に。</p></div>
      <div class="card"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero/dogrun.jpg' ); ?>" alt="グランピング"><h4>愛犬同伴グランピング</h4><p>ドームテントで贅沢ステイ。ドッグラン直結！</p></div>
    </div>
  </div>
</section>

<section id="news" class="section">
  <div class="section__inner">
    <h2 class="section__title">新着情報</h2>
    <ul class="news-list">
      <li class="news-item"><time datetime="2025-06-01">2025.06.01</time><a href="#">ブルーベリー狩りスタート！予約受付中</a></li>
      <li class="news-item"><time datetime="2025-05-25">2025.05.25</time><a href="#">ドッグランフェスタ開催レポート</a></li>
      <li class="news-item"><time datetime="2025-05-10">2025.05.10</time><a href="#">新メニュー「タコス＆ビール」登場</a></li>
    </ul>
  </div>
</section>

<section id="access" class="section">
  <div class="section__inner">
    <h2 class="section__title">アクセス</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.7438277618364!2d135.0701098760207!3d35.64174533297057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013b8c76a086e3%3A0xbe6ff3321eb503be!2z5p2-5bKh5a2m44GuIOW5tOeUsOe7j-eUsOe7j-WkjeagoeOCk-a3s-ODiA!5e0!3m2!1sja!2sjp!4v1710000000000!5m2!1sja!2sjp" width="100%" height="320" style="border:0;border-radius:8px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<script>
  const slides = document.querySelectorAll('.hero-slide');
  let idx = 0;
  setInterval(() => {
    slides[idx].classList.remove('active');
    idx = (idx + 1) % slides.length;
    slides[idx].classList.add('active');
  }, 5000);
</script>

<?php get_footer(); ?>
