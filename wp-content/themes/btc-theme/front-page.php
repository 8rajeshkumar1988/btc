<?php

get_header();

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

<?php get_template_part('components/home_about_btc_section'); ?>

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

                        $image = '<img class="homecapability__image spiralImage" title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        echo  $image;

                        ?>
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