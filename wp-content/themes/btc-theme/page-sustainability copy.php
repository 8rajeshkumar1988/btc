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

  <div class="content">
    <p class="breadcrub"><a href="<?php echo site_url(HOME_PAGE) ?>">Home</a> / Sustainability</p>
    <div class="heading" animateHeadingBanner>
      <p>SUSTAINABILITY</p>
      <h1>
        Eco-Innovation at <br> Every Stage
      </h1>
    </div>
    <div class="layer"></div>
    <div class="layer2"></div>
  </div>
</section>
<section id="sustainability_details">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
  <h2>
    <span>BTC</span> is committed <br> to being a <br> <span>sustainable brand</span>
  </h2>
  <div class="description">
    <p>Integrating eco-friendly practices across every stage of the textile value chain. From sourcing locally grown cotton to using AZO-free dyes, water-based inks, and energy-efficient machinery, we prioritize processes that reduce environmental impact.</p>
    <p>Our facilities support water conservation, responsible waste management, and the use of recycled and eco-yarns ensuring that every garment we produce reflects our promise to people and the planet.</p>

  </div>
</section>
<section class="traceability">
  <div
    class="image-wrapper"
    style=" top: 0; left: 0; transform: none">
    <img
      src="<?php echo get_template_directory_uri() . '/assets/images/PeoplePrinciples.jpg'; ?>"
      alt="Image 1" />
    <div class="traceability_content">
      <div class="heading">
        <h2>Traceability first</h2>
      </div>
      <div class="description">
        <div>
          <p>
            We ensure full traceability across our supply chain from raw
            materials to finished garments. This transparency guarantees
            ethical sourcing, quality control & accountability at every
            step, building trust with our partners and end consumers.
          </p>
        </div>
        <div class="right_desc">
          <p>We partner with world leaders in traceability</p>
          <ul>
            <li>FibreTrace</li>
            <li>Cotton Made in Africa (CMIA)</li>
            <li>Global Organic Textile Standard (GOTS)</li>
            <li>
              Blockchain technology enables us to track every stage of
              production, ensuring a reliable attribution of the carbon
              footprint across the supply chain
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div
    class="image-wrapper"
    style=" top: 0; left: 0; transform: none">
    <img
      src="<?php echo get_template_directory_uri() . '/assets/images/VerticalIntegration.jpg'; ?>"
      alt="Image 1" />
    <div class="traceability_content">
      <div class="heading">
        <h2>Traceability Second</h2>
      </div>
      <div class="description">
        <div>
          <p>
            We ensure full traceability across our supply chain from raw
            materials to finished garments. This transparency guarantees
            ethical sourcing, quality control & accountability at every
            step, building trust with our partners and end consumers.
          </p>
        </div>
        <div class="right_desc">
          <p>We partner with world leaders in traceability</p>
          <ul>
            <li>FibreTrace</li>
            <li>Cotton Made in Africa (CMIA)</li>
            <li>Global Organic Textile Standard (GOTS)</li>
            <li>
              Blockchain technology enables us to track every stage of
              production, ensuring a reliable attribution of the carbon
              footprint across the supply chain
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div
    class="image-wrapper"
    style=" top: 0; left: 0; transform: none">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/backTrace.jpg'; ?>" alt="Image 1" />
    <div class="traceability_content">
      <div class="heading">
        <h2>Traceability Third</h2>
      </div>
      <div class="description">
        <div>
          <p>
            We ensure full traceability across our supply chain from raw
            materials to finished garments. This transparency guarantees
            ethical sourcing, quality control & accountability at every
            step, building trust with our partners and end consumers.
          </p>
        </div>
        <div class="right_desc">
          <p>We partner with world leaders in traceability</p>
          <ul>
            <li>FibreTrace</li>
            <li>Cotton Made in Africa (CMIA)</li>
            <li>Global Organic Textile Standard (GOTS)</li>
            <li>
              Blockchain technology enables us to track every stage of
              production, ensuring a reliable attribution of the carbon
              footprint across the supply chain
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="certificates_compliances">
  <div class="heading" animateHeading>
    <p>CERTIFICATIONS & COMPLIANCE</p>
    <h2>Compliance You Can Trust</h2>
  </div>
  <div class="cc_container">
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ISO.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">IMS:ISO 9001/45001/ 14001</h3>
        <p>For effective environmental management system</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/cotton_made_in_africa.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Cotton Made in Africa (CMiA)</h3>
        <p>For sustainable cotton from Africa</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/leed.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">LEED (Leadership in Energy and Environmental Design)</h3>
        <p>For healthy, efficient, and cost-saving green buildings</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/wrap.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Worldwide Responsible Accredited Production (WRAP)</h3>
        <p>For Compliance with Laws and Workplace Regulations</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/oekotex.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">OekoTex Certification</h3>
        <p>For testing harmful chemicals / substances in the product</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ctpat.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">CTPAT (Customs Trade Partnership Against Terrorism)</h3>
        <p>For highest level of cargo security for shipping to USA</p>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('components/clients'); ?>

<?php
get_footer();

?>