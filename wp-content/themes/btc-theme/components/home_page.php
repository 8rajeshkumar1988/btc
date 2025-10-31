<section class="heroBanner homePage_banner">
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
        echo '<video playsinline autoplay muted loop poster="'.$image_url.'" src="' . esc_url($banner_video['url']) . '"></video>';
    } else  if (has_post_thumbnail()) {
        $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>



    <div class="content">
        <p class="breadcrub">&nbsp;</p>
        <div class="heading" >
            <div>
                <p><?php the_title(); ?></p>
                <?php the_content(); ?>
            </div>
            <button class="cta leadpopup">Start your line<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>

<?php get_template_part('components/home_about_btc_section'); ?>

<section id="ourProducts">
    <div class="heading" animateHeading >
        <p>our products</p>
        <h2>From Yarn to Garment - <br>Complete Apparel Solutions</h2>
    </div>
    <div class="content">
        <div class="swiper ourProducts">
            <div class="swiper-wrapper">

                <?php

                $clients = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'category',
                    'orderby' => 'title',
                    'post_status'    => 'publish',
                    'meta_key'       => '_sort_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',

                ));

                if ($clients->have_posts()) {
                    while ($clients->have_posts()) {
                        $clients->the_post();
                ?>

                        <div class="swiper-slide items">
                            <div>
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
                                echo  $image;

                                ?>
                                <p class="title"><?php the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="cta">View range<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></a>
                            </div>
                            <p><?php the_title(); ?></p>
                        </div>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="btnss">
                <button class="swiper-button-next productNext globalNavigation navBtnColor"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
                <button class="swiper-button-prev productPrev globalNavigation navBtnColor"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
            </div>
        </div>
    </div>
</section>


<section id="sustainabiltyStandard">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/sustain_back_svg.png'; ?>" alt="" class="back_svg" btcPattern>
    <div class="leftContent">
        <div class="heading" animateHeading>
            <p>Sustainability Standards</p>
            <h3>Compliant With Global Sustainability Standards</h3>
        </div>
        <button class="cta leadpopup" ctaButton>Learn More <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
    <div class="accordian">
        <div class="faq default-open" >
            <div class="head">
                <p>Carbon Footprint of Factory</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>We reduce emissions and waste through sustainable sourcing and clean production.</p>
                <ul>
                    <li>CMiA-certified local portal cotton for eco-friendly sourcing</li>
                    <li>Zero Liquid Discharge (ZLD) for water recycling</li>
                    <li>Clean energy and low-impact manufacturing</li>
                </ul>
            </div>
        </div>
        <div class="faq" >
            <div class="head">
                <p>Sustainable Infra</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>Our facilities meet global sustainability benchmarks, guided by ESIA and IFC standards.</p>
                <ul>
                    <li>LEED-certified buildings for energy efficiency</li>
                    <li>Safe chemical handling and storage</li>
                    <li>HIGG Index assessments for environmental and social impact</li>
                </ul>
            </div>
        </div>
        <div class="faq" >
            <div class="head">
                <p>Tech</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>Smart tech drives our efficient, eco-conscious production.</p>
                <ul>
                    <li>Blockchain for end-to-end traceability</li>
                    <li>Advanced technology for speed and accuracy</li>
                    <li>3D design and automated sampling</li>
                </ul>
            </div>
        </div>
        <div class="faq" >
            <div class="head">
                <p>Certifications</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>We meet leading global standards in quality, safety, and sustainability.</p>
                <ul class="certificates">
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ISO.png" ?>" alt=" ISO 9001/45001/14001 - Environmental & safety management">
                        Environmental & safety management
                    </li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/cotton_made_in_africa.png" ?>" alt="CMiA - Sustainable African cotton">    
                    Sustainable African cotton</li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/oekotex.png" ?>" alt="OekoTex - Tested for harmful substances">
                        Tested for harmful substances</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/wrap.png" ?>" alt="WRAP - Ethical labor and legal compliance">    
                    Ethical labor and legal compliance</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/leed.png" ?>" alt="LEED - Green, energy-saving buildings">    
                    Green, energy-saving buildings</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/CTPAT_Master_Logo.png" ?>" alt="CTPAT - Secure supply chain for US exports">    
                    Secure supply chain for US exports</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/bsci.png" ?>" alt="bsci">    
                    Meeting global ethical sourcing standards</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="ourCapabilities">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/capabilities_back.png'; ?>" alt="" class="back" btcPattern />
    
    <div class="leftContent heading" animateHeading>
        <p>Our Capabilities</p>
        <h3>From Farm To Fashion</h3>
    </div>
    <div class="rightContent">
        <p ourCapabilitiesRightContent>BTC combines <span>state-of-the-art technology</span> with sustainable practices, ensuring every product
            is crafted with care, precision and environmental responsibility.</p>
        <button id="exploreWhatWeDo"   class="cta">Explore What We Do<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
    <div class="cap_container swiper ourCapabilities">
        <div class="swiper-wrapper">

            <?php

            $clients = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'homecapability',
                'orderby' => 'title',
                'post_status'    => 'publish',
                'meta_key'       => '_sort_order',
                'orderby'        => 'meta_value_num',
                'order'          => 'ASC',

            ));

            if ($clients->have_posts()) {
                while ($clients->have_posts()) {
                    $clients->the_post();
            ?>

                    <div class="swiper-slide swirl-img">
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

                        $image = '<img class="homecapability__image spiralImage"  src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        echo  $image;

                        ?>
                        <div class="empty"></div>
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <!-- <img class="line" src="<?php echo get_template_directory_uri() . '/assets/images/line.svg'; ?>" alt=""> -->
                            <div class="line"><div></div></div>
                            <p><?php echo nl2br(get_field('content')); ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="btnssNew">
            <button class="swiper-button-next capabilitiesNext globalNavigation navBtnColor"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
            <button class="swiper-button-prev capabilitiesPrev swiper-button-disabled navBtnColor globalNavigation"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
    </div>


    <img src="<?php echo get_template_directory_uri() . '/assets/images/closeSvg.svg'; ?>" alt="" class="closeCapabilities" id="closeCapabilities">
</section>



<?php get_template_part('components/socials'); ?>

<?php get_template_part('components/clients'); ?>

<section id="linkedIn_video">
    <div class="heading" animateHeading>
        <p>End-To-End Apparel Manufacturing Solutions</p>
        <h3>Fully Integrated Textile Park</h3>
        <a href="/capabilities"  class="cta">Explore Capabilities<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></a>
    </div>
    <video poster="<?php echo get_template_directory_uri() . '/assets/images/home/BTC_Gate.jpg'; ?>"  autoplay loop muted playsinline>
        <source src="<?php echo get_template_directory_uri() . '/assets/images/homeVideoSec.mp4'; ?>" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/images/homeVideoSec.webm" type="video/webm">
    </video>
</section>
<div class="blankSpace"></div>

