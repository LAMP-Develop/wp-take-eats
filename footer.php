<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>
</main>

<footer class="footer">
<?php if (!is_page('contact') && !is_page('request')): ?>
<div class="container">
<div class="footer__cta">
<h2 class="ttl-h2 text-center">
<span class="text-body">Contact</span>
<span>導入のご検討・ご相談は<br class="d-md-none">こちらから</span>
</h2>
<div class="footer__cta__tel">
<p class="footer__cta__tel-num"><a href="tel:075-600-2721"><span class="mr-3">TEL</span>075-600-2721</a></p>
<p class="small">10：00〜18：00（土日祝除く）</p>
</div>
<div class="footer__cta__btns">
<a href="<?php $home; ?>/contact/">お問い合わせ</a>
<a href="<?php $home; ?>/request/">お申し込み</a>
</div>
</div>
<!-- cta -->
</div>
<?php endif; ?>
<div class="footer__link<?php if (is_page('contact') || is_page('request')) {
    echo " pt-5";
} ?>">
<div class="container">
<div class="footer__link__inner">
<h3>サービス紹介</h3>
<ul>
<li><a href="<?php echo $home; ?>/features/">機能紹介</a></li>
<li><a href="<?php echo $home; ?>/price/">料金</a></li>
<li><a href="<?php echo $home; ?>/marketing/">集客・販売促進</a></li>
<li><a href="<?php echo $home; ?>/flow/">導入の流れ</a></li>
<li><a href="<?php $home; ?>/faq/">よくあるご質問</a></li>
</ul>
</div>
<!-- footer__link__inner -->
<div class="footer__link__inner">
<h3>企業情報</h3>
<ul>
<li><a href="<?php $home; ?>/contact/">お問い合わせ</a></li>
<li><a href="<?php echo $home; ?>/company/">運営会社</a></li>
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
</ul>
</div>
<!-- footer__link__inner -->
</div>
</div>
<!-- footer__link -->
<p class="copy">©2020 <?php bloginfo("name"); ?></p>
</footer>

<script src="<?php echo $wp_url; ?>/dist/js/bundle.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>