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


    if ($banner_video && !empty($banner_video['url'])) {
        $video_src = esc_url($banner_video['url']);
        echo '<video class="aboutHeroVideo js-lazy-about-hero-video" playsinline muted loop autoplay preload="none" poster="' . esc_url($image_url) . '" data-src="' . $video_src . '"></video>';
    } else  if (has_post_thumbnail()) {
        $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>



    <div class="content">
        <p class="breadcrub"><a href="<?php echo site_url(HOME_PAGE) ?>">Home</a> / About Us</p>
        <div class="heading" animateHeadingBanner>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>
<section id="about_btc">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" btcPattern />
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" btcPattern />

    <div class="about_btc_head">
        <div class="heading" animateHeading>
            <p>À propos de BTC</p>
            <h2>
            Offrir Agilité,  <br />
            Qualité et Durabilité.
            </h2>
        </div>
    </div>
    <div class="about_btc_container">
        <div class="swiper about_btc">
            <div class="swiper-wrapper">
                <div class="swiper-slide category_item" animateHeading>
                    <div class="category_image">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/home/bTC_Gate_.webp"  ?>" alt="" />
                    </div>
                    <p class="category_description" >
                    BTC, située au Bénin, est la première usine d'Afrique de l'Ouest entièrement intégrée verticalement, transformant du coton local nourripar la pluie, sans OGM certifié CmiA en vêtements haut de gamme largement reconnu et approuvé par les associations d'égrenage et les acteurs de l'industrie.
                    </p>
                </div>
                <div class="swiper-slide category_item" animateHeading>
                    <div class="category_image">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/cottonbails.webp" ?>" alt="" />
                    </div>
                    <p class="category_description">
                    En plus du coton local certifié CmiA, nous travaillons également avec du coton biologique, du coton régénératif et d'autres types de coton durables. De la filature au vêtement, nous garantissons la qualité, l'efficacité et la durabilité à chaque étape.
                    </p>
                </div>
                <div class="swiper-slide category_item" animateHeading>
                    <div class="category_image">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/about-sec-3.webp"  ?>" alt="" />
                    </div>
                    <p class="category_description">
                    Nous produisons des fils, des tissus et des vêtements de haute qualité, y compris des T-shirts, des polos, des sweats à capuche, etc. Nos procédés respectueux de l'environnement, tels que la teinture des fils, l'impression et la broderie, combinent une technologie de pointe.
                    </p>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
    <div class="about_btc_button_container">
        <div class="about_btc_buttons">
            <button class="about_btc-prev globalNavigation navBtnColor">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow " />
            </button>
            <button class="about_btc-next globalNavigation navBtnColor">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow " />
            </button>
        </div>
    </div>
</section>
<section id="vision_mission">
    <div class="vision_mission_container videoC">
        <video
            class="js-lazy-vision-mission-video"
            loop
            muted
            playsinline
            preload="none"
            poster="<?php echo get_template_directory_uri() . "/assets/images/home/bTC_Gate_.jpg"; ?>">
            <source
                type="video/mp4"
                data-src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/vision_video.webm"); ?>">
        </video>

    </div>
    <div class="vision_mission_container text" animateHeading>
        <h2>Vision</h2>
        <p>
        Diriger la transformation textile de l'Afrique en faisant œuvre de pionnier dans la confection de vêtements durables, traçables et performants, en établissant de nouvelles normes mondiales en matière de qualité et de responsabilité environnementale.
        </p>
    </div>
    <div class="vision_mission_container videoC">     
        <!-- <video autoplay loop muted playsinline poster="<?php echo get_template_directory_uri() . "/assets/images/mission_banner.webp"  ?>">
            <source src="<?php echo get_template_directory_uri() . "/assets/images/mission.mp4"  ?>" >
        </video>    -->
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/mission_img.webp"  ?>" alt="">
    </div>
    <div class="vision_mission_container text" animateHeading>
        <h2>Mission</h2>
        <p>
        Chez BTC, nous façonnons l'avenir des textiles en intégrant durabilité, innovation et efficacité. Du coton local certifié CmiA aux vêtements haut de gamme, nous proposons des vêtements éthiques de haute qualité qui répondent à la demande mondiale tout en responsabilisant les communautés et en réduisant l'empreinte carbone.
        </p>
    </div>
</section>


<?php

$leaderships = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'leadership',
    'orderby' => 'title',
    'post_status'    => 'publish',
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',

));
if ($leaderships->have_posts()) {
?>
    <section id="our_leadership">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt=""  btcPattern />
        <div class="heading" animateHeading>
            <p>Our Leadership</p>
            <h2>Visionaries Shaping the Future</h2>
        </div>
        <div class="our_leadership_container">

            <?php while ($leaderships->have_posts()) {
                $leaderships->the_post(); ?>
                <div class="leader_card">
                    <div class="leader_image">
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

                        $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        echo $image;

                        ?>
                       
                    </div>
                    <div class="leader_detail" >
                        <div style="display: flex;gap: 10px;align-items: center;">
                            <h2 class="leader_title"><?php the_title(); ?> </h2><span style="transform: rotate(45deg);font-size: var(--font-24);color: var(--green); margin-right:auto;">↑</span> 
                             <?php if (get_field('linkedin_profile')): ?>
                                <a href="<?php the_field('linkedin_profile'); ?>" target="_blank" rel="noopener">
                                    <img class='linkedin_icon' src="<?php echo get_template_directory_uri(); ?>/assets/images/linked.png" alt="linkedin" />
                                </a>
                            <?php endif; ?>
                        </div>

                        <p class="leader_description">
                            <?php echo get_field('jobtitle'); ?>
                            
                            <?php if (get_field('linkedin_profile')): ?>
                                <a class="linkedin_icon_name" href="<?php the_field('linkedin_profile'); ?>" target="_blank" rel="noopener">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin_blue.png" alt="linkedin" />
                                </a>
                            <?php endif; ?>
                        </p>

                        <div  class="leader_bio" ><?php the_content(); ?></div>
                    </div>
                </div>
            <?php
            }

            wp_reset_postdata();
            ?>


        </div>
    </section>
<?php }
?>
<section id="product_page_details">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png" ?>" alt=""  btcPattern />
    <div class="heading" animateHeading>
        <p>Nos Actionnaires</p>
        <h2>
        Favoriser Le <br> Progrès Grâce À Des <br> Partenariats Digne De Confiance
        </h2>
    </div>
    <div class="shareholder_logos">
        <div class="left">
            <div class="logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/arise_logo.png" ?>" alt="" />
            </div>
            <div class="logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/LCB.webp" ?>" alt="" />
            </div>
            <div class="logo">
                <img loading="lazy" 
                    src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/caisse_de_dpots_et_consignations_du_benin_cover.png" ?>"
                    alt="" />
            </div>
        </div>
        <div class="right">
            <div class="logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/SBTCLOGONEW.png" ?>" alt="" />
            </div>
            <div class="logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/SODECO.png" ?>" alt="" />
            </div>
            <!-- <div class="logo">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/Logo_Cotton-made-in-africa.png" ?>" alt="" />
            </div> -->
        </div>
    </div>
