<?php

get_header();
the_post();
?>

<section class="thankYou">
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
    <div class="content_wrapper">
        <dotlottie-wc class="lottie" id="thankYouLottie" src=<?php echo get_template_directory_uri() . '/assets/images/complete.lottie'; ?>    autoplay></dotlottie-wc>
        <div class="content" animateHeading style="margin-top: 80px;">
            <h1><?php echo t('thankyou'); ?></h1>
            <p><?php echo t('thankyouMsg'); ?></p>
        </div>
    </div>
</section>

<?php



$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 10,
    'orderby'        => 'rand',   // Random order
    'cat'            => 1,        // Category ID
];


$news = new WP_Query($args);
if ($news->have_posts()) {
?>

    <section id="more_news">
        <div class="heading" animateHeading>
            <p><?php echo t('dontMiss'); ?></p>
            <h2><?php echo t('moreNews'); ?></h2>
        </div>
        <div class="more_news_container">
            <div class="swiper about_more_news">
                <div class="swiper-wrapper">
                    <?php
                    while ($news->have_posts()) {
                        $news->the_post();

                    ?>
                        <div class="swiper-slide blog_card">
                            <a href="<?php the_permalink(); ?>" class="blog_image">
                                <?php
                                $top_post_ids[] = get_the_ID();
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

                                $image = '<img  src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                                echo  $image;

                                ?>
                            </a>
                            <div class="blog_description">
                                <p><?php
                                    $date_raw = get_field('published_at');
                                    if ($date_raw) {
                                        echo date('j F Y', strtotime($date_raw));
                                    }
                                    ?></p>
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <a href="<?php the_permalink(); ?>" class="cta"><?php echo t('viewArticle'); ?> <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""></a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
        <div class="more_news_button_container">
            <div class="more_news_buttons">
                <button class="about_more_news-prev">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
                <button class="about_more_news-next">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </section>
<?php } ?>






<?php
    get_template_part('components/socials');
    get_template_part('components/newsletter_subs_section');
?>
<?php
get_footer();

?>