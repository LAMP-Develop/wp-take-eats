<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec marketing">
<div class="container">
<h2 class="text-center font-weight-bold h4 mb-md-5 mb-4">オリジナルページだからできる<br class="d-md-none">プロモーション</h2>
<div class="features__lists">
<div class="features__lists__inner">
<div class="features__lists__inner-img mb-3">
<img src="<?php echo $img_url; ?>marketing_img_1.png" alt="GoogleMapへ掲載" srcset="<?php echo $img_url; ?>marketing_img_1.png 1x, <?php echo $img_url; ?>marketing_img_1@2x.png 2x">
</div>
<h3>GoogleMapへ掲載</h3>
<p>Googleマップで［テイクアウト］とクリックするとマップ上にピンが表示されます。</p>
</div>
<div class="features__lists__inner">
<div class="features__lists__inner-img mb-3">
<img src="<?php echo $img_url; ?>marketing_img_2.png" alt="ポータルサイトへ掲載" srcset="<?php echo $img_url; ?>marketing_img_2.png 1x, <?php echo $img_url; ?>marketing_img_2@2x.png 2x">
</div>
<h3>ポータルサイトへ掲載</h3>
<p>TakeEats公式のテイクアウトに特化した店舗検索サイトにご掲載をさせていただきエリアやジャンル等でヒットされます。</p>
</div>
<div class="features__lists__inner">
<div class="features__lists__inner-img mb-3">
<img src="<?php echo $img_url; ?>marketing_img_3.png" alt="SEO対策" srcset="<?php echo $img_url; ?>marketing_img_3.png 1x, <?php echo $img_url; ?>marketing_img_3@2x.png 2x">
</div>
<h3>SEO対策</h3>
<p>リピーターや常連客が［お店名＋テイクアウト］と検索すると上位にヒットするよう対策を施します。</p>
</div>
</div>
</div>
</section>
<?php get_footer();
