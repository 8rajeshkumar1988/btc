<?php

get_header();
the_post();
?>

<section class="heroBanner">
    <?php
    $banner_video = get_field('banner_video');

    if ($banner_video) {
        echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
    } else  if (has_post_thumbnail()) {
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

        $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>
    <div class="content">
        <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / Contact Us</p>
        <div>
            <div class="heading">
                <p><?php the_title(); ?></p>
                <?php the_content(); ?>
                <button class="cta">Submit <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""> </button>
            </div>
            <div class="contacts">
                <p>Benin Textile Corporation</p>
                <a href="">H7R3+Q7, Ouézoumé, Benin</a>
                <div>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/mailIcon.svg" ?>" alt="">
                    <a href="mailto:marketing.btc@btc.com">marketing.btc@btc.com</a>                    
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/callIcon.svg" ?>" alt="">
                    <a href="tel:+229 5145127009">+229 5145127009</a>
                </div>
            </div>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>
<section id="lead_form">
    <div class="heading">
        <h2>
            Are you a Brand/Buying House <br />
            looking for a one stop textile solution?
        </h2>
    </div>
    <?php get_template_part('components/lead_form'); ?>
</section>


<?php
$faqs = get_post_meta(get_the_ID(), 'category_faqs', true);

if (!empty($faqs)) { ?>
    <section id="faqs">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt="" />
        <div class="heading">
            <p>Your Questions, Answered</p>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="accordian">
            <?php
            $ctr = 1;
            foreach ($faqs as $faq) { ?>
                <div
                    class="faq <?php echo $ctr == 1 ? "default-open" : ""; ?>"
                    style="
            translate: none;
            rotate: none;
            scale: none;
            transform: translate(0px, 0px);
            opacity: 1;
          ">
                    <div class="head">
                        <p><?php echo esc_html($faq['question']); ?></p>
                        <img
                            class="menu open"
                            src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>"
                            alt="clase icon" />
                    </div>
                    <div class="ans" style="display: none">
                        <p>
                            <?php echo esc_html($faq['answer']) ?>
                        </p>
                    </div>
                </div>


            <?php

                $ctr++;
            }
            ?>
        </div>
    </section>
<?php
}
?>



<section id="virtual_factory_experience">
    <div class="heading">
        <p>Inside BTC</p>
        <h2>Virtual Factory Experience</h2>
    </div>
    <!-- <div class="virtual_container">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1752237216067!6m8!1m7!1sCAoSHENJQUJJaEFuNjhNcjFncDBiSHN0enBrb29uUlc.!2m2!1d-4.683459!2d11.8169195!3f224.67!4f5.239999999999995!5f0.7820865974627469" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
    <div class="virtual_container" id="virtualContainer">
        <button class="close_btn" id="closeBtn">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/close.svg"  ?>" alt="" />
        </button>
        <div class="map_overlay" id="mapOverlay">
            Double-click to enter view
        </div>
        <iframe
            id="mapIframe"
            src="https://www.google.com/maps/embed?pb=!4v1752237216067!6m8!1m7!1sCAoSHENJQUJJaEFuNjhNcjFncDBiSHN0enBrb29uUlc.!2m2!1d-4.683459!2d11.8169195!3f224.67!4f5.239999999999995!5f0.7820865974627469"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php get_template_part('components/newsletter_subs_section'); ?>



<!-- <form id="aa-lead-form">
    <input type="text"  name="name"          placeholder="Name*"          required>
    <input type="email" name="email"         placeholder="Email*"         required>
    <input type="text"  name="phone"         placeholder="Phone">
    <input type="text"  name="company"       placeholder="Company">
    <input type="text"  name="enquiry_type"  placeholder="Enquiry Type">
    <textarea           name="requirements"  placeholder="Requirements"></textarea>
    <input type="text"  name="whatsapp"      placeholder="WhatsApp No">
    <input type="text"  name="org_type"      placeholder="Organization Type">
    <button type="submit">Submit Lead</button>
</form> -->



<?php
get_footer();

?>
<script>
    const overlay = document.getElementById("mapOverlay");
    const closeBtn = document.getElementById("closeBtn");
    const iframe = document.getElementById("mapIframe");

    overlay.addEventListener("dblclick", () => {
        iframe.style.pointerEvents = "auto";
        overlay.style.display = "none";
        closeBtn.style.display = "block";
    });

    closeBtn.addEventListener("click", () => {
        iframe.style.pointerEvents = "none";
        overlay.style.display = "flex";
        closeBtn.style.display = "none";
    });
</script>