<?php

get_header();
?>
All Category List -->page-products.php
<br/>
<?php
the_post();
echo the_title();

if ( has_post_thumbnail() ) {
    the_post_thumbnail( 'btc_large' );

}

?>

<br/>
Category List:

<?php

$cats = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'category',
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
        $title_color = get_field( 'title_color_code' );
        $tags_color_code = get_field( 'tags_color_code' );
        $tags_background_color_code = get_field( 'tags_background_color_code' );
        ?>
        <a href = '<?php the_permalink(); ?>'><img title = '<?php the_title(); ?>' class = 'category__image' src = "<?php the_post_thumbnail_url('btc_medium') ?>"></a>
        <a style = "color: <?php echo $title_color; ?>;" href = '<?php the_permalink(); ?>'><?php the_title();
        ?></a>
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
                echo '<h3 style="color: '.$tags_color_code.'; background-color: '.$tags_background_color_code.';">' . get_the_title() . '</h3>';

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'btc_medium' );
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

<?php get_template_part( 'components/customisations' );
?>
<?php get_template_part( 'components/clients' );
?>
<?php
get_footer();

?>

