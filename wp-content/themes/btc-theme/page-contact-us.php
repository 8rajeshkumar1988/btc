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
        $banner_image_id   = get_post_thumbnail_id();
        $banner_image = array(
            'url' => wp_get_attachment_image_url($banner_image_id, 'full'),
            'alt' => get_post_meta($banner_image_id, '_wp_attachment_image_alt', true),
        );
        echo '<img src="' . esc_url($banner_image['url']) . '" alt="' . esc_attr($banner_image['alt']) . '">';
    }
    
    ?>
    <div class="content">
        <!-- <p class="breadcrub">Home / Sustainability</p> -->
        <!-- <div class="heading">
          <p style="color: #00000099">SUSTAINABILITY</p>
          <h1 style="color: #000000">
            Eco-Innovation at <br />
            Every Stage
          </h1>
        </div> -->
    </div>
</section>
<section id="lead_form">
    <div class="heading">
        <h2>
            Are you a Brand/Buying House <br />
            looking for a one stop textile solution?
        </h2>
    </div>
    <form action="">
        <div>
            <label for="name">Name</label>
            <br />
            <input id="name" type="text" placeholder="Enter your name" />
        </div>
        <div>
            <label for="email">Email</label>
            <br />
            <input id="email" type="email" placeholder="Enter your email" />
        </div>
        <div>
            <label for="enquiry_type">Enquiry Type</label>
            <br />
            <select id="enquiry_type">
                <option value="general">General Enquiry</option>
                <option value="product">Product Enquiry</option>
                <option value="order">Order Enquiry</option>
            </select>
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <br />
            <input id="phone" type="tel" placeholder="Enter your phone number" />
        </div>
        <div>
            <label for="company">Company Name</label>
            <br />
            <input
                id="company"
                type="text"
                placeholder="Enter your company name" />
        </div>

        <div class="whatsapp_input">
            <div class="whatsapp_container">
                <label for="whatsapp_number">Whatsapp Number</label>
                <div class="checkbox_container">
                    <input type="checkbox" id="whatsapp_checkbox" />
                    <label for="whatsapp_checkbox">Same as phone number</label>
                </div>
            </div>
            <input
                id="whatsapp_number"
                type="tel"
                placeholder="Enter your Whatsapp number" />
        </div>
        <div>
            <label for="Organization">Organization Type</label>
            <br />
            <input
                id="Organization"
                type="text"
                placeholder="Enter your Organization Type" />
        </div>
        <div class="textareaDiv">
            <label for="requirements">Tell Us About Your Requirements</label>
            <br />
            <textarea
                id="requirements"
                rows="3"
                placeholder="Enter your requirements"></textarea>
        </div>
        <div>
            <div class="policy_container">
                <input type="checkbox" id="policy_checkbox" />
                <label for="policy_checkbox">
                    I agree to the BTC privacy policy.*
                </label>
            </div>
        </div>
        <div>
            <div class="e_com_btc">
                <input type="checkbox" id="e_com_btc" />
                <label for="e_com_btc">
                    I agree to receive e-communications from BTC.
                </label>
            </div>
        </div>
        <div class="btn_container">
            <button class="cta">Submit <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt=""> </button>
        </div>
    </form>
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
<section id="newsletter">
    <div class="heading">
        <p>Never Miss an Update</p>
        <h2>Sign Up for Our Newsletter</h2>
    </div>
    <form class="newsletter_form" action="/">
        <div class="f_name">
            <label for="first_name">First Name</label>
            <br />
            <input
                id="first_name"
                type="text"
                placeholder="Enter your first name" />
        </div>
        <div class="l_name">
            <label for="last_name">Last Name</label>
            <br />
            <input
                id="last_name"
                type="text"
                placeholder="Enter your last name" />
        </div>
        <div class="email_g">
            <label for="email">Email</label>
            <br />
            <input id="email" type="email" placeholder="Enter your email" />
        </div>
        <button class="cta">
            Subscribe
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow" />
        </button>
    </form>
</section>


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