<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center font-weight-bold mb-5">お問い合わせご希望の方は下記フォームよりどうぞ。
<br>送信内容を確認させていただき、2営業日以内にご連絡させていただきます。
<span class="d-block small mt-3"><i class="text-danger small mr-1">※</i>は入力必須項目です。</span></p>
<?php echo do_shortcode('[contact-form-7 id="12" title="お問い合わせ"]'); ?>
</div>
</section>
<?php get_footer();
