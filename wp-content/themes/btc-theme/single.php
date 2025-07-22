<?php

get_header();

?>
<section class="blog_hero">
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
        <p><?php
            $categories = get_the_category();
            if (! empty($categories)) {
              echo esc_html($categories[0]->name); // Show the first category
              $cat_name = $categories[0]->name;
            } else {
              $cat_name = "Blogs";
            } ?></p>
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="breadcrub_container">
    <p class="breadcrub">
      <a href="<?php echo site_url('/') ?>">Home</a> / <a href="<?php echo site_url('/blogs') ?>"><?php echo  $cat_name; ?></a> / <?php the_title(); ?>
      Frontier
    </p>
    <div class="social_links">
      <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/insta.png'; ?>" alt="instagram"></a>
      <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>" alt="facebook"></a>
      <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/x.png'; ?>" alt="twitter"></a>
      <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>" alt="linkedin"></a>
      <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/youtube.png'; ?>" alt="youtube"></a>
    </div>
  </div>
  <div class="tags">
    <p class="date">7 May 2025</p>
    <a href="/">Tag</a>
    <a href="/">Tag</a>
    <a href="/">Tag</a>
    <a href="/">Tag</a>
  </div>


</section>

<div class="blog_content">
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
              <a href="./index.html" class="category_image">
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

                $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
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
<?php
get_footer();

?>