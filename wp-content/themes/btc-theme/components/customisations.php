 <section id="customization">
    <img src="../assets/BTC_pattern.png" alt="" />
    <div class="heading">
    <p>Customisations</p>
    <h2>Flexibility Woven In</h2>
    </div>
    <div class="customization_container">
    <div class="customization_buttons">
        <button class="cta active" data-tab="fabric">Fabric types</button>
        <button class="cta unactive" data-tab="yarn">YARN COUNT</button>
        <button class="cta unactive" data-tab="value">VALUE ADDITION</button>
    </div>
    <p class="customization_text active" id="fabric_text">
        From fabric types to yarn specs and value-added finishes, we customise
        every detail to meet your brief seamlessly, efficiently and at scale.
    </p>
    <p class="customization_text" id="yarn_text">
        Active wear uses yarn counts tailored to performance needs and
        durability
    </p>
    <p class="customization_text" id="value_text">
        These enhancements are designed to boost performance, style, and
        overall garment quality
    </p>
    <div class="customization_cards active" id="fabric">
        <div class="customization_card">
        <img src="../assets/t-shirt.png" alt="" />
        <p>
            <strong>Single Jersey</strong> <br />
            Lightweight, breathable, ideal for performance t-shirts & base
            layers
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/polo-tshirt.png" alt="" />
        <p>
            <strong>Pique</strong> <br />
            Structured and breathable, commonly used in sports polos
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/fleeche.png" alt="" />
        <p>
            <strong>Fleece</strong> <br />
            Brushed inner surface for warmth, used in hoodies and winter
            activewear
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/short-pent.png" alt="" />
        <p>
            <strong>Terry (French Terry)</strong> <br />
            Loop-backed, great for sweatshirts, joggers & casual gym wear
        </p>
        </div>
        <div class="customization_card">
        <img src="../assets/shirt.png" alt="" />
        <p>
            <strong>Ribs</strong> <br />
            Used for cuffs, collars, waistbands, and high-flex zones
        </p>
        </div>
        <div style="justify-content: flex-end" class="customization_card">
        <button class="cta">
            Start Customizing Today
            <img src="../assets/right_arrow.svg" alt="" />
        </button>
        </div>
    </div>

    <div class="customization_cards" id="yarn">
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
    </div>
    
    </div>
</section>



<?php

$cats = new WP_Query( array(
    'posts_per_page' => -1,
    'post_type' => 'customiz_category',
    'orderby' => 'title',
    'post_status'    => 'publish',
    'meta_key'       => '_sort_order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',

) );

if ( $cats->have_posts() ) {
    while( $cats->have_posts() ) {
        $cats->the_post();
        $category_id = get_the_ID();
      
        ?>
        
        <?php the_title();?>
        <?php
        $products = new WP_Query( [
            'post_type'      => 'customization_type',
            'posts_per_page' => -1,       
            'meta_query'     => [
                [
                    'key'     => '_customiz_category_id',
                    'value'   => $category_id,
                    'compare' => '=',
                ],
            ],
        ] );
        if ( $products->have_posts() ) {
            echo '<ul class="product-list">';
            while ( $products->have_posts() ) {
                $products->the_post();

                echo '<li>';
                echo '<h3>' . get_the_title() . '</h3>';

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'thumbnail' );
                }

                echo '</li>';
            }
            echo '</ul>';
            wp_reset_postdata();

        }

        echo '<br/>';

    }
}
wp_reset_postdata();
?>