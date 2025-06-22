<?php
// Codex 自動生成
get_header();
$loc = json_decode(file_get_contents(__DIR__ . '/stores.json'), true)['access'] ?? [];
?>
<h2>アクセス</h2>
<p>住所: <?php echo esc_html($loc['address']); ?></p>
<div class="map">
  <!-- Google Map 埋込 -->
  <iframe
    src="https://maps.google.com/maps?q=<?php echo esc_attr($loc['lat'] . ',' . $loc['lng']); ?>&output=embed"
    width="100%" height="450" frameborder="0"></iframe>
</div>
<?php get_footer(); ?>
