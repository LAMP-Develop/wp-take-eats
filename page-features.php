<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec features">
<div class="container">
<h2 class="text-center font-weight-bold h4 mb-md-5 mb-4">基本機能</h2>
<div class="d-flex justify-content-center flex-wrap mb-5">
<div class="text-center mr-md-3 mb-md-0 mb-3"><a class="btn btn-outline-danger" href="https://demo.take-eats.jp/shop/" target="_blank"><i class="fas fa-store-alt mr-2"></i>店舗ページのデモをみる</a></div>
<div class="text-center"><a class="btn btn-outline-danger" href="https://demo.take-eats.jp/admin/" target="_blank"><i class="fas fa-user-cog mr-2"></i>管理画面のデモをみる</a></div>
</div>
<p class="text-md-center font-weight-bold">TakeEatsなら、カンタンに商品登録・管理が可能です。
<br>受取時間や通知も設定でき、テイクアウト予約に必要なシステムを導入いただけます。</p>
<div class="features__demos">
<div class="features__demos__btns">
<div class="features__demos__btns-btn active" data-src="<?php echo $img_url; ?>demo1.png" data-txt="商品名・商品詳細・金額を設定できます。<br>IDやコードの入力にも対応しており、商品管理も柔軟に対応できます。">
<p><i class="fas fa-box"></i>商品の登録</p>
<p class="small">出品したい商品を登録</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo2.png" data-txt="サイドメニューやドリンクなど、分類ごとに設定が可能です。">
<p><i class="fas fa-list-ul"></i>カテゴリー追加</p>
<p class="small">カテゴリーの設定が可能</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo3.png" data-txt="分量や味付けなど、お店独自のオプションが設定可能です。">
<p><i class="far fa-list-alt"></i>オプション追加</p>
<p class="small">独自のオプションを自由に設定</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo5.png" data-txt="受注があった商品やご注文されたお客様の情報を確認できます。">
<p><i class="fas fa-clipboard-list"></i>受注管理</p>
<p class="small">受注内容を一覧で確認</p>
</div>
<div class="features__demos__btns-btn" data-src="<?php echo $img_url; ?>demo6.png" data-txt="店舗情報の登録が可能です。また複数店舗掲載にも対応しています。">
<p><i class="fas fa-store-alt"></i>店舗管理</p>
<p class="small">複数店舗の登録が可能</p>
</div>
</div>
<!-- features__demos__btns -->
<div class="features__demos__imgs">
<img id="demo-img" src="<?php echo $img_url; ?>demo1.png" alt="TakeEatsのデモ画面">
<p id="demo-txt">商品名・商品詳細・金額を設定できます。<br>IDやコードの入力にも対応しており、商品管理も柔軟に対応できます。</p>
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
<span class="d-block small mt-3 text-left">クレジットカードを使用した事前決済をご利用いただけます</span>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_2.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_2.png 1x, <?php echo $img_url; ?>option_icon_2@2x.png 2x">
</div>
<h3>デザインカスタム</h3>
<span class="d-block small mt-3 text-left">店舗ページをご希望に沿ったデザインにカスタマイズ可能です</span>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_3.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_3.png 1x, <?php echo $img_url; ?>option_icon_3@2x.png 2x">
</div>
<h3>FAX転送</h3>
<span class="d-block small mt-3 text-left">お客様から注文があった際に受注内容をFAXへ転送することができます</span>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_4.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_4.png 1x, <?php echo $img_url; ?>option_icon_4@2x.png 2x">
</div>
<h3>お気持ちオプション</h3>
<span class="d-block small mt-3 text-left">お客様が商品をご注文時、店舗様に少額の応援金を贈ることができます</span>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_5.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_5.png 1x, <?php echo $img_url; ?>option_icon_5@2x.png 2x">
</div>
<h3>SNS連携</h3>
<span class="d-block small mt-3 text-left">店舗ページ内に、店舗様で管理されているSNSアカウントへのリンクを表示することができます</span>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_6.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_6.png 1x, <?php echo $img_url; ?>option_icon_6@2x.png 2x">
</div>
<h3>お知らせ</h3>
<span class="d-block small mt-3 text-left">臨時休業や、新メニューなどのお知らせを店舗ページへ表示させることが可能です</span>
</div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_7.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_7.png 1x, <?php echo $img_url; ?>option_icon_7@2x.png 2x">
</div>
<h3>お取り寄せ</h3>
<span class="d-block small mt-3 text-left">遠方のお客様へ商品を届けたい場合に、お取り寄せサービスの注文管理システムとしてお使いいただけます</span>
</div>
<!-- <div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_8.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_8.png 1x, <?php echo $img_url; ?>option_icon_8@2x.png 2x">
</div>
<h3>独自ドメイン</h3>
<span class="d-block small mt-3 text-left">希望される独自ドメインに店舗ページを設置することが可能です（ドメイン取得は店舗様にて行っていただく必要がございます）</span>
</div> -->
<!-- <div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_12.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_12.png 1x, <?php echo $img_url; ?>option_icon_12@2x.png 2x">
</div>
<h3>レポート</h3>
<span class="d-block small mt-3 text-left">店舗ページのアクセス解析レポートが毎月自動で届きます</span>
</div> -->
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_13.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_13.png 1x, <?php echo $img_url; ?>option_icon_13@2x.png 2x">
</div>
<h3>タク配</h3>
<span class="d-block small mt-3 text-left">MKタクシーのタクシー配送サービスをご利用いただけます（配送料は店舗様のご負担となります）</span>
<p>※京都市内限定/6月開始予定</p>
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
<img src="<?php echo $img_url; ?>step_img_1.png" alt="商品を選択" srcset="<?php echo $img_url; ?>step_img_1.png 1x, <?php echo $img_url; ?>step_img_1@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>02</span></span><i>カートに入れる</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_2.png" alt="カートに入れる" srcset="<?php echo $img_url; ?>step_img_2.png 1x, <?php echo $img_url; ?>step_img_2@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>03</span></span><i>受取日時と<br>場所を指定</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_3.png" alt="受取日時と場所を指定" srcset="<?php echo $img_url; ?>step_img_3.png 1x, <?php echo $img_url; ?>step_img_3@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>04</span></span><i>お支払い方法と<br>お客様情報を入力</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_4.png" alt="お支払い方法とお客様情報を入力" srcset="<?php echo $img_url; ?>step_img_4.png 1x, <?php echo $img_url; ?>step_img_4@2x.png 2x">
</div>
</div>
<div class="features__steps__inner">
<p><span>STEP<span>05</span></span><i>注文完了</i></p>
<div class="features__steps__inner-img">
<img src="<?php echo $img_url; ?>step_img_5.png" alt="注文完了" srcset="<?php echo $img_url; ?>step_img_5.png 1x, <?php echo $img_url; ?>step_img_5@2x.png 2x">
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
