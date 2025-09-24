<?php

get_header();

?>
<section class="blog_hero">
  <div class="breadcrub_container">
    <p class="breadcrub">
      <?php
            $categories = get_the_category();
            if (! empty($categories)) {
              // echo esc_html($categories[0]->name); // Show the first category
              $cat_name = $categories[0]->name;
            } else {
              $cat_name = "Blogs";
            } ?>
      <a href="<?php echo site_url(HOME_PAGE) ?>">Home</a> / <a href="<?php echo site_url('/blogs') ?>"><?php echo  $cat_name; ?></a> / <?php the_title(); ?>
    </p>
  </div>
  <div>
    <?php
    $banner_image = get_field('banner_image_desktop');
    $top_post_ids[] = get_the_ID();

    if ($banner_image) {
      $image_url = isset($banner_image['sizes']['full']) ? $banner_image['sizes']['full'] : $banner_image['url'];
      $alt_text = isset($banner_image['alt']) ? $banner_image['alt'] : '';

      echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
    }

    ?>
    <div class="content">
      <div class="heading">
        <p><?php echo  $cat_name; ?></p>
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="data_container">
  <div class="tags">
    <p class="date">
      <?php 
      $date_raw = get_field('published_at');
      if ($date_raw) {
          echo date('j M Y', strtotime($date_raw));
      }else{
            echo get_the_date();
      } ?>
    </p>
    <?php
    $tags = get_the_tags();
    if ($tags) {
      
      foreach ($tags as $tag) {
        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a> ';
      }
      echo '</div>';
    }
    ?>



  </div>
<div class="social_links">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook" onclick="shareToFacebook()"  data-url="<?php echo esc_url(get_permalink()); ?>"
  data-title="<?php echo esc_attr(get_the_title()); ?>" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.png" alt="twitter" onclick="shareToTwitter()"  data-url="<?php echo esc_url(get_permalink()); ?>"
  data-title="<?php echo esc_attr(get_the_title()); ?>" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="linkedin" onclick="shareToLinkedIn()"  data-url="<?php echo esc_url(get_permalink()); ?>"
  data-title="<?php echo esc_attr(get_the_title()); ?>" />
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png" alt="whatsapp" onclick="shareToWhatsApp()"  data-url="<?php echo esc_url(get_permalink()); ?>"
  data-title="<?php echo esc_attr(get_the_title()); ?>" />
</div>
  </div>
<div style="
    height: 2px;
    background: linear-gradient(to left, transparent 50%, #d9d9d9 50%);
    background-size: 20px 2px, 100% 2px;
    position: relative;"></div>






</section>

<div class="blog_content">
    <img class="pattern" src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png" ?>" alt="BTC pattern" />

  <?php the_content(); ?>
</div>


<?php

$posts = new WP_Query([
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'meta_key'       => 'published_at',
  'orderby'        => 'meta_value_num',
  'order'          => 'DESC',
  'cat'            => 1,
  'post__not_in'   => $top_post_ids,
]);

if ($posts->have_posts()) {
?>



  <section id="recommendations_categories">
    <div class="recommendations_head">
      <div class="heading">
        <p>Curated for You</p>
        <h2>Browse Recommendations</h2>
      </div>
    </div>
    <div class="recommendations_categories_container">
      <div class="swiper recommendations_categories">
        <div class="swiper-wrapper">
          <?php
          while ($posts->have_posts()) {
            $posts->the_post();

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

                $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                echo  $image;

                ?>
                <p class="cta">
                  View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                </p>
              </a>
              <a href="<?php the_permalink(); ?>" class="category_title"><?php the_title(); ?></a>
            </div>
          <?php } ?>



        </div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
    <div class="recommendations_buttons">
      <button class="recommendations-prev">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
      </button>
      <button class="recommendations-next">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
      </button>
    </div>
  </section>
  <?php } ?>
  
  <?php get_template_part('components/newsletter_subs_section'); ?>
<?php
get_footer();

?>