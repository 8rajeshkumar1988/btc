<?php


add_action('admin_enqueue_scripts', function ($hook) {
    global $post;
    
    if ($hook === 'post.php' || $hook === 'post-new.php') {
        if (isset($post) && $post->post_type === 'event') {
            wp_enqueue_style('event-gallery-admin-css', get_template_directory_uri() . '/admin-assets/css/style.css');
        }
    }
});




function university_post_types() {
    // Event Post Type
    register_post_type( 'event', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'excerpt' ),
        'rewrite' => array( 'slug' => 'events' ),
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
    ) );

    // Program Post Type
    register_post_type( 'product', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Product',
            'singular_name' => 'Product'
        ),
        'menu_icon' => 'dashicons-awards'
    ) );

    // Professor Post Type
    register_post_type( 'category', array(
        'label' => 'Categories',
        'public' => true,
        'show_ui' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'rewrite' => array( 'slug' => 'products' ),
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
            'add_new_item' => 'Add New Category',
            'edit_item' => 'Edit Category',
            'all_items' => 'All Categories',
        ),
        'menu_icon' => 'dashicons-tag',
    ) );


     register_post_type( 'client', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'thumbnail' ),
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
    ) );

   
    register_post_type('customiz_category', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor'),
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
    ) );

    register_post_type('customization_type', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor','thumbnail'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Customization Types',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Type',
            'singular_name' => 'Customization Type'
        ),
        'menu_icon' => 'dashicons-text-page'
    ) );

    register_post_type('leadership', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor','thumbnail'),
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
    ) );


    register_post_type('homecapability', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor','thumbnail'),
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
    ) );


}

add_action( 'init', 'university_post_types' );




function product_faq_meta_box() {
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

function render_category_faqs_meta_box($post) {
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
function save_category_faqs_meta($post_id) {
    if (!isset($_POST['category_faqs_nonce']) || !wp_verify_nonce($_POST['category_faqs_nonce'], 'save_category_faqs')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['category_faqs']) && is_array($_POST['category_faqs'])) {
        $cleaned_faqs = array_map(function($faq) {
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





function my_custom_meta_box() {
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
        ['client','category','customization_type','leadership','homecapability','product','customiz_category'],                // Post types
        'side',                             // Context: 'side' = right sidebar
        'default'                           // Priority
    ); 


}
add_action('add_meta_boxes', 'my_custom_meta_box');


function render_sort_order_meta_box($post) {
    $value = get_post_meta($post->ID, '_sort_order', true);
    $value=$value?$value:0;
    ?>
    <input type="number" name="sort_order" value="<?php echo esc_attr($value); ?>" style="width: 100%;" />
    <p class="description">Lower number = higher priority</p>
    <?php
}

function render_event_gallery_meta_box($post) {
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
        .gallery-item { display: inline-block; margin: 10px; text-align: center; }
        .gallery-item img { display: block; margin-bottom: 5px; }
    </style>

    <script>
    jQuery(document).ready(function($){
        $('#add-gallery-images').on('click', function(e){
            e.preventDefault();
            var frame = wp.media({
                title: 'Select or Upload Images',
                button: { text: 'Use these images' },
                multiple: true
            });

            frame.on('select', function(){
                var attachments = frame.state().get('selection').toJSON();
                var container = $('#event-gallery-wrapper .gallery-images');

                attachments.forEach(function(attachment){
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

        $(document).on('click', '.remove-image', function(){
            $(this).closest('.gallery-item').remove();
        });
    });
    </script>
    <?php
}





function render_is_spotlight_checkbox($post) {
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
                button: { text: 'Use this image' },
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

function render_custom_dropdown($post) {
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


function render_product_custom_category_dropdown($post) {
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
function save_custom_dropdown_data($post_id) {
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
function add_custom_category_column($columns) {
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
function add_custom_product_column($columns) {
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
function show_custom_category_column($column, $post_id) {
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
