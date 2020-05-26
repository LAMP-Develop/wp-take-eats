<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center font-weight-bold mb-5">送信内容を確認させていただき、担当者よりご連絡させていただきます。
<span class="d-block small mt-3"><i class="text-danger small mr-1">※</i>は入力必須項目です。</span></p>
<div class="footer__cta__tel">
<p class="footer__cta__tel-num"><a href="tel:075-600-2721"><span class="mr-3">TEL</span>075-600-2721</a></p>
<p class="small">10：00〜18：00（土日祝除く）</p>
</div>
<?php the_content(); ?>
</div>
</section>

<?php
$page_data = get_page_by_path('term');
$page = get_post($page_data);
$content = $page->post_content;
?>
<!-- Modal -->
<div class="modal fade" id="acceptance" tabindex="-1" role="dialog" aria-labelledby="acceptanceLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="acceptanceLabel">利用規約</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<?php echo $content; ?>
</div>
</div>
</div>
</div>
<?php get_footer();
