<section id="explore_products">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
  <div class="heading">
    <h2>Explore Products</h2>
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
                    the_post_thumbnail('btc_medium');
                } else {
                    echo '<img src="' . get_theme_file_uri('/assets/products/placeholder.png') . '" alt="Placeholder">';
                }
                ?>
              </div>
              <div class="product_detail">
                <h2 class="product_title"><?php the_title(); ?></h2>
                <p class="product_description"><?php echo wp_kses_post(wp_trim_words($description, 30)); ?></p>
              </div>
            </div>
            <?php

        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No products found.</p>';
    endif;
    ?>
  </div>
</section>



<!-- <?php $category_id = get_the_ID();

?>
<?php
$products = new WP_Query( [
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
] );
if ( $products->have_posts() ) {
    echo '<ul class="product-list">';
    while ( $products->have_posts() ) {
        $products->the_post();

        echo '<li>';
        echo '<h3>' . get_the_title() . '</h3>';

        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'btc_medium' );
        }

        echo '</li>';
    }
    echo '</ul>';
    wp_reset_postdata();

}

?> -->