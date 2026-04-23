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

<?php
$lang = get_locale();
if($lang == 'fr_FR') {    
    $aboutBTCUrl = t('homeUrl').'a-propos-de-nous';
    $fr_class = 'fr';
} else {
    $aboutBTCUrl = t('homeUrl').'about-us';
    $fr_class = '';
}
?>
<section id="aboutBtc">
    <div class="worldMap" id="lottie-animation">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
         <lottie-player style="height: 100%;width: 100%;position: relative;display: block;" id="firstLottie" src="<?php echo get_template_directory_uri() . '/assets/images/map.json'; ?>"></lottie-player>  
    </div>
    <div class="content">
        <div class="headNum heading <?php echo $fr_class; ?>" animateHeading>
            <p><?php echo t('aboutBTC'); ?></p>
            <h2><?php echo t('drivenByCraft'); ?> <br><?php echo t('poweredByScale'); ?></h2>
        </div>
        <div class="sliderAbout ">
            <div class="slides_about_container">
              <div class="slides_about swiper-wrapper">
                <?php if ($key_pointers->have_posts()) {

                    while ($key_pointers->have_posts()) {
                        $key_pointers->the_post();
                ?>

                        <div class="tiles swiper-slide">
                            <div>
                            <?php
$lang = get_locale();
if($lang == 'fr_FR') {    
    echo '<p class="number small">' . get_field('pointer_value') . '</p>';
} else {
    echo '<p class="number ">' . get_field('pointer_value') . '</p>';
}
?>
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
          </div>
          <div class="navigation_about">
              <button class="swiper-button-prev prev aboutPrev globalNavigation <?php echo $fr_class; ?> navBtnInvert"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow "></button>
              <button class="swiper-button-next next aboutNext globalNavigation <?php echo $fr_class; ?> navBtnInvert"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow "></button>
          </div>
            </div>
        <div class="ctaContainer_about">
            <a class="cta <?php echo $fr_class; ?>" href="<?php echo $aboutBTCUrl; ?>" ><?php echo t('knowMoreAboutBTC'); ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="Know More About BTC"></a>
        </div>
    </div>
</section>


<script>
  let player = document.getElementById("firstLottie");

player.addEventListener("ready", () => {
  LottieInteractivity.create({
			  mode:"scroll",
			  player: "#firstLottie",
			  actions: [
        {
            visibility:[0.2, 2.0],
            type: "seek",
            frames: [0, 1000],
        },
        ]
			});
});
</script>


