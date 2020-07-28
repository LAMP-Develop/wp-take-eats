<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Quicksand:wght@400;700&display=swap">
<link rel="preload" href="<?php echo $wp_url; ?>/dist/css/style.css" as="style">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/style.css?ver=1.0.5">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/add.css?ver=1.0.1">
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

<?php if (is_home() || is_front_page()): ?>
<img class="mv-illust" src="<?php echo $img_url; ?>mv_illust_1.png" alt="背景">
<?php endif; ?>

<header class="header">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="<?php $home; ?>/"><img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
</button>
<div class="collapse navbar-collapse" id="navbar">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/features/">機能紹介</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/price/">料金</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/marketing/">集客・販売促進</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/flow/">導入の流れ</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/faq/">よくあるご質問</a></li>
<!-- <li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/case/">導入事例</a></li> -->
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/contact/">お問い合わせ</a></li>
</ul>
</div>
</nav>

<a class="header-cta" href="<?php $home; ?>/request/">お申し込み</a>

</header>
<!-- header -->
<main>
<?php if (!is_home() && !is_front_page() && !is_single()): // 下層ページ ?>
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
