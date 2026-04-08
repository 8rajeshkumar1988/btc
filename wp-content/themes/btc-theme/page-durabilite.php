<?php

get_header();
the_post();
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
    echo '<video class="js-lazy-sustainability-hero-video" playsinline autoplay muted loop preload="none" poster="' . esc_url($image_url) . '" data-src="' . esc_url($banner_video['url']) . '"></video>';
  } else  if (has_post_thumbnail()) {
    $image = '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
    echo $image;
  }

  ?>

  <div class="content">
    <p class="breadcrub"><a href="<?php echo site_url(HOME_PAGE) ?>">Accueil</a> / Durabilité</p>
    <div class="heading" animateHeadingBanner>
       <p><?php the_title(); ?></p>
      <?php the_content(); ?>
    </div>
    <div class="layer"></div>
    <div class="layer2"></div>
  </div>
</section>
<section id="sustainability_details">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/BTC_pattern.png'; ?>" alt=""  btcPattern />
  <h2>   
    <span>BTC</span> s'engage à être une marque de <br> <span>développement durable</span>
  </h2>
  <div class="description">
    <p>Intégrant des pratiques respectueuses de l'environnement à chaque étape de la chaîne de valeur textile. De l'approvisionnement en coton cultivé localement à l'utilisation de colorants sans AZO, d'encres à base d'eau et de machines écoénergétiques, nous privilégions les procédés qui réduisent l'impact environnemental.</p>
    <p>Nos installations favorisent la conservation de l'eau, la gestion responsable des déchets et l'utilisation de fils recyclés et écologiques, garantissant que chaque vêtement que nous produisons reflète notre promesse envers l’humain et la planète.</p>

  </div>
</section>

