
    <section id="our_social">
        <img src="../assets/BTC pattern.svg" alt="" />

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

                $clients = new WP_Query( array(
                    'posts_per_page' => -1,
                    'post_type' => 'socialmedia',
                    'orderby' => 'title',
                    'post_status'    => 'publish', 
                    'meta_key'       => '_sort_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',

                ) );
                if ( $clients->have_posts() ) {
                    while( $clients->have_posts() ) {
                        $clients->the_post(); 
                        ?>
                        

                         <a href="/" class="swiper-slide social_media_card">
                            <img title= "<?php the_title(); ?>" class = 'socialmedia__image' src = "<?php the_post_thumbnail_url('btc_medium') ?>">
                            <div class="social_icon">
                                <img src="../assets/social/facebook.svg" alt="" />
                            </div>
                        </a>
                        <?php
                    }

                }
                wp_reset_postdata();
                ?>
            </div>            
        </div>
    </section>

