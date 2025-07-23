<header>
    <a href="/btc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/HeaderLogoWhite.svg" alt="" class="logo">
    </a>
    <button class="headerBtn">
        <img class="open" src="<?php echo get_template_directory_uri(); ?>/assets/images/quill_hamburger.svg"
            alt="quill_hamburger">
        <img class="close" src="<?php echo get_template_directory_uri(); ?>/assets/images/closeSvg.svg" alt="closeSvg">
    </button>
</header>
<section id="header" class="active">
    <div class="left">

        <?php
        $header_pages = new WP_Query([
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'meta_key'       => '_sort_order',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
            'meta_query'     => [
                [
                    'key'     => 'is_header',
                    'value'   => '1', // or true
                    'compare' => '=',
                ],
            ],
        ]);

        if ($header_pages->have_posts()) {
        ?>
            <?php while ($header_pages->have_posts()) {
                $header_pages->the_post();
                $post_id = get_the_ID();
                $slug = get_post_field('post_name', get_the_ID());


            ?>
                <div source="<?php echo $slug; ?>" class="bannerArea <?php echo $post_id  == 97 ? "active" : ""; ?>">
                    <div class="img">
                        <?php

                        if (has_post_thumbnail($post_id)) {
                            $thumbnail_id = get_post_thumbnail_id($post_id);
                            $image_url = wp_get_attachment_url($thumbnail_id);
                            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            $title_text = get_the_title($thumbnail_id);
                            if (empty($alt_text)) {
                                $alt_text = get_the_title($post_id);
                            }
                            if (empty($title_text)) {
                                $title_text = get_the_title($post_id);
                            }


                            echo '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        } else {
                            $banner_video = get_field('banner_video', $post_id);

                            if ($banner_video && !empty($banner_video['url'])) {
                                echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
                            }
                        }
                        ?>
                    </div>
                    <div class="content">
                        <div class="headingLike">
                            <p class="title"><?php the_title(); ?></p>
                            <p><?php echo strip_tags(get_the_content()); ?></p>
                        </div>

                        <?php
                        if ($post_id  == 97) {
                            $cats = new WP_Query([
                                'posts_per_page' => -1,
                                'post_type'      => 'category',
                                'post_status'    => 'publish',
                                'meta_key'       => '_sort_order',
                                'orderby'        => 'meta_value_num',
                                'order'          => 'ASC',
                            ]);

                            if ($cats->have_posts()) {
                        ?>
                                <div class="links">

                                    <?php while ($cats->have_posts()) {
                                        $cats->the_post();
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
                                            ],
                                        ]);
                                        $count = $products->found_posts;
                                    ?>

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span>&nbsp; (<?php echo str_pad($count, 2, '0', STR_PAD_LEFT); ?>)</span></a>
                                    <?php } ?>
                                </div>
                        <?php wp_reset_postdata();
                            }
                        }

                        ?>



                    </div>
                </div>

        <?php
            }
        }


        ?>


        <div class="else">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cotton.jpg" alt="">
        </div>

        <div class="mediaArea">
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/insta.png'; ?>"
                        alt="instagram"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>"
                        alt="facebook"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/x.png'; ?>"
                        alt="twitter"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>"
                        alt="linkedin"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/youtube.png'; ?>"
                        alt="youtube"></a>
            </div>
            <p>All Rights Reserved. BTC</p>
        </div>
    </div>
    <?php


    if ($header_pages->have_posts()) {
    ?>

        <div class="right">
            <?php while ($header_pages->have_posts()) {
                $header_pages->the_post();
                $post_id = get_the_ID();
                $slug = get_post_field('post_name', get_the_ID());


            ?>
                <a path='<?php echo $slug ?>' class="<?php echo $post_id  == 97 ? "active" : ""; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php } ?>
        </div>
    <?php } ?>
</section>