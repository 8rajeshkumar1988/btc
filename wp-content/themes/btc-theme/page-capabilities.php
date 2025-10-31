<?php

get_header();

?>
<section class="heroBanner capabilities">
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
  ?>

  <div class='swiper capabilitySwiper'>
    <div class='swiper-wrapper'>
      <div class='swiper-slide'>
        <?php
        if ($banner_video) {
          echo '<video playsinline autoplay muted loop poster="' . esc_url($image_url) . '" src="' . esc_url($banner_video['url']) . '"></video>';
        } elseif (has_post_thumbnail()) {
          echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        }
        ?>
      </div>
      <?php if (get_field('slider_2')): ?> 
        <div class='swiper-slide'>
          <?php          
            echo '<img src="' . esc_url(get_field('slider_2')) . '" alt="' . esc_attr($alt_text) . '">';
          ?>
        </div>
      <?php endif; ?>
      <?php if (get_field('slider_3')): ?> 
        <div class='swiper-slide'>
          <?php          
            echo '<img src="' . esc_url(get_field('slider_3')) . '" alt="' . esc_attr($alt_text) . '">';
          ?>
        </div>
      <?php endif; ?>
      <?php if (get_field('slider_4')): ?> 
        <div class='swiper-slide'>
          <?php          
            echo '<img src="' . esc_url(get_field('slider_4')) . '" alt="' . esc_attr($alt_text) . '">';
          ?>
        </div>
      <?php endif; ?>
    </div>
     
  </div>


  <div class="content">
    <p class="breadcrub"><a href="<?php echo site_url(HOME_PAGE) ?>">Home</a> / Capabilities</p>
    <div class="heading" animateHeadingBanner>
      <p><?php the_title(); ?></p>
      <?php the_content(); ?>
    </div>
    <div class="layer"></div>
    <div class="layer2"></div>
     <div class="swiper-pagination_capabilities"></div>
  </div>
</section>

<section id="vertical_integration">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt=""  btcPattern/>
  <div class="heading" animateHeading>
    <h2>Vertical Integration</h2>
    <p>
      BTC combines state-of-the-art technology with sustainable practices,
      ensuring every product is crafted with care, precision and
      environmental responsibility.
    </p>
  </div>
  <div class="cards_wrapper">
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/sec.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/first_icon.png'; ?>" alt="" />
          </div>
          <h3 class="title">Spinning</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>32,832</span> <br />
            High-Performance <br> Spindles
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/reter.png'; ?>" alt="reter" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/first.jpg'; ?>" alt="first" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/knitting.png'; ?>" alt="knitting" />
          </div>
          <h3 class="title">Knitting</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>83</span> <br />
            Knitting & Collar <br> Machines
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/shima-seiki-logo.png'; ?>" alt="shima-seiki-logo" />
              <img src="<?php echo get_template_directory_uri() . '/assets/images/terrot.png'; ?>" alt="terrot" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/dyeing_machines.jpg'; ?>" alt="dyeing_machines" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/Dyeing.png'; ?>" alt="Dyeing" />
          </div>
          <h3 class="title">Dyeing</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>14</span> <br />
            Dyeing <br> Machines
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/thiess.png'; ?>" alt="thiess" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/finishing_section.jpg'; ?>" alt="dyeing_machines" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/finishing.png'; ?>" alt="finishing" />
          </div>
          <h3 class="title">Finishing </h3>
        </div>
        <div class="card_body">
          <h3>
            <span>11</span> <br />
            Finishing  <br> Machines
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/brucknerlogo.png'; ?>" alt="" />
              <img src="<?php echo get_template_directory_uri() . '/assets/images/lafer.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/printing_section.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/gear.png'; ?>" alt="" />
          </div>
          <h3 class="title">Printing</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>03</span> <br />Printing <br> Machines
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/roq-newn.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/embroidery.png'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/embroidery_clock.png'; ?>" alt="" />
          </div>
          <h3 class="title">Embroidery</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>9 Needle <br> 18 Head </span> <br />
            Computerized <br> Machine
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/barudan.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/stitching.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/stitching_machine.png'; ?>" alt="" />
          </div>
          <h3 class="title">Stitching</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>1,400</span> <br />
            Stitching <br> Machines
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/juki.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/laundry.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/laundry_icon.png'; ?>" alt="" />
          </div>
          <h3 class="title">Laundry</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>16</span> <br />
            Laundry <br> Machines
          </h3>
          <div class="card_desc double">
            <p>Machinery Partner</p>
            <div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/ramsons.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sustainability_details">
  <div class="sustainability_info">
    <div class="leftt">
      <div class="heading">
        <h2>Sustainability</h2>
      </div>
      <p>
        We integrate sustainable practices at every step, reducing our
        carbon footprint and waste.
      </p>
      <ul>
        <li>CMIA certified local cotton for eco-friendly sourcing.</li>
        <li>Zero Liquid Discharge (ZLD) technology for water recycling.</li>
        <li>Clean energy and eco-conscious manufacturing processes.</li>
      </ul>
    </div>
    <div class="image_wrapper">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/cotton.jpg'; ?>" alt="" />
    </div>
  </div>
  <div class="technology_and_innovation">
    <div class="heading" animateHeading>
      <h2>Technology and Innovation</h2>
    </div>
    <div class="tai_container">
      <div class="static">
        <div>
          <h3>2400 machine capacity</h3>
          <p>Production with 1400 Stitching <br> machines x 2 shifts</p>
        </div>
        <div>
          <h3>11.4 Ha</h3>
          <p>Vertically Integrated <br>Knitting unit area</p>
        </div>
        <div>
          <h3>9000 Tons</h3>
          <p>Knit fabric production <br>annually</p>
        </div>
        <div>
          <h3>24 Mn</h3>
          <p>Pieces of apparel <br> per annum</p>
        </div>
      </div>
      <div class="dynamic_desc">
        <p>
          Using cutting-edge technology, we ensure fast, reliable and
          eco-friendly production.
        </p>
        <ul>
          <li>Blockchain technology for end-to-end traceability.</li>
          <li>Advanced machinery for precision and speed.</li>
          <li>Automated design and sampling (3D capabilities).</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="logistics_shipping_efficiency">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" btcPattern />

  <div class="logistics_shipping_efficiency_head">
    <div class="heading" animateHeading>
      <h2>Logistics & Shipping Efficiency</h2>
      <p style="font-weight: 300; text-transform: none">
        Strategically located in West Africa, our proximity to 
        major markets ensures timely delivery.
      </p>
    </div>
  </div>
  <div class="logistics_shipping_efficiency_container">
    <div class="category_item first">
      <h2>Airport</h2>
      <div class="category_image">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/airport.jpg'; ?>" alt="" />
      </div>
      <p class="category_description">
        We offer direct air connectivity to key destinations across
        <span>the USA and the European Union,</span> ensuring seamless
        logistics and reduced transit times.
      </p>
    </div>
    <div class="category_item second">
      <h2>Sea Port</h2>
      <div class="category_image">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/sea_port.jpg'; ?>" alt="" />
      </div>
      <p class="category_description">
       Located just 40 km from the seaport, our facility ensures goods reach the port within 30 minutes for faster global dispatch.
      </p>
    </div>
    <div class="category_item third">
      <h2>Dry Port</h2>
      <div class="category_image">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/verticle/dry_port.jpg'; ?>" alt="" />
      </div>
      <p class="category_description">
       Dry Port inside the zone where custom clearance happens, without hassles.
      </p>
    </div>
    <!-- <div class="swiper-pagination"></div> -->
  </div>
</section>

<?php
get_footer();

?>