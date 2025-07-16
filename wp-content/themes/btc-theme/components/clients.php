    <section id="our_clients">
        <div class="heading">
            <p>Our Clients</p>
            <h2>
                Powering the World's <br />
                Leading Labels
            </h2>
        </div>
        <div class="marquee-container">
            <div class="marquee-track left-slide">
                <div class="marquee-content">
                    <?php

                    $clients = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'client',
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
                            <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class='event__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="marquee-content">
                    <?php

                    $clients = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'client',
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
                            <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class='event__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="marquee-track right-slide">
                <div class="marquee-content">
                    <?php

                    $clients = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'client',
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
                            <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class='event__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="marquee-content">
                    <?php

                    $clients = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'client',
                        'orderby' => 'title',
                        'post_status'    => 'publish',
                        'meta_key'       => '_sort_order',
                        'orderby'        => 'meta_value_num',
                        'order'          => 'ASC',

                    ));
                    if ($clients->have_posts()) {
                        while ($clients->have_posts()) {
                            $clients->the_post();

                            if (has_post_thumbnail()) {
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
                            } 


                    ?>
                            
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>