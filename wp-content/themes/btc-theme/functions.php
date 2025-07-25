<?php

function btc_files()
{
    wp_enqueue_script('btc-jquery', '//code.jquery.com/jquery-3.7.1.min.js');
    wp_enqueue_script('btc-swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    wp_enqueue_script('btc-lenis', '//unpkg.com/lenis@1.0.45/dist/lenis.min.js');
    wp_enqueue_script('btc-gsap', '//cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js');
    wp_enqueue_script('btc-ScrollTrigger', '//cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js');
    wp_enqueue_script('btc-ScrollToPlugin', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js');
    wp_enqueue_script('btc-splitType', '//unpkg.com/split-type');
    wp_enqueue_script('main-btc-js', get_theme_file_uri('/assets/js/main.js'));
    wp_enqueue_style('btc_main_swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    if (is_front_page() || is_page('home-testing')) {
        wp_enqueue_script('main-homepage-js', get_theme_file_uri('/assets/homepage/script.js'));
    }

    //   wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    //   wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('btc_main_styles', get_theme_file_uri('/assets/css/common.css'));
    if (is_front_page() || is_page('home-testing')) {
        wp_enqueue_style('btc_homepage_styles', get_theme_file_uri('/assets/homepage/style.css'));
    }
    if (is_page('products')) {
        wp_enqueue_style('btc_product_styles', get_theme_file_uri('/assets/product-category/style.css'));
        wp_enqueue_script('btc_product_script', get_theme_file_uri('/assets/product-category/script.js'));
    }
    // if (is_singular('category')) {
    //     echo "You are on a single Category post type page";
    // }
    if (is_singular('category')) {

        wp_enqueue_style('btc_category_styles', get_theme_file_uri('/assets/product-detail/style.css'));
        wp_enqueue_script('btc_category_script', get_theme_file_uri('/assets/product-detail/script.js'), [], false, true);
    }

    if (is_page('about-us')) {
        wp_enqueue_style('btc_about_styles', get_theme_file_uri('/assets/about-us/style.css'));
        wp_enqueue_script(
            'btc_about_script', // Handle
            get_theme_file_uri('/assets/about-us/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }

    if (is_page('contact-us')) {
        wp_enqueue_style('btc_contact_styles', get_theme_file_uri('/assets/contact-us/style.css'));
        wp_enqueue_script(
            'btc_contact_script', // Handle
            get_theme_file_uri('/assets/contact-us/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }
    if (is_page('capabilities')) {
        wp_enqueue_style('btc_capabilities_styles', get_theme_file_uri('/assets/capabilities/style.css'));
    }

    if (is_page('sustainability')) {
        wp_enqueue_style('btc_sustainability_styles', get_theme_file_uri('/assets/sustainbility/style.css'));
        wp_enqueue_script(
            'btc_sustainability_script', // Handle
            get_theme_file_uri('/assets/sustainbility/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }
    if (is_page('all-event')) {
        wp_enqueue_style('btc_event_styles', get_theme_file_uri('/assets/event/style.css'));
        wp_enqueue_script(
            'btc_event_script', // Handle
            get_theme_file_uri('/assets/event/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }
    if (is_page('why-btc')) {
        wp_enqueue_style('btc_why-btc_styles', get_theme_file_uri('/assets/why-btc/style.css'));
        wp_enqueue_script(
            'btc_why-btc_script', // Handle
            get_theme_file_uri('/assets/why-btc/scripts.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }

    if (is_page('vertical-integration')) {
        wp_enqueue_style('btc_why-btc_styles', get_theme_file_uri('/assets/textile-park/style.css'));
        wp_enqueue_script(
            'btc_textile-park_script', // Handle
            get_theme_file_uri('/assets/textile-park/scripts.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }

    if (is_home() || is_tag()) {
        wp_enqueue_style('btc_news_styles', get_theme_file_uri('/assets/news/style.css'));
        wp_enqueue_script(
            'btc_news_script', // Handle
            get_theme_file_uri('/assets/news/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }


    if (is_single() && get_post_type() === 'post') {
        wp_enqueue_style('btc_news_detail_styles', get_theme_file_uri('/assets/blog-detail/style.css'));
        wp_enqueue_script(
            'btc_news_detail_script', // Handle
            get_theme_file_uri('/assets/blog-detail/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }


    if (is_single() && get_post_type() === 'event') {
        wp_enqueue_style('btc_event_detail_styles', get_theme_file_uri('/assets/event-detail/style.css'));
        wp_enqueue_script(
            'btc_event_detail_script', // Handle
            get_theme_file_uri('/assets/event-detail/script.js'), // JS file path
            array(), // Dependencies (e.g., array('jquery'))
            null, // Version (or use '1.0')
            true // Load in footer (true = footer, false = header)
        );
    }

    wp_enqueue_style('intlTelInputCSS', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css');
    wp_enqueue_script('intlTelInputJS', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js', [], null, true);

    // Your init script
    wp_add_inline_script('intlTelInputJS', "
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.querySelector('input[type=\"tel\"]');
            if (input) {
                window.intlTelInput(input, {
                    initialCountry: 'us',
                    
                    utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js'
                });
            }
        });
    ");


    //   wp_enqueue_style( 'btc_extra_styles', get_theme_file_uri( '/assets/index.css' ) );
}

add_action('wp_enqueue_scripts', 'btc_files');

function btc_features()
{
    //   add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    // add_image_size('thumbnail', 400, 400, true);
    // add_image_size('btc_medium', 800, 600, false);
    // add_image_size('btc_large', 1200, 800, true);

    add_image_size('metaimage', 1200, 630, true);
}

add_action('after_setup_theme', 'btc_features');

// Add meta box for Pages & Posts

function btc_add_meta_seo_fields()
{
    $screens = ['post', 'page'];
    // ✅ Add to both Posts and Pages
    foreach ($screens as $screen) {
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

function btc_seo_meta_callback($post)
{
    $meta_title = get_post_meta($post->ID, '_btc_meta_title', true);
    $meta_description = get_post_meta($post->ID, '_btc_meta_description', true);
?>
    <p><label for='btc_meta_title'><strong>Meta Title</strong></label></p>
    <input type='text' id='btc_meta_title' name='btc_meta_title' value="<?php echo esc_attr($meta_title); ?>" style='width:100%;' />

    <p><label for='btc_meta_description'><strong>Meta Description</strong></label></p>
    <textarea id='btc_meta_description' name='btc_meta_description' rows='4' style='width:100%;'><?php echo esc_textarea($meta_description);
                                                                                                    ?></textarea>
<?php
}

// Save the meta fields

function btc_save_seo_meta_fields($post_id)
{
    if (array_key_exists('btc_meta_title', $_POST)) {
        update_post_meta($post_id, '_btc_meta_title', sanitize_text_field($_POST['btc_meta_title']));
    }
    if (array_key_exists('btc_meta_description', $_POST)) {
        update_post_meta($post_id, '_btc_meta_description', sanitize_textarea_field($_POST['btc_meta_description']));
    }
}
// add_action( 'save_post', 'btc_save_seo_meta_fields' );



/**
 * Enqueue lead‑submission JS on the front‑end.
 */
function btc_enqueue_lead_script()
{
    wp_enqueue_script(
        'aa-lead-submit',
        get_stylesheet_directory_uri() . '/assets/js/lead-submit.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_localize_script('aa-lead-submit', 'aaLead', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('btc_save_lead'),
        'event_nonce'    => wp_create_nonce('btc_save_event'),
        'subscribe_nonce'=> wp_create_nonce('btc_save_subscribe'),
    ));

    
}
add_action('wp_enqueue_scripts', 'btc_enqueue_lead_script');



// Save lead via AJAX
function btc_ajax_save_lead()
{
    check_ajax_referer('btc_save_lead', 'nonce');

    $name         = sanitize_text_field($_POST['name'] ?? '');
    $email        = sanitize_email($_POST['email'] ?? '');
    $enquiry_type = sanitize_text_field($_POST['enquiry_type'] ?? '');
    $phone        = sanitize_text_field($_POST['phone'] ?? '');
    $company_name      = sanitize_text_field($_POST['company_name'] ?? '');
    $requirements = sanitize_textarea_field($_POST['requirements'] ?? '');
    $whatsapp     = sanitize_text_field($_POST['whatsapp'] ?? '');
    $org_type     = sanitize_text_field($_POST['org_type'] ?? '');
    $source_url = sanitize_text_field($_POST['source_url'] ?? '');
    $i_agree_to_receive_e = sanitize_text_field($_POST['e_com_btc'] ?? false);
    $tandc = sanitize_text_field($_POST['tandc'] ?? false);

    if (!$tandc) {
        wp_send_json_error('Please accept terms and conditions.');
    }

    if (empty($name) || empty($email)) {
        wp_send_json_error('Name and Email are required.');
    }
    $dt_ist = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $post_id = wp_insert_post([
        'post_type'   => 'lead',
        'post_status' => 'publish',
        'post_title'  => $name . ' – ' . $dt_ist->format('Y-m-d H:i'),
    ]);

    if (is_wp_error($post_id)) {
        wp_send_json_error($post_id->get_error_message());
    }

    // Save ACF fields
    update_field('name', $name, $post_id);
    update_field('email', $email, $post_id);
    update_field('enquiry_type', $enquiry_type, $post_id);
    update_field('phone_number', $phone, $post_id);
    update_field('company_name', $company_name, $post_id);
    update_field('requirements', $requirements, $post_id);
    update_field('whatsapp_number', $whatsapp, $post_id);
    update_field('organization_type', $org_type, $post_id);
    update_field('source_url', $source_url, $post_id);
    update_field('i_agree_to_receive_e-communications_from_btc', $i_agree_to_receive_e, $post_id);
    update_field('i_agree_to_the_btc_privacy_policy', $tandc, $post_id);
    update_field('created_on', $dt_ist->format('Y-m-d H:i'), $post_id);

    wp_send_json_success('Lead saved. Thank you!');
}
add_action('wp_ajax_save_lead', 'btc_ajax_save_lead');
add_action('wp_ajax_nopriv_save_lead', 'btc_ajax_save_lead');









// Save lead via AJAX
function btc_ajax_save_event()
{
    check_ajax_referer('btc_save_event', 'nonce');

    $name         = sanitize_text_field($_POST['name'] ?? '');
    $email        = sanitize_email($_POST['email'] ?? '');
    $phone        = sanitize_text_field($_POST['phone'] ?? '');
    $reason_to_attend = sanitize_textarea_field($_POST['reason_to_attend'] ?? '');
    $no_of_attendees = sanitize_textarea_field($_POST['no_of_attendees'] ?? '');
    $source_url = sanitize_text_field($_POST['source_url'] ?? '');




    if (empty($name) || empty($email)) {
        wp_send_json_error('Name and Email are required.');
    }
    $dt_ist = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $post_id = wp_insert_post([
        'post_type'   => 'event_registration',
        'post_status' => 'publish',
        'post_title'  => $name . ' – ' . $dt_ist->format('Y-m-d H:i'),
    ]);

    if (is_wp_error($post_id)) {
        wp_send_json_error($post_id->get_error_message());
    }

    // Save ACF fields
    update_field('name', $name, $post_id);
    update_field('email', $email, $post_id);

    update_field('phone_number', $phone, $post_id);

    update_field('reason_to_attend', $reason_to_attend, $post_id);
    update_field('no_of_attendees', $no_of_attendees, $post_id);

    update_field('source_url', $source_url, $post_id);

    update_field('created_on', $dt_ist->format('Y-m-d H:i'), $post_id);

    wp_send_json_success('You have been registered. Thank you!');
}
add_action('wp_ajax_save_event', 'btc_ajax_save_event');
add_action('wp_ajax_nopriv_save_event', 'btc_ajax_save_event');





function btc_ajax_save_subscribe()
{
    check_ajax_referer('btc_save_subscribe', 'nonce');
    $name         = sanitize_text_field($_POST['name'] ?? '');
    $email        = sanitize_email($_POST['email'] ?? '');
    $source_url = sanitize_text_field($_POST['source_url'] ?? '');

    if (empty($name) || empty($email)) {
        wp_send_json_error('Name and Email are required.');
    }
    $dt_ist = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $post_id = wp_insert_post([
        'post_type'   => 'subscriber',
        'post_status' => 'publish',
        'post_title'  => $name . ' – ' . $dt_ist->format('Y-m-d H:i'),
    ]);

    if (is_wp_error($post_id)) {
        wp_send_json_error($post_id->get_error_message());
    }

    // Save ACF fields
    update_field('name', $name, $post_id);
    update_field('email', $email, $post_id);
    update_field('source_url', $source_url, $post_id);
    update_field('created_on', $dt_ist->format('Y-m-d H:i'), $post_id);
    wp_send_json_success('You have subscribed. Thank you!');
}
add_action('wp_ajax_save_subscribe', 'btc_ajax_save_subscribe');
add_action('wp_ajax_nopriv_save_subscribe', 'btc_ajax_save_subscribe');









// add_action('after_setup_theme', function () {
//     remove_theme_support('core-block-patterns');
// });

// add_action('wp_enqueue_scripts', function () {
//     wp_dequeue_style('wp-block-library'); // Core block CSS
//     wp_dequeue_style('wp-block-library-theme'); // Theme styles for editor
//     wp_dequeue_style('global-styles'); // theme.json-generated styles
// }, 20);
