<?php

get_header();

?>
<style>
    
</style>
<section class="heroBanner">
   <div>
     <h1><?php the_title() ?></h1>
     <p>Last updated: <?php the_modified_date() ?></p>
   </div>
</section>
<div class="default_content">
    <?php the_content() ?>
</div>

<?php
get_footer();

?>