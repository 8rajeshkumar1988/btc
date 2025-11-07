<?php wp_footer(); ?>
<section id="footer_img_frame">
    <div id="footerContact">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/footerContact.jpg'; ?>" alt="">
        <div class="layer"></div>
        <div class="content">
            <div class="heading">
                <p>Contact Us</p>
                <h3>Looking for Seamless, <br>Scalable Textile Manufacturing?</h3>
            </div>
            <p class='footerCopy'>We offer end-to-end apparel manufacturing under one roof, built for brands, retailers and buying houses ready to scale.</p>
            <button  onclick="scrollToSectionById('lead_form')" class="cta leadpopup">Contact Us <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
    </div>
</section>

<button onclick="scrollToTop()" id="backToTop" class="backtoTop" aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke-width='1'>
        <path d="m26.71 10.29-10-10a1 1 0 0 0-1.41 0l-10 10 1.41 1.41L15 3.41V32h2V3.41l8.29 8.29z" class="arrow-path" stroke='1' stroke-width='1'/>
    </svg>
</button>


<footer>
    <div class="top">
        <a href="<?php echo site_url(HOME_PAGE) ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/footerlogo.svg'; ?>" alt="btc logo"></a>
        <div>
            <!-- <p class="title">Leading Textile Manufacturer & Exporter</p> -->
            <p class="title">Leading Textile Manufacturer & Garment Exporter</p>
            <p class="copy">BTC, located in Benin, is West Africa’s first fully vertically integrated textile factory, transforming rain-fed, non-GMO CmiA-certified local cotton into premium knit apparels.</p>
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
                <a href="<?php echo site_url('/products') ?>" class="title hover">Products</a>
                <?php while ($cats->have_posts()) {
                    $cats->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="hover"><?php the_title(); ?></a>
                <?php } ?>
            </div>
        <?php } ?>
        <div>
            <a href="<?php echo site_url('/about-us') ?>" class="title hover">About Us</a>
            <a href="<?php echo site_url('/capabilities') ?>" class="hover">Capabilities</a>
            <a href="<?php echo site_url('/sustainability') ?>" class="hover">Sustainability</a>
            <a href="<?php echo site_url('/why-btc') ?>" class="hover">Why BTC</a>
            <a href="<?php echo site_url('/vertical-integration') ?>" class="hover">Vertical Integration</a>
            <a href="<?php echo site_url('/contact-us') ?>" class="hover">Contact Us</a>
        </div>
        <div>
            <p class="title">Media</p>
            <a href="<?php echo site_url('/blogs') ?>" class="hover">News & Blogs</a>
            <a href="<?php echo site_url('/all-event') ?>" class="hover">Events & Engagements</a>
        </div>
        <div>
            <div>
                <p class="title">Address</p>
                <p>Ilot C/SB, Tangbo-Djèvié, Plot F-1, Maison Etat Béninois, Zè - Benin</p>
            </div>
            <div>
                <p class="title">Email</p>
                <a href="mailto:info.btc@arisenet.com" class="hover">info.btc@arisenet.com</a>
            </div>
            <!-- <div>
                <p class="title">Phone</p>
                <a href="tel:+229 5145127009" class="hover">+229 5145127009</a>
            </div> -->
        </div>
    </div>
    <div class="bottom">
        <div class="left">
           <?php get_template_part('components/social_links'); ?>
            <div class="right">
                <a href="<?php echo site_url('/privacy-policy') ?>" >Privacy Policy</a>
                <a href="<?php echo site_url('/terms-and-conditions') ?>" >Terms & Conditions</a>
            </div>
            <p>Copyright© 2025, Benin Textile Corporation</p>
        </div>
        <div class="right">
            <a href="<?php echo site_url('/privacy-policy') ?>" class="hover">Privacy Policy</a>
            <a href="<?php echo site_url('/terms-and-conditions') ?>" class="hover">Terms & Conditions</a>
        </div>
    </div>
</footer>


<div class="progessBar">
    <div id="bar"></div>
</div>

</body>

</html>