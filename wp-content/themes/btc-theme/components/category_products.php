<?php
$lang=get_locale();
if($lang=='fr_FR'){
  $fr_class = 'fr';
}else{
  $fr_class = '';
}
?>

<section id="explore_products">
  <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="<?php echo t('btcPattern'); ?>" />
  <div class="heading <?php echo $fr_class; ?>">
    <h2><?php echo t('exploreProducts'); ?></h2>
  </div>
  <div class="explore_products_container">
    <?php
    $category_id = get_the_ID();

    $products = new WP_Query([
      'post_type'      => 'product',
      'post_status'    => 'publish',
      'posts_per_page' => -1,
      'meta_key'       => '_sort_order',
      'orderby'        => 'meta_value_num',
      'order'          => 'ASC',
      'meta_query'     => [
        [
          'key'     => '_category_id',
          'value'   => $category_id,
          'compare' => '=',
        ],
      ],
    ]);

    if ($products->have_posts()) :
      while ($products->have_posts()) : $products->the_post();

        $description = get_the_content();

    ?>
        <div class="products_item">
          <div class="product_image">
            <?php
            if (has_post_thumbnail()) {
              $thumbnail_id = get_post_thumbnail_id();
              $image_url = wp_get_attachment_url($thumbnail_id);
              $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
              $title_text = get_the_title($thumbnail_id);
              if (empty($alt_text)) {
                $alt_text = get_the_title();
              }
              if (empty($title_text)) {
                $title_text = get_the_title();
              }

              $image = '<img loading="lazy" class="productsImages" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
              echo $image;
            } else {
              echo '<img loading="lazy" class="productsImages" src="' . get_template_directory_uri() . '/assets/images/placeholder.png' . '" alt="Placeholder">';
            }
            ?>
          </div>
          <div class="product_detail">
            <h2 class="product_title"><?php the_title(); ?></h2>
            <p class="product_description">
              <?php echo esc_html(mb_strimwidth(strip_tags($description), 0, 160, '...')); ?>
            </p>
            <?php
            $lang = get_locale();
            if($lang == 'fr_FR') {
                $class = 'small';
            } else {
                $class = '';
            }
            ?>
            <button class="leadpopup cta <?php echo $class; ?> <?php echo $fr_class; ?>"><?php echo t('startYourLine'); ?> <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>"></button>
          </div>
        </div>
    <?php

      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>' . t('noProductFound') . '</p>';
    endif;
    ?>
  </div>
</section>