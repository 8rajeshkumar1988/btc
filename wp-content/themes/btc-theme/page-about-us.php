<?php

get_header();
the_post();
?>
<section class="heroBanner">
    <?php
    $banner_video = get_field('banner_video');

    if ($banner_video) {
        echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
    } else  if (has_post_thumbnail()) {
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
    }

    ?>



    <div class="content">
        <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / About Us</p>
        <div class="heading">
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
        <div class="layer"></div>
    </div>
</section>
<section id="about_btc">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" />
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" />

    <div class="about_btc_head">
        <div class="heading">
            <p>About BTC</p>
            <h2>
                Providing Agility, Quality, <br />
                and Sustainability.
            </h2>
        </div>
    </div>
    <div class="about_btc_container">
        <div class="swiper about_btc">
            <div class="swiper-wrapper">
                <div class="swiper-slide category_item">
                    <div class="category_image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/about-sec-1.jpg"  ?>" alt="" />
                    </div>
                    <p class="category_description">
                        BTC, located in Benin, is West Africa's first fully vertically
                        integrated factory, transforming rain-fed, non-GMO
                        CmiA-certified cotton—widely recognized and trusted by ginning
                        associations and industry stakeholders—into premium apparel.
                    </p>
                </div>
                <div class="swiper-slide category_item">
                    <div class="category_image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/about-sec-2.jpg" ?>" alt="" />
                    </div>
                    <p class="category_description">
                        In addition to CmiA cotton, we also work with organic cotton,
                        regenerative cotton, and other sustainable cotton types. From
                        spinning to garmenting, we ensure quality, efficiency, and
                        sustainability at every stage.
                    </p>
                </div>
                <div class="swiper-slide category_item">
                    <div class="category_image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/about-sec-3.jpg"  ?>" alt="" />
                    </div>
                    <p class="category_description">
                        We produce high-quality yarns, fabrics, and garments, including
                        T-shirts, polos, hoodies, and more. Our eco-conscious
                        processes—such as yarn dyeing, printing, and embroidery combine
                        cutting-edge technology
                    </p>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
    <div class="about_btc_button_container">
        <div class="about_btc_buttons">
            <button class="about_btc-prev">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow " />
            </button>
            <button class="about_btc-next">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow " />
            </button>
        </div>
    </div>
</section>
<section id="vision_mission">
    <div class="vision_mission_container">
        
        <video autoplay loop muted playsinline  src="<?php echo get_template_directory_uri() . "/assets/images/vision.mp4"  ?>"></video>
    </div>
    <div class="vision_mission_container">
        <h2>Vision</h2>
        <p>
            To lead Africa's textile transformation by pioneering sustainable,
            traceable and <strong> high-performance apparel manufacturing,</strong> setting new
            global standards for quality and environmental responsibility.
        </p>
    </div>
    <div class="vision_mission_container">
        
        <video autoplay loop muted playsinline src="<?php echo get_template_directory_uri() . "/assets/images/mission.mp4"  ?>"></video>
    </div>
    <div class="vision_mission_container">
        <h2>Mission</h2>
        <p>
            At BTC, we shape the future of textiles by integrating <strong> sustainability,
            innovation, and efficiency.</strong> From <strong>CmiA-certified cotton </strong> to premium
            garments, we deliver ethical, high-quality apparel that meets global
            demand while empowering communities and <strong> reducing carbon footprints.</strong>
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
        <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" />
        <div class="heading">
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

                        $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        echo $image;

                        ?>
                    </div>
                    <div class="leader_detail">
                        <h2 class="leader_title"><?php the_title(); ?></h2>

                        <p class="leader_description"><?php echo get_field('jobtitle'); ?></p>
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
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png" ?>" alt="" />
    <div class="heading">
        <p>Our Shareholders</p>
        <h2>
            Empowering <br />
            Progress Through <br />
            Trusted Partnerships
        </h2>
    </div>
    <div class="shareholder_logos">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/arise_logo.png" ?>" alt="" />
        </div>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/LCB.png" ?>" alt="" />
        </div>
        <div class="logo">
            <img
                src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/caisse_de_dpots_et_consignations_du_benin_cover.png" ?>"
                alt="" />
        </div>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/SBTCLOGONEW.png" ?>" alt="" />
        </div>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/shareholders/SODECO.png" ?>" alt="" />
        </div>
    </div>
