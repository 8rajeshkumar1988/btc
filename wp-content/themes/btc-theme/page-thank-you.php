<?php

get_header();
the_post();
?>

<section class="thankYou">
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
    <div class="content_wrapper">
        <dotlottie-wc class="lottie" id="thankYouLottie" src=<?php echo get_template_directory_uri() . '/assets/images/complete.lottie'; ?>    autoplay></dotlottie-wc>
        <div class="content" animateHeading>
            <h1>Thank You</h1>
            <p>We have received your query. <br> Our team will get back to you shortly.</p>
        </div>
    </div>
</section>
<?php get_template_part('components/socials'); ?>
<?php get_template_part('components/newsletter_subs_section'); ?>
<?php
get_footer();

?>