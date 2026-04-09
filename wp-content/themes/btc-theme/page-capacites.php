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
          echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '" fetchpriority="high" loading="eager" decoding="async">';
        }
        ?>
      </div>
      <?php if (get_field('slider_2')): ?> 
        <div class='swiper-slide'>
          <?php          
            echo '<img data-src="' . esc_url(get_field('slider_2')) . '" alt="' . esc_attr($alt_text) . '" loading="lazy" decoding="async">';
          ?>
        </div>
      <?php endif; ?>
      <?php if (get_field('slider_3')): ?> 
        <div class='swiper-slide'>
          <?php          
            echo '<img data-src="' . esc_url(get_field('slider_3')) . '" alt="' . esc_attr($alt_text) . '" loading="lazy" decoding="async">';
          ?>
        </div>
      <?php endif; ?>
      <?php if (get_field('slider_4')): ?> 
        <div class='swiper-slide'>
          <?php          
            echo '<img data-src="' . esc_url(get_field('slider_4')) . '" alt="' . esc_attr($alt_text) . '" loading="lazy" decoding="async">';
          ?>
        </div>
      <?php endif; ?>
    </div>
     
  </div>


  <div class="content">
    <p class="breadcrub"><a href="/btc/fr/">Accueil </a> / Capacités</p>
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
  <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt=""  btcPattern/>
  <div class="heading" animateHeading>
    <h2>Intégration Verticale</h2>
    <p>
    BTC combine une technologie de pointe avec des pratiques durables, garantissant que chaque produit est fabriqué avec soin, précision et responsabilité environnementale.
    </p>
  </div>
  <div class="cards_wrapper">
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/sec.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/first_icon.png'; ?>" alt="" />
          </div>
          <h3 class="title">Filature</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>32 832</span> <br />
            Broches de Haute <br>Performance
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/reter.png'; ?>" alt="reter" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/first.jpg'; ?>" alt="first" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/knitting.png'; ?>" alt="knitting" />
          </div>
          <h3 class="title">Tricot</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>83</span> <br />
            Machines à <br>Tricoter et à Col
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
              <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/shima-seiki-logo.png'; ?>" alt="shima-seiki-logo" />
              <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/terrot.png'; ?>" alt="terrot" />
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
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/Dyeing.png'; ?>" alt="Dyeing" />
          </div>
          <h3 class="title">Teinture</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>14</span> <br />
            Machines <br>de Teinture
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
            <img loading="lazy"  src="<?php echo get_template_directory_uri() . '/assets/images/verticle/thiess.png'; ?>" alt="thiess" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/finishing_section.jpg'; ?>" alt="dyeing_machines" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/finishing.png'; ?>" alt="finishing" />
          </div>
          <h3 class="title">Finition </h3>
        </div>
        <div class="card_body">
          <h3>
            <span>11</span> <br />
            Machines <br>de Finition
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
              <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/brucknerlogo.png'; ?>" alt="" />
              <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/lafer.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/printing_section.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/gear.png'; ?>" alt="" />
          </div>
          <h3 class="title">Impression</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>03</span> <br />Machines <br> d'Impression
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
              <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/roq-newn.png'; ?>" alt="" />
              <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/impress.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/embroidery.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/embroidery_clock.png'; ?>" alt="" />
          </div>
          <h3 class="title">Broderie</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>9 Aiguilles <br> 18 Tête </span> <br />
            2 Machines <br>Informatisées
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/barudan.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/stitching.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/stitching_machine.png'; ?>" alt="" />
          </div>
          <h3 class="title">Couture</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>1 400</span> <br />
            Machines <br>à Coudre
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/juki.png'; ?>" alt="" />
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/pegasus.png'; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/laundry_machine.jpg'; ?>" alt="" />
      <div class="card_info">
        <div class="card_head">
          <div class="icon">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/laundry_icon.png'; ?>" alt="" />
          </div>
          <h3 class="title">Blanchisserie</h3>
        </div>
        <div class="card_body">
          <h3>
            <span>17</span> <br />
            Machines <br>à Laver
          </h3>
          <div class="card_desc double">
            <p>Partenaire pour les Machines</p>
            <div>
            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/ramsons.png'; ?>" alt="" />
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
        <h2>Durabilité</h2>
      </div>
      <p>
      Nous intégrons des pratiques durables à chaque étape, réduisant ainsi notre empreinte carbone et nos déchets.
      </p>
      <ul>
        <li>Coton local certifié CmiA pour un approvisionnement respectueux de l'environnement.</li>
        <li>Zero Liquid Discharge (ZLD) pour le recyclage de l'eau.</li>
        <li>Énergie propre et Confection à faible impact.</li>
      </ul>
    </div>
    <div class="image_wrapper">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/cotton.webp'; ?>" alt="" />
    </div>
  </div>
  <div class="technology_and_innovation">
    <div class="heading" animateHeading>
      <h2>Technologie et Innovation</h2>
    </div>
    <div class="tai_container">
      <div class="static">
        <div>
          <h3> Capacité de Production de <span class="js-countup" data-target="2400" data-duration="1600">2400</span> Machines</h3>
          <p>avec 1400 Machines <br> à coudre x 2 équipe</p>
        </div>
        <div>
          <h3><span class="js-countup" data-target="11.4" data-decimals="1" data-duration="1600">11.4</span> Ha</h3>
          <p>Surface de l’unité de <br> Tricotage Intégrée Verticalement</p>
        </div>
        <div>
          <h3><span class="js-countup" data-target="9000" data-duration="1600">9000</span> Tons</h3>
          <p>de production de  <br>Tricot par an</p>
        </div>
        <div>
          <h3><span class="js-countup" data-target="24" data-duration="1600">24</span> Millions </h3>
          <p>de vêtements <br> par an </p>
        </div>
      </div>
      <div class="dynamic_desc">
        <p>
        Grâce à une technologie de pointe, nous assurons une production rapide, fiable et respectueuse de l'environnement.
        </p>
        <ul>
          <li>Technologie blockchain pour une traçabilité de bout en bout.</li>
          <li>Machines avancées pour la précision et la vitesse.</li>
          <li>Conception et échantillonnage automatisés (capacités 3D).</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="logistics_shipping_efficiency">
  <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" btcPattern />

  <div class="logistics_shipping_efficiency_head">
    <div class="heading" animateHeading>
      <h2>Efficacité de la Logistique & de l'Expédition</h2>
      <p style="font-weight: 300; text-transform: none">
      Stratégiquement situé en Afrique de l'Ouest, notre proximité avec les principaux marchés garantit une livraison rapide.
      </p>
    </div>
  </div>
  <div class="logistics_shipping_efficiency_container">
    <div class="category_item first">
      <h2>Aéroport</h2>
      <div class="category_image">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/airport.webp'; ?>" alt="" />
      </div>
      <p class="category_description">
      Nous offrons une connectivité aérienne directe vers des destinations clés aux États-Unis et dans l'Union Européenne, garantissant une logistique transparente et des délais de transit réduits.
      </p>
    </div>
    <div class="category_item second">
      <h2>Port Maritime</h2>
      <div class="category_image">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/sea_port.jpg'; ?>" alt="" />
      </div>
      <p class="category_description">
      Située à seulement 40 km du port maritime, notre installation garantit que les marchandises atteignent le port en 30 minutes pour une expédition mondiale plus rapide.
      </p>
    </div>
    <div class="category_item third">
      <h2>Port Sec</h2>
      <div class="category_image">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/verticle/dry_port.jpg'; ?>" alt="" />
      </div>
      <p class="category_description">
      Port sec à l'intérieur de la zone où le dédouanement a lieu, sans tracas.
      </p>
    </div>
    <!-- <div class="swiper-pagination"></div> -->
  </div>
</section>

<?php
get_footer();

?>