<!-- <section class="traceability traceability2">
  <div
    class="image-wrapper"
    >
    <img
      src="<?php echo get_template_directory_uri() . '/assets/images/PeoplePrinciples.jpg'; ?>"
      alt="Image 1" />
    <div class="traceability_content">
      <div class="heading">
        <h2>Traceability first</h2>
      </div>
      <div class="description">
        <div>
          <p>
            We ensure full traceability across our supply chain from raw
            materials to finished garments. This transparency guarantees
            ethical sourcing, quality control & accountability at every
            step, building trust with our partners and end consumers.
          </p>
        </div>
        <div class="right_desc">
          <p>We partner with world leaders in traceability</p>
          <ul>
            <li>FibreTrace</li>
            <li>Cotton Made in Africa (CMIA)</li>
            <li>Global Organic Textile Standard (GOTS)</li>
            <li>
              Blockchain technology enables us to track every stage of
              production, ensuring a reliable attribution of the carbon
              footprint across the supply chain
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div
    class="image-wrapper"
    >
    <img
      src="<?php echo get_template_directory_uri() . '/assets/images/VerticalIntegration.webp'; ?>"
      alt="Image 1" />
    <div class="traceability_content">
      <div class="heading">
        <h2>Traceability Second</h2>
      </div>
      <div class="description">
        <div>
          <p>
            We ensure full traceability across our supply chain from raw
            materials to finished garments. This transparency guarantees
            ethical sourcing, quality control & accountability at every
            step, building trust with our partners and end consumers.
          </p>
        </div>
        <div class="right_desc">
          <p>We partner with world leaders in traceability</p>
          <ul>
            <li>FibreTrace</li>
            <li>Cotton Made in Africa (CMIA)</li>
            <li>Global Organic Textile Standard (GOTS)</li>
            <li>
              Blockchain technology enables us to track every stage of
              production, ensuring a reliable attribution of the carbon
              footprint across the supply chain
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div
    class="image-wrapper"
    >
    <img src="<?php echo get_template_directory_uri() . '/assets/images/backTrace.jpg'; ?>" alt="Image 1" />
    <div class="traceability_content">
      <div class="heading">
        <h2>Traceability Third</h2>
      </div>
      <div class="description">
        <div>
          <p>
            We ensure full traceability across our supply chain from raw
            materials to finished garments. This transparency guarantees
            ethical sourcing, quality control & accountability at every
            step, building trust with our partners and end consumers.
          </p>
        </div>
        <div class="right_desc">
          <p>We partner with world leaders in traceability</p>
          <ul>
            <li>FibreTrace</li>
            <li>Cotton Made in Africa (CMIA)</li>
            <li>Global Organic Textile Standard (GOTS)</li>
            <li>
              Blockchain technology enables us to track every stage of
              production, ensuring a reliable attribution of the carbon
              footprint across the supply chain
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->
<div id="progress_indication" class="progress-dots"></div>
<section id="traceability">
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Enraciné en Afrique</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Coton Local. Valeur Locale.</strong></p>
                        </div>
                        <p class="count">(01)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Process</p> -->
                            <p class="subCopy"><strong>S'approvisionner avec intention:</strong> Notre voyage commence avec du coton cultivé de manière responsable, récolté et égrené entièrement en Afrique, à proximité de nos usines de Confection.</p>
                            <p class="subCopy"><strong>Autonomiser les Communautés:</strong> Nous travaillons en partenariat direct avec les égreneries et coopératives locales, soutenant la stabilité des revenus et la résilience agricole dans les économies rurales.</p>
                            <p class="subCopy"><strong>Réduction de l'Empreinte Carbone:</strong> La proximité élimine le besoin de fret mondial, réduisant considérablement les émissions de transport (CO2) au niveau des matières premières.</p>
                            <p class="subCopy"><strong>Permettre une Véritable Traçabilité:</strong> Une visibilité totale de la graine au vêtement fini garantit une plus grande responsabilité, une conformité éthique et une transparence de l'impact environnemental.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Ethical sourcing practices ensure fair labor and environmental responsibility</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/sustain_cotton.webp'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Filature Plus Intelligente</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Moins De Déchets. Plus De Longévité.</strong></p>
                        </div>
                        <p class="count">(02)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="subCopy"><strong>Conçues pour l'Efficacité:</strong> Nos lignes de filage automatisées extraient une valeur maximale de chaque fibre, en utilisant des dispositifs intelligents pour réduire les bris et les pertes.</p>
                            <p class="subCopy"><strong>Opérations Optimisées en Énergie:</strong> Nous investissons dans une technologie de broche à faible consommation d'énergie qui réduit la consommation d'énergie sans compromettre les performances.</p>
                            <p class="subCopy"><strong>Des Fils Plus Solides et Plus Intelligents:</strong> En résulte des fils de haute résistance avec moins de défauts et un potentiel de cycle de vie plus long.</p>
                            <p class="subCopy"><strong>Construit pour Durer:</strong> des textiles plus durables signifient une fréquence de remplacement réduite, ce qui réduit l'utilisation des ressources tout au long de la chaîne de valeur.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">The yarn is designed to maintain its integrity for durability and softness, which is crucial for the longevity of the final garment</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Spinning-25.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Tricotage de Précision, Réduction Des Déchets</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Chaque Boucle Compte.</strong></p>
                        </div>
                        <p class="count">(03)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Technology Used</p> -->
                            <p class="subCopy"><strong>Précision axée sur la Technologie:</strong> Nos machines à tricoter circulaires sont calibrées pour maintenir une tension et une formation de boucles uniformes, minimisant les incohérences de production.</p>
                            <p class="subCopy"><strong>Moins de Défauts, Moins de Déchets:</strong> Le tricotage de précision entraîne une réduction significative des pertes, réduisant ainsi le gaspillage de matières premières au stade du tissu.</p>
                            <p class="subCopy"><strong>Cycles de Production Contrôlés:</strong> Une surveillance avancée garantit une qualité reproductible sur l'ensemble des lots, rationalisant à la fois la planification et la production.</p>
                            <p class="subCopy"><strong>Performance avec Objectif:</strong> Chaque mètre de tissu est optimisé pour offrir une cohérence esthétique et structurelle avec un impact minimal sur l'environnement.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="right">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/BTC-Knitting-05.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Teinture à Faible Impact</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Couleur Plus Propre. Processus Plus Écologique.</strong></p>
                        </div>
                        <p class="count">(04)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Technology Used</p> -->
                            <p class="subCopy"><strong>Systèmes Économes en Eau:</strong> Nous utilisons des machines de teinture à faible taux de liqueur qui réduisent la consommation d'eau douce jusqu'à 50% par rapport aux méthodes conventionnelles.</p>
                            <p class="subCopy"><strong>Finition à Base d'Enzymes:</strong> L'adoucissement et l'amélioration des performances sont effectués à l'aide de traitements enzymatiques au lieu d'alternatives chimiques agressives.</p>
                            <p class="subCopy"><strong>Réduction des Émissions, Production Plus Propre:</strong> Le traitement avancé des effluents et l'optimisation des processus réduisent considérablement les émissions et les rejets chimiques.</p>
                            <p class="subCopy"><strong>Une Couleur Soucieuse de Vous:</strong> Le résultat final est un tissu teint de manière éclatante qui répond aux normes mondiales sans endommager l'environnement.</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Our knitting processes result in breathable, high-quality textiles suitable for a variety of garment types</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/dyeing.webp'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3>Durable par Structure</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p><strong>Une Chaîne D'Approvisionnement Entièrement Verticale Et Pleinement Consciente.</strong></p>
                        </div>
                        <p class="count">(05)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <!-- <p class="title">Technology Used</p> -->
                            <p class="subCopy"><strong>Visibilité de Bout en Bout:</strong> Le filage, le tricot, la teinture et le vêtement étant hébergés dans le même écosystème, chaque étape est surveillée et optimisée pour la durabilité.</p>
                            <p class="subCopy"><strong>Émissions de Transport Minimales:</strong> La logistique interne remplace les transports de longue distance, éliminant la production de carbone évitable.</p>
                            <p class="subCopy"><strong>Moins de Manutention, Moins de Déchets:</strong> Moins d'interdépendances signifient moins de dommages matériels et moins d'exigences d'emballage entre les étapes.</p>
                            <p class="subCopy"><strong>Rapidité Responsable:</strong> Notre modèle vertical accélère les délais de livraison tout en respectant les engagements environnementaux à tous les niveaux</p>
                        </div>
                        <!-- <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Customizations like embroidery, screen printing, and other design details are added in this stage</p>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/Quality-control.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- <div class="scroll-trigger"></div>
