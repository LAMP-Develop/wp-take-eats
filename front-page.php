<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<div class="lp__hero">
<div class="container">
<div class="lp__hero-wrap">
<p class="text-center">
<img class="lp__hero-txt" src="<?php echo $img_url; ?>lp_hero_top.png" alt="初期費用・月額費用0円" srcset="<?php echo $img_url; ?>lp_hero_top.png 1x, <?php echo $img_url; ?>lp_hero_top@2x.png 2x">
</p>
<div class="lp__hero-demo">
<img src="<?php echo $img_url; ?>mv_lp_pict.png" alt="スマホ画面" srcset="<?php echo $img_url; ?>mv_lp_pict.png 1x, <?php echo $img_url; ?>mv_lp_pict@2x.png 2x">
</div>
</div>
</div>
</div>
<!-- .lp__hero -->

<section class="lp__case py-5">
<div class="container">
<h2 class="lp-ttl2"><span class="marks">様々な飲食店</span>で<br>ご利用いただいております</h2>
</div>
<div id="lpcase" class="lp__case-slide">
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">スイーツ</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_1.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_1.png 1x, <?php echo $img_url; ?>lp_logo_1@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">お寿司</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_2.png" alt="寿しのむさし" srcset="<?php echo $img_url; ?>lp_logo_2.png 1x, <?php echo $img_url; ?>lp_logo_2@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">和食</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_3.png" alt="さいき家" srcset="<?php echo $img_url; ?>lp_logo_3.png 1x, <?php echo $img_url; ?>lp_logo_3@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">カフェ</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_4.png" alt="KAWA Cafe" srcset="<?php echo $img_url; ?>lp_logo_4.png 1x, <?php echo $img_url; ?>lp_logo_4@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">居酒屋</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_5.png" alt="ほうせい丸" srcset="<?php echo $img_url; ?>lp_logo_5.png 1x, <?php echo $img_url; ?>lp_logo_5@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">カフェ</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_6.png" alt="プルクワ" srcset="<?php echo $img_url; ?>lp_logo_6.png 1x, <?php echo $img_url; ?>lp_logo_6@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">カレー</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_7.png" alt="200円カレー" srcset="<?php echo $img_url; ?>lp_logo_7.png 1x, <?php echo $img_url; ?>lp_logo_7@2x.png 2x">
</div>
</div>
<div class="lp__case-slide__inner">
<div class="lp__case-slide__inner-balloon">和食</div>
<div class="lp__case-slide__inner-logo">
<img src="<?php echo $img_url; ?>lp_logo_8.png" alt="鴨LABO" srcset="<?php echo $img_url; ?>lp_logo_8.png 1x, <?php echo $img_url; ?>lp_logo_8@2x.png 2x">
</div>
</div>
</div>
</section>

<section class="py-5 bg-light d-md-none">
<div class="container">
<h2 class="lp-ttl2">TakeEatsの<br><span class="marks">テイクアウト</span>って？</h2>
</div>
<img class="w-100" src="<?php echo $img_url; ?>about_main_sp.png" alt="TakeEatsの流れ" srcset="<?php echo $img_url; ?>about_main_sp.png 1x, <?php echo $img_url; ?>about_main_sp@2x.png 2x">
<div class="container">
<p class="mb-0 mt-5 text-center"><a class="font-weight-bold text-body" href="<?php echo $home; ?>/features/">TakeEatsで出来ること<i class="fas fa-caret-right ml-2"></i></a></p>
</div>
</section>

<section class="py-5 d-md-block d-none">
<div class="container text-center">
<img src="<?php echo $img_url; ?>about_main_pc.png" alt="TakeEatsの流れ" srcset="<?php echo $img_url; ?>about_main_pc.png 1x, <?php echo $img_url; ?>about_main_pc@2x.png 2x">
</div>
</section>

