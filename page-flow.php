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
<h3>お問い合わせ</h3>
<p>お問い合わせフォームに、必要事項のご入力をお願いします。担当者よりご返信しお客様のご相談を受け付けます。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_1.png" alt="お問い合わせ" srcset="<?php echo $img_url; ?>flow_pic_1.png 1x, <?php echo $img_url; ?>flow_pic_1@2x.png 2x">
</div>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/contact/">お問い合わせはこちら</a>
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>02</span></div>
<h3>お申し込み</h3>
<p>お申し込みフォームに、必要事項のご入力をお願いします。ご入力いただいたメールアドレスもしくはお電話番号宛に担当営業よりご連絡します。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_2.png" alt="お申し込み" srcset="<?php echo $img_url; ?>flow_pic_2.png 1x, <?php echo $img_url; ?>flow_pic_2@2x.png 2x">
</div>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="<?php echo $home; ?>/request/">お申し込みはこちら</a>
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>0３</span></div>
<h3>ヒアリング</h3>
<p class="mb-0">お客様専用のサイトを制作にあたり、ヒアリングを行います。オプションなどご希望内容の確認を行わせていただきます。</p>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>04</span></div>
<h3>アカウント発行</h3>
<p>お客様専用のテイクアウトサイトを制作・導入いたします。最短1日で導入可能です。（別途オプションによって変動します。）</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_3.png" alt="アカウント発行" srcset="<?php echo $img_url; ?>flow_pic_3.png 1x, <?php echo $img_url; ?>flow_pic_3@2x.png 2x">
</div>
<div class="text-center mt-4">
<a class="btn btn-outline-dark" href="https://demo.take-eats.jp/admin/" target="_blank">管理画面のデモはこちら</a>
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>05</span></div>
<h3>商品登録</h3>
<p>出品したい商品の登録を行います。登録は各店舗様にお願いしております。登録完了後は担当にご報告いただき公開への準備を進めます。</p>
<div class="flow__list__inner-thumbnail">
<img src="<?php echo $img_url; ?>flow_pic_4.png" alt="商品登録" srcset="<?php echo $img_url; ?>flow_pic_4.png 1x, <?php echo $img_url; ?>flow_pic_4@2x.png 2x">
</div>
</div>
<div class="flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>06</span></div>
<h3>ご利用スタート</h3>
<p class="mb-0">公開の準備が整いましたら、開始日を決定しご利用スタートとなります。</p>
</div>
</div>
</div>
</section>
<?php get_footer();
