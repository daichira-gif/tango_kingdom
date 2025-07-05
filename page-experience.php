<?php
get_header();

// JSON ファイル読み込み
$json_path = get_stylesheet_directory() . '/experience.json';
$data = json_decode(file_get_contents($json_path), true);
$experience = $data['experience'] ?? [];

echo '<h2>体験プログラム</h2>';

if (empty($experience)) {
  echo '<p>現在、体験プログラムの情報はありません。</p>';
} else {
  echo '<div class="card-container">'; // カードを囲むコンテナ
  foreach ($experience as $item) {
    echo '<div class="card">';
    if (!empty($item['image'])) {
        echo '<img src="' . get_stylesheet_directory_uri() . '/' . esc_attr($item['image']) . '" alt="' . esc_attr($item['name']) . '">';
    }
    echo '<h3>' . esc_html($item['name']) . '</h3>';
    echo '<p>' . esc_html($item['description']) . '</p>';
    echo '</div>';
  }
  echo '</div>'; // コンテナを閉じる
}

get_footer();
