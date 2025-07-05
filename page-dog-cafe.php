<?php
/**
 * Template Name: Dog Cafe Page
 */
get_header();
?>

<div class="container">
  <section id="dog-cafe-detail">
    <h2>愛犬同伴OKカフェ・レストラン</h2>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards/f4744700fc934204928856307294cf83-650x484.jpg" alt="犬同伴OKカフェ">
    <h3>愛犬と一緒に、美味しいひとときを。</h3>
    <p>丹後王国「食のみやこ」では、愛犬と一緒に食事が楽しめるカフェやレストランを複数ご用意しています。テラス席や専用スペースで、愛犬をそばに感じながら、丹後の恵みを活かしたお料理や軽食をお楽しみいただけます。</p>

    <h4>主な愛犬同伴可能店舗</h4>
    <ul>
        <li><strong>トン'Sキッチン BBQ:</strong> 広々としたテラス席でBBQを楽しめます。</li>
        <li><strong>山と海 with 日本海牧場:</strong> 一部のテラス席で愛犬同伴可能です。</li>
        <li><strong>その他:</strong> 軽食やドリンクを提供するカフェでも、テラス席などでご利用いただけます。</li>
    </ul>
    <p>※各店舗の利用条件や詳細は、直接店舗にお問い合わせいただくか、現地案内をご確認ください。</p>

    <a href="<?php echo home_url(); ?>" class="btn">トップページに戻る</a>

  </section>
</div>

<?php
get_footer();
