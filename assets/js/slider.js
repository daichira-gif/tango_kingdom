jQuery(function($){
      // ← これを一番最初に追加
  console.log('▶ slider.js loaded. slides count =', $('.main-visual .slide').length);

  var $slides  = $('.main-visual .slide');
  var current  = 0;
  var total    = $slides.length;
  var duration = 5000;      // 切り替え間隔
  var speed    = 600;       // フェード速度

  // 初期状態：全スライド非表示、最初だけ表示
  $slides.hide().eq(current).show();

  // 繰り返しスライド
  setInterval(function(){
    $slides.eq(current).fadeOut(speed);
    current = (current + 1) % total;
    $slides.eq(current).fadeIn(speed);
  }, duration);
});
