
<?php

get_header();

?>
Category Detail Page
<?php the_title(); ?>
<php the_field('sub_title'); ?>
<img title = '<?php the_title(); ?>' class = 'category__image' src = "<?php the_post_thumbnail_url('btc_large') ?>">

<?php get_template_part( 'components/spot_light' );?>
<?php get_template_part( 'components/category_products' );?>
<?php get_template_part( 'components/other_categories' );?>


<?php
$faqs = get_post_meta(get_the_ID(), 'category_faqs', true);

if (!empty($faqs)) {
    echo '<div class="category-faqs">';
    echo '<h2>FAQs</h2><ul>';
    foreach ($faqs as $faq) {
        echo '<li>';
        echo '<strong>❓ ' . esc_html($faq['question']) . '</strong><br>';
        echo '💬 ' . esc_html($faq['answer']);
        echo '</li>';
    }
    echo '</ul></div>';
}
?>
<?php get_template_part( 'components/clients' );?>
<?php
get_footer();

?>