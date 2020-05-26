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
<?php wp_head(); ?>
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
<!-- <li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/case/">導入事例</a></li> -->
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="<?php $home; ?>/contact/">お問い合わせ</a></li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="btn btn-primary font-weight-bold" href="<?php $home; ?>/request/">お申し込み</a>
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
