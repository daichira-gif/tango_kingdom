<?php
/**
 * Template Name: Zoo Page
 */
get_header();
?>

<div class="container">
  <section id="zoo-detail">
    <h2>ふれあいミニ動物園</h2>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/zoo_sheep1.jpg" alt="ふれあいミニ動物園">
    <h3>動物たちと、もっと近くに。</h3>
    <p>丹後王国「食のみやこ」の一角にある「小さな動物園」では、かわいい動物たちが皆様をお待ちしています。ヒツジやヤギ、リクガメといった、穏やかで人懐っこい動物たちとのふれあいを通じて、癒やしのひとときをお過ごしください。</p>

    <h4>餌やり体験</h4>
    <p>動物たちへの餌やりは、お子様にも大人気の体験です。間近で見る動物たちの食事風景は、きっと忘れられない思い出になります。（餌代：200円〜）</p>

    <h4>安心して楽しめる</h4>
    <p>入園は無料です。小さなお子様も安心して動物たちと触れ合えるよう、スタッフが常駐しています。ご家族皆様で、動物たちとの心温まる時間をお楽しみください。</p>

    <a href="<?php echo home_url(); ?>" class="btn">トップページに戻る</a>

  </section>
</div>

<?php
get_footer();
