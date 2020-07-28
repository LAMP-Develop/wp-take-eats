<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>
</main>

<footer class="footer">
<?php if (!is_page('contact') && !is_page('request')): ?>
<div class="container">
<div class="footer__cta">
<div class="footer__cta-wrap">
<div class="row align-items-center mb-4">
<div class="col-md-8">
<h2 class="footer__cta-ttl">あなたのお店でも<br><span>テイクアウト</span>を始めましょう！</h2>
<p class="footer__cta-txt">TakeEatsはお申込みからご利用スタートまで最短1営業日！<br>あなたのお店オリジナルのテイクアウトサイトを無料で簡単に開設。</p>
</div>
<div class="col-md-4 mt-md-0 mt-3 text-center">
<img src="<?php echo $wp_url; ?>/dist/images/cta_pict_01.png" alt="人物イラスト" srcset="<?php echo $wp_url; ?>/dist/images/cta_pict_01.png 1x, <?php echo $wp_url; ?>/dist/images/cta_pict_01@2x.png 2x">
</div>
</div>
<div class="footer__cta__links">
<a class="footer__cta__links-request" href="<?php echo $home; ?>/request/">お申し込み</a>
<a class="footer__cta__links-tel" href="tel:075-600-2721">
<span>TEL</span>
<span>075-600-2721</span>
<small>10：00〜18：00（土日祝除く）</small>
</a>
<a class="footer__cta__links-contact" href="<?php echo $home; ?>/contact/"><span>資料請求・お問い合わせ</span></a>
</div>
</div>
<img class="footer__cta-icon" src="<?php echo $wp_url; ?>/dist/images/bg_cta_icon.png" alt="takeeats">
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
<?php if(!is_page(['request', 'contact'])): ?>
<a class="footer-ctabtn" href="<?php $home; ?>/request/"><span>＼ 最短1営業日 ／</span>無料でお店に導入！</a>
<?php endif; ?>
</footer>

<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.1" defer></script>
<?php wp_footer(); ?>
</body>
</html>