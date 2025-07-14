 <section id="explore_other_categories">
      <div class="explore_other_head">
        <div class="heading">
          <h2>Explore Other Categories</h2>
        </div>
        <div class="explore_other_buttons">
          <button class="explore_other-prev">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow " />
          </button>
          <button class="explore_other-next">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow " />
          </button>
        </div>
      </div>
      <div class="explore_other_categories_container">
        <div class="swiper explore_other_categories">
          <div class="swiper-wrapper">
            <div class="swiper-slide category_item">
              <a href="./index.html" class="category_image">
                <img src="../assets/category_item.png" alt="" />
                <p class="cta">
                  explore More <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="" />
                </p>
              </a>
              <a href="./index.html" class="category_title">Active Wear</a>
            </div>
            
          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
    </section>


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