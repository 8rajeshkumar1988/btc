<section id="our_social">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC pattern.svg'; ?>" alt="" />

    <div class="our_social_head">
        <div class="heading">
            <p>Our Socials</p>
            <h2>Behind the Seams</h2>
        </div>
        <button class="cta">
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
                            <img title="<?php the_title(); ?>" class='socialmedia__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
                            <?php if ($social_icon) { ?>
                                <div class="social_icon">
                                    <?php echo '<img src="' . esc_url($social_icon['url']) . '" alt="' . esc_attr($social_icon['alt']) . '">'; ?>
                                </div>
                            <?php } ?>
                        </a>
                    <?php } ?>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>