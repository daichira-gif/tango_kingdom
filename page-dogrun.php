<?php
/**
 * Template Name: Dog Run Page
 */
get_header();
?>

<div class="container">
  <section id="dogrun-detail">
    <h2>西日本最大級ドッグラン</h2>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/dogrun.jpg" alt="西日本最大級ドッグラン">
    <h3>広大な敷地で愛犬が自由に駆け回る！</h3>
    <p>丹後王国「食のみやこ」に併設された、西日本最大級のドッグラン。約2,300㎡の広々とした空間で、リードを外して愛犬が思いっきり走り回れます。小型犬専用エリアも完備しており、安心してご利用いただけます。</p>

    <h4>ご利用案内</h4>
    <ul>
        <li><strong>広さ:</strong> 約2,300㎡</li>
        <li><strong>料金:</strong> 1頭 500円</li>
        <li><strong>利用時間:</strong> 9:30～16:30</li>
        <li><strong>必要書類:</strong> 犬の鑑札、狂犬病予防接種済票</li>
    </ul>
    <p>※年間パスポートもございます。詳細は現地スタッフにお尋ねください。</p>

    <a href="<?php echo home_url(); ?>" class="btn">トップページに戻る</a>

  </section>
</div>

<?php
get_footer();
