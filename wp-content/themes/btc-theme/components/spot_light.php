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
        <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" btcPattern />
        <div class="swiper spotlight_slider">
            <div class="swiper-wrapper">
                <?php
                // Step 1: Collect all posts into an array
                $slides = [];

                while ($products->have_posts()) {
                    $products->the_post();

                    // Store all needed data in the array
                    $slides[] = [
                        'title' => get_the_title(),
                        'image_url' => get_post_meta(get_the_ID(), '_spotlight_image', true),
                        'image_url_mobile' => get_post_meta(get_the_ID(), '_spotlight_image_mobile', true),
                    ];
                }
                wp_reset_postdata(); // Reset after loop

                $original_count = count($slides);

                // Step 2: Duplicate based on count
                if ($original_count === 2) {
                    $slides = array_merge($slides, $slides, $slides); // 2 → 4 → append 2 = 6
                } elseif ($original_count === 3) {
                    $slides = array_merge($slides, $slides); // 3 → 6
                } elseif ($original_count === 4) {
                    $slides = array_merge($slides, $slides); // 4 → 8
                }

                // Step 3: Output slides
                foreach ($slides as $slide) {
                ?>
                    <div class="swiper-slide">
                        <div class="product_detail">
                            <div>
                                <p class="product_description">Product Spotlight</p>
                                <h2><?php echo esc_html($slide['title']); ?></h2>
                            </div>
                            <button class="cta leadpopup" style="height: fit-content;">
                            <?php
                                $lang = get_locale();
                                if($lang == 'fr_FR') {
                                    $button_text = 'Lancez Votre Gamme De Produits';
                                } else {
                                    $button_text = 'Start Your Line';
                                }
                                ?>

                                <?php echo $button_text; ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right_arrow.svg" alt="">
                            </button>
                        </div>
                        <?php
                        $attachment_id = $slide['image_url'] ? attachment_url_to_postid($slide['image_url']) : false;
                        $attachment_id_mobile = $slide['image_url_mobile'] ? attachment_url_to_postid($slide['image_url_mobile']) : false;

                        if ($attachment_id) {
                            $full_image_url = wp_get_attachment_image_url($attachment_id, 'full');
                            $full_image_url_mobile = wp_get_attachment_image_url($attachment_id_mobile, 'full');
                            $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                            $title_text = get_the_title($attachment_id);
                            if (empty($alt_text)) {
                                $alt_text = $slide['title'];
                            }
                            if (empty($title_text)) {
                                $title_text = $slide['title'];
                            }


                            // Mobile image fallback logic
                            if (empty($full_image_url_mobile)) {
                                $full_image_url_mobile = $full_image_url;
                            }

                            // Output both versions
                            echo '<img class="product_spot_mobile" src="' . esc_url($full_image_url_mobile) . '" alt="' . esc_attr($alt_text) . '">';
                            echo '<img class="product_spot" src="' . esc_url($full_image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        }
                        ?>
                    </div>
                <?php
                }
                ?>



            </div>
        </div>
        <div class="product_spotlight_bottom">
            <div class="product_spotlight_buttons">
                <button class="product_spotlight-prev navBtnColor globalNavigation  ">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow " />
                </button>
                <button class="product_spotlight-next navBtnColor globalNavigation">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </section>
<?php } ?>