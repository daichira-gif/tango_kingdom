<?php
// Codex 自動生成
get_header();
$data = json_decode(file_get_contents(__DIR__ . '/stores.json'), true);
$acts = $data['activities'] ?? [];
echo '<h2>体験アクティビティ</h2><div class="grid">';
foreach ($acts as $item) {
  echo '<div class="card">';
  echo '<h3>' . esc_html($item['name']) . '</h3>';
  echo '<p>' . esc_html($item['description']) . '</p>';
  echo '</div>';
}
echo '</div>';
get_footer();
