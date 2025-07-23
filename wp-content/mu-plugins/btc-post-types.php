<?php


add_action('admin_enqueue_scripts', function ($hook) {
    global $post;

    if ($hook === 'post.php' || $hook === 'post-new.php') {
        if (isset($post) && $post->post_type === 'event') {
            wp_enqueue_style('event-gallery-admin-css', get_template_directory_uri() . '/admin-assets/css/style.css');
        }
    }
});




function university_post_types()
{
    // Event Post Type
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    // Program Post Type
    register_post_type('product', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Product',
            'singular_name' => 'Product'
        ),
        'menu_icon' => 'dashicons-products'
    ));

    // Professor Post Type
    register_post_type('category', array(
        'label' => 'Categories',
        'public' => true,
        'show_ui' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'products'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
            'add_new_item' => 'Add New Category',
            'edit_item' => 'Edit Category',
            'all_items' => 'All Categories',
        ),
        'menu_icon' => 'dashicons-tag',
    ));


    register_post_type('client', array(
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Clients',
            'add_new_item' => 'Add New Client',
            'edit_item' => 'Edit Client',
            'all_items' => 'All Client',
            'singular_name' => 'Client'
        ),
        'menu_icon' => 'dashicons-format-image'
    ));


    register_post_type('customiz_category', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Customization Categories',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Category',
            'singular_name' => 'Customization Category'
        ),
        'menu_icon' => 'dashicons-lightbulb
'
    ));

    register_post_type('customization_type', array(
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => false,
        'public' => true,
        'labels' => array(
            'name' => 'Customization Types',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Type',
            'singular_name' => 'Customization Type'
        ),
        'menu_icon' => 'dashicons-text-page'
    ));

    register_post_type('leadership', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Leaderships',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Leadership',
            'singular_name' => 'Leadership'
        ),
        'menu_icon' => 'dashicons-networking'
    ));


    register_post_type('homecapability', array(
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Capabilities',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Capabilities',
            'singular_name' => 'Capability'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ));


    register_post_type('socialmedia', array(
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Social Medias',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Social Medias',
            'singular_name' => 'Social Media'
        ),
        'menu_icon' => 'dashicons-embed-post'
    ));


    register_post_type('infra_legacy_pointer', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Infra Legacy Pointers',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Pointers',
            'singular_name' => 'Infra Legacy Pointer'
        ),
        'menu_icon' => 'dashicons-hammer'
    ));


    register_post_type('lead', array(
        'labels' => array(
            'name' => 'Leads',
            'singular_name' => 'Lead',
            'add_new_item' => 'Add New Lead',
            'edit_item' => 'Edit Lead',
            'new_item' => 'New Lead',
            'view_item' => 'View Lead',
            'search_items' => 'Search Leads',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // for Gutenberg and API
        'supports' => array('title'), // you can also add 'editor', 'thumbnail' if needed
        'menu_icon' => 'dashicons-id', // nice icon for leads
    ));


    register_post_type('subscriber', array(
        'labels' => array(
            'name' => 'Subscribers',
            'singular_name' => 'Subscriber',
            'add_new_item' => 'Add New Subscriber',
            'edit_item' => 'Edit Subscriber',
            'new_item' => 'New Subscriber',
            'view_item' => 'View Subscriber',
            'search_items' => 'Search Subscribers',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // for Gutenberg and API
        'supports' => array('title'), // you can also add 'editor', 'thumbnail' if needed
        'menu_icon' => 'dashicons-heart', // nice icon for leads
    ));

    register_post_type('event_registration', array(
        'labels' => array(
            'name' => 'Event Registrations',
            'singular_name' => 'Registration',
            'add_new_item' => 'Add New Registration',
            'edit_item' => 'Edit Registration',
            'new_item' => 'New Registration',
            'view_item' => 'View Registration',
            'search_items' => 'Search Registrations',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // for Gutenberg and API
        'supports' => array('title'), // you can also add 'editor', 'thumbnail' if needed
        'menu_icon' => 'dashicons-groups', // nice icon for leads
    ));
}

add_action('init', 'university_post_types');




function product_faq_meta_box()
{
    $screens = ['category', 'page']; // Add more post types if needed 
    foreach ($screens as $screen) {
        add_meta_box(
            'category_faqs',
            'Category FAQs',
            'render_category_faqs_meta_box',
            $screen,
            'normal',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'product_faq_meta_box');

function render_category_faqs_meta_box($post)
{
    $faqs = get_post_meta($post->ID, 'category_faqs', true);
    wp_nonce_field('save_category_faqs', 'category_faqs_nonce');

?>
    <div id="faq-wrapper">
        <?php if (!empty($faqs) && is_array($faqs)) : ?>
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="faq-item">
                    <input type="text" name="category_faqs[<?php echo $index; ?>][question]" value="<?php echo esc_attr($faq['question']); ?>" placeholder="Question" style="width: 100%; margin-bottom: 5px;" />
                    <textarea name="category_faqs[<?php echo $index; ?>][answer]" placeholder="Answer" style="width: 100%; height: 80px;"><?php echo esc_textarea($faq['answer']); ?></textarea>
                    <button type="button" class="remove-faq button">Remove</button>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <button type="button" class="add-faq button button-primary">Add FAQ</button>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let wrapper = document.getElementById('faq-wrapper');
            let addBtn = document.querySelector('.add-faq');

            addBtn.addEventListener('click', function() {
                let count = wrapper.querySelectorAll('.faq-item').length;
                let div = document.createElement('div');
                div.classList.add('faq-item');
                div.innerHTML = `
                <input type="text" name="category_faqs[${count}][question]" placeholder="Question" style="width: 100%; margin-bottom: 5px;" />
                <textarea name="category_faqs[${count}][answer]" placeholder="Answer" style="width: 100%; height: 80px;"></textarea>
                <button type="button" class="remove-faq button">Remove</button>
                <hr>`;
                wrapper.appendChild(div);
            });

            wrapper.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-faq')) {
                    e.target.parentElement.remove();
                }
            });
        });
    </script>
