<?php

function btc_features() {
    //   add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumbnail', 400, 400, true );
    add_image_size( 'btc_medium', 800, 600, false );
    add_image_size( 'btc_large', 1200, 800, true );

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

function custom_login_logo() {
    echo '
    <style type="text/css">
        #login h1 a {
            background-image: url(' . get_stylesheet_directory_uri() . '/assets/images/logo.svg);
            background-size: contain;
            width: 100%;
            height: 80px;
        }
    </style>';
}
add_action( 'login_head', 'custom_login_logo' );

function custom_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

function custom_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'custom_login_logo_url_title' );

function hide_login_privacy_policy_link() {
    echo '<style>
        .privacy-policy-page-link {
            display: none !important;
        }
    </style>';
}
add_action( 'login_head', 'hide_login_privacy_policy_link' );


function remove_wp_admin_bar_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_admin_bar_logo', 999);




function remove_view_link_from_product_list($actions, $post) {
    if ($post->post_type === 'product') {
        unset($actions['view']);
    }
    return $actions;
}
add_filter('post_row_actions', 'remove_view_link_from_product_list', 10, 2);


