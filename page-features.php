<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec features">
<div class="container">
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
<h2 class="text-center font-weight-bold h4 mb-md-5 mb-4">機能の特徴</h2>
<div class="features__lists">
<div class="features__lists__inner">
<div class="features__lists__inner-img">
<img src="<?php echo $img_url; ?>feature_icon_1.png" alt="" srcset="<?php echo $img_url; ?>feature_icon_1.png 1x, <?php echo $img_url; ?>feature_icon_1@2x.png 2x">
</div>
<h3>店舗のオリジナルページ</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。</p>
</div>
<div class="features__lists__inner">
<div class="features__lists__inner-img">
<img src="<?php echo $img_url; ?>feature_icon_2.png" alt="" srcset="<?php echo $img_url; ?>feature_icon_2.png 1x, <?php echo $img_url; ?>feature_icon_2@2x.png 2x">
</div>
<h3>受け取り時間の設定</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。</p>
</div>
<div class="features__lists__inner">
<div class="features__lists__inner-img">
<img src="<?php echo $img_url; ?>feature_icon_3.png" alt="" srcset="<?php echo $img_url; ?>feature_icon_3.png 1x, <?php echo $img_url; ?>feature_icon_3@2x.png 2x">
</div>
<h3>ご注文はFAX・メールで通知</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。</p>
</div>
</div>
<!-- features__lists -->
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
</div>
</section>
<?php get_footer();
