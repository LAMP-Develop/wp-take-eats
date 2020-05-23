<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec price">
<div class="container">
<p class="text-md-center font-weight-bold">いまなら初期導入費・月額利用料が無料で導入可能！！
<br>費用を気にすることなく導入が可能です。</p>
<div class="price__card">
<img src="<?php echo $img_url; ?>price_card_1.png" alt="" srcset="<?php echo $img_url; ?>price_card_1.png 1x, <?php echo $img_url; ?>price_card_1@2x.png 2x">
</div>
<p class="text-md-center m-0 small">※ 初期導入費/月額利用料無料期間は、2020年9月（予定）までとなります。
<br>※ 通信料・振込手数料はお客様負担となります。</p>
<div class="price__card mb-0">
<img src="<?php echo $img_url; ?>price_card_2.png" alt="" srcset="<?php echo $img_url; ?>price_card_2.png 1x, <?php echo $img_url; ?>price_card_2@2x.png 2x">
</div>
</div>
</section>

<section class="price">
<div class="price__info">
<div class="price__info__inner">
<h2 class="font-weight-bold text-center h4 mb-3">決済について</h2>
<p class="font-weight-bold text-center small">下記の決済がご利用いただけます。</p>
<div class="price__info__inner__table">
<table class="price__info__inner__table__credit">
<tbody>
<tr>
<th>キャッシュカード</th>
<td>
<img src="<?php echo $img_url; ?>credit_1.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_1.png 1x, <?php echo $img_url; ?>credit_1@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_2.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_2.png 1x, <?php echo $img_url; ?>credit_2@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_3.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_3.png 1x, <?php echo $img_url; ?>credit_3@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_4.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_4.png 1x, <?php echo $img_url; ?>credit_4@2x.png 2x">
<img src="<?php echo $img_url; ?>credit_5.png" alt="クレジットカード銘柄" srcset="<?php echo $img_url; ?>credit_5.png 1x, <?php echo $img_url; ?>credit_5@2x.png 2x">
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
<td class="font-weight-bold">現地で決済</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="price__info__inner">
<h2 class="font-weight-bold text-center h4 mb-3">入金について</h2>
<p class="font-weight-bold text-center small">個別の決済会社との契約や銀行口座の用意は一切不要！<br>金融機関も店舗様にあわせて設定しています。</p>
<div class="price__info__inner__table method">
<table>
<tbody>
<tr>
<th>銀行</th>
<td>指定なし</td>
</tr>
<tr>
<th>売上締め</th>
<td>指定なし</td>
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
<p class="mt-3 small mb-0">※ 入金額が5,000円を超えている場合に振込となります。5,000円に満たない場合は、5,000円を超える月まで振込保留となります。
<br>（最大6ヶ月を預り期間上限として、期間経過時は、5,000円に満たなくても振込）</p>
</div>
</div>
</section>
<?php get_footer();
