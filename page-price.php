<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<div class="sec price">
<div class="container">
<div class="price__card">
<img src="<?php echo $img_url; ?>price_card_1.png" alt="初期費用" srcset="<?php echo $img_url; ?>price_card_1.png 1x, <?php echo $img_url; ?>price_card_1@2x.png 2x">
<p class="text-md-center m-0 small mt-3">※オプション料・通信料・振込手数料はお客様負担となります。</p>
</div>
<div class="price__card mb-0">
<img src="<?php echo $img_url; ?>price_card_2.png" alt="決済手数料" srcset="<?php echo $img_url; ?>price_card_2.png 1x, <?php echo $img_url; ?>price_card_2@2x.png 2x">
</div>
<p class="text-md-center m-0 small mt-3">※ クレジットカードでの決済の場合手数料3.6%+¥20が別途発生します。<br>※ 2020/9/1以降は手数料8%が発生します。</p>
</div>
</div>

<section class="price">
<div class="price__info">
<div class="price__info__inner">
<h2 class="font-weight-bold text-center h4 mb-3">決済について</h2>
<p class="font-weight-bold text-center small">下記の決済方法がご利用いただけます。</p>
<div class="text-center">
<img src="<?php echo $img_url; ?>kessai.png" alt="決済について" srcset="<?php echo $img_url; ?>kessai.png 1x, <?php echo $img_url; ?>kessai@2x.png 2x">
</div>
<!-- <div class="price__info__inner__credit">
<div class="price__info__inner__credit__wrap mb-4">
<div class="price__info__inner__credit__wrap-ttl">クレジットカード</div>
<div class="price__info__inner__credit__wrap-content">
<div class="d-flex flex-wrap">
<div><img src="<?php echo $img_url; ?>credit_1.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_1.png 1x, <?php echo $img_url; ?>credit_1@2x.png 2x"></div>
<div><img src="<?php echo $img_url; ?>credit_2.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_2.png 1x, <?php echo $img_url; ?>credit_2@2x.png 2x"></div>
<div><img src="<?php echo $img_url; ?>credit_3.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_3.png 1x, <?php echo $img_url; ?>credit_3@2x.png 2x"></div>
<div><img src="<?php echo $img_url; ?>credit_4.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_4.png 1x, <?php echo $img_url; ?>credit_4@2x.png 2x"></div>
<div><img src="<?php echo $img_url; ?>credit_5.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_5.png 1x, <?php echo $img_url; ?>credit_5@2x.png 2x"></div>
</div>
</div>
<div class="price__info__inner__credit__wrap-price">手数料<br>3.6%+¥20</div>
</div>
<div class="price__info__inner__credit__wrap">
<div class="price__info__inner__credit__wrap-ttl">店舗決済</div>
<div class="price__info__inner__credit__wrap-content">
<span class="font-weight-bold">現金・クレジット・QRコード・交通系ICなど（店舗指定の決済方法）</span>
</div>
<div class="price__info__inner__credit__wrap-price">手数料<br>¥0</div>
</div>
<p class="mb-0 mt-3 small">※ 2020/9/1以降は手数料10%が発生します。</p>
</div> -->
<!-- <div class="price__info__inner__table">
<table class="price__info__inner__table__credit">
<tbody>
<tr>
<th>クレジットカード</th>
<td>
<img src="<?php echo $img_url; ?>credit_1.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_1.png 1x, <?php echo $img_url; ?>credit_1@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_2.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_2.png 1x, <?php echo $img_url; ?>credit_2@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_3.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_3.png 1x, <?php echo $img_url; ?>credit_3@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_4.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_4.png 1x, <?php echo $img_url; ?>credit_4@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_5.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_5.png 1x, <?php echo $img_url; ?>credit_5@2x.png 2x">
<p class="mb-0 mt-3">手数料：8.6%+¥30</p>
</td>
</tr>
<tr>
<th>キャリア決済<br><span class="small font-weight-bold">※対応予定</span></th>
<td>
<img src="<?php echo $img_url; ?>career_1.png" alt="携帯キャリア" srcset="<?php echo $img_url; ?>career_1.png 1x, <?php echo $img_url; ?>career_1@2x.png 2x">
<img src="<?php echo $img_url; ?>career_2.png" alt="携帯キャリア" srcset="<?php echo $img_url; ?>career_2.png 1x, <?php echo $img_url; ?>career_2@2x.png 2x">
<img src="<?php echo $img_url; ?>career_3.png" alt="携帯キャリア" srcset="<?php echo $img_url; ?>career_3.png 1x, <?php echo $img_url; ?>career_3@2x.png 2x">
</td>
</tr>
<tr>
<th>店舗決済</th>
<td><span class="font-weight-bold">現地で決済</span><br>手数料：5%+¥30</td>
</tr>
</tbody>
</table>
</div> -->
</div>
<div class="price__info__inner">
<h2 class="font-weight-bold text-center h4 mb-3">クレジットカード支払い分<br class="d-md-none">ご入金について</h2>
<p class="font-weight-bold text-center small">個別の決済会社との契約は一切不要！<br>ご指定の銀行口座に入金をいたします。</p>
<div class="price__info__inner__table method">
<table>
<tbody>
<tr>
<th>銀行</th>
<td>指定なし</td>
</tr>
<tr>
<th>売上締め</th>
<td>当月末締め</td>
</tr>
<tr>
<th>入金タイミング</th>
<td>翌月末払い<span class="small">※</span></td>
</tr>
<tr>
<th>振込手数料</th>
<td>440円</td>
</tr>
</tbody>
</table>
</div>
<p class="mt-3 small mb-0">※入金額が5,000円を超えている場合に振込となります。5,000円に満たない場合は、5,000円を超える月まで振込保留となります。
<br>（最大6ヶ月を預り期間上限として、期間経過時は、5,000円に満たなくても振込）</p>
</div>
</div>
</section>
<?php get_footer();
