<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Quicksand:wght@400;700&display=swap">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/style.css?ver=1.0.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="lp__header">

<nav class="lp__nav">
<h1>
<img src="<?php echo $img_url; ?>logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo.png 1x, <?php echo $img_url; ?>logo@2x.png 2x">
<span>飲食店向け<br>テイクアウトシステム</span>
</h1>
</nav>
<!-- .lp__nav -->
</header>
<!-- #header -->

<main id="main">

<div class="lp__hero">
<div class="container">
<p class="text-center">
<img src="<?php echo $img_url; ?>lp_hero_top.png" alt="初期費用・月額費用0円" srcset="<?php echo $img_url; ?>lp_hero_top.png 1x, <?php echo $img_url; ?>lp_hero_top@2x.png 2x">
</p>
<div class="lp__hero-demo">
<img src="<?php echo $img_url; ?>mv_lp_pict.png" alt="スマホ画面" srcset="<?php echo $img_url; ?>mv_lp_pict.png 1x, <?php echo $img_url; ?>mv_lp_pict@2x.png 2x">
</div>
</div>
</div>
<!-- .lp__hero -->

<section class="lp__case py-5">
<div class="container">
<h2 class="lp-ttl2"><span class="marks">様々な飲食店</span>で<br>ご利用いただいております</h2>
</div>
<div id="lpcase" class="lp__case-slide">
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">スイーツ</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_1.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_1.png 1x, <?php echo $img_url; ?>lp_logo_1@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">スイーツ</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_1.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_1.png 1x, <?php echo $img_url; ?>lp_logo_1@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">スイーツ</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_1.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_1.png 1x, <?php echo $img_url; ?>lp_logo_1@2x.png 2x">
</div>
</div>
</div>
</section>

<section class="py-5 bg-light">
<div class="container">
<h2 class="lp-ttl2">TakeEatsの<br><span class="marks">テイクアウト</span>って？</h2>
</div>
<img class="w-100" src="<?php echo $img_url; ?>about_main_sp.png" alt="TakeEatsの流れ" srcset="<?php echo $img_url; ?>about_main_sp.png 1x, <?php echo $img_url; ?>about_main_sp@2x.png 2x">
<div class="container">
<p class="mb-0 mt-5 text-center"><a class="font-weight-bold text-body" href="<?php echo $home; ?>/features/">TakeEatsで出来ること<i class="fas fa-caret-right ml-2"></i></a></p>
</div>
</section>

<section class="lp__feature py-5">
<div class="container">
<h2 class="lp-ttl2">TakeEatsの<br><span class="marks">特長</span></h2>
<div class="lp__feature__list">
<div class="lp__feature__list__inner">
<h3 class="lp-ttl2">初期導入費・月額利用料<br><span class="marks">0円だから</span><br>無料で始められる！</h3>
<img src="<?php echo $img_url; ?>lp_feature_1.png" alt="初期導入費・月額利用料0円" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。（※オプションをご選択の場合は別途費用）</p>
</div>
<!-- .lp__feature__list__inner -->
<div class="lp__feature__list__inner">
<h3 class="lp-ttl2"><span class="marks">事前予約/決済</span>で<br>キャンセル防止</h3>
<img src="<?php echo $img_url; ?>lp_feature_2.png" alt="キャンセル防止" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
<p>クレジットカードでの事前決済で、商品の無断キャンセルを防止。廃棄による無駄なコストを削減できます。</p>
</div>
<!-- .lp__feature__list__inner -->
<div class="lp__feature__list__inner">
<h3 class="lp-ttl2"><span class="marks">シンプル</span>で使いやすい<br>店舗オリジナル予約サイト</h3>
<img src="<?php echo $img_url; ?>lp_feature_3.png" alt="シンプル" srcset="<?php echo $img_url; ?>lp_feature_3.png 1x, <?php echo $img_url; ?>lp_feature_3@2x.png 2x">
<p>店舗ごとの予約サイトは、幅広い層が注文しやすいシンプルなデザインです。50代のユーザーにもご好評いただいています。</p>
</div>
<!-- .lp__feature__list__inner -->
</div>
</div>
</section>

<div class="lp__cta">
<div class="container">
<div class="lp__cta__box">
<h2><span>＼ 即日対応！ ／</span>無料でお店に導入！</h2>
<div class="text-center">
<a href="#lpform">
<img src="<?php echo $img_url; ?>lp_cta_btn.png" alt="無料でお店に導入" srcset="<?php echo $img_url; ?>lp_cta_btn.png 1x, <?php echo $img_url; ?>lp_cta_btn@2x.png 2x">
</a>
</div>
</div>
</div>
</div>

<section class="py-5 bg-light">
  <div class="container"></div>
</section>

</main>
<!-- #main -->

<footer id="footer">
</footer>
<!-- #footer -->

<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.0" defer></script>
<?php wp_footer(); ?>
</body>
</html>