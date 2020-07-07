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
<link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/style.css?ver=1.0.4">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/add.css?ver=1.0.1">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167493209-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-167493209-1');
</script>
<?php endif; ?>
</head>
<body>

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
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/features/">機能紹介</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/price/">料金</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/marketing/">集客・販売促進</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/flow/">導入の流れ</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/faq/">よくあるご質問</a></li>
<!-- <li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/case/">導入事例</a></li> -->
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/contact/">お問い合わせ</a></li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="btn btn-primary font-weight-bold" href="<?php $home; ?>/request/" onclick="gtag('event', 'click', {'event_category': 'link','event_label': 'お申し込み'});">お申し込み</a>
</li>
</ul>
</div>
</nav>
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
