
<br/>

Other Category

<br/>
<?php $category_id = get_the_ID();

?>
<?php 
$cats = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'category',
    'orderby' => 'title',
    'post_status'    => 'publish',
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'post__not_in'   => array( $category_id ),

) );

if ( $cats->have_posts() ) {
    while( $cats->have_posts() ) {
        $cats->the_post();
        $category_id = get_the_ID();
        $title_color = get_field( 'title_color_code' );
        ?>
        <a href = '<?php the_permalink(); ?>'><img title = '<?php the_title(); ?>' class = 'category__image' src = "<?php the_post_thumbnail_url('btc_medium') ?>"></a>
        <a style = "color: <?php echo $title_color; ?>;" href = '<?php the_permalink(); ?>'><?php the_title();
        ?></a>
        <?php
    }
}
wp_reset_postdata();


?>