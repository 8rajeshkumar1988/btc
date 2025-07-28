<?php

get_header();

?>
<style>
    .heroBanner{
        height:40vh;
        max-height: 400px;
        background-color: var(--blue);
        display: grid;
        place-items: center;
        text-align: center;
        h1{
            color: #fff;
            font-size: var(--font-46);
            font-weight: 400;
        }
        p{
            color: #fff;
        }
    }
    .default_content{
        padding: clamp(2.5rem, 2rem + 2.5vw, 5rem) var(--paddingX);
    }
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