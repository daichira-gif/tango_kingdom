<?php
// Codex 自動生成
get_header();
$data = json_decode(file_get_contents(__DIR__ . '/stores.json'), true);
$food = $data['food'] ?? [];
echo '<h2>グルメ店舗一覧</h2>';
foreach ($food as $item) {
  echo '<div class="card">';
  echo '<h3>' . esc_html($item['name']) . '</h3>';
  echo '<p>住所: ' . esc_html($item['address']) . '</p>';
  echo '</div>';
}
get_footer();
