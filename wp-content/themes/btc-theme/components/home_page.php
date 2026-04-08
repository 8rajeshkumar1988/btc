<?php
$lang = get_locale();
if($lang == 'fr_FR') {
    get_template_part('components/home_page-fr');
} else {
    get_template_part('components/home_page-en');
}
?>