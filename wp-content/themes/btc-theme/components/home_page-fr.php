<section class="heroBanner homePage_banner">
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
        echo '<video class="hero-banner-video js-lazy-hero-video" playsinline autoplay muted loop preload="none" poster="' . esc_url($image_url) . '" data-src="' . esc_url($banner_video['url']) . '" fetchpriority="high"></video>';
    } else  if (has_post_thumbnail()) {
        $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '" fetchpriority="high">';
        echo $image;
    }

    ?>
    <script>
        (function () {
            var video = document.querySelector('.js-lazy-hero-video');
            if (!video || video.getAttribute('src')) {
                return;
            }

            var videoSrc = video.getAttribute('data-src');
            if (!videoSrc) {
                return;
            }

            var hasLoaded = false;
            var interactionEvents = ['pointerdown', 'touchstart', 'keydown', 'scroll'];

            function loadHeroVideo() {
                if (hasLoaded) {
                    return;
                }

                hasLoaded = true;
                video.setAttribute('src', videoSrc);
                video.removeAttribute('data-src');
                video.load();
                video.play().catch(function () {
                    return;
                });

                cleanup();
            }

            function cleanup() {
                interactionEvents.forEach(function (eventName) {
                    window.removeEventListener(eventName, loadHeroVideo, true);
                });
            }

            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function (entries) {
                    if (entries[0] && entries[0].isIntersecting) {
                        loadHeroVideo();
                        observer.disconnect();
                    }
                }, { rootMargin: '200px 0px' });

                observer.observe(video);
            }

            interactionEvents.forEach(function (eventName) {
                window.addEventListener(eventName, loadHeroVideo, { passive: true, once: true, capture: true });
            });

            if ('requestIdleCallback' in window) {
                requestIdleCallback(loadHeroVideo, { timeout: 2500 });
            } else {
                window.setTimeout(loadHeroVideo, 2500);
            }
        })();
    </script>



    <div class="content">
        <p class="breadcrub">&nbsp;</p>
        <div class="heading" >
            <div>
                <p><?php the_title(); ?></p>
                <?php the_content(); ?>
            </div>
            <button class="cta leadpopup">Lancez Votre Gamme De Produits<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>

<?php get_template_part('components/home_about_btc_section'); ?>

