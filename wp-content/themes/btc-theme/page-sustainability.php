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
    <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / Sustainability</p>
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

<!-- <section class="traceability traceability2">
  <div
    class="image-wrapper"
    >
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
    >
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
    >
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
</section> -->
<section id="traceability">
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(01)</span>Access To Local Cotton</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>We begin by sourcing rain-fed, non-GMO CmiA-certified cotton (Cotton made in Africa) directly from trusted, sustainable farms. This guarantees high-quality, traceable, and eco-friendly cotton. </p>
                        </div>
                        <p class="count">(01)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">The cotton is carefully cultivated, picked, and prepared for further processing</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Ethical sourcing practices ensure fair labor and environmental responsibility</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Gossypium_sp_MS4007.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(02)</span>High-Performance Spinning</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Our raw cotton is spun into high-quality yarn at our in-house spinning facilities. This step converts raw cotton fibers into threads, making them ready for the next stages.</p>
                        </div>
                        <p class="count">(02)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">Advanced spinning machines provide consistency in thread quality and strength</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">The yarn is designed to maintain its integrity for durability and softness, which is crucial for the longevity of the final garment</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Spinning-25.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(03)</span>Knitting with Precision</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>The spun yarn is knitted into fabric at our facilities. We offer various fabric types (e.g., cotton knits, fabrics) depending on the garment style</p>
                        </div>
                        <p class="count">(03)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">High-tech looms and knitting machines enable us to create fabrics with intricate patterns and optimal texture</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Our knitting processes result in breathable, high-quality textiles suitable for a variety of garment types</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Knitting-05.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(03)</span>Knitting with Precision</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>The spun yarn is knitted into fabric at our facilities. We offer various fabric types (e.g., cotton knits, fabrics) depending on the garment style</p>
                        </div>
                        <p class="count">(03)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">High-tech looms and knitting machines enable us to create fabrics with intricate patterns and optimal texture</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Our knitting processes result in breathable, high-quality textiles suitable for a variety of garment types</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Knitting-05.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(05)</span> Garment Manufacturing</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>After dyeing, fabric is precision-cut and expertly stitched, with all elements - seams, zippers and buttons are assembled to create the final garment.</p>
                        </div>
                        <p class="count">(05)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">Automated stitching machines, along with expert seamstresses, ensure precise construction and high-quality finishing</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Customizations like embroidery, screen printing, and other design details are added in this stage</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/SHOOTING-OUVRIERS-GTC.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- <div class="scroll-trigger"></div>
<div class="scroll-trigger"></div>
<div class="scroll-trigger"></div>
<div class="scroll-trigger"></div> -->
<section id="certificates_compliances">
  <div class="heading" animateHeading>
    <p>CERTIFICATIONS & COMPLIANCE</p>
    <h2>Compliance You Can Trust</h2>
  </div>
  <div class="cc_container">
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ISO.png" ?>" alt="ISO Certificate">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">IMS:ISO 9001/45001/ 14001</h3>
        <p>For effective environmental management system.</p>
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
        <p>For Compliance with Laws and Workplace Regulations. Freedom of Association and Collective Bargaining</p>
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