</section>
<!-- <section id="arise_details">
    <div class="heading" animateHeading>
        <h2>Powered By</h2>
    </div>
    <div class="arise_container">
        <div class="logo_container" animateHeading>
            <img src="<?php echo get_template_directory_uri() . "/assets/images/arise_logo.png" ?>" alt="" />
        </div>
        <div class="description" animateHeading>
            <p>
                BTC is part of <strong>Arise IIP</strong>, a pan-African industrial
                platform with interests in wood, cashew, soya, cocoa processing,
                garment manufacturing, and electric vehicle production.
            </p>
            <p>
                The group focuses on value addition through industrialization of
                Africa's raw commodities
            </p>
            <p>
                In
                <strong>Benin's GDIZ (Glo Djigbé Industrial Zone),</strong> Arise's
                textile initiative aims to convert locally grown cotton into
                finished textiles and garments.
            </p>           
        </div>
    </div>
</section> -->
<section id="our_impact">
    <div class="heading" animateHeading>
        <p>Notre Impact</p>
        <h2>
        Faire la Différence, <br />
        Nœud par Noeud
        </h2>
    </div>

    <div class="our_impact_container">
        <!-- PARTNERS -->
        <div data-section="partners" class="impact_wrapper bg-partners ">
            <div class="overlay"></div>
            <div class="impact_wrapper_head">
                <h2>PARTENAIRES</h2>
                <button class="open-btn globalNavigation">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
            </div>
            <div class="content">
                <div class="content-details">
                    <div class="content-detail">
                        <div>
                            <h2>Plus de 200</h2>
                            <p>Partenaires locaux et régionaux engagés dans l'approvisionnement en coton, la logistique et les services</p>
                        </div>
                        <div>
                            <h2>Plus de 10</h2>
                            <p>Partenariats stratégiques avec des marques mondiales de vêtements pour un approvisionnement durable</p>
                        </div>
                    </div>
                    <ul>
                        <li>Programmes de transfert de connaissances avec des partenaires techniques internationaux</li>
                        <li>Une croissance inclusive grâce à des contrats à long terme avec des coopératives agricoles</li>
                        <li>Partnership with government and NGOs to boost textile ecosystem development</li>
                    </ul>
                </div>
                <div class="content-btn">
                    <button class="cta leadpopup">
                    Contactez-nous <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                    </button>
                </div>
            </div>
        </div>
        <!-- PEOPLE -->
        <div data-section="people" class="impact_wrapper bg-people open ">
            <div class="overlay"></div>
            <div class="impact_wrapper_head">
                <h2>PERSONNES</h2>
                <button class="open-btn globalNavigation">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
            </div>
            <div class="content">
                <div class="content-details">
                    <div class="content-detail">
                        <div>
                            <h2>3 306</h2>
                            <p>Les ressortissants béninois seront directement employés pendant les deux quarts de travail
                            </p>
                        </div>
                        <div>
                            <h2>3 306 – 5 000</h2>
                            <p>Création d'emplois indirects dans l'approvisionnement et les services</p>
                        </div>
                    </div>
                    <ul>
                        <li>Compétence de la main-d'œuvre locale à vie grâce au GTC</li>
                        <li>Développement Entrepreneurial local grâce au programme EDS</li>
                        <li>
                        L'éco - système de la chaîne d'approvisionnement verticale doit s'adresser aux autres fabricants de vêtements de la région
                        </li>
                    </ul>
                </div>
                <div class="content-btn">
                    <button class="cta leadpopup">
                    Contactez-nous <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                    </button>
                </div>
            </div>
        </div>
        <!-- PLANET -->
        <div data-section="planet" class="impact_wrapper bg-planet">
            <div class="overlay"></div>
            <div class="impact_wrapper_head">
                <h2>PLANÈTE</h2>
                <button class="open-btn globalNavigation">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
            </div>
            <div class="content">
                <div class="content-details">
                    <div class="content-detail">
                        <div>
                            <!-- <h2>7000</h2> -->
                            <p>Nous réduisons les émissions et les déchets grâce à un approvisionnement durable et à une production propre.</p>
                        </div>
                        <!-- <div>
                            <h2>7000-8000</h2>
                            <p>Driving indirect jobs across supply and services</p>
                        </div> -->
                    </div>
                    <ul>
                        <li>CmiA-certified local cotton for eco-friendly sourcing</li>
                        <li>Zero Liquid Discharge (ZLD) pour le recyclage de l'eau</li>
                        <li>Énergie propre et Confection à faible impact</li>
                    </ul>
                </div>
                <div class="content-btn">
                    <button class="cta leadpopup">
                    Contactez-nous <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="certificates_compliances">
    <div class="heading" animateHeading>
        <p>CERTIFICATIONS ET CONFORMITÉ</p>
        <h2>Une Conformité En Laquelle Vous Pouvez Avoir Confiance</h2>
    </div>
    <div class="cc_container">
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ISO.webp" ?>" alt="">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">IMS : ISO 9001/45001/14001</h3>
                <p>Pour un système de gestion environnementale efficace</p>
            </div>
        </div>
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/cotton_made_in_africa.webp" ?>" alt="">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">Coton fabriqué en Afrique (CmiA)</h3>
                <p>Pour un coton durable d'Afrique</p>
            </div>
        </div>
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/leed.webp" ?>" alt="">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">LEED (Leadership en Conception Énergétique et Environnementale)</h3>
                <p>Pour des bâtiments écologiques sains, efficaces et économiques</p>
            </div>
        </div>
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/wrap.webp" ?>" alt="">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">Production Mondiale Accréditée Responsable (WRAP)</h3>
                <p>Pour la conformité aux Lois et Réglementations sur le Lieu de Travail</p>
            </div>
        </div>
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/oekotex.webp" ?>" alt="">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">Certification OeKoTex</h3>
                <p>Pour tester les produits chimiques / substances nocifs dans le produit</p>
            </div>
        </div>
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ctpat.webp" ?>" alt="">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">CTPAT (Partenariat Commercial Douanier Contre le Terrorisme)</h3>
                <p>Pour le plus haut niveau de sécurité du fret pour l'expédition aux États-Unis</p>
            </div>
        </div>
        <div class="certificate_card">
            <div class="certificate_logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/bsci.webp" ?>" alt="bsci">
            </div>
            <div class="certificate_description">
                <h3 class="certificate_title">BSCI (Initiative de Conformité Sociale des Entreprises)</h3>
                <p>Pour répondre aux normes mondiales en matière d'approvisionnement éthique</p>
            </div>
        </div>
        <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/higgindex.webp" ?>" alt="higgindex">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Certification de l'Indice de Higg</h3>
        <p>Analyse comparative des performances durables</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/smeta.webp" ?>" alt="smeta">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">SMETA (Audit du Commerce Éthique des Membres Sedex)</h3>
        <p>Conformité éthique du travail et du commerce</p>
      </div>
    </div>
    </div>
</section>
<div id="popup"  class="hidden">
    <!-- Close button -->
    
    <div class="pop_container">
        <button id="closeBtn">✕</button>
    <img id="popupImg" src="" />
    <div class="pop_content" data-lenis-prevent>
        <h2 id="popupHeading"></h2>
        <div style="display: flex;gap: 10px;align-items: center;">
            <p id="popupPara"></p>
            <!-- <a class="linkedin_icon" target="_blank" id="linkedin_profile" href="">  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="linkedin" /></a> -->
        </div>
        <div id="leader_bio"></div>
    </div>
    </div>
</div>


<?php get_template_part('components/clients-fr'); ?>

<?php
get_footer( 'fr' );

?>