</section>
<section id="arise_details">
    <div class="heading">
        <h2>Powered By</h2>
    </div>
    <div class="arise_container">
        <div class="logo_container">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/arise_logo.png" ?>" alt="" />
        </div>
        <div class="description">
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
            <!-- <button class="cta">
          Get in Touch <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
        </button> -->
        </div>
    </div>
</section>
<section id="our_impact">
    <div class="heading">
        <p>Our Impact</p>
        <h2>
            Making a Difference, <br />
            Stitch by Stitch
        </h2>
    </div>

    <div class="our_impact_container">
        <!-- PARTNERS -->
        <div data-section="partners" class="impact_wrapper bg-partners ">
            <div class="overlay"></div>
            <div class="impact_wrapper_head">
                <h2>PARTNERS</h2>
                <button class="open-btn">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
            </div>
            <div class="content">
                <div class="content-details">
                    <div class="content-detail">
                        <div>
                            <h2>7000</h2>
                            <p>
                                Beninese nationals will be directly employed across both
                                shifts
                            </p>
                        </div>
                        <div>
                            <h2>7000-8000</h2>
                            <p>Driving indirect jobs across supply and services</p>
                        </div>
                    </div>
                    <ul>
                        <li>Skilling of Local man power for life time through GTC</li>
                        <li>Local Entrepreneurial development through EDS scheme</li>
                        <li>
                            The vertical supply chain Eco system shall cater to other
                            garment manufacturers in the region
                        </li>
                    </ul>
                </div>
                <div class="content-btn">
                    <button class="cta leadpopup">
                        GET IN TOUCH <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                    </button>
                </div>
            </div>
        </div>

        <!-- PEOPLE -->
        <div data-section="people" class="impact_wrapper bg-people open">
            <div class="overlay"></div>
            <div class="impact_wrapper_head">
                <h2>PEOPLE</h2>
                <button class="open-btn">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
            </div>
            <div class="content">
                <div class="content-details">
                    <div class="content-detail">
                        <div>
                            <h2>7000</h2>
                            <p>
                                Beninese nationals will be directly employed across both
                                shifts
                            </p>
                        </div>
                        <div>
                            <h2>7000-8000</h2>
                            <p>Driving indirect jobs across supply and services</p>
                        </div>
                    </div>
                    <ul>
                        <li>Skilling of Local man power for life time through GTC</li>
                        <li>Local Entrepreneurial development through EDS scheme</li>
                        <li>
                            The vertical supply chain Eco system shall cater to other
                            garment manufacturers in the region
                        </li>
                    </ul>
                </div>
                <div class="content-btn">
                    <button class="cta leadpopup">
                        GET IN TOUCH <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                    </button>
                </div>
            </div>
        </div>

        <!-- PLANET -->
        <div data-section="planet" class="impact_wrapper bg-planet">
            <div class="overlay"></div>
            <div class="impact_wrapper_head">
                <h2>PLANET</h2>
                <button class="open-btn">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
            </div>
            <div class="content">
                <div class="content-details">
                    <div class="content-detail">
                        <div>
                            <h2>7000</h2>
                            <p>
                                Beninese nationals will be directly employed across both
                                shifts
                            </p>
                        </div>
                        <div>
                            <h2>7000-8000</h2>
                            <p>Driving indirect jobs across supply and services</p>
                        </div>
                    </div>
                    <ul>
                        <li>Skilling of Local man power for life time through GTC</li>
                        <li>Local Entrepreneurial development through EDS scheme</li>
                        <li>
                            The vertical supply chain Eco system shall cater to other
                            garment manufacturers in the region
                        </li>
                    </ul>
                </div>
                <div class="content-btn">
                    <button class="cta leadpopup">
                        GET IN TOUCH <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="certificates_compliances">
    <div class="heading">
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
<div id="popup"  class="hidden">
    <!-- Close button -->
    
    <div class="pop_container">
        <button id="closeBtn">✕</button>
    <img id="popupImg" src="" />
    <div class="pop_content" data-lenis-prevent>
        <h2 id="popupHeading"></h2>
        <p id="popupPara"></p>
        <div id="leader_bio"></div>
    </div>
    </div>
</div>


<?php get_template_part('components/clients'); ?>

<?php
get_footer();

?>