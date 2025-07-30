<?php

$key_pointers = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'infra_legacy_pointer',
    'orderby' => 'title',
    'post_status'    => 'publish',
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',

));
?>

<section id="aboutBtc">
    <div class="worldMap" id="lottie-animation">
        <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
        <dotlottie-wc id="myLottie" src=<?php echo get_template_directory_uri() . '/assets/images/animation.lottie'; ?> style="width: 100%;height: 100%"   speed="1" freezeOnOffscreen="true" loop="false" autoplay="false"></dotlottie-wc>
    </div>
    <div class="content">
        <div class="headNum heading" animateHeading>
            <p>ABOUT BTC</p>
            <h2>Driven by Craft. <br>Powered by Scale.</h2>
        </div>
        <div class="sliderAbout swiper ">
            <div class="slides_about swiper-wrapper">
                <?php if ($key_pointers->have_posts()) {

                    while ($key_pointers->have_posts()) {
                        $key_pointers->the_post();
                ?>

                        <div class="tiles swiper-slide">
                            <div>
                                <p class="number"><?php echo get_field('pointer_value'); ?></p>
                                <p class="tag"><?php the_title(); ?></p>
                            </div>
                            <div class="copy">
                                <p>
                                    <?php echo get_field('description'); ?>
                                </p>
                            </div>
                        </div>
                <?php }
                } ?>

            </div>
            <div class="navigation_about">
                <button class="swiper-button-prev prev"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow "></button>
                <button class="swiper-button-next next"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow "></button>
            </div>
        </div>
        <button class="cta" ctaButton>Know More About BTC <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
</section>


