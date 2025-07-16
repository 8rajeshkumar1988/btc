<?php

get_header();

?>
<section class="heroBanner">
    <video playsinline autoplay muted loop src="<?php echo get_template_directory_uri() . '/assets/images/homeVideo.mp4'; ?>"></video>
    <div class="content">
        <p class="breadcrub">&nbsp;</p>
        <div class="heading">
            <p>Africa’s Leading Textile Hub</p>
            <h1>Crafting Inspired Apparel <br> Solutions for Global Brands.</h1>
        </div>
    </div>
</section>

<section id="aboutBtc">
    <img class="worldMap" src="<?php echo get_template_directory_uri() . '/assets/images/world map.svg'; ?>" alt="">
    <div class="content">
        <div class="headNum heading">
            <p>ABOUT BTC</p>
            <h2>Driven by Craft. <br>Powered by Scale.</h2>
        </div>
        <div class="sliderAbout swiper " >
            <div class="slides_about swiper-wrapper">
                <div class="tiles swiper-slide">
                    <div>
                        <p class="number">32,000</p>
                        <p class="tag">High-Performance Spindles</p>
                    </div>
                    <div class="copy">
                        <p>
                            Our advanced spinning facility houses <span>32,000 high-performance spindles</span>,
                            enabling us to
                            produce high-quality yarn with precision and consistency.
                        </p>
                    </div>
                </div>
                <div class="tiles swiper-slide">
                    <div>
                        <p class="number">32,000</p>
                        <p class="tag">High-Performance Spindles</p>
                    </div>
                    <div class="copy">
                        <p>
                            Our advanced spinning facility houses <span>32,000 high-performance spindles</span>,
                            enabling us to
                            produce high-quality yarn with precision and consistency.
                        </p>
                    </div>
                </div>
                <div class="tiles swiper-slide">
                    <div>
                        <p class="number">32,000</p>
                        <p class="tag">High-Performance Spindles</p>
                    </div>
                    <div class="copy">
                        <p>
                            Our advanced spinning facility houses <span>32,000 high-performance spindles</span>,
                            enabling us to
                            produce high-quality yarn with precision and consistency.
                        </p>
                    </div>
                </div>
            </div>
            <div class="navigation_about">
                <button class="prev"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow "></button>
                <button class="next"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow "></button>
            </div>
        </div>
        <button class="cta">Know More About BTC <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
</section>


<section id="ourProducts">
    <div class="heading">
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
                                <img title="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('btc_medium') ?>" alt="<?php the_title(); ?>">
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
                <button class="swiper-button-next"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
                <button class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
            </div>
        </div>
    </div>
</section>


<section id="sustainabiltyStandard">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/sustain_back_svg.png'; ?>" alt="" class="back_svg">
    <div class="leftContent">
        <div class="heading">
            <p>Sustainability Standards</p>
            <h3>Compliant With Global Sustainability Standards</h3>
        </div>
        <button class="cta">Learn More <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
    <div class="accordian">
        <div class="faq default-open"
            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <div class="head">
                <p>Carbon Footprint of factory</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>We reduce emissions and waste through sustainable sourcing and clean production.</p>
                <ul>
                    <li>CMiA-certified cotton for eco-friendly sourcing</li>
                    <li>Zero Liquid Discharge (ZLD) for water recycling</li>
                    <li>Clean energy and low-impact manufacturing</li>
                </ul>
            </div>
        </div>
        <div class="faq"
            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <div class="head">
                <p>Sustainable infra</p>
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
        <div class="faq"
            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <div class="head">
                <p>Tech</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>Smart tech drives our efficient, eco-conscious production.</p>
                <ul>
                    <li>Blockchain for end-to-end traceability</li>
                    <li>Advanced machinery for speed and accuracy</li>
                    <li>3D design and automated sampling</li>
                </ul>
            </div>
        </div>
        <div class="faq"
            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <div class="head">
                <p>Certifications</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>We meet leading global standards in quality, safety, and sustainability.</p>
                <ul>
                    <li>ISO 9001/45001/14001 - Environmental & safety management</li>
                    <li>CMiA - Sustainable African cotton</li>
                    <li>OekoTex - Tested for harmful substances</li>
                    <li>WRAP - Ethical labor and legal compliance</li>
                    <li>LEED - Green, energy-saving buildings</li>
                    <li>CTPAT - Secure supply chain for US exports</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="ourCapabilities">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/capabilities_back.png'; ?>" alt="" class="back">
    <div class="leftContent heading">
        <p>Our Capabilities</p>
        <h3>From Farm <br>To Fashion</h3>
    </div>
    <div class="rightContent">
        <p>BTC combines <span>state-of-the-art technology</span> with sustainable practices, ensuring every product
            is crafted with care, precision and environmental responsibility.</p>
        <button id="exploreWhatWeDo" class="cta">Explore What We Do<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
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
                        <img title="<?php the_title(); ?>" class='homecapability__image spiralImage' src="<?php the_post_thumbnail_url('btc_large') ?>">

                        <div class="empty"></div>
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <img class="line" src="<?php echo get_template_directory_uri() . '/assets/images/line.svg'; ?>" alt="">
                            <p><?php echo nl2br(get_field('content')); ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="btnssNew">
            <button class="swiper-button-next"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
            <button class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
    </div>
</section>



<?php get_template_part('components/socials'); ?>

<?php get_template_part('components/clients'); ?>

<section id="linkedIn_video">
    <video src="<?php echo get_template_directory_uri() . '/assets/images/homeVideoSec.mp4'; ?>" autoplay loop muted playsinline></video>
</section>




<?php
get_footer();

?>