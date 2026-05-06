 <?php $category_id = get_the_ID();
  $cats = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'category',
    'orderby' => 'title',
    'post_status'    => 'publish',
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'post__not_in'   => array($category_id),

  ));
  if ($cats->have_posts()) {
  ?>

<?php
$lang=get_locale();
if($lang=='fr_FR'){
  $fr_class = 'fr';
}else{
  $fr_class = '';
}
?>
   <section id="explore_other_categories">
     <div class="explore_other_head">
       <div class="heading <?php echo $fr_class; ?>" animateHeading> 
         <h2><?php echo t('exploreOtherCategories'); ?></h2>
       </div>
       <div class="explore_other_buttons">
         <button class="explore_other-prev globalNavigation <?php echo $fr_class; ?> navBtnColor">
           <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
         </button>
         <button class="explore_other-next globalNavigation <?php echo $fr_class; ?> navBtnColor">
           <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
         </button>
       </div>
     </div>
     <div class="explore_other_categories_container">
       <div class="swiper explore_other_categories">

         <div class="swiper-wrapper">
           <?php



            while ($cats->have_posts()) {
              $cats->the_post();
              $category_id = get_the_ID();
              $title_color = get_field('title_color_code');
            ?>



             <div class="swiper-slide category_item">
               <a href="<?php the_permalink(); ?>" class="category_image">
                 <?php
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

                  $image = '<img loading="lazy" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                  echo  $image;

                  ?>
                 <p class="cta <?php echo $fr_class; ?>">
                   <?php echo t('exploreMore'); ?> <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
                 </p>
               </a>
               <a href="<?php the_permalink(); ?>" class="category_title <?php echo $fr_class; ?>"><?php the_title(); ?></a>
             </div>


           <?php
            }
            ?>

         </div>


         <!-- <div class="swiper-pagination"></div> -->
       </div>
     </div>
      <div class="explore_other_buttons in_mobile_explore">
         <button class="explore_other-prev globalNavigation <?php echo $fr_class; ?> navBtnColor">
           <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
         </button>
         <button class="explore_other-next globalNavigation <?php echo $fr_class; ?> navBtnColor">
           <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
         </button>
       </div>
   </section>




 <?php
  }
  wp_reset_postdata();


  ?>