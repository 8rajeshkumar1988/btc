<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  // Output meta title and description for pages/posts
  // if (is_singular(post_types: ['post', 'page','blogs'])) {
    $meta_title = get_post_meta(get_the_ID(), 'meta_title', true);
    $meta_description = get_post_meta(get_the_ID(), 'meta_description', true);
    $meta_image = get_post_meta(get_the_ID(), 'meta_image', true);

    // Meta Title
    if ($meta_title) {
      echo '<title>' . esc_html($meta_title) . '</title>' . "\n";
    } else {
      echo '<title>' . get_the_title() . ' | ' . get_bloginfo('name') . '</title>' . "\n";
    }

    // Meta Description
    if ($meta_description) {
      echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . "\n";
    }
    // if ($meta_image) {
    //   $meta_image_url = wp_get_attachment_url($meta_image); 
    //   echo '<meta itemprop="image" property="og:image"  content="'.esc_attr($meta_image_url).'"/>' . "\n";
    // }

     if ($meta_image) {
    $metaimage = wp_get_attachment_image_src($meta_image, 'metaimage');
    if ($metaimage) {
        $meta_image_url = $metaimage[0];     // URL
        $meta_image_width = $metaimage[1];   // Width
        $meta_image_height = $metaimage[2];  // Height

        // Output for Open Graph / SEO
        echo '<meta property="og:image" content="' . esc_url($meta_image_url) . '">' . "\n";
        echo '<meta property="og:image:width" content="' . esc_attr($meta_image_width) . '">' . "\n";
        echo '<meta property="og:image:height" content="' . esc_attr($meta_image_height) . '">' . "\n";
        echo '<meta itemprop="image" content="' . esc_url($meta_image_url) . '">' . "\n";
    }
   } 

  
  ?>

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  
<?php get_template_part('components/headerMenu'); ?>