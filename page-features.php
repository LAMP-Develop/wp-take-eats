<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec features">
<div class="container">
<div class="d-flex justify-content-center flex-wrap mb-5">
<div class="text-center mr-md-3 mb-md-0 mb-3"><a class="btn btn-outline-danger" href="https://demo.take-eats.jp/shop/" target="_blank">店舗ページのデモをみる<i class="fas fa-window-restore ml-2 small"></i></a></div>
<div class="text-center"><a class="btn btn-outline-danger" href="https://demo.take-eats.jp/admin/" target="_blank">管理画面のデモをみる<i class="fas fa-window-restore ml-2 small"></i></a></div>
</div>
<p class="text-md-center font-weight-bold">TakeEatsなら、カンタンに商品登録・管理が可能です。
<br>受取時間や通知も設定でき、テイクアウト予約に必要なシステムを導入いただけます。</p>
<div class="features__demos">
<div class="features__demos__btns">
<div class="features__demos__btns-btn active" data-src="<?php echo $img_url; ?>demo1.png">
<p><i class="fas fa-box"></i>商品の登録</p>
<p class="small">出品したい商品を登録</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo2.png">
<p><i class="fas fa-list-ul"></i>カテゴリーの追加</p>
<p class="small">カテゴリーの設定が可能</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo3.png">
<p><i class="far fa-list-alt"></i>オプションの追加</p>
<p class="small">独自のオプションを自由に設定</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo4.png">
<p><i class="far fa-bell"></i>お知らせ</p>
<p class="small">キャンペーン告知などお知らせを更新</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo5.png">
<p><i class="fas fa-clipboard-list"></i>受注履歴</p>
<p class="small">注文内容を一覧で確認</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo6.png">
<p><i class="fas fa-store-alt"></i>店舗の登録</p>
<p class="small">複数店舗の登録が可能</p>
</div>
</div>
<!-- features__demos__btns -->
<div class="features__demos__imgs">
<img id="demo-img" src="<?php echo $img_url; ?>demo1.png" alt="TakeEatsのデモ画面">
</div>
</div>
</div>
</section>

<section class="sec features bg-light">
<div class="container">
<h2 class="text-center font-weight-bold h4 mb-md-5 mb-4">オプション機能</h2>
<div class="features__option">
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_1.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_1.png 1x, <?php echo $img_url; ?>option_icon_1@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_2.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_2.png 1x, <?php echo $img_url; ?>option_icon_2@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_3.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_3.png 1x, <?php echo $img_url; ?>option_icon_3@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_4.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_4.png 1x, <?php echo $img_url; ?>option_icon_4@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_5.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_5.png 1x, <?php echo $img_url; ?>option_icon_5@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_6.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_6.png 1x, <?php echo $img_url; ?>option_icon_6@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_7.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_7.png 1x, <?php echo $img_url; ?>option_icon_7@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_8.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_8.png 1x, <?php echo $img_url; ?>option_icon_8@2x.png 2x">
</div>
<h3>カード決済</h3>
<p>カテゴリーの設定が可能</p>
</div>
</div>
<!-- features__option -->
</div>
</section>

<section class="sec features">
<div class="container">
<h2 class="text-center font-weight-bold h4 mb-md-5 mb-4">お客様も簡単に注文可能</h2>
<div class="features__steps">
<div class="features__steps__inner">
<p><span>STEP<span>01</span></span><i>商品を選択</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_1.png" alt="" srcset="<?php echo $img_url; ?>step_img_1.png 1x, <?php echo $img_url; ?>step_img_1@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>02</span></span><i>カートに入れる</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_2.png" alt="" srcset="<?php echo $img_url; ?>step_img_2.png 1x, <?php echo $img_url; ?>step_img_2@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>03</span></span><i>受取日時と<br>場所を指定</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_3.png" alt="" srcset="<?php echo $img_url; ?>step_img_3.png 1x, <?php echo $img_url; ?>step_img_3@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>04</span></span><i>お支払い方法と<br>お客様情報を入力</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_4.png" alt="" srcset="<?php echo $img_url; ?>step_img_4.png 1x, <?php echo $img_url; ?>step_img_4@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>05</span></span><i>注文完了</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_5.png" alt="" srcset="<?php echo $img_url; ?>step_img_5.png 1x, <?php echo $img_url; ?>step_img_5@2x.png 2x">
</div>
</div>
</div>
<!-- features__steps -->
<div class="mt-md-5 mt-4 text-center">
<a class="btn btn-outline-danger" href="https://demo.take-eats.jp/shop/" target="_blank">店舗ページのデモをみる<i class="fas fa-window-restore ml-2 small"></i></a>
</div>
</div>
</section>
<?php get_footer();
