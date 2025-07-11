<?php $category_id = get_the_ID();

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
        [
            'key'     => '_is_spotlight',
            'value'   => 'yes',
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

        ?>

        <?php
        $image_url = get_post_meta( get_the_ID(), '_spotlight_image', true );

        if ( $image_url ) {
            $attachment_id = attachment_url_to_postid( $image_url );

            if ( $attachment_id ) {
                
                echo wp_get_attachment_image( $attachment_id, 'btc_medium' );
            } else {
                // Fallback to original URL if ID not found
                echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( get_the_title() ) . '">';
            }
        }
        ?>

        <?php

        echo '</li>';
    }
    echo '</ul>';
    wp_reset_postdata();

}

?>