<?php
}
function save_category_faqs_meta($post_id)
{
    if (!isset($_POST['category_faqs_nonce']) || !wp_verify_nonce($_POST['category_faqs_nonce'], 'save_category_faqs')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['category_faqs']) && is_array($_POST['category_faqs'])) {
        $cleaned_faqs = array_map(function ($faq) {
            return [
                'question' => sanitize_text_field($faq['question']),
                'answer'   => sanitize_textarea_field($faq['answer']),
            ];
        }, $_POST['category_faqs']);
        update_post_meta($post_id, 'category_faqs', $cleaned_faqs);
    } else {
        delete_post_meta($post_id, 'category_faqs');
    }
}
add_action('save_post', 'save_category_faqs_meta');





function my_custom_meta_box()
{
    add_meta_box(
        'custom_dropdown_box',
        'Select Category',
        'render_custom_dropdown',
        'customization_type', // or your custom post type
        'side',
        'default'
    );

    add_meta_box(
        'custom_dropdown_box',
        'Select Category',
        'render_product_custom_category_dropdown',
        'product', // or your custom post type
        'side',
        'default'
    );
    add_meta_box(
        'is_spotlight_meta',
        'Spotlight Product',
        'render_is_spotlight_checkbox',
        'product', // your post type
        'side',
        'default'
    );
    add_meta_box(
        'event_gallery',
        'Event Gallery',
        'render_event_gallery_meta_box',
        'event', // your custom post type
        'normal',
        'default'
    );
    add_meta_box(
        'sort_order_meta',                  // ID
        'Sort Order',                       // Title
        'render_sort_order_meta_box',      // Callback
        ['client', 'category', 'customization_type', 'leadership', 'homecapability', 'product', 'customiz_category', 'socialmedia', 'infra_legacy_pointer'],                // Post types
        'side',                             // Context: 'side' = right sidebar
        'default'                           // Priority
    );
}
add_action('add_meta_boxes', 'my_custom_meta_box');


function render_sort_order_meta_box($post)
{
    $value = get_post_meta($post->ID, '_sort_order', true);
    $value = $value ? $value : 0;
?>
    <input type="number" name="sort_order" value="<?php echo esc_attr($value); ?>" style="width: 100%;" />
    <p class="description">Lower number = higher priority</p>
<?php
}

