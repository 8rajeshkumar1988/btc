<?php
get_header();
?>



<section class="heroBanner">

    <?php
    $banner_image = get_field('banner_image');
    $banner_video = get_field('banner_video');

    if ($banner_image) {
        $image_url = isset($banner_image['sizes']['full']) ? $banner_image['sizes']['full'] : $banner_image['url'];
        $alt_text = isset($banner_image['alt']) ? $banner_image['alt'] : '';

        echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
    } else if ($banner_video) {
        echo '<video playsinline autoplay muted loop src="' . esc_url($banner_video['url']) . '"></video>';
    }

    ?>
    <div class="content">
        <p></p>
        <div class="heroText">
            <!-- <p>Previous Events</p> -->
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<div class="breadcrub_container">
    <p class="breadcrub">
        <a href="<?php echo site_url('/') ?>">Home</a> / <a href="<?php echo site_url('/all-event') ?>">Events & Engagements</a> / <?php the_title() ?>
    </p>
    <div class="social_links">
        <a href=""><img
                src="<?php echo get_template_directory_uri() . '/assets/images/insta.png'; ?>"
                alt="instagram" /></a>
        <a href=""><img
                src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>"
                alt="facebook" /></a>
        <a href=""><img
                src="<?php echo get_template_directory_uri() . '/assets/images/x.png'; ?>"
                alt="twitter" /></a>
        <a href=""><img
                src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>"
                alt="linkedin" /></a>
        <a href=""><img
                src="<?php echo get_template_directory_uri() . '/assets/images/youtube.png'; ?>"
                alt="youtube" /></a>
    </div>
</div>
<div class="event-conetnt">
    <?php the_content(); ?>
</div>

<?php
$latitude = get_field('latitude');
$longitude = get_field('longitude');
if ($latitude && $longitude) {


?>

    <section id="event_location">
        <div class="heading">
            <p>Get Directions</p>
            <h2>Event Location</h2>
        </div>

        <div class="iframe">
            <iframe
                src="https://www.google.com/maps?q=<?php echo $latitude ?>,<?php echo $longitude ?>&z=15&output=embed"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="button_container">
            <div class="copy_address">
                <button><img src="<?php echo get_template_directory_uri() . '/assets/images/copy.svg'; ?>" alt="" /> Copy Address</button>
            </div>
            <a target="_blank" href="https://www.google.com/maps?q=<?php echo $latitude ?>,<?php echo $longitude ?>" class="cta">Open in Maps <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="" /></a>
        </div>
    </section>
<?php } ?>
<?php

$gallery = get_post_meta(get_the_ID(), '_event_gallery', true);
if ($gallery && is_array($gallery)) {
?>
    <section id="event_gallery">
        <div class="heading">
            <p>See the Action</p>
            <h2>Event Gallery</h2>
        </div>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">

                <?php
                foreach ($gallery as $img) {
                    $attachment_id = attachment_url_to_postid($img);
                    $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                    $title = get_the_title($attachment_id);
                ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide-container">
                            <img title="<?php echo $title; ?>" src="<?php echo esc_url($img) ?>" alt="<?php echo $alt; ?>" />
                        </div>
                    </div>
                <?php } ?>


            </div>
            <!-- Add Arrows -->

        </div>
        <div class="swiper-container gallery-thumbs">
            <button class="gallery-button-prev">
                <img
                    src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>"
                    alt="right arrow" />
            </button>
            <div class="swiper-wrapper">



                <?php
                foreach ($gallery as $img) {
                    $attachment_id = attachment_url_to_postid($img);
                    $thumbnail = wp_get_attachment_image_src($attachment_id, 'thumbnail');
                    $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                    $title = get_the_title($attachment_id);


                    if ($thumbnail) {
                ?> <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <img
                                    src="<?php echo esc_url($thumbnail[0]); ?>"
                                    alt="<?php echo esc_attr($alt ?: $title); ?>"
                                    title="<?php echo esc_attr($title); ?>" />
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>




            </div>
            <button class="gallery-button-next">
                <img
                    src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>"
                    alt="right arrow" />
            </button>
        </div>
    </section>
<?php
}
?>


<section id="event_registration">
    <div class="heading">
        <p>Never Miss an opportunity</p>
        <h2>Register Now</h2>
    </div>
    <form class="event_reg_form" id="btc-event-form">
        <div class="f_name">
            <label for="first_name"> Name</label>
            <br />
            <input id="first_name" type="text" name="name" placeholder="Enter your name" />
        </div>

        <div class="email_g">
            <label for="email">Your e-mail</label>
            <br />
            <input id="email" type="email" name="email" placeholder="Enter your email" />
        </div>
        <div class="phone_number">
            <label for="phoneno">Phone number</label>
            <br />
            <input id="phoneno" type="tel" name="phone" placeholder="Enter your phone number" />
        </div>
        <div class="reason_to_attend">
            <label for="reason">Reason to Attend</label>
            <br />
            <textarea name="reason_to_attend" id="reason"></textarea>
        </div>
        <div class="no_of_attendees">
            <label for="attendees_number">No. of Attendees</label>
            <br />
            <div class="combine_box">
                <div class="input-group">
                    <div
                        class="value-button descrease"
                        onclick="decreaseValue()"
                        value="Decrease Value">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/minus.svg'; ?>" alt="" />
                    </div>
                    <input
                        name="no_of_attendees"
                        type="number"
                        id="attendees_number"
                        value="1"
                        min="1"
                        max="99"
                        readonly />
                    <div
                        class="value-button increase"
                        onclick="increaseValue()"
                        value="Increase Value">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>" alt="" />
                    </div>
                </div>
                <button class="cta">
                    Subscribe
                    <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>"
                        alt="right arrow" />
                </button>
            </div>
        </div>
    </form>
</section>

<?php
$otherEvents = new WP_Query(array(
    'post_type' => 'event',
    'meta_key' => 'event_from_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'post__not_in'   => array(get_the_ID()),

));

if ($otherEvents->have_posts()) {


?>

    <section id="explore_other_event">
        <div class="heading">
            <p>Event Lineup</p>
            <h2>Explore Other Events</h2>
        </div>
        <div class="event_btc_container">
            <div class="swiper event_btc">
                <div class="swiper-wrapper">
                    <?php
                    $counter = 1;
                    while ($otherEvents->have_posts()) {
                        $otherEvents->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide event_item">
                            <div class="event_image">
                                <?php
                                $banner_image = get_field('banner_image');
                                if ($banner_image) {
                                    $image_url = isset($banner_image['sizes']['full']) ? $banner_image['sizes']['full'] : $banner_image['url'];
                                    $alt_text = isset($banner_image['alt']) ? $banner_image['alt'] : '';

                                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                                }

                                ?>
                                <p class="cta">
                                    View Event
                                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                                </p>
                            </div>
                            <div class="event_description">
                                <h2><?php the_title(); ?></h2>
                                <div class="event_date">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/images/event/calender.png" ?>" alt="" />
                                    <p><?php echo date('j F Y', strtotime(get_field('event_from_date'))); ?>
                                        <?php if (get_field('event_to_date') != get_field('event_from_date')) { ?>
                                            - <?php echo date('j F Y', strtotime(get_field('event_to_date')));
                                            } ?></p>
                                </div>
                                <div class="event_location">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/images/event/location.png" ?>" alt="location" />
                                    <p><?php echo get_field('event_location'); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php } ?>



                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
        <div class="event_btc_button_container">
            <div class="event_btc_buttons">
                <button class="event_btc-prev">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
                <button class="event_btc-next">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </section>

<?php } ?>





<?php
get_footer();

?>