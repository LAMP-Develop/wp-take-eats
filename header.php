<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Quicksand:wght@400;700&display=swap">
<?php wp_head(); ?>
</head>
<body>
<!-- ヘッダー -->
<header class="header">
<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="#"><img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="#">機能紹介</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="#">料金</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="#">導入事例</a></li>
<li class="nav-item"><a class="nav-link text-body font-weight-bold" href="#">お問い合わせ</a></li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link text-body" href="#">Home</a>
</li>
</ul>
</div>
</nav>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>