 <section id="customization">
     <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
     <div class="heading">
         <p>Customisations</p>
         <h2>Flexibility Woven In</h2>
     </div>
     <div class="customization_container">
         <div class="customization_buttons">
             <?php

                $cats = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'customiz_category',
                    'orderby' => 'title',
                    'post_status'    => 'publish',
                    'meta_key'       => '_sort_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',

                ));

                if ($cats->have_posts()) {
                    $counter = 1;
                    while ($cats->have_posts()) {
                        $cats->the_post();
                        $category_id = get_the_ID();
                        $title = get_the_title();
                        $titles = explode(" ", $title);
                        $title_name = strtolower($titles[0]);



                ?>
                     <button class="cta <?php echo $counter == 1 ? "active" : "unactive" ?>" data-tab="<?php echo $title_name; ?>"> <?php the_title(); ?></button>

                 <?php $counter++;
                    } ?>
         </div>
         <?php
                    $counter = 1;
                    while ($cats->have_posts()) {
                        $cats->the_post();
                        $category_id = get_the_ID();
                        $title = get_the_title();
                        $titles = explode(" ", $title);
                        $title_name = strtolower($titles[0]);

            ?>
             <div class="customization_text <?php echo $counter == 1 ? "active" : "" ?>" id="<?php echo $title_name; ?>_text">
                 <?php echo get_the_content(); ?>
             </div>
         <?php
                        $counter++;
                    }
                    $counter = 1;
                    while ($cats->have_posts()) {
                        $cats->the_post();
                        $category_id = get_the_ID();
                        $title = get_the_title();
                        $titles = explode(" ", $title);
                        $title_name = strtolower($titles[0]);
            ?>
             <div class="customization_cards <?php echo $counter == 1 ? "active" : "unactive" ?>" id="<?php echo $title_name; ?>">

                 <?php
                        $products = new WP_Query([
                            'post_type'      => 'customization_type',
                            'posts_per_page' => -1,
                            'meta_query'     => [
                                [
                                    'key'     => '_customiz_category_id',
                                    'value'   => $category_id,
                                    'compare' => '=',
                                ],
                            ],
                        ]);
                        if ($products->have_posts()) { ?>



                     <?php

                            while ($products->have_posts()) {
                                $products->the_post();
                        ?>
                         <div class="customization_card">
                             <?php
                                if (has_post_thumbnail()) {
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

                                    echo '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                                }
                                ?>
                             <p>
                                 <strong><?php the_title(); ?></strong> <br />
                                 <?php echo get_field('content') ?>
                             </p>
                         </div>

                     <?php





                            }



                        ?>




                     <!-- <div style="justify-content: flex-end" class="customization_card">
        <button class="cta">
            Start Customizing Today
            <img src="../assets/right_arrow.svg" alt="" />
        </button>
        </div>
    </div> -->

         <?php




                            wp_reset_postdata();
                        }


                        $counter++;
                        echo "</div>";
                    }
                }
                wp_reset_postdata();
            ?>










         <!-- <div class="customization_cards" id="yarn">
        <div class="customization_card">
            <img src="../assets/fabric1.png" alt="" />
            <p>
                <strong>10's to 20's</strong> <br />
                Heavier and thicker knits, ideal for fleece, terry joggers, and
                hoodies
            </p>
        </div>
        <div class="customization_card">
        <img src="../assets/polo-tshirt.png" alt="" />
        <p>
            <strong>20's to 30's</strong> <br />
            Mid-weight for t-shirts, polos, and training wear
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/short-pent.png" alt="" />
        <p>
            <strong>30's to 45's</strong> <br />
            Lightweight, used in base layers, breathable tees, and performance
            tops
        </p>
        </div>
        <div style="justify-content: flex-end" class="customization_card">
        <button class="cta">
            Start Customizing Today
            <img src="../assets/right_arrow.svg" alt="" />
        </button>
        </div>
    </div>

    <div class="customization_cards" id="value">
        <div class="customization_card">
        <img src="../assets/t-shirt.png" alt="" />
        <p>
            <strong>Yarn Dyeing</strong> <br />
            Deep, lasting colors for stripes and heathers; great for polos and
            tees.
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/polo-tshirt.png" alt="" />
        <p>
            <strong>Printing</strong> <br />
            Sublimation, heat transfer, and pigment prints for bold graphics
            and logos.
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/fleeche.png" alt="" />
        <p>
            <strong>Embroidery</strong> <br />
            Clean, minimal branding on active jackets, hoodies, and polos.
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/short-pent.png" alt="" />
        <p>
            <strong>Laundry</strong> <br />
            Enzyme/silicone washes for extra softness, better shrinkage
            control, and comfort.
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/shirt.png" alt="" />
        <p>
            <strong>Auto Striper</strong> <br />
            In-knit stripe patterns for a sporty look, no need for extra
            printing.
        </p>
        </div>
        <div style="justify-content: flex-end" class="customization_card">
        <button class="cta">
            Start Customizing Today
            <img src="../assets/right_arrow.svg" alt="" />
        </button>
        </div>
    </div> -->
                <button class="cta leadpopup">Start Customizing Today <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="" /></button>
             </div>
 </section>