function render_event_gallery_meta_box($post)
{
    $gallery = get_post_meta($post->ID, '_event_gallery', true);
    $gallery = is_array($gallery) ? $gallery : [];

?>
    <div id="event-gallery-wrapper">
        <div class="gallery-images">
            <?php foreach ($gallery as $image_url): ?>
                <div class="gallery-item">
                    <img src="<?php echo esc_url($image_url); ?>" style="max-width:100px;" />
                    <input type="hidden" name="event_gallery[]" value="<?php echo esc_url($image_url); ?>" />
                    <button type="button" class="button remove-image">Remove</button>
                </div>
            <?php endforeach; ?>
        </div>
        <button type="button" class="button" id="add-gallery-images">Add More Images</button>
    </div>

    <style>
        .gallery-item {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }

        .gallery-item img {
            display: block;
            margin-bottom: 5px;
        }
    </style>

    <script>
        jQuery(document).ready(function($) {
            $('#add-gallery-images').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select or Upload Images',
                    button: {
                        text: 'Use these images'
                    },
                    multiple: true
                });

                frame.on('select', function() {
                    var attachments = frame.state().get('selection').toJSON();
                    var container = $('#event-gallery-wrapper .gallery-images');

                    attachments.forEach(function(attachment) {
                        var html = '<div class="gallery-item">';
                        html += '<img src="' + attachment.url + '" style="max-width:400px;" />';
                        html += '<input type="hidden" name="event_gallery[]" value="' + attachment.url + '" />';
                        html += '<button type="button" class="button remove-image">Remove</button>';
                        html += '</div>';
                        container.append(html);
                    });
                });

                frame.open();
            });

            $(document).on('click', '.remove-image', function() {
                $(this).closest('.gallery-item').remove();
            });
        });
    </script>
<?php
}





function render_is_spotlight_checkbox($post)
{
    // Get saved value
    $value = get_post_meta($post->ID, '_is_spotlight', true);
    $checked = $value === 'yes' ? 'checked' : '';

    $spotlight_image = get_post_meta($post->ID, '_spotlight_image', true);

    echo '<label><input type="checkbox" name="is_spotlight" value="yes" ' . $checked . '> Mark as Spotlight Product</label>';
?>
    <!-- Spotlight Image Field -->
    <div class="custom-image-field" style="margin-top: 15px;">
        <p><strong>Spotlight Image</strong></p>
        <div class="preview">
            <?php if ($spotlight_image): ?>
                <img src="<?php echo esc_url($spotlight_image); ?>" style="max-width:100%; height:auto;" />
            <?php endif; ?>
        </div>
        <input type="hidden" name="spotlight_image" id="spotlight_image" value="<?php echo esc_attr($spotlight_image); ?>" />
        <button type="button" class="button upload_image_button" data-target="#spotlight_image" <?php echo $spotlight_image ? 'style="display:none;"' : ''; ?>>Set Spotlight Image</button>
        <button type="button" class="button replace_image_button" data-target="#spotlight_image" <?php echo !$spotlight_image ? 'style="display:none;"' : ''; ?>>Replace</button>
        <button type="button" class="button remove_image_button" data-target="#spotlight_image" <?php echo !$spotlight_image ? 'style="display:none;"' : ''; ?>>Remove</button>
    </div>

    <script>
        jQuery(document).ready(function($) {
            function updateButtons(inputField, imageUrl) {
                var wrapper = inputField.closest('.custom-image-field');
                var preview = wrapper.find('.preview');
                var uploadBtn = wrapper.find('.upload_image_button');
                var replaceBtn = wrapper.find('.replace_image_button');
                var removeBtn = wrapper.find('.remove_image_button');

                if (imageUrl) {
                    preview.html('<img src="' + imageUrl + '" style="max-width:100%; height:auto;" />');
                    inputField.val(imageUrl);
                    uploadBtn.hide();
                    replaceBtn.show();
                    removeBtn.show();
                } else {
                    preview.empty();
                    inputField.val('');
                    uploadBtn.show();
                    replaceBtn.hide();
                    removeBtn.hide();
                }
            }

            $('.upload_image_button, .replace_image_button').on('click', function(e) {
                e.preventDefault();
                var inputField = $($(this).data('target'));

                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false
                }).on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    updateButtons(inputField, attachment.url);
                }).open();
            });

            $('.remove_image_button').on('click', function(e) {
                e.preventDefault();
                var inputField = $($(this).data('target'));
                updateButtons(inputField, '');
            });
        });
    </script>

<?php

}

function render_custom_dropdown($post)
{
    $selected = get_post_meta($post->ID, '_customiz_category_id', true);

    $customiz_categories = get_posts([
        'post_type'      => 'customiz_category',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC',
    ]);

    echo '<select name="customiz_category_id">';
    foreach ($customiz_categories as $cat) {
        $is_selected = selected($selected, $cat->ID, false);
        echo "<option value='" . esc_attr($cat->ID) . "' $is_selected>" . esc_html($cat->post_title) . "</option>";
    }
    echo '</select>';
}


