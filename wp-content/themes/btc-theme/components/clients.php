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
                            <img alt="<?php the_title(); ?>"  title="<?php the_title(); ?>" class='event__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
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
                            <img alt="<?php the_title(); ?>"  title="<?php the_title(); ?>" class='event__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
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
                            <img alt="<?php the_title(); ?>"  title="<?php the_title(); ?>" class='event__image' src="<?php the_post_thumbnail_url('btc_medium') ?>">
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>