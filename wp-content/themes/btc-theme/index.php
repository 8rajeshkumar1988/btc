<?php

get_header();

?>




<section id="news_media">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png" ?>" alt="" />
    <div class="heading">
        <h2>
            News & Media <br />
            At <span>Benin Textile Corporation</span>
        </h2>
    </div>
    <?php


    $spotlight_news = new WP_Query([
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'meta_key'       => 'published_at',
        'orderby'        => 'meta_value_num',
        'order'          => 'DESC',
        'cat'            => 1,
        'meta_query'     => [
            [
                'key'     => 'is_featured',
                'value'   => true,
                'compare' => '=',
            ],
        ],
    ]);

    $top_post_ids = array();
    if ($spotlight_news->have_posts()) {

    ?>

        <div id="news_spotlight">
            <div class="swiper spotlight_slider">
                <div class="swiper-wrapper">

                    <?php
                    while ($spotlight_news->have_posts()) {
                        $spotlight_news->the_post();

                    ?>
                        <div class="swiper-slide">
                            <div class="news_detail">
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

                                $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                                echo  $image;

                                ?>
                                <div class="news_info">
                                    <div class="news_tag">
                                        <p><?php
                                            $categories = get_the_category();
                                            if (! empty($categories)) {
                                                echo esc_html($categories[0]->name); // Show the first category
                                            } ?></p>
                                        <p><?php
                                            $date_raw = get_field('published_at');
                                            if ($date_raw) {
                                                echo date('j F Y', strtotime($date_raw));
                                            }
                                            ?></p>
                                    </div>
                                    <div>
                                        <h2><?php the_title(); ?></h2>
                                        <p class="news_description"><?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="cta">View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""></a>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    <?php } ?>
</section>

<?php
$news = new WP_Query([
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => 'published_at',
    'orderby'        => 'meta_value_num',
    'order'          => 'DESC',
    'cat'            => 1,
    'post__not_in'   => $top_post_ids,
]);

if ($news->have_posts()) {
?>

    <section id="more_news">
        <div class="heading">
            <p>Don't Miss</p>
            <h2>More News</h2>
        </div>
        <div class="more_news_container">
            <div class="swiper about_more_news">
                <div class="swiper-wrapper">
                    <?php
                    while ($news->have_posts()) {
                        $news->the_post();

                    ?>
                        <div class="swiper-slide blog_card">
                            <div class="blog_image">
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

                                $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                                echo  $image;

                                ?>
                            </div>
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
                                <a href="<?php the_permalink(); ?>" class="cta">View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""></a>
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


$sarticles = new WP_Query([
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => 'published_at',
    'orderby'        => 'meta_value_num',
    'order'          => 'DESC',
    'cat'            => 3,

]);


if ($sarticles->have_posts()) {

?>


    <section id="explore_media">
        <div class="heading">
            <p>Stories</p>
            <h2>Explore Media</h2>
        </div>
        <div class="explore_media_container">
            <?php
            while ($sarticles->have_posts()) {
                $sarticles->the_post();

            ?>
                <div class="explore_media_card">
                    <div class="explore_media_image">
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

                        $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        echo  $image;

                        ?>
                        <div class="explore_media_description">
                            <div class="blog_tag">
                                <p>BLOG</p>
                            </div>
                            <div class="blog_desciption">
                                <h2><?php the_title(); ?></h2>
                                <!-- <p><?php the_excerpt(); ?></p> -->
                                <p>
                                    <?php
                                    $date_raw = get_field('published_at');
                                    if ($date_raw) {
                                        echo date('j F Y', strtotime($date_raw));
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="cta explore_media_cta">View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""></a>
                </div>
            <?php } ?>





        </div>
    </section>
<?php } ?>
<?php get_template_part('components/socials'); ?>
<?php get_template_part('components/newsletter_subs_section'); ?>

<?php
get_footer();

?>