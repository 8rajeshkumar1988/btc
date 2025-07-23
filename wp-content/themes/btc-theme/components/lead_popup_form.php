<section id="lead_popup_form" data-lenis-prevent>
    <div class="popup_container">
        <div class="head">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="" />
        </div>
        <div class="close">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/closeSvg.svg'; ?>" alt="" />
        </div>
    </div>
    <div class="heading">
        <h2>
            Are you a Brand/Buying House 
            looking for a one stop textile solution?
        </h2>
    </div>
    <?php get_template_part('components/lead_form'); ?>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        lenis.stop();
    })
</script>