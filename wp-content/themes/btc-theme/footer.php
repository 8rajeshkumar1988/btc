<?php wp_footer(); ?>
<?php

$lang = get_locale();
?>
<section id="footer_img_frame">
    <div id="footerContact">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/footerContact.webp'; ?>" alt="">
        <div class="layer"></div>
        <div class="content">
            <div class="heading">
                <p><?php
                echo t('ContactUs');
                ?></p>
                <h3><?php
                 echo t('contactFooterHeader');                
                ?></h3>
            </div>
            <p class='footerCopy'><?php
                echo t('contactFooterCopy');
                ?></p>
            <button onclick="scrollToSectionById('lead_form')" class="cta leadpopup"><?php
                echo t('ContactUs');
                ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
    </div>
</section>

<button onclick="scrollToTop()" id="backToTop" class="backtoTop" aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke-width='1'>
        <path d="m26.71 10.29-10-10a1 1 0 0 0-1.41 0l-10 10 1.41 1.41L15 3.41V32h2V3.41l8.29 8.29z" class="arrow-path" stroke='1' stroke-width='1' />
    </svg>
</button>


<footer>
    <div class="top">
        <a href="<?php echo t('homeUrl') ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/footerlogo.svg'; ?>" alt="btc logo"></a>
        <div>
            <!-- <p class="title">Leading Textile Manufacturer & Exporter</p> -->
            <p class="title"><?php
                echo t('footerHeading');
                ?></p>
            <p class="copy"><?php
                echo t('footerCopy');
                ?></p>
        </div>
    </div>
    
    <?php 
        if($lang=='fr_FR'){
            $contact_url=site_url('/fr/contactez-nous');
            $about_url=site_url('/fr/a-propos-de-nous');
            $capabilities_url=site_url('/fr/capacites');
            $sustainability_url=site_url('/fr/durabilite');
            $whyBTC_url=site_url('/fr/pourquoi-btc');
            $products_url=site_url('/fr/nos-produits');
            $verticalIntegration_url=site_url('/fr/integration-verticale');
            $events =site_url('/fr/evenements-et-engagements');
            $news =site_url('/fr/tous-les-blogs');
            $privacy_policy_url=site_url('/fr/politique-de-confidentialite');
        }else{
            $contact_url=site_url('/contact-us');
            $about_url=site_url('/about-us');
            $capabilities_url=site_url('/capabilities');
            $sustainability_url=site_url('/sustainability');
            $whyBTC_url=site_url('/why-btc');
            $products_url=site_url('/products');
            $verticalIntegration_url=site_url('/vertical-integration');
            $events =site_url('/all-event');
            $news =site_url('/blogs');
            $privacy_policy_url=site_url('/privacy-policy');
        }
        
        ?>
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
                <a href="<?php echo $products_url; ?>" class="title hover"><?php echo t('products'); ?></a>
                <?php while ($cats->have_posts()) {
                    $cats->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="hover"><?php the_title(); ?></a>
                <?php } ?>
            </div>
        <?php } ?>

        <div>
            <a href="<?php echo $about_url; ?>" class="title hover"><?php echo t('aboutUs'); ?></a>
            <a href="<?php echo $capabilities_url; ?>" class="hover"><?php echo t('capabilities'); ?></a>
            <a href="<?php echo $sustainability_url; ?>" class="hover"><?php echo t('sustainability'); ?></a>
            <a href="<?php echo $whyBTC_url; ?>" class="hover"><?php echo t('whyBTC'); ?></a>
            <a href="<?php echo $verticalIntegration_url; ?>" class="hover"><?php echo t('verticalIntegration'); ?></a>
            <a href="<?php echo $contact_url; ?>" class="hover">
                <?php
                echo t('ContactUs');
                ?>

            </a>
        </div>
        <div>
            <p class="title"><?php echo t('media'); ?></p>
            <a href="<?php echo $news; ?>" class="hover"><?php echo t('newsBlogs'); ?></a>
            <a href="<?php echo $events; ?>" class="hover"><?php echo t('eventsEngagements'); ?></a>
        </div>
        <div>
            <div>
                <p class="title"><?php echo t('address'); ?></p>
                <p><?php echo t('addressText'); ?></p>
            </div>
            <div>
                <p class="title"><?php echo t('email'); ?></p>
                <a href="mailto:info.btc@arisenet.com" class="hover">info.btc@arisenet.com</a>
            </div>
            <!-- <div>
                <p class="title"><?php echo t('phone'); ?></p>
                <a href="tel:+229 5145127009" class="hover">+229 5145127009</a>
            </div> -->
        </div>
    </div>
    <div class="bottom">
        <div class="left">
            <?php get_template_part('components/social_links'); ?>
            <div class="right">
                <a href="<?php echo $privacy_policy_url ?>"><?php echo t('privacyPolicy'); ?></a>
                <!-- <a href="<?php echo site_url('/terms-and-conditions') ?>" >Terms & Conditions</a> -->
            </div>
            <p><?php echo t('copyright'); ?></p>
        </div>
        <div class="right">
            <a href="<?php echo $privacy_policy_url ?>" class="hover"><?php echo t('privacyPolicy'); ?></a>
            <!-- <a href="<?php echo site_url('/terms-and-conditions') ?>" class="hover">Terms & Conditions</a> -->
        </div>
    </div>
</footer>


<div class="progessBar">
    <div id="bar"></div>
</div>



<?php
$lang = get_locale();
if ($lang == 'fr_FR') {
    $is_fr = true;
} else {
    $is_fr = false;
}
$switch_url = $is_fr ? site_url('/') : site_url('/fr/');
$switch_label = $is_fr ? 'EN' : 'FR';
$switch_flag = $is_fr ? '🇬🇧' : '🇫🇷';
?>
<div class="lang-switcher langSwitchBtn" id="langSwitcher" data-target-url="<?php echo esc_url($switch_url); ?>">
    <div class="lang-switcher__row">
        <span class="lang-switcher__flag" aria-hidden="true"><?php echo $switch_flag; ?></span>
        <button type="button" class="lang-switcher__btn" aria-label="Switch language to <?php echo esc_attr($switch_label); ?>">
            <?php echo esc_html($switch_label); ?>
        </button>
    </div>
</div>



</body>

</html>