<div class="scroll-trigger"></div>
<div class="scroll-trigger"></div>
<div class="scroll-trigger"></div> -->
<section id="certificates_compliances">
  <div class="heading" animateHeading>
    <p>CERTIFICATIONS ET CONFORMITÉ</p>
    <h2>Une Conformité En Laquelle Vous Pouvez Avoir Confiance</h2>
  </div>
  <div class="cc_container">
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ISO.webp" ?>" alt="ISO Certificate">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">IMS : ISO 9001/45001/14001</h3>
        <p>Pour un système de gestion environnementale efficace</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/cotton_made_in_africa.webp" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Coton fabriqué en Afrique (CmiA)</h3>
        <p>Pour un coton durable d'Afrique</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/leed.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">LEED (Leadership en Conception Énergétique et Environnementale)</h3>
        <p>Pour des bâtiments écologiques sains, efficaces et économiques</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/wrap.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Production Mondiale Accréditée Responsable (WRAP)</h3>
        <p>Pour la conformité aux Lois et Réglementations sur le Lieu de Travail</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/certificates/oekotex.webp" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Certification OeKoTex</h3>
        <p>Pour tester les produits chimiques / substances nocifs dans le produit</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/certificates/ctpat.png" ?>" alt="">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">CTPAT (Partenariat Commercial Douanier Contre le Terrorisme)</h3>
        <p>Pour le plus haut niveau de sécurité du fret pour l'expédition aux États-Unis</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/bsci.png" ?>" alt="bsci">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">BSCI (Initiative de Conformité Sociale des Entreprises)</h3>
        <p>Pour répondre aux normes mondiales en matière d'approvisionnement éthique</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/higgindex.png" ?>" alt="higgindex">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">Certification de l'Indice de Higg</h3>
        <p>Analyse comparative des performances durables</p>
      </div>
    </div>
    <div class="certificate_card">
      <div class="certificate_logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images/smeta.png" ?>" alt="smeta">
      </div>
      <div class="certificate_description">
        <h3 class="certificate_title">SMETA (Audit du Commerce Éthique des Membres Sedex)</h3>
        <p>Conformité éthique du travail et du commerce</p>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('components/clients-fr'); ?>

<?php
get_footer('fr');

?>