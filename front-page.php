<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="mv">
<div class="container">
<div class="mv__inner">
<div class="mv__inner__left">
<p class="mv__inner__left-balloon">お持ち帰り</p>
<h1 class="mv__inner__left-ttl">テイクアウト専用<br>オーダー予約システム</h1>
<p>TakeEatsは飲食店オーナー様向けのテイクアウト（お持ち帰り）に特化した予約・決済システムです。
<br>新型コロナウイルスの影響で従来の営業ができなくなった飲食店様から寄せられた多くのご要望にお応えするために京都で生まれました。</p>
</div>
<div class="mv__inner__right">
<div class="mv__inner__right-ribbon">サービス紹介30秒動画</div>
<video id="pv" class="video-js" poster="<?php echo $img_url; ?>video_poster.png">
<source src="<?php echo $wp_url; ?>/dist/video/take-eats-pv_cm.mp4" type="video/mp4">
</video>
</div>
</div>
<!-- mv__inner -->
</div>
<img class="mv-illust-2" src="<?php echo $img_url; ?>mv_illust_2.png" alt="背景">
</section>
<!-- mv -->
<section id="homenews" class="home__news">
<div class="container">
<h2>NEWS</h2>
<?php
$args = [
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post); ?>
<div class="home__news__inner">
<a href="<?php the_permalink(); ?>">
<time data-time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
<p><?php the_title(); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</section>
<!-- homenews -->
<section id="features" class="sec home__features">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>Service Features</span>
<span>TakeEatsが選ばれる3つの理由</span>
</h2>
</div>
<div class="home__features__wrap">
<div class="home__features__wrap__inner">
<span class="home__features__wrap__inner-no">01</span>
<div class="home__features__wrap__inner-img">
<img src="<?php echo $img_url; ?>features_img_1.png" alt="" srcset="<?php echo $img_url; ?>features_img_1.png 1x, <?php echo $img_url; ?>features_img_1@2x.png 2x">
</div>
<h3 class="home__features__wrap__inner-ttl">オリジナルサイトを作成</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。チラシにもこのURLを添付してお使いください。</p>
</div>
<!-- home__features__wrap__inner -->
<div class="home__features__wrap__inner">
<span class="home__features__wrap__inner-no">02</span>
<div class="home__features__wrap__inner-img">
<img src="<?php echo $img_url; ?>features_img_1.png" alt="" srcset="<?php echo $img_url; ?>features_img_2.png 1x, <?php echo $img_url; ?>features_img_2@2x.png 2x">
</div>
<h3 class="home__features__wrap__inner-ttl">手数料、利用料0円</h3>
<p>ポータルサイトにも掲載しますが、掲載料や利用料は発生しません。（クレジットカードの場合は決済手数料が発生）</p>
</div>
<!-- home__features__wrap__inner -->
<div class="home__features__wrap__inner">
<span class="home__features__wrap__inner-no">03</span>
<div class="home__features__wrap__inner-img">
<img src="<?php echo $img_url; ?>features_img_1.png" alt="" srcset="<?php echo $img_url; ?>features_img_3.png 1x, <?php echo $img_url; ?>features_img_3@2x.png 2x">
</div>
<h3 class="home__features__wrap__inner-ttl">オリジナルサイトを作成</h3>
<p>ポータルサイトにも掲載しますが、掲載料や利用料は発生しません。（クレジットカードの場合は決済手数料が発生）</p>
</div>
<!-- home__features__wrap__inner -->
</div>
<!-- home__features__wrap -->
</section>
<!-- features -->
<section id="system" class="sec home__system">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>system</span>
<span>お店によって様々な機能を自由に</span>
</h2>
<div class="home__system__slide">
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_1.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_1.png 1x, <?php echo $img_url; ?>option_icon_1@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_2.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_2.png 1x, <?php echo $img_url; ?>option_icon_2@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_3.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_3.png 1x, <?php echo $img_url; ?>option_icon_3@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_4.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_4.png 1x, <?php echo $img_url; ?>option_icon_4@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_9.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_9.png 1x, <?php echo $img_url; ?>option_icon_9@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_10.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_10.png 1x, <?php echo $img_url; ?>option_icon_10@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_11.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_11.png 1x, <?php echo $img_url; ?>option_icon_11@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
</div>
<!-- home__system__slide -->
<div class="mt-md-5 mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/features/">詳しくみる</a>
</div>
</div>
</section>
<!-- system -->
<section id="flow" class="sec home__flow">
<img class="home__flow-illust" src="<?php echo $img_url; ?>flow_illust_1.png" alt="背景">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>flow</span>
<span>最短1週間で導入可能</span>
</h2>
<div class="home__flow__wrap">
<div class="home__flow__wrap-img"><img src="<?php echo $img_url; ?>flow_img_1.png" alt="イラスト" srcset="<?php echo $img_url; ?>flow_img_1.png 1x, <?php echo $img_url; ?>flow_img_1@2x.png 2x"></div>
<ol class="home__flow__list">
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>01</span></div>
<div class="home__flow__list__inner-txt">
<h3>資料請求</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただ</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>02</span></div>
<div class="home__flow__list__inner-txt">
<h3>お申し込み</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただ</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>03</span></div>
<div class="home__flow__list__inner-txt">
<h3>サイト導入</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただ</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>04</span></div>
<div class="home__flow__list__inner-txt">
<h3>商品登録</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただ</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>05</span></div>
<div class="home__flow__list__inner-txt">
<h3>ご利用スタート<span class="txt-sm text-danger ml-3">最短1日</span></h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただ</p>
</div>
</li>
<!-- home__flow__list__inner -->
</ol>
<!-- home__flow__list -->
</div>
</div>
</div>
</section>
<!-- flow -->
<!-- <section id="case" class="sec home__case">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>case</span>
<span>導入事例</span>
</h2>
<div class="home__case__list">
<div class="home__case__list__inner">
<div class="home__case__list__inner-img">
<img src="<?php echo $img_url; ?>musashi_logo.png" alt="寿しのむさし">
</div>
<div class="home__case__list__inner-btn">
<a class="btn btn-light font-weight-bold" href="">導入事例を詳しくみる</a>
</div>
</div>
<div class="home__case__list__inner">
<div class="home__case__list__inner-img">
<img src="<?php echo $img_url; ?>musashi_logo.png" alt="寿しのむさし">
</div>
<div class="home__case__list__inner-btn">
<a class="btn btn-light font-weight-bold" href="">導入事例を詳しくみる</a>
</div>
</div>
<div class="home__case__list__inner">
<div class="home__case__list__inner-img">
<img src="<?php echo $img_url; ?>musashi_logo.png" alt="寿しのむさし">
</div>
<div class="home__case__list__inner-btn">
<a class="btn btn-light font-weight-bold" href="">導入事例を詳しくみる</a>
</div>
</div>
</div>
</div>
</section> -->
<?php get_footer();