<section class="lp__feature py-5">
<div class="container">
<h2 class="lp-ttl2">TakeEatsの<br><span class="marks">特長</span></h2>
<div class="lp__feature__list">
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3 class="lp-ttl2">初期導入費・月額利用料<br><span class="marks">0円だから</span><br>無料で始められる！</h3>
<img src="<?php echo $img_url; ?>lp_feature_1.png" alt="初期導入費・月額利用料0円" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
</div>
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。（※オプションをご選択の場合は別途費用）</p>
</div>
<!-- .lp__feature__list__inner -->
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3 class="lp-ttl2"><span class="marks">事前予約/決済</span>で<br>キャンセル防止</h3>
<img src="<?php echo $img_url; ?>lp_feature_2.png" alt="キャンセル防止" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
</div>
<p>クレジットカードでの事前決済で、商品の無断キャンセルを防止。廃棄による無駄なコストを削減できます。</p>
</div>
<!-- .lp__feature__list__inner -->
<div class="lp__feature__list__inner">
<div class="lp__feature__list__inner-wrap">
<h3 class="lp-ttl2"><span class="marks">シンプル</span>で使いやすい<br>店舗オリジナル予約サイト</h3>
<img src="<?php echo $img_url; ?>lp_feature_3.png" alt="シンプル" srcset="<?php echo $img_url; ?>lp_feature_3.png 1x, <?php echo $img_url; ?>lp_feature_3@2x.png 2x">
</div>
<p>店舗ごとの予約サイトは、幅広い層が注文しやすいシンプルなデザインです。50代のユーザーにもご好評いただいています。</p>
</div>
<!-- .lp__feature__list__inner -->
</div>
</div>
</section>

<div class="lp__cta">
<div class="container">
<div class="lp__cta__box">
<h2><span>＼ 即日対応！ ／</span>無料でお店に導入！</h2>
<div class="text-center">
<a class="smooth-scroll" href="<?php echo $home; ?>/#lpform">
<img src="<?php echo $img_url; ?>lp_cta_btn.png" alt="無料でお店に導入" srcset="<?php echo $img_url; ?>lp_cta_btn.png 1x, <?php echo $img_url; ?>lp_cta_btn@2x.png 2x">
</a>
</div>
</div>
</div>
</div>

<section class="py-5 bg-light lp__support">
<div class="container">
<p class="text-center font-weight-bold h5">さらに</p>
<div class="lp__support-beginner">
<p>はじめての方も安心して<br>テイクアクトを始められるように<img src="<?php echo $img_url; ?>icon_start.png" alt="初心者" srcset="<?php echo $img_url; ?>icon_start.png 1x, <?php echo $img_url; ?>icon_start@2x.png 2x"></p>
</div>
<h2 class="lp-ttl2">TakeEatsが<br><span class="marks">すべてサポートいたします！</span></h2>
<div class="lp__support__list">
<div class="lp__support__list-wrap">
<div class="lp__support__list-inner">
<img class="w-100" src="<?php echo $img_url; ?>support_1.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_1.png 1x, <?php echo $img_url; ?>support_1@2x.png 2x">
</div>
<div class="lp__support__list-inner">
<img class="w-100" src="<?php echo $img_url; ?>support_2.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_2.png 1x, <?php echo $img_url; ?>support_2@2x.png 2x">
</div>
<div class="lp__support__list-inner">
<img class="w-100" src="<?php echo $img_url; ?>support_3.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_3.png 1x, <?php echo $img_url; ?>support_3@2x.png 2x">
</div>
</div>
<div class="lp__support__list-wrap">
<div class="lp__support__list-inner">
<img class="w-100" src="<?php echo $img_url; ?>support_4.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_4.png 1x, <?php echo $img_url; ?>support_4@2x.png 2x">
</div>
<div class="lp__support__list-inner">
<a href="https://take-eats.jp" target="_blank"><img class="w-100" src="<?php echo $img_url; ?>support_5.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_5.png 1x, <?php echo $img_url; ?>support_5@2x.png 2x"></a>
</div>
<div class="lp__support__list-inner">
<img class="w-100" src="<?php echo $img_url; ?>support_6.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_6.png 1x, <?php echo $img_url; ?>support_6@2x.png 2x">
</div>
<div class="lp__support__list-inner">
<img class="w-100" src="<?php echo $img_url; ?>support_7.png" alt="TakeEatsのサポート内容" srcset="<?php echo $img_url; ?>support_7.png 1x, <?php echo $img_url; ?>support_7@2x.png 2x">
</div>
</div>
</div>
</div>
</section>

<section class="py-5 lp__price">
<div class="container">
<h2 class="lp-ttl2"><span class="marks">料金</span></h2>
<div class="text-center">
<img class="d-md-none" src="<?php echo $img_url; ?>lp_price.png" alt="TakeEatsの料金" srcset="<?php echo $img_url; ?>lp_price.png 1x, <?php echo $img_url; ?>lp_price@2x.png 2x">
<img class="d-md-inline d-none" src="<?php echo $img_url; ?>lp_price_pc.png" alt="TakeEatsの料金" srcset="<?php echo $img_url; ?>lp_price_pc.png 1x, <?php echo $img_url; ?>lp_price_pc@2x.png 2x">
</div>
<p class="small my-3 text-md-center">※オプションをご選択の場合は別途費用がかかります。
<br>※クレジットカードでの決済の場合手数料3.6%が別途発生します。</p>
<p class="mb-0 mt-5 text-center"><a class="font-weight-bold text-body" href="<?php echo $home; ?>/price/">料金を詳しくみる<i class="fas fa-caret-right ml-2"></i></a></p>
</div>
</section>