function render_product_custom_category_dropdown($post)
{
    $selected = get_post_meta($post->ID, '_category_id', true);

    $customiz_categories = get_posts([
        'post_type'      => 'category',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC',
    ]);

    echo '<select name="category_id">';
    foreach ($customiz_categories as $cat) {
        $is_selected = selected($selected, $cat->ID, false);
        echo "<option value='" . esc_attr($cat->ID) . "' $is_selected>" . esc_html($cat->post_title) . "</option>";
    }
    echo '</select>';
}




// Save selected value
function save_custom_dropdown_data($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['sort_order'])) {
        update_post_meta($post_id, '_sort_order', intval($_POST['sort_order']));
    }


    if (isset($_POST['event_gallery']) && is_array($_POST['event_gallery'])) {
        update_post_meta($post_id, '_event_gallery', array_map('esc_url_raw', $_POST['event_gallery']));
    } else {
        delete_post_meta($post_id, '_event_gallery');
    }

    if (isset($_POST['customiz_category_id'])) {
        update_post_meta($post_id, '_customiz_category_id', sanitize_text_field($_POST['customiz_category_id']));
    }
    if (isset($_POST['category_id'])) {
        update_post_meta($post_id, '_category_id', sanitize_text_field($_POST['category_id']));
    }
    if (isset($_POST['is_spotlight'])) {
        update_post_meta($post_id, '_is_spotlight', 'yes');
    } else {
        delete_post_meta($post_id, '_is_spotlight');
    }

    update_post_meta($post_id, '_spotlight_image', !empty($_POST['spotlight_image']) ? esc_url_raw($_POST['spotlight_image']) : '');
}
add_action('save_post', 'save_custom_dropdown_data');






add_filter('manage_customization_type_posts_columns', 'add_custom_category_column');
function add_custom_category_column($columns)
{
    // Add before 'date' column
    $new_columns = [];
    foreach ($columns as $key => $value) {
        if ($key === 'date') {
            $new_columns['customiz_category'] = 'Category';
        }
        $new_columns[$key] = $value;
    }
    return $new_columns;
}



add_filter('manage_product_posts_columns', 'add_custom_product_column');
function add_custom_product_column($columns)
{
    // Add before 'date' column
    $new_columns = [];
    foreach ($columns as $key => $value) {
        if ($key === 'date') {
            $new_columns['category'] = 'Category';
        }
        $new_columns[$key] = $value;
    }
    return $new_columns;
}

add_action('manage_product_posts_custom_column', 'show_custom_category_column', 10, 2);



add_action('manage_customization_type_posts_custom_column', 'show_custom_category_column', 10, 2);
function show_custom_category_column($column, $post_id)
{
    if ($column === 'customiz_category') {
        $cat_id = get_post_meta($post_id, '_customiz_category_id', true);
        if ($cat_id) {
            $cat_post = get_post($cat_id);
            if ($cat_post) {
                echo esc_html($cat_post->post_title);
            } else {
                echo '<em>Not found</em>';
            }
        } else {
            echo '<em>Not assigned</em>';
        }
    }

    if ($column === 'category') {
        $cat_id = get_post_meta($post_id, '_category_id', true);
        if ($cat_id) {
            $cat_post = get_post($cat_id);
            if ($cat_post) {
                echo esc_html($cat_post->post_title);
            } else {
                echo '<em>Not found</em>';
            }
        } else {
            echo '<em>Not assigned</em>';
        }
    }
}
function get_attachment_id_from_url($url)
{
    echo $url;
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare(
        "SELECT ID FROM $wpdb->posts WHERE guid = %s",
        $url
    ));
    print_r($attachment);

    return isset($attachment[0]) ? $attachment[0] : false;
}


function hide_title_and_editor_for_leads()
{
    $screen = get_current_screen();
    if ($screen->post_type === 'lead' || $screen->post_type === 'subscriber' || $screen->post_type === 'event_registration') {
        echo '<style>
            #titlediv, #postdivrich, #editor-toolbar, .editor-post-title__block { display: none !important; }
        </style>';
    }
}
add_action('admin_head', 'hide_title_and_editor_for_leads');




