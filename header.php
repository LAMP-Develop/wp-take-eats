<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Quicksand:wght@400;700&display=swap">
<link rel="preload" href="<?php echo $wp_url; ?>/dist/css/style.css" as="style">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/style.css?ver=1.1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSTPTV7');</script>
<!-- End Google Tag Manager -->
<?php endif; ?>
</head>
<body>
<?php if (!is_user_logged_in()): ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSTPTV7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<?php wp_body_open(); ?>

<header id="header" class="lp__header">
<nav class="lp__nav">
<h1>
<a href="<?php echo $home; ?>">
<img src="<?php echo $img_url; ?>logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo.png 1x, <?php echo $img_url; ?>logo@2x.png 2x">
<span class="text-body">飲食店様向け</span>
</a>
</h1>
<div class="drawer">
<input class="drawer__checkbox" id="drawerCheckbox" type="checkbox">
<label class="drawer__icon" for="drawerCheckbox">
<span class="drawer__icon-parts"></span>
</label>
<ul class="drawer__menu">
<li><a href="<?php echo $home; ?>/features/">機能紹介</a></li>
<li><a href="<?php echo $home; ?>/price/">料金</a></li>
<li><a href="<?php echo $home; ?>/marketing/">集客・販売促進</a></li>
<li><a href="<?php echo $home; ?>/work/">導入事例</a></li>
<!-- <li><a href="<?php echo $home; ?>/flow/">導入の流れ</a></li> -->
<li><a href="<?php echo $home; ?>/column/">お役立ちガイド</a></li>
<li class="d-lg-block d-none"><a href="<?php echo $home; ?>/contact/">お問い合わせ</a></li>
<li class="drawer__menu-cta"><a class="smooth-scroll" href="<?php echo $home; ?>/#lpform">お申し込み<i class="fas fa-arrow-right"></i></a></li>
<li class="drawer__menu-request"><a href="<?php echo $home; ?>/contact/">資料請求・お問い合わせ<i class="fas fa-arrow-right"></i></a></li>
<li class="drawer__menu-tel">
<a class="footer__cta__links-tel" href="tel:075-600-2721">
<span>TEL</span>
<span>075-600-2721</span>
<small>10：00〜18：00（土日祝除く）</small>
</a>
</li>
</ul>
</div>
</nav>
<!-- .lp__nav -->

<div class="lp__nav-btn">
<a class="smooth-scroll" href="<?php echo $home; ?>/#lpform">お申し込み<i class="fas fa-arrow-right"></i></a>
</div>

</header>
<!-- #header -->
<main>
<?php if (!is_home() && !is_front_page() && !is_single() && !is_archive() && !is_page(['column'])): // 下層ページ ?>
<section class="sec mv__sub">
<div class="container">
<h1><?php the_title(); ?></h1>
</div>
</section>

<?php
// パンくず
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs" class="container">', '</div>');
}
endif;
