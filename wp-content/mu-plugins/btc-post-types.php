<?php

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



    //  register_post_type( 'faq', array(
    //     'show_in_rest' => true,
    //     'supports' => array( 'title', 'editor'),
    //     'has_archive' => true,
    //     'public' => true,
    //     'labels' => array(
    //         'name' => 'Faqs',
    //         'add_new_item' => 'Add New Faq',
    //         'edit_item' => 'Edit Faq',
    //         'all_items' => 'All Faq',
    //         'singular_name' => 'Faq'
    //     ),
    //     'menu_icon' => 'dashicons-hammer'
    // ) );

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
