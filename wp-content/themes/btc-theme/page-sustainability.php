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
       <p><?php the_title(); ?></p>
      <?php the_content(); ?>
    </div>
    <div class="layer"></div>
    <div class="layer2"></div>
  </div>
</section>
<section id="sustainability_details">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt=""  btcPattern />
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
<div id="progress_indication" class="progress-dots"></div>
<section id="traceability">
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(01)</span>Rooted in Africa</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Local Cotton. Local Value.</strong></p>
                        </div>
                        <p class="count">(01)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Process</p> -->
                            <p class="subCopy"><strong>Source with Intention:</strong> Our journey begins with responsibly grown cotton cultivated, harvested and ginned entirely within Africa, close to our manufacturing hubs.</p>
                            <p class="subCopy"><strong>Empowering Communities:</strong> We partner directly with local generies and cooperatives, supporting income stability and agricultural resilience in rural economies.</p>
                            <p class="subCopy"><strong>Reducing Carbon Footprint:</strong> Proximity eliminates the need for global freight, dramatically reducing transport emissions (CO<sub style="font-size: 14px;">2</sub>) at the raw material stage.</p>
                            <p class="subCopy"><strong>Enabling True Traceability:</strong> Full visibility from seed to finished garment ensures greater accountability, ethical compliance, and environmental impact transparency.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Ethical sourcing practices ensure fair labor and environmental responsibility</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/sustain_cotton.webp'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(02)</span>Smarter Spinning</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Less Waste. More Longevity.</strong></p>
                        </div>
                        <p class="count">(02)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="subCopy"><strong>Engineered for Efficiency:</strong> Our automated spinning lines extract maximum value from every fiber, using intelligent settings to reduce breakage and loss.</p>
                            <p class="subCopy"><strong>Energy-Optimized Operations:</strong> We invest in low-energy spindle technology that reduces power consumption without compromising performance.</p>
                            <p class="subCopy"><strong>Stronger, Smarter Yarns:</strong> The result is premium-strength yarns with fewer defects and longer lifecycle potential.</p>
                            <p class="subCopy"><strong>Built to Last:</strong> Longer-lasting textiles mean reduced frequency of replacement lowering resource use across the value chain.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">The yarn is designed to maintain its integrity for durability and softness, which is crucial for the longevity of the final garment</p>
                        </div> -->
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
                <h3><span>(03)</span>Precision Knitting, Reduced Waste</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Every Loop Matters.</strong></p>
                        </div>
                        <p class="count">(03)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Technology Used</p> -->
                            <p class="subCopy"><strong>Technology-Driven Accuracy:</strong> Our circular knitting machines are calibrated to maintain uniform tension and loop formation, minimizing production inconsistencies.</p>
                            <p class="subCopy"><strong>Fewer Defects, Less Waste:</strong> Precision knitting leads to significantly fewer offcuts, reducing raw material wastage at the fabric stage.</p>
                            <p class="subCopy"><strong>Controlled Production Runs:</strong> Advanced monitoring ensures repeatable quality across batches streamlining both planning and output.</p>
                            <p class="subCopy"><strong>Performance with Purpose:</strong> Each metre of fabric is optimized to deliver aesthetic and structural consistency with minimal environmental toll.</p>
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
                <h3><span>(04)</span>Low-Impact Dyeing</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Cleaner Color. Greener Process.</strong></p>
                        </div>
                        <p class="count">(04)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Technology Used</p> -->
                            <p class="subCopy"><strong>Water-Efficient Systems:</strong> We use low-liquor ratio dyeing machines that reduce freshwater consumption by up to 50% compared to conventional methods.</p>
                            <p class="subCopy"><strong>Enzyme-Based Finishing:</strong> Softening and performance enhancement are done using enzyme treatments instead of harsh chemical alternatives.</p>
                            <p class="subCopy"><strong>Lower Emissions, Cleaner Output:</strong> Advanced effluent treatment and process optimization significantly cut down on emissions and chemical discharge.</p>
                            <p class="subCopy"><strong>Color That Cares:</strong> The final result is vibrantly dyed fabric that meets global standards without burdening the environment.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Our knitting processes result in breathable, high-quality textiles suitable for a variety of garment types</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/dyeing.webp'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(05)</span> Sustainable by Structure</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>A Fully Vertical, Fully Conscious Supply Chain.</strong></p>
                        </div>
                        <p class="count">(05)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Technology Used</p> -->
                            <p class="subCopy"><strong>End-to-End Visibility:</strong> With spinning, knitting, dyeing, and garmenting housed within the same ecosystem, every step is monitored and optimized for sustainability.</p>
                            <p class="subCopy"><strong>Minimal Transport Emissions:</strong> Internal logistics replace long-distance transport, eliminating avoidable carbon output.</p>
                            <p class="subCopy"><strong>Less Handling, Less Waste:</strong> Fewer interdependencies mean reduced material damage and lower packaging requirements between stages.</p>
                            <p class="subCopy"><strong>Speed with Responsibility:</strong> Our vertical model accelerates delivery timelines while upholding environmental commitments across the board.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Customizations like embroidery, screen printing, and other design details are added in this stage</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Quality-control.jpg'; ?>" alt="">
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
        <h3 class="certificate_title">IMS:ISO 9001&#8203;/45001&#8203;/14001</h3>
        <p>For effective environmental management system</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/cotton_made_in_africa.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Cotton Made in Africa (CmiA)</h3>
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
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/bsci.png" ?>" alt="bsci">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">BSCI (Business Social Compliance Initiative)</h3>
        <p>For meeting global ethical sourcing standards</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/higgindex.png" ?>" alt="higgindex">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Higg Index Certification</h3>
        <p>Sustainable performance benchmarking</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/smeta.png" ?>" alt="smeta">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">SMETA (Sedex Members Ethical Trade Audit)</h3>
        <p>Ethical labor & trade compliance</p>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('components/clients'); ?>

<?php
get_footer();

?>