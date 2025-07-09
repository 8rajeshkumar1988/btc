
<?php

get_header();

?>
Category Detail Page

<?php
get_footer();

?>

<?php
$faqs = get_post_meta(get_the_ID(), 'category_faqs', true);

if (!empty($faqs)) {
    echo '<div class="category-faqs">';
    echo '<h2>FAQs</h2><ul>';
    foreach ($faqs as $faq) {
        echo '<li>';
        echo '<strong>❓ ' . esc_html($faq['question']) . '</strong><br>';
        echo '💬 ' . esc_html($faq['answer']);
        echo '</li>';
    }
    echo '</ul></div>';
}
?>