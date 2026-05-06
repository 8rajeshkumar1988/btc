<?php
$lang = get_locale();
if($lang=='fr_FR'){
  $fr_class = 'fr';
}else{
  $fr_class = '';
}
?>
<section id="lead_popup_form" data-lenis-prevent>
    <div class="popup_container">
        <div class="head">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="btc logo" />
        </div>
        <div class="close" id="closeleadpopup">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/closeSvg.svg'; ?>" alt="close svg" />
        </div>
    </div>
    <div class="heading <?php echo $fr_class; ?>">
        <h2>
            <?php echo t('leadPopupHeading'); ?>
        </h2>
    </div>
    
        <?php get_template_part('components/lead_form'); ?>
    
    </div>
</section>


