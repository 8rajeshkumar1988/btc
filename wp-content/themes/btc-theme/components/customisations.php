<br/>
<?php

$cats = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'customiz_category',
    'orderby' => 'title',
    'post_status'    => 'publish',
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',

) );

if ( $cats->have_posts() ) {
    while( $cats->have_posts() ) {
        $cats->the_post();
        $category_id = get_the_ID();
      
        ?>
        
        <?php the_title();?>
        <?php
        $products = new WP_Query( [
            'post_type'      => 'customization_type',
            'posts_per_page' => -1,        // or change to a paged size
            'meta_query'     => [
                [
                    'key'     => '_customiz_category_id',
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
                    the_post_thumbnail( 'thumbnail' );
                }

                echo '</li>';
            }
            echo '</ul>';
            wp_reset_postdata();

        }

        echo '<br/>';

    }
}
wp_reset_postdata();
?>