// 1. Define custom columns for the 'lead' post type
function btc_lead_custom_columns($columns)
{
    $new_columns = array(
        'cb'              => $columns['cb'],
        'name'            => 'Name',
        'email'           => 'Email',
        'phone_number'    => 'Phone',
        'company_name'         => 'Company',
        'requirements'         => 'Requirements',
        'whatsapp_number'         => 'Whatsapp Number',
        'organization_type'         => 'Organization Type',
        'enquiry_type'    => 'Enquiry Type',
        'i_agree_to_receive_e-communications_from_btc'    => 'Receive E Communications',
        'source_url'      => 'Page URL',
        'created_on'      => 'Created On',
    );
    return $new_columns;
}
add_filter('manage_edit-lead_columns', 'btc_lead_custom_columns');



function btc_subscriber_custom_columns($columns)
{
    $new_columns = array(
        'cb'              => $columns['cb'],
        'name'            => 'Name',
        'email'           => 'Email',
        'source_url'      => 'Page URL',
        'created_on'      => 'Created On',
    );
    return $new_columns;
}
add_filter('manage_edit-subscriber_columns', 'btc_subscriber_custom_columns');


function btc_subscriber_custom_column_content($column, $post_id)
{
    switch ($column) {
        case 'name':
            echo esc_html(get_field('name', $post_id));
            break;
        case 'email':
            echo esc_html(get_field('email', $post_id));
            break;

        case 'source_url':
            echo esc_html(get_field('source_url', $post_id));
            break;
        case 'created_on':
            echo esc_html(get_field('created_on', $post_id));
            break;
    }
}
add_action('manage_subscriber_posts_custom_column', 'btc_subscriber_custom_column_content', 10, 2);




function btc_event_registration_custom_columns($columns)
{
    $new_columns = array(
        'cb'              => $columns['cb'],
        'name'            => 'Name',
        'email'           => 'Email',
        'phone_number'    => 'Phone',
        'reason_to_attend'         => 'Reason to Attend',
        'no_of_attendees'         => 'No of Attendees',
        'source_url'      => 'Page URL',
        'created_on'      => 'Created On',
    );
    return $new_columns;
}
add_filter('manage_edit-event_registration_columns', 'btc_event_registration_custom_columns');





function btc_event_registration_custom_column_content($column, $post_id)
{
    switch ($column) {
        case 'name':
            echo esc_html(get_field('name', $post_id));
            break;
        case 'email':
            echo esc_html(get_field('email', $post_id));
            break;
        case 'phone_number':
            echo esc_html(get_field('phone_number', $post_id));
            break;
        case 'reason_to_attend':
            echo esc_html(get_field('reason_to_attend', $post_id));
            break;
        case 'no_of_attendees':
            echo esc_html(get_field('no_of_attendees', $post_id));
            break;
        case 'source_url':
            echo esc_html(get_field('source_url', $post_id));
            break;
        case 'created_on':
            echo esc_html(get_field('created_on', $post_id));
            break;
    }
}
add_action('manage_event_registration_posts_custom_column', 'btc_event_registration_custom_column_content', 10, 2);








// 2. Populate the custom columns
function btc_lead_custom_column_content($column, $post_id)
{
    switch ($column) {
        case 'name':
            echo esc_html(get_field('name', $post_id));
            break;
        case 'email':
            echo esc_html(get_field('email', $post_id));
            break;
        case 'phone_number':
            echo esc_html(get_field('phone_number', $post_id));
            break;
        case 'company_name':
            echo esc_html(get_field('company_name', $post_id));
            break;
        case 'requirements':
            echo esc_html(get_field('requirements', $post_id));
            break;
        case 'whatsapp_number':
            echo esc_html(get_field('whatsapp_number', $post_id));
            break;
        case 'organization_type':
            echo esc_html(get_field('organization_type', $post_id));
            break;
        case 'enquiry_type':
            echo esc_html(get_field('enquiry_type', $post_id));
            break;
        case 'i_agree_to_receive_e-communications_from_btc':
            echo esc_html(get_field('i_agree_to_receive_e-communications_from_btc', $post_id));
            break;
        case 'source_url':
            echo esc_html(get_field('source_url', $post_id));
            break;
        case 'created_on':
            echo esc_html(get_field('created_on', $post_id));
            break;
    }
}
add_action('manage_lead_posts_custom_column', 'btc_lead_custom_column_content', 10, 2);




function btc_lead_sortable_columns($columns)
{
    $columns['created_on'] = 'created_on';
    $columns['name'] = 'name';
    $columns['enquiry_type'] = 'enquiry_type';
    return $columns;
}
add_filter('manage_edit-lead_sortable_columns', 'btc_lead_sortable_columns');