<section id="ourProducts">
    <div class="heading" animateHeading >
        <p>Nos Produits</p>
        <h2>Du Fil au Vêtement - <br>Solutions Complètes de Vêtements</h2>
    </div>
    <div class="content">
        <div class="swiper ourProducts">
            <div class="swiper-wrapper">

                <?php

                $clients = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'category',
                    'orderby' => 'title',
                    'post_status'    => 'publish',
                    'meta_key'       => '_sort_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',

                ));

                if ($clients->have_posts()) {
                    while ($clients->have_posts()) {
                        $clients->the_post();
                ?>

                        <div class="swiper-slide items">
                            <div>
                                <?php
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

                                $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                                echo  $image;

                                ?>
                                <p class="title"><?php the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="cta">Voir la gamme<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></a>
                            </div>
                            <p><?php the_title(); ?></p>
                        </div>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="btnss">
                <button class="swiper-button-next productNext globalNavigation navBtnColor" aria-label="Next products"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
                <button class="swiper-button-prev productPrev globalNavigation navBtnColor" aria-label="Previous products"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
            </div>
        </div>
    </div>
</section>


<section id="sustainabiltyStandard">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/sustain_back_svg.png'; ?>" alt="" class="back_svg" btcPattern>
    <div class="leftContent">
        <div class="heading" animateHeading>
            <p>Normes de Durabilité</p>
            <h3>Conforme Aux Normes Mondiales De Durabilité</h3>
        </div>
        <button class="cta leadpopup" ctaButton>En Savoir Plus <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
    <div class="accordian">
        <div class="faq default-open" >
            <div class="head">
                <p>Empreinte Carbone de l'Usine</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>Nous réduisons les émissions et les déchets grâce à un approvisionnement durable et à une production propre.</p>
                <ul>
                    <li>Coton local certifié CmiA pour un approvisionnement respectueux de l'environnement</li>
                    <li>Zéro Liquid Discharge (ZLD) pour le recyclage de l'eau</li>
                    <li>Énergie propre et Confection à faible impact</li>
                </ul>
            </div>
        </div>
        <div class="faq" >
            <div class="head">
                <p>Infrastructures Durables</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>Nos installations répondent aux critères mondiaux de durabilité, guidés par les normes ESIA et IFC.</p>
                <ul>
                    <li>Bâtiments certifiés LEED pour l'efficacité énergétique</li>
                    <li>Manipulation et stockage sûrs des produits chimiques</li>
                    <li>Évaluations de l'Indice HIGG pour l'impact environnemental et social</li>
                </ul>
            </div>
        </div>
        <div class="faq" >
            <div class="head">
                <p>Technologie</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>La technologie intelligente est le moteur de notre production efficace et respectueuse de l'environnement.</p>
                <ul>
                    <li>Blockchain pour une traçabilité de bout en bout</li>
                    <li>Technologie avancée pour la vitesse et la précision</li>
                    <li>Conception 3D et échantillonnage automatisé</li>
                </ul>
            </div>
        </div>
        <div class="faq" >
            <div class="head">
                <p>Certifications</p>
                <img class="menu open" src="<?php echo get_template_directory_uri() . '/assets/images/arow_donw.svg'; ?>" alt="clase icon">
            </div>
            <div class="ans" style="display: none;">
                <p>Nous respectons les principales normes mondiales en matière de qualité, de sécurité et de durabilité.</p>
                <ul class="certificates">
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ISO.png" ?>" alt=" ISO 9001/45001/14001 - Environmental & safety management">
                        Gestion de l'environnement et de la sécurité
                    </li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/cotton_made_in_africa.png" ?>" alt="Coton Africain durable">    
                    Coton Africain durable</li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/oekotex.webp" ?>" alt="OekoTex - Tested for harmful substances">
                        Testé pour les substances nocives</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/wrap.png" ?>" alt="WRAP - Ethical labor and legal compliance">    
                    Travail éthique et conformité légale</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/leed.png" ?>" alt="LEED - Green, energy-saving buildings">    
                    Bâtiments écologiques et économes en énergie</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/CTPAT_Master_Logo.png" ?>" alt="CTPAT - Secure supply chain for US exports">    
                    Chaîne d'approvisionnement sécurisée pour les exportations américaines</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/bsci.png" ?>" alt="bsci">    
                    Répondre aux normes mondiales d'approvisionnement éthique</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/newhigg.png" ?>" alt="bsci">    
                    Normes De Confection Durables Vérifiées</li>
                    <li>
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/newsmeta.png" ?>" alt="bsci">    
                    Pratiques Éthiques et Responsables En Milieu de Travail</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="ourCapabilities">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/capabilities_back.svg'; ?>" alt="" class="back" btcPattern />
    
    <div class="leftContent heading" animateHeading>
        <p>Nos Capacités</p>
        <h3>De La Ferme À La Mode</h3>
    </div>
    <div class="rightContent">
        <p ourCapabilitiesRightContent>BTC combine une technologie de pointe avec des pratiques durables, garantissant que chaque produit est fabriqué avec soin, précision et responsabilité environnementale.</p>
        <button id="exploreWhatWeDo"   class="cta">Découvrez ce que nous faisons<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
    </div>
    <div class="cap_container swiper ourCapabilities">
        <div class="swiper-wrapper">

            <?php

            $clients = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'homecapability',
                'orderby' => 'title',
                'post_status'    => 'publish',
                'meta_key'       => '_sort_order',
                'orderby'        => 'meta_value_num',
                'order'          => 'ASC',

            ));

            if ($clients->have_posts()) {
                while ($clients->have_posts()) {
                    $clients->the_post();
            ?>

                    <div class="swiper-slide swirl-img">
                        <?php
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

                        $image = '<img class="homecapability__image spiralImage"  src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                        echo  $image;

                        ?>
                        <div class="empty"></div>
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <!-- <img class="line" src="<?php echo get_template_directory_uri() . '/assets/images/line.svg'; ?>" alt=""> -->
                            <div class="line"><div></div></div>
                            <p><?php echo nl2br(get_field('content')); ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="btnssNew">
            <button class="swiper-button-next capabilitiesNext globalNavigation navBtnColor" aria-label="Next capabilities"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
            <button class="swiper-button-prev capabilitiesPrev swiper-button-disabled navBtnColor globalNavigation" aria-label="Previous capabilities"><img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></button>
        </div>
    </div>


    <img src="<?php echo get_template_directory_uri() . '/assets/images/closeSvg.svg'; ?>" alt="" class="closeCapabilities" id="closeCapabilities">
</section>



<?php get_template_part('components/socials'); ?>

<?php get_template_part('components/clients'); ?>

<section id="linkedIn_video">
    <div class="heading" animateHeading>
        <p>Solutions De Confection De Vêtements De Bout En Bout</p>
        <h3>Parc Textile Entièrement Intégré</h3>
        <a href="/btc/fr/capacites"  class="cta">Explorer les Capacités<img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt=""></a>
    </div>
    <video
        id="linkedInVideo"
        class="js-lazy-play-video"
        poster="<?php echo get_template_directory_uri() . '/assets/images/home/BTC_Gate.jpg'; ?>"
        preload="none"
        loop
        muted
        playsinline
        data-src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/homeVideoSec.webm'); ?>">
    </video>
</section>
<div class="blankSpace"></div>

