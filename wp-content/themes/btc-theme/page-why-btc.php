<?php
get_header();
?>
<section class="heroBanner">

    <?php
    $banner_video = get_field('banner_video');
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


    if ($banner_video) {
        echo '<video playsinline autoplay muted loop poster="' . $image_url . '" src="' . esc_url($banner_video['url']) . '"></video>';
    } else  if (has_post_thumbnail()) {
        $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>


    <div class="content">
        <p class="breadcrub"><a href="<?php echo site_url(HOME_PAGE) ?>">Home</a> / <?php the_title() ?></p>
        <div class="heading" animateHeadingBanner>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>

<section id="globalSearch">
    <!-- class="lottie" id="myLottie" -->
    <div class="worldMap lottie" id="lottie-animation">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
        <lottie-player
            style="height: 100%;
                width: 100%;
                position: relative;
                display: block;"
            id="lottieCanvas"
            src="<?php echo get_template_directory_uri() . '/assets/images/world_map_lottie.json'; ?>">
        </lottie-player>
    </div>
    <div class="content_wrapper">
        <div class="content" animateHeading>
            <h2>Strategic Location & <br>Global Reach</h2>
            <ul>
                <li>Proximity to key markets in the USA & EU</li>
                <li>Quick turnarounds through air and sea connectivity</li>
            </ul>
        </div>
    </div>
</section>

<section id="sustainableManufacturer">
    <div>
        <div class="img">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/SustainableManufacturing.jpg"  ?>" alt="SustainableManufacturing"  />
            <p>Sustainable <br>Manufacturing</p>
        </div>
        <div class="text">
            <p>Every step is designed to lower impact and raise industry standards.</p>
            <ul>
                <li>CmiA-certified cotton for ethical sourcing</li>
                <li>ZLD systems for 100% water recycling</li>
                <li>LEED-certified facilities using clean energy</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="text">
            <p>We trace every product from cotton field to customer, in real time.</p>
            <ul>
                <li>Blockchain-backed tracking across all stages</li>
                <li>FibreTrace® and GOTS-certified sourcing</li>
                <li>QR-coded batches for transparent visibility</li>
            </ul>
        </div>
        <div class="img">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/whybtc/full-traceability-benin-textile.jpg"  ?>" alt="SustainableManufacturing" />
            <p>Full <br>Traceability</p>
        </div>
    </div>
    <div>
        <div class="img">
            <!-- <img src="<?php echo get_template_directory_uri() . "/assets/images/PeoplePrinciples.jpg"  ?>" alt="SustainableManufacturing" /> -->
            <img src="<?php echo get_template_directory_uri() . "/assets/images/vision.jpg"  ?>" alt="SustainableManufacturing" />
            <p>People & <br>Principles</p>
        </div>
        <div class="text">
            <p>Our workforce policies are built on fairness, safety and compliance.</p>
            <ul>
                <li>Living wages across all roles</li>
                <li>WRAP, ISO & Oeko-Tex certified operations</li>
                <li>Audited via Higg Index for social performance</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="text">
            <p>With every process under one roof, we move faster, better and with control.</p>
            <ul>
                <li>In-house spinning, knitting, dyeing and garmenting</li>
                <li>End-to-end quality assurance</li>
                <li>Shorter timelines, fewer inefficiencies</li>
            </ul>
        </div>
        <div class="img">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/VerticalIntegration.jpg"  ?>" alt="SustainableManufacturing" />
            <p>Vertical <br>Integration </p>
        </div>
    </div>
    <div>
        <div class="img">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/Partners-Benin-Textile-Corporation-Apparel-Manufacturing-2.jpg"  ?>" alt="SustainableManufacturing" />
            <p>Visionary <br>Partnerships</p>
        </div>
        <div class="text">
            <p>Our investors back more than business, they power Africa’s industrial future.</p>
            <ul>
                <li>Arise IIP: Pan-African industrial platform</li>
                <li>CDCB: Benin’s national growth enabler</li>
                <li>Benin Cotton, SODECO, LCB, SBTC: CottonvValue chain anchors</li>
            </ul>
        </div>
    </div>
    <img class="layer" src="<?php echo get_template_directory_uri() . "/assets/images/whyPattern.png"  ?>" alt="SustainableManufacturing" btcPattern />
</section>

<section id="glance">
    <img class="svg" src="<?php echo get_template_directory_uri() . "/assets/images/world-map-btc.svg"  ?>" alt="Benin At A Glance">

    <div class="content">
        <div >
            <p class="first">West Africa’s Growing Economy Hub</p>
            <p class="second">Benin At A Glance</p>
        </div>
        <div class='subContent'>
            <div>
                <p class="title">GDP</p>
                <p class="copy">$59.241 BN</p>
            </div>
            <div>
                <p class="title">GDP Growth</p>
                <p class="copy">6.4%</p>
            </div>
            <div>
                <p class="title">Currency</p>
                <p class="copy">FCFA (XOF)</p>
            </div>
            <div>
                <p class="title">Population</p>
                <p class="copy">14.8 MN</p>
            </div>
            <div>
                <p class="title">Region</p>
                <p class="copy2" style="text-transform: uppercase;">West Africa (300 MN Inhabitants)</p>
            </div>
            <div>
                <p class="title">Affiliations</p>
                <p class="copy2">ECOWAS, UEMOA, WTO, AGOA (USA), EBA, ACP/EU</p>
            </div>
        </div>
    </div>

</section>

<style>
    .swiper-slide {
        transition: filter 0.3s ease;
    }

    /* Blur only during transition */
    .blurring.swiper-slide-prev,
    .blurring.swiper-slide-next {
        filter: blur(6px);
    }

    .blurring.swiper-slide-active {
        filter: blur(0);
    }
</style>

<section id="homeOfBtc">
    <img class="layer" src="<?php echo get_template_directory_uri() . "/assets/images/homeOfBtc.png"  ?>" alt="">
    <div class="heading" animateHeading>
        <p>Home of BTC</p>
        <h3>GDIZ – Glo-Djigbé Industrial Zone</h3>
    </div>
    <div class="content">
        <div class="first" animateHeading>
            <p>BTC is proudly based in <strong>GDIZ - Glo-Djigbé Industrial Zone</strong>, a public-private development project backed by the Government of Benin and ARISE IIP, built to offer world-class industrial infrastructure and business facilitation.</p>
        </div>
        <div>
            <div class="second home-btc-swiper" animateheading>
                <p class="title">Why GDIZ Matters to Our Clients</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/readyToUse.svg"  ?>" alt="">
                            <div>
                                <p class="titles">Ready-To-Use Infra & Industrial Setup</p>
                                <p class="copy">Purpose-built for textile, apparel, and agro-industrial businesses</p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/accessoryEcosystem.svg"  ?>" alt="">
                            <div>
                                <p class="titles">Accessory Ecosystem</p>
                                <p class="copy">On-site availability of trims, accessories, and fabric finishing partners</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/utility-infrastructure.png"  ?>" alt="">
                            <div>
                                <p class="titles">Utility Infrastructure</p>
                                <p class="copy">24/7 power supply, water, steam, and waste management systems</p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/clearance.png"  ?>" alt="">
                            <div>
                                <p class="titles">Dry Port & Pre-Customs Clearance</p>
                                <p class="copy">All goods can be customs-cleared within the zone, drastically reducing port congestion delays</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/logistics-hub.png"  ?>" alt="">
                            <div>
                                <p class="titles">Logistics Hub</p>
                                <p class="copy">Integrated logistics services make export and import seamless and time-efficient</p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/eco-design-principles.png"  ?>" alt="">
                            <div>
                                <p class="titles">Eco-Industrial Design</p>
                                <p class="copy">Focused on sustainability, traceability, and digital manufacturing systems</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="why_btc_buttons">
                <button class="why_btc-prev">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
                <button class="why_btc-next">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </div>
</section>

<section id="roleOfbtc">
    <img class="layer" src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" btcPattern>
    <div class="heading" animateHeading>
        <p>Driving Local Impact, Creating Global Change</p>
        <h3>BTC's Role in Benin's Next Chapter</h3>
    </div>
    <div class="content">
        <div>
            <div class="text">
                <p>Benin is the <strong>largest producer of cotton in Africa</strong> with volumes exceeding 400,000 MT annually. </p> <br>
                <p> It is ranked <strong>9th globally</strong> and GDIZ aims to leverage this opportunity complying with the Beninese government’s ambitious plans to <strong>accelerate cotton transformation</strong> and <strong>skyrocket the textile business.</strong></p>
            </div>
            <div class="img">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/roleOfBtc1.jpg"  ?>" alt="">
            </div>
        </div>
        <div>
            <div class="img">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/Benin-training-local-talent-Benin-Textile.jpg"  ?>" alt="">
            </div>
            <div class="text">
                <p>By producing at the source, BTC creates value within Benin<strong>—training local talent, advancing tech adoption, and reducing reliance on imported textiles.</strong> </p> <br>
                <p> Our vertically integrated system supports the country’s development while delivering efficiency, traceability and <strong>quality for global partners.</strong></p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let player = document.getElementById("lottieCanvas");

        player.addEventListener("ready", () => {
            LottieInteractivity.create({
                mode: "scroll",
                player: "#lottieCanvas",
                actions: [{
                    visibility: [0.2, 2.0],
                    type: "seek",
                    frames: [0, 1000],
                }, ]
            });
        });
    });
</script>

<?php
get_footer();

?>