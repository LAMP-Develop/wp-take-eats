<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center font-weight-bold mb-5">お問い合わせご希望の方は下記フォームよりどうぞ。
<br>送信内容を確認させていただき、担当者よりご連絡させていただきます。
<span class="d-block small mt-3"><i class="text-danger small mr-1">※</i>は入力必須項目です。</span></p>
<div class="footer__cta__tel text-center mb-4">
<p class="footer__cta__tel-num mb-1"><a class="text-body font-weight-bold" href="tel:075-600-2721"><span class="mr-2">TEL</span>075-600-2721</a></p>
<p class="small">10：00〜18：00（土日祝除く）</p>
</div>
<?php the_content(); ?>
</div>
</section>
<?php get_footer();
