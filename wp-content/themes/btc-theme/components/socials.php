<br/>
Social List:
<br/>
<?php

$clients = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'socialmedia',
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
        <img title= "<?php the_title(); ?>" class = 'socialmedia__image' src = "<?php the_post_thumbnail_url('btc_medium') ?>">
        <?php
    }

}
wp_reset_postdata();
?>
<br/>