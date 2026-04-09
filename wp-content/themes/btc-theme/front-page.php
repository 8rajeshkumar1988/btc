<?php

$live = 1;
if ($live == 1) {
    get_header();
    get_template_part('components/home_page');
    //$lang = get_locale();
    // if($lang == 'fr_FR') {
    //     get_footer('fr');
    // } else {
    //     get_footer();
    // }

     get_footer();
    
 

} else {
    get_template_part('page-coming-soon');
}
