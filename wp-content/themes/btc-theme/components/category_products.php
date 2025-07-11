<?php $category_id = get_the_ID();

?>
<br/>
Category Products
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

?>