<?php

get_header();
?>
<section class="heroBanner">
  <?php
  the_post();
  if (has_post_thumbnail()) {
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
    echo $image;
  }else{
      $banner_video = get_field('banner_video');

      if ($banner_video) {
          echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
      }


  }
  ?>
  <!-- <img src="../assets/product_page_banner.jpg" alt="" /> -->
  <div class="content">
    <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / Our Products</p>
    <div class="heroText">
      <p><?php the_title(); ?></p>
      <?php the_content(); ?>
    </div>
    <div class="layer"></div>
  </div>
</section>
<section id="product_page_details">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
  <h2>
    We pride ourselves on offering a wide variety of
    <span>high quality, sustainably made apparel.</span>
  </h2>
  <div class="description">
    <p>
      From everyday essentials to custom designs, our collection is crafted
      with care to meet both style and sustainability needs.
    </p>
    <p>
      Explore our products, made from eco-friendly, traceable cotton, and
      discover the perfect fit for your brand.
    </p>
    <button class="cta leadpopup">
      Get in Touch <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="" />
    </button>
  </div>
</section>

<section id="product_category">
  <div class="heading">
    <p>Clothing That Fits All</p>
    <h2>Trendy, Timeless, Tailored</h2>
  </div>
  <div class="category_container">
    <div class="category_card">
      <h2>MEN</h2>
      <video src="<?php echo get_template_directory_uri() . '/assets/images/product1.mp4'; ?>" autoplay loop muted></video>
    </div>
    <div class="category_card">
      <h2>WOMEN</h2>
      <video src="<?php echo get_template_directory_uri() . '/assets/images/product2.mp4'; ?>" autoplay loop muted></video>
    </div>
    <div class="category_card">
      <h2>KIDS</h2>
      <video src="<?php echo get_template_directory_uri() . '/assets/images/product3.mp4'; ?>" autoplay loop muted></video>
    </div>
  </div>
</section>

<section id="category_listing">
  <div class="heading">
    <p>Our Products</p>
    <h2>Crafted for Every Need</h2>
  </div>
  <div class="category_list">
    <?php
    $cats = new WP_Query([
      'posts_per_page' => -1,
      'post_type'      => 'category',
      'post_status'    => 'publish',
      'meta_key'       => '_sort_order',
      'orderby'        => 'meta_value_num',
      'order'          => 'ASC',
    ]);

    if ($cats->have_posts()) :
      while ($cats->have_posts()) :
        $cats->the_post();
        $category_id = get_the_ID();

        // ACF fields
        $title_color = get_field('title_color_code');
        $tags_color_code = get_field('tags_color_code');
        $tags_background_color_code = get_field('tags_background_color_code');

        // Thumbnail fallback
        #$image_url = get_the_post_thumbnail_url(get_the_ID(), 'btc_medium') ?: get_template_directory_uri() . '/assets/category_item.png';


        if (has_post_thumbnail()) {
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
        } else {
          $image = '<img src="' . get_template_directory_uri() . '/assets/category_item.png" alt="Category Item">';
        }



        // Product tags query (custom post type 'product' with custom meta field '_category_id')
        $products = new WP_Query([
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
        ]);
    ?>

        <div class="category_list_card">
          <a href="<?php the_permalink(); ?>" class="category_list_card_img">
            <?php echo $image; ?>
            <p class="cta">Start your Line <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></p>
          </a>

          <div class="category_list_card_detail">
            <a href="<?php the_permalink(); ?>" class="category_list_card_title" style="color: <?php echo esc_attr($title_color); ?>">
              <?php the_title(); ?>
            </a>

            <?php if ($products->have_posts()) : ?>
              <div class="category_tags">
                <?php while ($products->have_posts()) : $products->the_post(); ?>
                  <p style="color: <?php echo esc_attr($tags_color_code); ?>; background-color: <?php echo esc_attr($tags_background_color_code); ?>;">
                    <?php the_title(); ?>
                  </p>
                <?php endwhile; ?>
              </div>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>

    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>

  </div>
</section>
<section id="custom_product">
  <video
    src="<?php echo get_template_directory_uri() . '/assets/images/BTC_custom_products_video.mp4'; ?>"
    autoplay
    muted
    loop></video>
  <div class="custom_product_detail">
    <div class="custom_product_detail_head">
      <h2>Custom Products</h2>
      <p>
        We offer a wide range of customization options to bring your unique
        designs to life, from the initial concept to the final product.
      </p>
    </div>
    <div class="custom_product_detail_list">
      <div>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/machine.png'; ?>" alt="" />
        <p>
          Custom printing, <br />
          embroidery & dyeing options <br />
          to suit your brand's needs.
        </p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/shirtIcon.png'; ?>" alt="" />
        <p>
          Made-to-order <br />
          garments for truly <br />
          personalized products.
        </p>
      </div>
    </div>
    <button class="cta leadpopup">
      Start Customizing Today <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="" />
    </button>
  </div>
</section>





<?php get_template_part('components/customisations');
?>
<?php get_template_part('components/clients');
?>
<?php
get_footer();

?>