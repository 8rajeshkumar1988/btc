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


    if ($banner_video && !empty($banner_video['url'])) {
        echo '<video class="js-lazy-why-hero-video" playsinline muted loop preload="none" poster="' . esc_url($image_url) . '" data-src="' . esc_url($banner_video['url']) . '"></video>';
    } else  if (has_post_thumbnail()) {
        $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>


    <div class="content">
        <p class="breadcrub"><a href="<?php echo t('homeUrl') ?>">Accueil </a> / <?php the_title() ?></p>
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
        <img
            loading="lazy"
            style="height: 1px; width: 1px; visibility: hidden;"
            class="globalSearch_fallback"
            src="<?php echo get_template_directory_uri() . '/assets/images/world-map-btc.svg'; ?>"
            alt="Global market reach map connecting Benin with US, EU, UK and UAE">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
        <lottie-player
            style="height: 100%;
                width: 100%;
                position: relative;
                display: block;"
            id="lottieCanvas"
            src="<?php echo get_template_directory_uri() . '/assets/images/map.json'; ?>">
        </lottie-player>
    </div>
    <div class="content_wrapper" style="max-width: 650px;">
        <div class="content" animateHeading>
            <h2>Emplacement Stratégique  <br> & Portée Mondiale</h2>
            <ul>
                <li>Proximité des principaux marchés des États-Unis, de l'UE, du Royaume-Uni et des Émirats Arabes Unis</li>
                <li>Délai d'exécution rapide grâce à la connectivité aérienne et maritime</li>
            </ul>
        </div>
    </div>
</section>

<section id="sustainableManufacturer">
    <div>
        <div class="img">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/SustainableManufacturing.webp"  ?>" alt="Sustainable Manufacturing"  />
            <p>Confection <br>Durable</p>
        </div>
        <div class="text">
            <p>Chaque étape est conçue pour réduire l'impact environnemental et élever les normes de l'industrie.</p>
            <ul>
                <li>Coton local certifié CmiA pour un approvisionnement éthique</li>
                <li>Systèmes ZLD pour un recyclage à 100% de l'eau</li>
                <li>Installations certifiées LEED utilisant de l'énergie propre</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="text">
            <p>CmiA (Coton fabriqué en Afrique) HIP ainsi que l'approvisionnement en coton local certifié Mass balance. </p>
            <ul>
                <li>Suivi effectué par blockchain à toutes les étapes</li>
                <li>Approvisionnement certifié FibreTrace® et GOTS</li>
                <li>Lots de codes QR pour la transparence</li>
            </ul>
        </div>
        <div class="img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/whybtc/full-traceability-benin-textile.jpg"  ?>" alt="Full Traceability" />
            <p>Traçabilité <br>Totale</p>
        </div>
    </div>
    <div>
        <div class="img">
            <!-- <img src="<?php echo get_template_directory_uri() . "/assets/images/PeoplePrinciples.jpg"  ?>" alt="SustainableManufacturing" /> -->
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/vision.webp"  ?>" alt="People & Principles" />
            <p>Personnes et <br>Principes</p>
        </div>
        <div class="text">
            <p>Nos politiques en matière de main-d'œuvre sont fondées sur l'équité, la sécurité et la conformité.</p>
            <ul>
                <li>Salaires décents pour tous les postes</li>
                <li>Opérations certifiées Wrap, BSCI, ISO, Oekotex, SMETA et OCS</li>
                <li>Audité via l'indice Higg pour la performance environnementale et sociale</li>
            </ul>
        </div>
    </div>
    <div>
        <div class="text">
            <p>Avec chaque processus effectué dans un même lieu, nous avançons plus vite, mieux et avec contrôle.</p>
            <ul>
                <li>Filage, tricotage, teinture et vêtement en interne</li>
                <li>Assurance qualité de bout en bout</li>
                <li>Des délais plus courts, des efficacités plus élevées</li>
            </ul>
        </div>
        <div class="img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/VerticalIntegration.webp"  ?>" alt="Vertical Integration" />
            <p>Intégration <br>Verticale</p>
        </div>
    </div>
    <div>
        <div class="img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/Partners-Benin-Textile-Corporation-Apparel-Manufacturing-2.jpg"  ?>" alt="Strategic  Partnerships" />
            <p>Partenariats <br>Stratégiques</p>
        </div>
        <div class="text">
            <p>Nous nous concentrons sur des partenariats à long terme et créateurs de valeur fondés sur la confiance et la collaboration.</p>
            <ul>
                <li>Des capacités fiables et à long terme garantissant un approvisionnement constant</li>
                <li>Des solutions durables et axées sur la croissance pour nos partenaires</li>
                <li>Approche d'engagement transparente et axée sur le client</li>
            </ul>
        </div>
    </div>
    <img loading="lazy" class="layer" src="<?php echo get_template_directory_uri() . "/assets/images/whyPattern.png"  ?>" alt="Strategic Partnerships" btcPattern />
</section>

<section id="glance">
    <img loading="lazy" class="svg" src="<?php echo get_template_directory_uri() . "/assets/images/world-map-btc.svg"  ?>" alt="Benin At A Glance">

    <div class="content">
        <div >
            <p class="first">Pôle économique en croissance de l’Afrique de l’Ouest</p>
            <p class="second">Aperçu du Bénin </p>
        </div>
        <div class='subContent'>
            <div>
                <p class="title">PIB</p>
                <p class="copy">21,48 milliards USD</p>
            </div>
            <div>
                <p class="title">Croissance du PIB</p>
                <p class="copy">7,5 %</p>
            </div>
            <div>
                <p class="title">Monnaie</p>
                <p class="copy">Franc CFA </p>
            </div>
            <div>
                <p class="title">Population</p>
                <p class="copy">14,4 millions </p>
            </div>
            <div>
                <p class="title">Région</p>
                <p class="copy2" style="text-transform: uppercase;">Afrique de l’Ouest (456 millions d’habitants)</p>
            </div>
            <div>
                <p class="title">Appartenances </p>
                <p class="copy2">CEDEAO, UEMOA, OMC, AGOA (États-Unis), EBA, ACP/UE</p>
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
    <!-- <img class="layer" src="<?php echo get_template_directory_uri() . "/assets/images/homeOfBtc.png"  ?>" alt=""> -->
    
    <div class="heading" animateHeading>
        <p>Siège de BTC</p>
        <h3>Zone industrielle de GDIZ-Glo-Djigbé</h3>
    </div>
    <div class="content">
        <div class="first" animateHeading>
            <p>BTC est fièrement basée dans la zone industrielle de GDIZ - Glo-Djigbé, un projet de développement public-privé soutenu par le gouvernement du Bénin et ARISE IIP, construit pour offrir une infrastructure industrielle de classe mondiale et une facilitation des affaires.</p>
        </div>
        <div>
            <div class="second home-btc-swiper" animateheading>
                <p class="title">Pourquoi GDIZ est important pour nos Clients</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/readyToUse.svg"  ?>" alt="">
                            <div>
                                <p class="titles">Configuration Industrielle & Infrastructure Prête À L'Emploi</p>
                                <p class="copy">Spécialement conçu pour les entreprises du textile, de vêtements et de l'agro-industrie</p>
                            </div>
                        </div>
                        <div>
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/accessoryEcosystem.svg"  ?>" alt="">
                            <div>
                                <p class="titles">Écosystème d'Accessoires</p>
                                <p class="copy">Disponibilité sur site des garnitures, des accessoires et des partenaires de finition des tissus</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/utility-infrastructure.png"  ?>" alt="">
                            <div>
                                <p class="titles">Infrastructure des Services Publics</p>
                                <p class="copy">Systèmes d'alimentation électrique, d'eau, de vapeur et de gestion des déchets fonctionnelles 24h/24 et 7j/7</p>
                            </div>
                        </div>
                        <div>
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/clearance.png"  ?>" alt="">
                            <div>
                                <p class="titles">Port Sec et Dédouanement Préalable</p>
                                <p class="copy">Toutes les marchandises peuvent être dédouanées dans la zone, réduisant considérablement les retards de congestion portuaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/logistics-hub.png"  ?>" alt="">
                            <div>
                                <p class="titles">Pôle Logistique</p>
                                <p class="copy">Des services logistiques intégrés rendent l'exportation et l'importation fluides et rapides</p>
                            </div>
                        </div>
                        <div>
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/eco-design-principles.png"  ?>" alt="">
                            <div>
                                <p class="titles">Conception Industriel Écologique</p>
                                <p class="copy">Axé sur la durabilité, la traçabilité et les systèmes de Confection numériques</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="why_btc_buttons">
                <button class="why_btc-prev globalNavigation navBtnColor">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
                <button class="why_btc-next globalNavigation navBtnColor">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </div>
    <img loading="lazy" class="layer desk" src="<?php echo get_template_directory_uri() . "/assets/images/gate1.webp"  ?>" alt="">
    <img loading="lazy" class="layer mobile" src="<?php echo get_template_directory_uri() . "/assets/images/gate2.webp"  ?>" alt="">
</section>

<section id="roleOfbtc">
    <img loading="lazy" class="layer" src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png"  ?>" alt="" btcPattern>
    <div class="heading" animateHeading>
        <p>Générer Un Impact Local, Créer Un Changement Mondial</p>
        <h3>Contribution de BTC au Prochain Chapitre du Bénin</h3>
    </div>
    <div class="content">
        <div>
            <div class="text">
                <p>Le Bénin est le plus grand producteur de coton en Afrique avec des volumes dépassant 400 000 tonnes par an.</p><br>
                <p>Il est classé 9ème au niveau mondial et GDIZ vise à tirer parti de cette opportunité en se conformant aux plans ambitieux du gouvernement béninois pour accélérer la transformation du coton et faire exploser l'activité textile.</p>
            </div>
            <div class="img">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/roleOfBtc1.jpg"  ?>" alt="">
            </div>
        </div>
        <div>
            <div class="img">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/Benin-training-local-talent-Benin-Textile.jpg"  ?>" alt="">
            </div>
            <div class="text">
                <p>En produisant à la source, BTC crée une plus-value au Bénin—en formant des talents locaux, en faisant progresser l'adoption de la technologie et en réduisant la dépendance à l'égard des produits textiles importés.</p> <br>
                <p>Notre système verticalement intégré soutient le développement du pays tout en offrant efficacité, traçabilité et qualité aux partenaires mondiaux.</p>
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