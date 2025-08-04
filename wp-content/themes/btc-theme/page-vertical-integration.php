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
        $image = '<img  src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
        echo $image;
    }

    ?>


    <div class="content">
        <p class="breadcrub"><a href="<?php echo site_url('/') ?>">Home</a> / <?php the_title() ?></p>
        <div class="heading" animateHeadingBanner>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>

<section id="textile_details">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/textilePattern.png'; ?>" alt="" />
    <div animateHeading>
        <p>Textile Park</p>
        <h2>
            At BTC, we take pride in our <strong> fully vertically integrated system</strong>
        </h2>
    </div>
    <div class="description" animateHeading>
        <p>Where every step of the production process - from raw cotton to the finished garment is meticulously managed under one roof.</p>
        <p>This ensures quality control, efficiency, and sustainability at every stage.</p>

    </div>
</section>

<section id="parking">
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(01)</span>Access To Local Cotton</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>We begin by sourcing rain-fed, non-GMO CmiA-certified cotton (Cotton made in Africa) directly from trusted, sustainable farms. This guarantees high-quality, traceable, and eco-friendly cotton. </p>
                        </div>
                        <p class="count">(01)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">The cotton is carefully cultivated, picked, and prepared for further processing</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Ethical sourcing practices ensure fair labor and environmental responsibility</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Gossypium_sp_MS4007.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(02)</span>High-Performance Spinning</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Our raw cotton is spun into high-quality yarn at our in-house spinning facilities. This step converts raw cotton fibers into threads, making them ready for the next stages.</p>
                        </div>
                        <p class="count">(02)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">Advanced spinning machines provide consistency in thread quality and strength</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">The yarn is designed to maintain its integrity for durability and softness, which is crucial for the longevity of the final garment</p>
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
                <h3><span>(03)</span>Knitting with Precision</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>The spun yarn is knitted into fabric at our facilities. We offer various fabric types (e.g., cotton knits, fabrics) depending on the garment style</p>
                        </div>
                        <p class="count">(03)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">High-tech looms and knitting machines enable us to create fabrics with intricate patterns and optimal texture</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Our knitting processes result in breathable, high-quality textiles suitable for a variety of garment types</p>
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
                <h3><span>(04)</span>Excellence in Textile Processing</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <div class="tag_div">
                                <div class="tags active" data-tab="dyeing">DYEING</div>
                                <div class="tags unactive" data-tab="printing">PRINTING</div>
                                <div class="tags unactive" data-tab="embroidery">EMBROIDERY</div>
                            </div>
                        </div>
                        <p class="count">(04)</p>
                    </div>
                    <div class="inner_bottom" id="dyeing">
                        <p>The Fabrics are dyed using water-efficient, eco-friendly dyeing techniques. We minimize water waste and ensure that the dyes used are non-toxic and biodegradable</p>
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">Fabrics are dyed in vibrant colors or specific shades, using methods that reduce the environmental impact</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Sustainability is at the forefront, and we aim to use 100% eco-friendly dyes for all garments</p>
                        </div>
                    </div>
                    <div class="inner_bottom" id="printing">
                        <p>We offer advanced printing techniques that bring designs to life - from bold graphics to subtle textures - with lasting clarity and vibrancy.</p>
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">Depending on the fabric and design needs, we use sublimation, pigment, rotary screen, or heat transfer printing.</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">High-resolution prints that stay sharp, wash after wash - with an emphasis on eco-inks and low-impact processes.</p>
                        </div>
                    </div>
                    <div class="inner_bottom" id="embroidery">
                        <p>Embroidery adds texture, identity, and elegance to garments - whether it's for logos, monograms, or artistic patterns.</p>
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">Using automated multi-head embroidery machines, threads are stitched directly into the fabric for durability and precision. </p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Intricate detailing with excellent thread density and long-lasting durability, tailored to premium fashion.</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Dyeing-and-Processing-BTC-6.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(05)</span> Garment Manufacturing</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>After dyeing, fabric is precision-cut and expertly stitched, with all elements - seams, zippers and buttons are assembled to create the final garment.</p>
                        </div>
                        <p class="count">(05)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">Automated stitching machines, along with expert seamstresses, ensure precise construction and high-quality finishing</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Customizations like embroidery, screen printing, and other design details are added in this stage</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/SHOOTING-OUVRIERS-GTC.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(06)</span>Quality Control</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Quality Assurance: Each finished garment undergoes a rigorous quality control process, ensuring that it meets BTC’s standards for fit, durability, and finish.</p>
                        </div>
                        <p class="count">(06)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Technology Used</p>
                            <p class="subCopy">Visual inspection systems, manual checks, and machine testing for color fastness, stitching strength, and overall garment durability</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">Every garment is checked for defects before being sent to packaging and distribution.</p>
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
                <h3><span>(07)</span>Packaging</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Eco-Friendly Packaging: Garments are packaged using sustainable materials, ensuring that our commitment to the environment continues through every step of the process.</p>
                        </div>
                        <p class="count">(07)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">Each garment is carefully folded and packed into eco-friendly bags or boxes for shipment.</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">We use recyclable, biodegradable packaging materials to reduce plastic waste.</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/whybtc/full-traceability-benin-textile.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="parent_pers">
        <div class="containers">
            <div class="top">
                <h3><span>(08)</span>Logistics</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Global Shipping: Once packaged, garments are sent out for distribution to major markets worldwide. Our logistics system ensures fast and reliable delivery, reducing carbon emissions through near-shoring practices.</p>
                        </div>
                        <p class="count">(08)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">Products are shipped via sea, air, and land transport, with priority given to reducing environmental impact.</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">The use of nearby ports and airports enables shorter shipping routes, cutting down on carbon emissions.</p>
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
                <h3><span>(09)</span>End Customer</h3>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="inner_top">
                        <div class="copy">
                            <p>Final Product: The finished product reaches the end customer, complete with full traceability through our blockchain system, ensuring the highest standards of sustainability and transparency.</p>
                        </div>
                        <p class="count">(09)</p>
                    </div>
                    <div class="inner_bottom">
                        <div class="first">
                            <p class="title">Process</p>
                            <p class="subCopy">Customers receive detailed information via QR codes, allowing them to verify product origin, material composition and environmental impact at every stage.</p>
                        </div>
                        <div class="second">
                            <p class="title">Key Feature</p>
                            <p class="subCopy">The customer enjoys a product made with eco-conscious processes, with full visibility into its journey from farm to fashion.</p>
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

<?php get_template_part('components/clients'); ?>




<?php
get_footer();

?>