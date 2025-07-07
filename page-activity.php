<?php
// Codex 自動生成
get_header();
// experience.json に合わせてデータを読み込む
$data = json_decode(file_get_contents(__DIR__ . '/experience.json'), true);
$acts = $data['experience'] ?? [];

echo '<h2>体験アクティビティ</h2><div class="grid">';
foreach ($acts as $item) {
    echo '<div class="card">';
    if (!empty($item['image'])) {
        echo '<img src="' . esc_url(get_stylesheet_directory_uri() . '/' . $item['image']) . '" alt="' . esc_attr($item['name']) . '">';
    }
    echo '<h3>' . esc_html($item['name']) . '</h3>';
    echo '<p>' . esc_html($item['description']) . '</p>';
    echo '</div>';
}
echo '</div>';
get_footer();