<section id="flow" class="sec home__flow">
<img class="home__flow-illust" src="<?php echo $img_url; ?>flow_illust_1.png" alt="背景">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>flow</span>
<span>最短即日で導入可能</span>
</h2>
<div class="home__flow__wrap">
<div class="home__flow__wrap-img"><img src="<?php echo $img_url; ?>flow_img_1.png" alt="イラスト" srcset="<?php echo $img_url; ?>flow_img_1.png 1x, <?php echo $img_url; ?>flow_img_1@2x.png 2x"></div>
<ol class="home__flow__list">
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>01</span></div>
<div class="home__flow__list__inner-txt">
<h3>お申し込み</h3>
<p>お申込みフォームより必要事項のご入力をお願い致します。<br>担当者よりお電話にてご連絡致します。</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>02</span></div>
<div class="home__flow__list__inner-txt">
<h3>アカウント発行</h3>
<p>お店の専用サイトを作成しアカウントを発行致します。</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>03</span></div>
<div class="home__flow__list__inner-txt">
<h3>メニュー登録</h3>
<p>販売する商品の登録を行います。<br>(※無料代行サービス実施中)</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>04</span></div>
<div class="home__flow__list__inner-txt">
<h3>ご利用スタート</h3>
<p>準備が整ったら早速注文の受け付けを行いましょう。</p>
</div>
</li>
<!-- home__flow__list__inner -->
</ol>
<!-- home__flow__list -->
</div>
<div class="mt-md-5 mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/flow/">詳しい導入手順を見る</a>
</div>
</div>
</section>
<!-- flow -->

<section id="lpform" class="lp__form">
<img src="<?php echo $img_url; ?>icon_cta.png" alt="イラスト" srcset="<?php echo $img_url; ?>icon_cta.png 1x, <?php echo $img_url; ?>icon_cta@2x.png 2x">
<div class="container">
<div class="text-center lp__form-top">
<img src="<?php echo $img_url; ?>cta_top.png" alt="初期費用0円" srcset="<?php echo $img_url; ?>cta_top.png 1x, <?php echo $img_url; ?>cta_top@2x.png 2x">
</div>
<h3>お申し込みフォーム</h3>
<div><?php the_content(); ?></div>
</div>
</section>

</main>
<!-- #main -->

<footer class="footer">
<div class="container py-5">
<div class="footer__link__inner">
<h3>サービス紹介</h3>
<ul>
<li><a href="<?php echo $home; ?>/features/">機能紹介</a></li>
<li><a href="<?php echo $home; ?>/price/">料金</a></li>
<li><a href="<?php echo $home; ?>/marketing/">集客・販売促進</a></li>
<li><a href="<?php echo $home; ?>/flow/">導入の流れ</a></li>
<li><a href="<?php echo $home; ?>/faq/">よくあるご質問</a></li>
</ul>
</div>
<!-- footer__link__inner -->
<div class="footer__link__inner">
<h3>企業情報</h3>
<ul>
<li><a href="<?php echo $home; ?>/contact/">お問い合わせ</a></li>
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
<a id="toform" class="footer-ctabtn" href="<?php echo $home; ?>/#lpform"><span class="mb-1">＼ 初期・月額費用0円 ／</span><strong>最短即日</strong>お申し込み</a>
</footer>
<!-- #footer -->

<p class="copy">©2020 <?php bloginfo("name"); ?></p>

<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.0" defer></script>
<?php wp_footer(); ?>
<script>
const toform = document.getElementById("toform");

document.addEventListener("click", e => {
  const target = e.target;
  if (!target.classList.contains("smooth-scroll")) return;
  e.preventDefault();
  const targetId = target.hash;
  document.querySelector(targetId).scrollIntoView({
    behavior: "smooth",
    block: "start"
  });
});

window.addEventListener("scroll", () => {
  const srollVal = window.pageYOffset;
  const observer = new IntersectionObserver((entries) => {
    if (srollVal < 500) {
      toform.style.bottom = '-100%';
    } else {
      if (entries[0].isIntersecting == true) {
        toform.style.bottom = '-100%';
      } else {
        toform.style.bottom = 0;
      }
    }
  });
  observer.observe(document.getElementById("lpform"));
});
</script>
</body>
</html>