<?php

$live = 1;
if ($live == 1) {
    get_header();
    get_template_part('components/home_page');
    get_footer();
} else {
    get_template_part('page-coming-soon');
}
