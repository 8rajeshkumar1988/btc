<section id="our_social">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC pattern.svg'; ?>" alt="btcPattern" btcPattern />

    <div class="our_social_head">
        <div class="heading" animateHeading>
            <p>Our Socials</p>
            <h2>Behind the Seams</h2>
        </div>
        <button class="cta" ctaButton>
            follow our threads
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow" />
        </button>
    </div>
    <div class="swiper social_media">
        <div class="swiper-wrapper social_media_wrapper">

            <?php

            $clients = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'socialmedia',
                'orderby' => 'title',
                'post_status'    => 'publish',
                'meta_key'       => '_sort_order',
                'orderby'        => 'meta_value_num',
                'order'          => 'ASC',

            ));
            if ($clients->have_posts()) {
                while ($clients->have_posts()) {
                    $clients->the_post();

                    $social_icon = get_field('social_icon');
                    $embed_code = get_field('embed_code');
                    if ($embed_code) {
                        echo $embed_code;
                    } else {  ?>
                        <a target="_blank" href="<?php echo get_field('media_url'); ?>" class="swiper-slide social_media_card">
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

                            $image = '<img class="socialmedia__image"  src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                            echo  $image;

                            ?>

                            <?php if ($social_icon) { ?>
                                <div class="social_icon">
                                    <?php echo '<img src="' . esc_url($social_icon['url']) . '" alt="' . esc_attr($social_icon['alt']) . '">'; ?>
                                </div>
                            <?php } ?>
                            <div class="layer"></div>
                        </a>
                    <?php } ?>
            <?php
                }
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>

    <button class="cta" ctaButton >
        follow our threads
        <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow" />
    </button>
</section>


<script>
    const social_media = new Swiper(".social_media", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        
         autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        speed: 1000,
        breakpoints: {
            480: {
                slidesPerView: "auto",
            },
        },
    });

    gsap.from(".social_media_wrapper > a", {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.1,
        scrollTrigger: {
            trigger: ".social_media_wrapper",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });
</script>