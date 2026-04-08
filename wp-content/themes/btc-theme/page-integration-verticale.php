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
        echo '<video class="js-lazy-textile-hero-video" playsinline autoplay muted loop preload="none" poster="' . esc_url($image_url) . '" data-src="' . esc_url($banner_video['url']) . '"></video>';
    } else  if (has_post_thumbnail()) {
        $image = '<img  src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>


    <div class="content">
        <p class="breadcrub"><a href="<?php echo site_url(HOME_PAGE) ?>">Accueil</a> / <?php the_title() ?></p>
        <div class="heading" animateHeadingBanner>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>
<section id="textile_details">
    
    <img src="<?php echo get_template_directory_uri() . '/assets/images/textilePattern.png'; ?>" alt="" btcPattern />
    <div animateHeading>
        <p>Parc Textile</p>
        <h2>
        Chez BTC, nous sommes fiers de notre système de <strong> Confection Intégré entièrement vertical</strong>
        </h2>
    </div>
    <div class="description" animateHeading>
        <p>Où chaque étape du processus de production - du coton brut au vêtement fini est méticuleusement gérée à un même emplacement.</p>
        <p>Cela garantit le contrôle de la qualité, l'efficacité, la conformité, la traçabilité et la durabilité à chaque étape.</p>

    </div>
</section>

<div id="progress_indication" class="progress-dots"></div>
<section id="parking">
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Accès Au Coton Local</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Nous commençons par nous approvisionner en coton local nourri par la pluie et certifié CmiA sans OGM (Coton fabriqué en Afrique) directement auprès de fermes fiables et durables. Cela garantit un coton de haute qualité, traçable et respectueux de l'environnement.</p>
                        </div>
                        <p class="count">(01)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Le coton est soigneusement cultivé, cueilli et préparé pour un traitement ultérieur</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Des pratiques d'approvisionnement éthiques garantissent un travail équitable et une responsabilité environnementale</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/access_to_local_cotton.webp'; ?>" alt="access_to_local_cotton">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Filature de Haute Performance</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Notre coton brut est filé en fil de haute qualité dans nos installations de filature internes. Cette étape convertit les fibres de coton brut en fils, les préparant pour les étapes suivantes.</p>
                        </div>
                        <p class="count">(02)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technologie Utilisée</p>
                            <p class="subCopy">Les machines à filer avancées offrent une constance dans la qualité et la résistance du fil</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Le fil est conçu pour maintenir son intégrité pour la durabilité et la douceur, ce qui est crucial pour la longévité du vêtement final</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Spinning-25.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Tricotage avec Précision</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Le filé est tricoté en tissu dans nos installations. Nous proposons différents types de tissus (Maillot Simple-Maillot Élasthanne, Piqué- Double maille Piqué, Côtes- Élasthanne Côtelés, Serviette Française, Polaire Brossée, Cols Jacquard-Cols Côtelés) en fonction du style de vêtement.</p>
                        </div>
                        <p class="count">(03)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technologie Utilisée</p>
                            <p class="subCopy">Le tricot circulaire de haute technologie ainsi que les machines à tricoter plates nous permettent de créer des tissus aux motifs complexes et à la texture optimale</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Nos procédés de tricotage permettent d'obtenir des textiles facilitant la respiration et de haute qualité adaptés à une variété de types de vêtements</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Knitting-05.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers" id="textile_processing">
        <div class="containers">
            <div class="top">
                <h3>Excellence dans la Transformation des Textiles</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <div class="tag_div">
                                <div class="tags active" data-tab="dyeing" data-img="<?php echo get_template_directory_uri() . '/assets/images/dyeing_pic.webp'; ?>">TEINTURE</div>
                                <div class="tags unactive" data-tab="printing" data-img="<?php echo get_template_directory_uri() . '/assets/images/printing.jpg'; ?>">IMPRESSION</div>
                                <div class="tags unactive" data-tab="embroidery" data-img="<?php echo get_template_directory_uri() . '/assets/images/embroidery_pic.jpg'; ?>">BRODERIE</div>
                                <div class="tags unactive" data-tab="quality" data-img="<?php echo get_template_directory_uri() . '/assets/images/quality1.jpg'; ?>">TESTS DE QUALITÉ</div>
                            </div>
                        </div>
                        <p class="count">(04)</p>
                    </div>
                    <div class="inner_bottom"  id="dyeing">
                        <p>Les Tissus sont teints en utilisant des techniques de teinture économes en eau et respectueuses de l'environnement. Nous minimisons le gaspillage d'eau et veillons à ce que les colorants utilisés soient non toxiques et biodégradables</p>
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Les tissus sont teints dans des couleurs vives ou des nuances spécifiques, en utilisant des méthodes qui réduisent l'impact environnemental</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">La durabilité est au premier plan et nous visons à utiliser des colorants 100% écologiques pour tous les vêtements</p>
                        </div>
                    </div>
                    <div class="inner_bottom" id="printing">
                        <p>Nous proposons des techniques d'impression avancées qui donnent vie aux conceptions - des graphismes audacieux aux textures subtiles - avec une clarté et un dynamisme durable.</p>
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Selon les besoins du tissu et de la conception, nous utilisons la sublimation, le pigment, l'écran rotatif ou l'impression par transfert thermique</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Des Impressions de haute résolution qui restent nettes, lavage après lavage, en mettant l'accent sur les encres écologiques et les procédés à faible impact</p>
                        </div>
                    </div>
                    <div class="inner_bottom" id="embroidery">
                        <p>La broderie ajoute de la texture, de l'identité et de l'élégance aux vêtements, que ce soit pour les logos, les monogrammes ou les motifs artistiques.</p>
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">À l'aide de machines à broder automatisées à plusieurs têtes, les fils sont cousus directement dans le tissu pour plus de durabilité et de précision</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Détails complexes avec une excellente densité de fil et une durabilité à long terme, adaptés à la mode haut de gamme</p>
                        </div>
                    </div>
                    <div class="inner_bottom" id="quality">
                        <p>Équipé d'instruments de test SDL ATLAS avancés et de systèmes étalonnés, notre laboratoire valide les tissus sur les paramètres physiques, chimiques et de solidité des couleurs pour les marchés internationaux</p>
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Nous testons systématiquement chaque lot de tissus pour la résistance, la durabilité, la performance des couleurs et l'intégrité globale du matériau</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">L'équipement d'essai aux normes ISO garantit une qualité globale constante, des performances fiables et la confiance des acheteurs sur tous les marchés</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img id="textile_processing_img" src="<?php echo get_template_directory_uri() . '/assets/images/dyeing_pic.webp'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Confection de Vêtements</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Après la teinture, le tissu est coupé avec précision et cousu de manière experte, avec tous les éléments-coutures, fermetures à glissière et boutons sont assemblés pour créer le vêtement final.</p>
                        </div>
                        <p class="count">(05)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technologie Utilisée</p>
                            <p class="subCopy">L'étalement automatisé, la coupe automatisée et la couture hautement automatisée ainsi que les contraintes de couture expertes garantissent une construction précise et une finition de haute qualité</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Customizations like embroidery, screen printing, and other design details are added in this stage</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/garmenting.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Contrôle de la Qualité</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Assurance Qualité: Chaque vêtement fini est soumis à un processus de contrôle de qualité rigoureux, garantissant qu'il répond aux normes de BTC en matière d'ajustement, de durabilité et de finition.</p>
                        </div>
                        <p class="count">(06)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technologie Utilisée</p>
                            <p class="subCopy">Systèmes d'inspection visuelle, contrôles manuels et tests à la machine pour la solidité des couleurs, la résistance des coutures et la durabilité générale du vêtement</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Chaque vêtement est vérifié pour détecter les défauts avant d'être envoyé à l'emballage et à la distribution</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Quality-control-BTC.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Emballage</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Emballage écologique: Les vêtements sont emballés avec des matériaux durables, garantissant que notre engagement envers l'environnement se poursuit à chaque étape du processus.</p>
                        </div>
                        <p class="count">(07)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Chaque vêtement est soigneusement plié et emballé dans des sacs ou des cartons écologiques pour l'expédition</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">We use recyclable, biodegradable packaging materials to reduce plastic waste</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/whybtc/packaging.webp'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Logistique</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Expédition Mondiale: Une fois emballés, les vêtements sont envoyés pour distribution sur les principaux marchés du monde entier. Notre système logistique garantit une livraison rapide et fiable, réduisant les émissions de carbone grâce à des pratiques de proximité.</p>
                        </div>
                        <p class="count">(08)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Les produits sont expédiés par voie maritime, aérienne et terrestre, la priorité étant donnée à la réduction de l'impact environnemental</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">L'utilisation des ports et des aéroports à proximité permet des itinéraires de navigation plus courts, réduisant ainsi les émissions de carbone</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Logistics-img.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Consommateur Final</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Produit Fini: Le produit fini parvient au consommateur final avec une traçabilité complète, optimisée par nos systèmes SAP et blockchain intégrés pour une transparence de bout en bout.</p>
                        </div>
                        <p class="count">(09)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Processus</p>
                            <p class="subCopy">Notre plateforme intégrée SAP connecte les équipes internes et les clients en temps réel, permettant un suivi transparent des commandes, des mises à jour de statut et une visibilité complète à chaque étape de la production</p>
                        </div>
                        <div class="second">
                            <p class="title">Caractéristique Clé</p>
                            <p class="subCopy">Un tableau de bord interactif garantit transparence et confiance, permettant aux clients de suivre leur parcours de commande du début à la fin.</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Quality-control.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('components/clients-fr'); ?>




<?php
get_footer('fr');

?>