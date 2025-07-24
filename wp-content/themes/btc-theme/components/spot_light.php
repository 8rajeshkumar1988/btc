<?php
$category_id = get_the_ID();

$products = new WP_Query([
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'meta_query'     => [
        [
            'key'     => '_category_id',
            'value'   => $category_id,
            'compare' => '=',
        ],
        [
            'key'     => '_is_spotlight',
            'value'   => 'yes',
            'compare' => '=',
        ],
    ],
]);
if ($products->have_posts()) {
?>

    <section id="product_spotlight">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
        <div class="swiper spotlight_slider">
            <div class="swiper-wrapper">
                <?php
                while ($products->have_posts()) {
                    $products->the_post(); ?>
                    <div class="swiper-slide">
                        <div class="product_detail">
                            <div>
                                <p class="product_description">Product Spotlight</p>
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <button class="cta">Get in Touch <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
                        </div>
                        <?php
                        $image_url = get_post_meta(get_the_ID(), '_spotlight_image', true);
                        $attachment_id = $image_url ? attachment_url_to_postid($image_url) : false;

                        if ($attachment_id) {
                            $full_image_url = wp_get_attachment_image_url($attachment_id, 'full');
                            $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                            $title_text = get_the_title($attachment_id);
                            if (empty($alt_text)) {
                                $alt_text = get_the_title();
                            }
                            if (empty($title_text)) {
                                $title_text = get_the_title();
                            }

                            echo '<img src="' . esc_url($full_image_url) . '" alt="' . esc_attr($alt_text) . '" title="' . esc_attr($title_text) . '">';
                        }
                        ?>
                    </div>
                <?php

                }
                wp_reset_postdata();

                ?>
                <?php
                $category_id = get_the_ID();

                $products = new WP_Query([
                    'post_type'      => 'product',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'meta_key'       => '_sort_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',
                    'meta_query'     => [
                        [
                            'key'     => '_category_id',
                            'value'   => $category_id,
                            'compare' => '=',
                        ],
                        [
                            'key'     => '_is_spotlight',
                            'value'   => 'yes',
                            'compare' => '=',
                        ],
                    ],
                ]);

                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();

                        $image_url = get_post_meta(get_the_ID(), '_spotlight_image', true);
                        $attachment_id = $image_url ? attachment_url_to_postid($image_url) : false;

                ?>
                        <div class="swiper-slide">
                            <div class="product_detail">
                                <div>
                                    <p class="product_description">Product Spotlight</p>
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <button class="cta leadpopup">Get in Touch <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
                            </div>
                            <?php
                            if ($attachment_id) {
                                echo wp_get_attachment_image($attachment_id, 'btc_large');
                            } elseif ($image_url) {
                                echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                            } else {
                                echo '<img src="' . get_theme_file_uri('/assets/placeholder.jpg') . '" alt="Placeholder">';
                            }
                            ?>
                        </div>
                <?php

                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
        <div class="product_spotlight_bottom">
            <div class="product_spotlight_buttons">
                <button class="product_spotlight-prev">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow " />
                </button>
                <button class="product_spotlight-next">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </section>
<?php } ?>