<?php
$lang = get_locale();
if($lang=='fr_FR'){
  $fr_class = 'fr';
}else{
  $fr_class = '';
}
?>
<section id="our_social">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC pattern.svg'; ?>" alt="<?php echo t('btcPattern'); ?>"  btcpattern />

    <div class="our_social_head">
        <div class="heading <?php echo $fr_class; ?>" animateHeading>
            <p><?php echo t('ourSocials'); ?></p>
            <h2><?php echo t('behindTheSeams'); ?></h2>
        </div>
        <a href="https://www.linkedin.com/company/benin-textile-corporation/" target="_blank" class="cta <?php echo $fr_class; ?>" ctaButton>
            <?php echo t('followOurThreads'); ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
        </a>
    </div>
    <div class="swiper social_media">
        <div class="swiper-wrapper social_media_wrapper">

            <?php

            $clients = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type'      => 'socialmedia',
                'post_status'    => 'publish',
                // Order by publish date (newest first)
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));
            if ($clients->have_posts()) {
                while ($clients->have_posts()) {
                    $clients->the_post();

                    $social_icon = get_field('social_icon');
                    $embed_code = get_field('embed_code');
                    if ($embed_code) {
                        echo $embed_code;
                    } else {  ?>
                        <a target="_blank" published_at="<?php echo get_the_date('Y-m-d H:i:s'); ?>" href="<?php echo get_field('media_url'); ?>" class="swiper-slide social_media_card">
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
                                    <?php echo '<img src="' . esc_url($social_icon['url']) . '" alt="' . esc_attr($alt_text) . ' linkedin icon  handle" />'; ?>
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

    <a href="https://www.linkedin.com/company/benin-textile-corporation/" target="_blank" class="cta <?php echo $fr_class; ?>" ctaButton >
        <?php echo t('followOurThreads'); ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="<?php echo t('rightArrow'); ?>" />
    </a>
</section>


<script>
    const social_media = new Swiper(".social_media", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        
         autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 800,
        breakpoints: {
            480: {
                slidesPerView: "auto",
                // centeredSlides: false,
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