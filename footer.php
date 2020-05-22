<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>
</main>

<footer class="footer">
<div class="container">
<div class="footer__cta">
<h2 class="ttl-h2 text-center">
<span class="text-body">Contact</span>
<span>導入のご検討・ご相談はこちらから</span>
</h2>
<div class="footer__cta__btns">
<a href="">資料請求</a>
<a href="">お問い合わせ</a>
</div>
</div>
<!-- cta -->
</div>
<div class="footer__link">
<div class="container">
<div class="footer__link__inner">
<h3>サービス紹介</h3>
<ul>
<li><a href="<?php echo $home; ?>/">お問い合わせ</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
</ul>
</div>
<!-- footer__link__inner -->
<div class="footer__link__inner">
<h3>企業情報</h3>
<ul>
<li><a href="<?php echo $home; ?>/">運営会社</a></li>
<li><a href="<?php echo $home; ?>/">プライバシーポリシー</a></li>
</ul>
</div>
<!-- footer__link__inner -->
</div>
</div>
<!-- footer__link -->
<p class="copy">©2020 <?php bloginfo("name"); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>