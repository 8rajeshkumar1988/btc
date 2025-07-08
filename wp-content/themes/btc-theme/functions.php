<?php

function btc_features() {
    //   add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumb', 400, 250, true );
    // cropped
    add_image_size( 'medium', 800, 600, false );
    // not cropped
    add_image_size( 'banner', 1200, 400, true );
    add_image_size( 'metaimage', 1200, 630, true );
}

add_action( 'after_setup_theme', 'btc_features' );

// Add meta box for Pages & Posts

function btc_add_meta_seo_fields() {
    $screens = [ 'post', 'page' ];
    // ✅ Add to both Posts and Pages
    foreach ( $screens as $screen ) {
        add_meta_box(
            'btc_seo_meta',
            'SEO Metadata',
            'btc_seo_meta_callback',
            $screen,
            'normal',
            'high'
        );
    }
}
// add_action( 'add_meta_boxes', 'btc_add_meta_seo_fields' );

// Output the meta fields

function btc_seo_meta_callback( $post ) {
    $meta_title = get_post_meta( $post->ID, '_btc_meta_title', true );
    $meta_description = get_post_meta( $post->ID, '_btc_meta_description', true );
    ?>
    <p><label for = 'btc_meta_title'><strong>Meta Title</strong></label></p>
    <input type = 'text' id = 'btc_meta_title' name = 'btc_meta_title' value = "<?php echo esc_attr($meta_title); ?>" style = 'width:100%;' />

    <p><label for = 'btc_meta_description'><strong>Meta Description</strong></label></p>
    <textarea id = 'btc_meta_description' name = 'btc_meta_description' rows = '4' style = 'width:100%;'><?php echo esc_textarea( $meta_description );
    ?></textarea>
    <?php
}

// Save the meta fields

function btc_save_seo_meta_fields( $post_id ) {
    if ( array_key_exists( 'btc_meta_title', $_POST ) ) {
        update_post_meta( $post_id, '_btc_meta_title', sanitize_text_field( $_POST[ 'btc_meta_title' ] ) );
    }
    if ( array_key_exists( 'btc_meta_description', $_POST ) ) {
        update_post_meta( $post_id, '_btc_meta_description', sanitize_textarea_field( $_POST[ 'btc_meta_description' ] ) );
    }
}
// add_action( 'save_post', 'btc_save_seo_meta_fields' );
