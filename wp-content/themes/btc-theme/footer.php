<?php wp_footer(); ?>
<section id="footerContact">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/footerContact.jpg'; ?>" alt="">
    <div class="layer"></div>
    <div class="content">
        <div class="heading">
            <p>Contact Us</p>
            <h3>Looking for Seamless, <br>Scalable Manufacturing?</h3>
        </div>
        <p>We offer end-to-end apparel manufacturing under one roof, built for brands and buying houses ready to scale.</p>
        <button class="cta">Contact Us <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
</section>
<footer>
    <div class="top">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/footerlogo.svg'; ?>" alt="btc logo">
        <div>
            <p class="title">Leading Textile Manufacturer & Exporter</p>
            <p class="copy">BTC, located in Benin, is West Africa’s first fully vertically integrated textile factory, transforming rain-fed, non-GMO CmiA-certified cotton into premium apparels</p>
        </div>
    </div>
    <div class="middle">
        <?php
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
            <div>
                <a href="<?php echo site_url('/products') ?>" class="title">Products</a>
                <?php while ($cats->have_posts()) {
                    $cats->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php } ?>
            </div>
        <?php } ?>
        <div>
            <a href="<?php echo site_url('/about-us') ?>" class="title">About Us</a>
            <a href="<?php echo site_url('/capabilities') ?>">Capabilities</a>
            <a href="<?php echo site_url('/sustainability') ?>">Sustainability</a>
            <a href="<?php echo site_url('/why-btc') ?>">Why BTC</a>
            <a href="">Vertical Integration</a>
            <a href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
        </div>
        <div>
            <a href="" class="title">Media</a>
            <a href="<?php echo site_url('/blogs') ?>">News & Blogs</a>
            <a href="<?php echo site_url('/all-event') ?>">Events & Engagements</a>
        </div>
        <div>
            <div>
                <p class="title">Africa</p>
                <p>H7R3+Q7, Ouézoumé, Benin</p>
            </div>
            <div>
                <p class="title">Email</p>
                <a href="mailto:sales@btcorpnet.com">sales@btcorpnet.com</a>
            </div>
            <div>
                <p class="title">Phone</p>
                <a href="tel:+229 5145127009">+229 5145127009</a>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="left">
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/insta.png'; ?>" alt="instagram"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>" alt="facebook"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/x.png'; ?>" alt="twitter"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>" alt="linkedin"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/youtube.png'; ?>" alt="youtube"></a>
            </div>
            <div class="right">
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
        </div>
            <p>All Rights Reserved. BTC</p>
        </div>
        <div class="right">
            <a href="<?php echo site_url('/privacy-policy') ?>">Privacy Policy</a>
            <a href="<?php echo site_url('/terms-and-conditions') ?>">Terms & Conditions</a>
        </div>
    </div>
</footer>
</body>

</html>