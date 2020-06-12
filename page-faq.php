<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<div class="sec faq">
<div class="container">
<div class="faq__list">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'faq',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$q = get_the_title();
$a = get_the_content();
?>
<div class="faq__list__inner">
<h3 class="faq__list__inner-ttl"><?php echo $q; ?></h3>
<div class="faq__list__inner-ans"><?php echo $a; ?></div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</section>
<?php get_footer();
