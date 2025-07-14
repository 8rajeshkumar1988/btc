<?php

function btc_files() {
    wp_enqueue_script( 'btc-jquery', '//code.jquery.com/jquery-3.7.1.min.js' );
    wp_enqueue_script( 'btc-swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js' );
    wp_enqueue_script( 'btc-lenis', '//unpkg.com/lenis@1.0.45/dist/lenis.min.js' );
    wp_enqueue_script( 'btc-gsap', '//cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js' );
    wp_enqueue_script( 'btc-ScrollTrigger', '//cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js' );
    wp_enqueue_script( 'btc-ScrollToPlugin', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js' );
    wp_enqueue_script( 'btc-ScrollToPlugin', '//unpkg.com/split-type' );
    wp_enqueue_script( 'main-btc-js', get_theme_file_uri( '/assets/js/main.js' ) );
    if (is_front_page() ) {
        wp_enqueue_script( 'main-homepage-js', get_theme_file_uri( '/assets/homepage/script.js' ) );
    }

    //   wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    //   wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'btc_main_styles', get_theme_file_uri( '/assets/css/common.css' ) );
    if (is_front_page() ) {
        wp_enqueue_style( 'btc_homepage_styles', get_theme_file_uri( '/assets/homepage/style.css' ) );
    }

    //   wp_enqueue_style( 'btc_extra_styles', get_theme_file_uri( '/assets/index.css' ) );
}

add_action( 'wp_enqueue_scripts', 'btc_files' );

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
    $wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_wp_admin_bar_logo', 999 );

function remove_view_link_from_product_list( $actions, $post ) {
    if ( $post->post_type === 'product' ) {
        unset( $actions[ 'view' ] );
    }
    if ( $post->post_type === 'customiz_category' ) {
        unset( $actions[ 'view' ] );
    }
    if ( $post->post_type === 'customization_type' ) {
        unset( $actions[ 'view' ] );
    }
    if ( $post->post_type === 'homecapability' ) {
        unset( $actions[ 'view' ] );
    }
    if ( $post->post_type === 'leadership' ) {
        unset( $actions[ 'view' ] );
    }
    if ( $post->post_type === 'client' ) {
        unset( $actions[ 'view' ] );
    }

    return $actions;
}
add_filter( 'post_row_actions', 'remove_view_link_from_product_list', 10, 2 );

