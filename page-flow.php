<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec flow">
<div class="container">
<p class="text-md-center font-weight-bold">TakeEatsなら、カンタンに商品登録・管理が可能です。
<br>受取時間や通知も設定でき、テイクアウト予約に必要なシステムを導入いただけます。</p>
<div class="flow__list">
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>01</span></div>
<h3>資料請求</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。
<br>SNS等で告知する事で、新たなお客様の獲得へつなげられます。</p>
<p class="small">※迷惑メール対策などでドメイン指定を行なっている場合、メールを受信できない場合がございます。 弊社メールアドレス「info@menu.inc」を受信できるよう設定をお願いいたします。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_1.png" alt="" srcset="<?php echo $img_url; ?>flow_pic_1.png 1x, <?php echo $img_url; ?>flow_pic_1@2x.png 2x">
</div>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/contact/">お問い合わせはこちら</a>
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>02</span></div>
<h3>資料請求</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。
<br>SNS等で告知する事で、新たなお客様の獲得へつなげられます。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_2.png" alt="" srcset="<?php echo $img_url; ?>flow_pic_2.png 1x, <?php echo $img_url; ?>flow_pic_2@2x.png 2x">
</div>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/request/">お申し込みはこちら</a>
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>0３</span></div>
<h3>ヒアリング</h3>
<p class="mb-0">1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。
<br>SNS等で告知する事で、新たなお客様の獲得へつなげられます。</p>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>04</span></div>
<h3>アカウント発行</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。
<br>SNS等で告知する事で、新たなお客様の獲得へつなげられます。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_3.png" alt="" srcset="<?php echo $img_url; ?>flow_pic_3.png 1x, <?php echo $img_url; ?>flow_pic_3@2x.png 2x">
</div>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="https://demo.take-eats.jp/admin/" target="_blank">お申し込みはこちら</a>
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>05</span></div>
<h3>アカウント発行</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。
<br>SNS等で告知する事で、新たなお客様の獲得へつなげられます。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_4.png" alt="" srcset="<?php echo $img_url; ?>flow_pic_4.png 1x, <?php echo $img_url; ?>flow_pic_4@2x.png 2x">
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>06</span></div>
<h3>ご利用スタート</h3>
<p class="mb-0">1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。
<br>SNS等で告知する事で、新たなお客様の獲得へつなげられます。</p>
</div>
</div>
</div>
</section>
<?php get_footer();
