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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
        <div id="lottieCanvas">

        </div>
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


<script>
  document.addEventListener("DOMContentLoaded", function () {
    let anim_lottie;

    const canvas = document.getElementById("lottieCanvas");

    anim_lottie = lottie.loadAnimation({
      container: canvas, 
      renderer: "canvas", 
      loop: false,
      autoplay: false,
      path: "<?php echo get_template_directory_uri() . '/assets/images/world_map_lottie.json'; ?>" // your .json file path
    });

    let isReversing = false;
    let reverseCompleteHandler;

    const play_lottie = () => {
    if (!anim_lottie) return;

    // If it's reversing, cancel the reverse and resume forward play
    if (isReversing) {
        isReversing = false;
        anim_lottie.removeEventListener("complete", reverseCompleteHandler);
        anim_lottie.setDirection(1); // forward
        anim_lottie.play();
        return;
    }

    anim_lottie.setDirection(1); // ensure it's forward
    anim_lottie.play();
    };

    const reverseAndReset = () => {
    if (!anim_lottie || isReversing) return;

    isReversing = true;
    anim_lottie.setDirection(-1);
    anim_lottie.play();

    // Define the complete handler and store reference for removal
    reverseCompleteHandler = () => {
        anim_lottie.removeEventListener("complete", reverseCompleteHandler);
        anim_lottie.stop();
        anim_lottie.goToAndStop(0, true);
        anim_lottie.setDirection(1);
        isReversing = false;
    };

    anim_lottie.addEventListener("complete", reverseCompleteHandler);
    };





    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            play_lottie();
          } else {
            reverseAndReset();
          }
        });
      },
      { threshold: 0.5 }
    );

    observer.observe(canvas);
  });
</script>


