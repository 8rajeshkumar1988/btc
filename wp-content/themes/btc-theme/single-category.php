<?php

get_header();
the_post();
?>
<section class="heroBanner">
  <!-- <video playsinline autoplay muted loop src="../assets/homeVideo.mp4"></video> -->

  <?php
  $banner_image = get_field('banner_image');
  $banner_video = get_field('banner_video');

  if ($banner_image) {
    $image_url = isset($banner_image['sizes']['full']) ? $banner_image['sizes']['full'] : $banner_image['url'];
    $alt_text = isset($banner_image['alt']) ? $banner_image['alt'] : '';

    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
  } else if ($banner_video) {
    echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
  }

  ?>


  <div class="content">
    <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / <a href="<?php echo site_url('/products') ?>">Our Products</a> / <?php the_title() ?></p>
    <div class="heading">
      <p style="color: #00000099"><?php the_title(); ?></p>
      <h1 style="color: #4d6144">
        <?php the_field('sub_title'); ?>
      </h1>
    </div>
  </div>
</section>

<?php get_template_part('components/spot_light'); ?>
<?php get_template_part('components/category_products'); ?>
<?php get_template_part('components/other_categories'); ?>













<?php
$faqs = get_post_meta(get_the_ID(), 'category_faqs', true);

if (!empty($faqs)) { ?>
  <section id="faqs">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
    <div class="heading">
      <p>Your Questions, Answered</p>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="accordian">
      <?php
      $ctr = 1;
      foreach ($faqs as $faq) { ?>
        <div
          class="faq <?php echo $ctr == 1 ? "default-open" : ""; ?>"
          style="
            translate: none;
            rotate: none;
            scale: none;
            transform: translate(0px, 0px);
            opacity: 1;
          ">
          <div class="head">
            <p><?php echo esc_html($faq['question']); ?></p>
            <img
              class="menu open"
              src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>"
              alt="clase icon" />
          </div>
          <div class="ans" style="display: none">
            <p>
              <?php echo esc_html($faq['answer']) ?>
            </p>
          </div>
        </div>


      <?php

        $ctr++;
      }
      ?>
    </div>
  </section>
<?php
}
?>
<?php get_template_part('components/clients'); ?>
<?php
get_footer();

?>