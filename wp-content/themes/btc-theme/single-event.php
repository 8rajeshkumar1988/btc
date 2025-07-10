
<?php

get_header();

?>
Event Detail Page

<?php 

$gallery = get_post_meta(get_the_ID(), '_event_gallery', true);
if ($gallery && is_array($gallery)) {
    echo '<div class="event-gallery">';
    foreach ($gallery as $img) {
        echo '<img src="' . esc_url($img) . '" style="max-width:200px; margin:10px;" />';
    }
    echo '</div>';
}

?>

<?php
get_footer();

?>