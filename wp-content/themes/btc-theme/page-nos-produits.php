<?php

get_header();
the_post();
?>
<section class="heroBanner">
  <?php
  $banner_video = get_field('banner_video');
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


  if ($banner_video) {
    echo '<video playsinline autoplay muted loop poster="' . $image_url . '" src="' . esc_url($banner_video['url']) . '"></video>';
  } else  if (has_post_thumbnail()) {
    $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
    echo $image;
  }

  ?>
  <!-- <img src="../assets/product_page_banner.jpg" alt="" /> -->
  <div class="content">
    <p class="breadcrub"><a href="<?php echo t('homeUrl') ?>">Accueil</a> / Nos Produits</p>
    <div class="heading" animateHeadingBanner>
      <p><?php the_title(); ?></p>
      <?php the_content(); ?>
    </div>
    <div class="layer"></div>
    <div class="layer2"></div>
  </div>
</section>
<section id="product_page_details">
  <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" btcPattern />
  <h2>
  Nous sommes fiers d'offrir une grande variété de vêtements de haute qualité et <span> fabriqués de manière durable.</span>
  </h2>
  <div class="description">
    <p>
    Que vous développiez une collection de mode, une gamme de produits de base ou une gamme de produits spécialisés, notre équipe collabore avec vous pour donner vie à votre vision créative et technique.
    </p>
    <p>
    La flexibilité que nous offrons repose sur une expertise textile approfondie, une intégration verticale et un engagement clair en faveur de la qualité et de la personnalisation à grande échelle.
    </p>
    <button class="cta leadpopup" ctaButton >
    Contactez-nous <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow" />
    </button>
  </div>
</section>

<section id="product_category">
  <!-- <div class="heading" animateHeading>
    <p>Clothing That Fits All</p>
    <h2>Trendy, Timeless, Tailored</h2>
  </div> -->
  <div class="category_container">
    <div class="category_card">
      <h2>HOMMES</h2>
      <video class="js-lazy-product-video" data-src="<?php echo get_template_directory_uri() . '/assets/images/product1_safari.mp4'; ?>" poster="<?php echo get_template_directory_uri() . '/assets/images/mens_banner.jpg'; ?>" preload="none" autoplay loop muted playsinline></video>
    </div>
    <div class="category_card">
      <h2>FEMMES</h2>
      <video class="js-lazy-product-video" data-src="<?php echo get_template_directory_uri() . '/assets/images/women_textile.webm'; ?>" poster="<?php echo get_template_directory_uri() . '/assets/images/women_textile.jpg'; ?>" preload="none" autoplay loop muted playsinline></video>
    </div>
    <div class="category_card">
      <h2>ENFANTS</h2>
      <video class="js-lazy-product-video" data-src="<?php echo get_template_directory_uri() . '/assets/images/kid.webm'; ?>" poster="<?php echo get_template_directory_uri() . '/assets/images/kid_banner.jpg'; ?>" preload="none" autoplay loop muted playsinline></video>
    </div>
  </div>
</section>

<section id="category_listing">
  <div class="heading" animateHeading>
    <p>Nos Produits</p>
    <h2>Conçu pour Tous les Besoins</h2>
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

          $image = '<img class="category_list_img" loading="lazy" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        } else {
          $image = '<img class="category_list_img" loading="lazy" src="' . get_template_directory_uri() . '/assets/category_item.png" alt="Category Item">';
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
            <p class="cta">Lancez Votre Gamme De Produits<img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow"></p>
          </a>

          <div class="category_list_card_detail">
            <a href="<?php the_permalink(); ?>" class="category_list_card_title" style="color: #000000">
              <?php the_title(); ?>
            </a>
            <!-- <a href="<?php the_permalink(); ?>" class="category_list_card_title" style="color: <?php echo esc_attr($title_color); ?>">
              <?php the_title(); ?>
            </a> -->

            <?php if ($products->have_posts()) : ?>
              <div class="category_tags">
                <?php while ($products->have_posts()) : $products->the_post(); ?>
                  <p style="color: #000000; background-color: #efefef;">
                    <?php the_title(); ?>
                  </p>
                  <!-- <p style="color: <?php echo esc_attr($tags_color_code); ?>; background-color: <?php echo esc_attr($tags_background_color_code); ?>;">
                    <?php the_title(); ?>
                  </p> -->
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
    id="customProductVideo"
    class="js-lazy-product-video"
    data-src="<?php echo get_template_directory_uri() . '/assets/images/BTC_custom_products_video.webm'; ?>"
    preload="none"
    autoplay
    muted
    playsinline
    loop></video>
  <div class="custom_product_detail">
    <div class="custom_product_detail_head" animateHeading>
      <h2>Produits Personnalisés</h2>
      <p>
      Nous offrons un large éventail d'options de personnalisation pour donner vie à vos créations uniques, du concept initial au produit final.
      </p>
    </div>
    <div class="custom_product_detail_list">
      <div animateHeading>
        <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/machine.png'; ?>" alt="machine icon for custom products" />
        <p>
        Options d'impression, de broderie et de teinture personnalisées adaptées aux besoins de votre marque.
        </p>
      </div>
      <div animateHeading>
        <img loading="lazy" alt="shirt icon for custom products" src="<?php echo get_template_directory_uri() . '/assets/images/shirtIcon.png'; ?>" />
        <p>
        Des vêtements confectionnés à la commande pour des produits vraiment personnalisés.
        </p>
      </div>
    </div>
    <button class="cta leadpopup" ctaButton >
    Commencez Votre Personnalisation Dès Aujourd'hui <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow" />
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