function btc_subscriber_sortable_columns($columns)
{
    $columns['created_on'] = 'created_on';
    $columns['name'] = 'name';

    return $columns;
}
add_filter('manage_edit-subscriber_sortable_columns', 'btc_subscriber_sortable_columns');


function btc_event_registration_sortable_columns($columns)
{
    $columns['created_on'] = 'created_on';
    $columns['name'] = 'name';

    return $columns;
}
add_filter('manage_edit-event_registration_sortable_columns', 'btc_event_registration_sortable_columns');



function btc_date_filters()
{
    global $typenow;

    if ($typenow === 'lead') {
        $from_date = $_GET['lead_from_date'] ?? '';
        $to_date   = $_GET['lead_to_date'] ?? '';

        echo '<input type="date" name="lead_from_date" placeholder="From Date" value="' . esc_attr($from_date) . '" />';
        echo '<input type="date" name="lead_to_date" placeholder="To Date" value="' . esc_attr($to_date) . '" />';
    } else  if ($typenow === 'subscriber' || $typenow === 'event_registration') {
        $from_date = $_GET['from_date'] ?? '';
        $to_date   = $_GET['to_date'] ?? '';

        echo '<input type="date" name="from_date" placeholder="From Date" value="' . esc_attr($from_date) . '" />';
        echo '<input type="date" name="to_date" placeholder="To Date" value="' . esc_attr($to_date) . '" />';
    } else {
        return;
    }
}
add_action('restrict_manage_posts', 'btc_date_filters');



function btc_filter_by_created_date($query)
{
    global $pagenow;
    $post_type = $query->get('post_type');

    if ($pagenow === 'edit.php' && $post_type === 'lead' && is_admin()) {
        $from_date = $_GET['lead_from_date'] ?? '';
        $to_date   = $_GET['lead_to_date'] ?? '';

        if ($from_date || $to_date) {
            $meta_query = [];

            if ($from_date) {
                $meta_query[] = [
                    'key'     => 'created_on',
                    'value'   => $from_date,
                    'compare' => '>=',
                    'type'    => 'DATE',
                ];
            }

            if ($to_date) {
                $meta_query[] = [
                    'key'     => 'created_on',
                    'value'   => $to_date,
                    'compare' => '<=',
                    'type'    => 'DATE',
                ];
            }

            $query->set('meta_query', $meta_query);
        }
    }
    if ($pagenow === 'edit.php' && ($post_type === 'subscriber' || $post_type === 'event_registration') && is_admin()) {
        $from_date = $_GET['from_date'] ?? '';
        $to_date   = $_GET['to_date'] ?? '';

        if ($from_date || $to_date) {
            $meta_query = [];

            if ($from_date) {
                $meta_query[] = [
                    'key'     => 'created_on',
                    'value'   => $from_date,
                    'compare' => '>=',
                    'type'    => 'DATE',
                ];
            }

            if ($to_date) {
                $meta_query[] = [
                    'key'     => 'created_on',
                    'value'   => $to_date,
                    'compare' => '<=',
                    'type'    => 'DATE',
                ];
            }

            $query->set('meta_query', $meta_query);
        }
    }
}
add_action('pre_get_posts', 'btc_filter_by_created_date');



function remove_view_link_from_product_list($actions, $post)
{
    if ($post->post_type === 'product') {
        unset($actions['view']);
    }
    if ($post->post_type === 'customiz_category') {
        unset($actions['view']);
    }
    if ($post->post_type === 'customization_type') {
        unset($actions['view']);
    }
    if ($post->post_type === 'homecapability') {
        unset($actions['view']);
    }
    if ($post->post_type === 'leadership') {
        unset($actions['view']);
    }
    if ($post->post_type === 'client') {
        unset($actions['view']);
    }
    if ($post->post_type === 'infra_legacy_pointer') {
        unset($actions['view']);
    }



    return $actions;
}
add_filter('post_row_actions', 'remove_view_link_from_product_list', 10, 2);

function custom_login_logo()
{
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
add_action('login_head', 'custom_login_logo');



function custom_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');

function custom_login_logo_url_title()
{
    return get_bloginfo('name');
}
add_filter('login_headertext', 'custom_login_logo_url_title');

function hide_login_privacy_policy_link()
{
    echo '<style>
        .privacy-policy-page-link {
            display: none !important;
        }
    </style>';
}
add_action('login_head', 'hide_login_privacy_policy_link');

function remove_wp_admin_bar_logo()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_admin_bar_logo', 999);
