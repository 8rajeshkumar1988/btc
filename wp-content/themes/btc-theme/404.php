<?php get_header(); ?>

<div class="container" style="text-align: center; padding: 100px 20px;">
    <h1 style="font-size: 48px;">Oops! Page Not Found</h1>
    <p style="font-size: 20px;">Sorry, the page you're looking for doesn't exist or has been moved.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="cta">Go to Homepage</a>
</div>

<?php get_footer(); ?>