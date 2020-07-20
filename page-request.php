<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header();the_post(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center font-weight-bold mb-5">送信内容を確認させていただき、担当者よりご連絡させていただきます。
<span class="d-block small mt-3"><i class="text-danger small mr-1">※</i>は入力必須項目です。</span></p>
<div class="footer__cta__tel">
<p class="footer__cta__tel-num"><a href="tel:075-600-2721"><span class="mr-3">TEL</span>075-600-2721</a></p>
<p class="small">10：00〜18：00（土日祝除く）</p>
</div>

<!-- <div class="google-form">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdfSLn9Rk4giWJhJkchVnSEigSoxBQSCzzsqYpfwk9SgPdIQw/viewform?embedded=true" width="640" height="1427" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
</div> -->

<?php wp_content(); ?>

</div>
</section>
<?php get_footer();
