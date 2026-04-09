<?php

get_header();

?>

<section class="heroBanner">
   <div>
     <h1><?php the_title() ?></h1>
     <p><?php echo t('lastUpdated') ?>: <?php the_field('last_updated') ?></p>
   </div>
</section>
<div class="default_content">
    <?php the_content() ?>
</div>

<?php
get_footer();
?>