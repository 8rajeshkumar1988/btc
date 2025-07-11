<?php

get_header();

?>
Home Page -->front-page.php
<br/>


<br/>
Category List:

<?php

$clients = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'category',
    'orderby' => 'title',
    'post_status'    => 'publish', 
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',

) );

if ( $clients->have_posts() ) {
    while( $clients->have_posts() ) {
         $clients->the_post(); 
        ?>
        <a href = "<?php the_permalink(); ?>"><img title= "<?php the_title(); ?>" class = 'category__image' src = "<?php the_post_thumbnail_url('btc_medium') ?>"></a>
        <?php
    }

}
wp_reset_postdata();
?>
<br/>
homecapability List:
<?php

$clients = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'homecapability',
    'orderby' => 'title',
    'post_status'    => 'publish', 
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',

) );

if ( $clients->have_posts() ) {
    while( $clients->have_posts() ) {
         $clients->the_post(); 
        ?>
        <img title= "<?php the_title(); ?>" class = 'homecapability__image' src = "<?php the_post_thumbnail_url('btc_large') ?>">
        <?php
    }

}
wp_reset_postdata();
?>
<?php get_template_part( 'components/socials' ); ?>
<?php get_template_part( 'components/clients' ); ?>
<?php
get_footer();

?>