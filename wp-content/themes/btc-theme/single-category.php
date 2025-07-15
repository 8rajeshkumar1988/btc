
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
        echo '<img src="' . esc_url($banner_image['url']) . '" alt="' . esc_attr($banner_image['alt']) . '">';
    }else if ($banner_video) {
        echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
    }
    
    ?>

   
    <div class="content">
    <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / <a href="<?php echo site_url('/products') ?>">Our Products</a> / Active Wear</p>
    <div class="heading">
        <p style="color: #00000099"><?php the_title(); ?></p>
        <h1 style="color: #4d6144">
            <?php the_field('sub_title'); ?>
        </h1>
    </div>
    </div>
</section>

<?php get_template_part( 'components/spot_light' );?>
<?php get_template_part( 'components/category_products' );?>
<?php get_template_part( 'components/other_categories' );?>


<section id="faqs">
      <img src="../assets/BTC_pattern.png" alt="" />
      <div class="heading">
        <p>Your Questions, Answered</p>
        <h2>Frequently Asked Questions</h2>
      </div>
      <div class="accordian">
        <div
          class="faq default-open"
          style="
            translate: none;
            rotate: none;
            scale: none;
            transform: translate(0px, 0px);
            opacity: 1;
          ">
          <div class="head">
            <p>Do you offer private label manufacturing for fashion brands?</p>
            <img
              class="menu open"
              src="../assets/arow_donw.svg"
              alt="clase icon" />
          </div>
          <div class="ans" style="display: none">
            <p>
              Our MOQ typically starts from 500 to 1,000 pieces per style,
              depending on the fabric, design complexity, and print or
              embellishment requirements.
            </p>
          </div>
        </div>
        <div
          class="faq"
          style="
            translate: none;
            rotate: none;
            scale: none;
            transform: translate(0px, 0px);
            opacity: 1;
          ">
          <div class="head">
            <p>What is your minimum order quantity (MOQ)?</p>
            <img
              class="menu open"
              src="../assets/arow_donw.svg"
              alt="clase icon" />
          </div>
          <div class="ans" style="display: none">
            <p>
              Our MOQ typically starts from 500 to 1,000 pieces per style,
              depending on the fabric, design complexity, and print or
              embellishment requirements.
            </p>
          </div>
        </div>
        <div
          class="faq"
          style="
            translate: none;
            rotate: none;
            scale: none;
            transform: translate(0px, 0px);
            opacity: 1;
          ">
          <div class="head">
            <p>
              Can you support startups or small brands with lower quantities?
            </p>
            <img
              class="menu open"
              src="../assets/arow_donw.svg"
              alt="clase icon" />
          </div>
          <div class="ans" style="display: none">
            <p>
              Our MOQ typically starts from 500 to 1,000 pieces per style,
              depending on the fabric, design complexity, and print or
              embellishment requirements.
            </p>
          </div>
        </div>
        <div
          class="faq"
          style="
            translate: none;
            rotate: none;
            scale: none;
            transform: translate(0px, 0px);
            opacity: 1;
          ">
          <div class="head">
            <p>Do you provide design or product development services?</p>
            <img
              class="menu open"
              src="../assets/arow_donw.svg"
              alt="clase icon" />
          </div>
          <div class="ans" style="display: none">
            <p>
              Our MOQ typically starts from 500 to 1,000 pieces per style,
              depending on the fabric, design complexity, and print or
              embellishment requirements.
            </p>
          </div>
        </div>
      </div>
    </section>

    

<!-- <?php
$faqs = get_post_meta(get_the_ID(), 'category_faqs', true);

if (!empty($faqs)) {
    echo '<div class="category-faqs">';
    echo '<h2>FAQs</h2><ul>';
    foreach ($faqs as $faq) {
        echo '<li>';
        echo '<strong>❓ ' . esc_html($faq['question']) . '</strong><br>';
        echo '💬 ' . esc_html($faq['answer']);
        echo '</li>';
    }
    echo '</ul></div>';
}
?> -->
<?php get_template_part( 'components/clients' );?>
<?php
get_footer();

?>