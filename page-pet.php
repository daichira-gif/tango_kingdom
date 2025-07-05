<?php
// Codex 自動生成
get_header();
// JSON ファイル読み込み
$data = json_decode(file_get_contents(__DIR__ . '/stores.json'), true);
$dogrun = $data['dogrun'] ?? [];
echo '<h2>ドッグラン情報</h2>';
foreach ($dogrun as $item) {
  echo '<div class="card">';
  echo '<h3>' . esc_html($item['name']) . '</h3>';
  echo '<p>住所: ' . esc_html($item['address']) . '</p>';
  echo '</div>';
}
get_footer();
