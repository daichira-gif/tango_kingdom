<?php
get_header();

// Main Visual Slider - images from assets/images
$img_dir = get_stylesheet_directory() . '/assets/images';
$img_uri = get_stylesheet_directory_uri() . '/assets/images';
$images = glob( $img_dir . '/*.{jpg,png}', GLOB_BRACE );
?>
<div class="main-visual-slider">
<?php foreach ($images as $image) : ?>
  <div class="slide"><img src="<?php echo $img_uri . '/' . basename($image); ?>" alt=""></div>
<?php endforeach; ?>
</div>

<nav class="category-buttons">
  <a href="<?php echo esc_url( home_url('/pet/') ); ?>">ペットとお出かけ</a>
  <a href="<?php echo esc_url( home_url('/family/') ); ?>">家族で満喫</a>
  <a href="<?php echo esc_url( home_url('/gourmet/') ); ?>">丹後グルメ</a>
  <a href="<?php echo esc_url( home_url('/events/') ); ?>">イベント情報</a>
</nav>

<section class="latest-news">
  <h2>最新ニュース</h2>
  <?php
  $news = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3
  ]);
  if ($news->have_posts()) :
    while ($news->have_posts()) : $news->the_post(); ?>
      <article <?php post_class(); ?>>
        <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>"><?php the_time('Y.m.d'); ?></time>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </article>
    <?php endwhile;
    wp_reset_postdata();
  endif; ?>
</section>

<section class="featured-event">
  <h2>注目イベント</h2>
  <?php
  $event = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'events',
    'posts_per_page' => 1
  ]);
  if ($event->have_posts()) :
    while ($event->have_posts()) : $event->the_post(); ?>
      <article <?php post_class(); ?>>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php if ($date = get_post_meta( get_the_ID(), 'event_date', true )) : ?>
          <p class="event-date"><?php echo esc_html( $date ); ?></p>
        <?php endif; ?>
      </article>
    <?php endwhile;
    wp_reset_postdata();
  else : ?>
    <p>現在開催中のイベントはありません。</p>
  <?php endif; ?>
</section>

<section class="intro">
  <p>丹後王国「食のみやこ」は、地元食材や体験を楽しめる西日本最大級の道の駅です。</p>
  <p><a href="<?php echo esc_url( home_url('/about/') ); ?>">初めての方へ</a></p>
</section>

<div id="instagram-feed"></div>

<?php
get_footer();

