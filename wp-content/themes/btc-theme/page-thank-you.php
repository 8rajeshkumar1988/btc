<?php

get_header();
the_post();
?>

<section class="thankYou">
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
    <div class="content_wrapper">
        <dotlottie-wc class="lottie" id="myLottie" src=<?php echo get_template_directory_uri() . '/assets/images/complete.lottie'; ?> style="width: 200px;height: 200px"   autoplay></dotlottie-wc>
        <div class="content" animateHeading>
            <h2>Strategic Location & <br>Global Reach</h2>
            <ul>
                <li>Proximity to key markets in the USA & EU</li>
                <li>Quick turnarounds through air and sea connectivity</li>
            </ul>
        </div>
    </div>
</section>
<?php get_template_part('components/socials'); ?>
<?php get_template_part('components/newsletter_subs_section'); ?>
<?php
get_footer();

?>