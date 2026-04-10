<?php
get_header();
?>

<?php
$lang=get_locale();
if($lang=='fr_FR'){
  $home_url=t('homeUrl');
  $events_url=t('homeUrl').'/evenements-et-engagements';
  $home_title='Accueil';
  $events_title='Événements et Engagements';
}else{
  $home_url=t('homeUrl');
  $events_url=t('homeUrl').'/all-event';
  $home_title='Home';
  $events_title='Events & Engagements';
}
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
       <p class="breadcrub">
        <a href="<?php echo $home_url ?>"><?php echo $home_title ?></a> / <a href="<?php echo $events_url ?>"><?php echo $events_title ?></a> / <?php the_title() ?>
        </p>
        <div class="heroText  eventDetailsHead">
            <!-- <p>Previous Events</p> -->
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="layer"></div>
        <div class="layer2"></div>
    </div>
</section>

<div class="breadcrub_container">
     <div class="cta" style="pointer-events: none;font-size: var(--font-16);">
    <?php echo date('j M Y', strtotime(get_field('event_from_date'))); ?>
    <?php if (get_field('event_to_date') != get_field('event_from_date')) { ?>
        - <?php echo date('j M Y', strtotime(get_field('event_to_date'))); ?>
    <?php } ?>
    </div>
    <div class="social_links">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook" onclick="shareToFacebook()" data-url="<?php echo esc_url(get_permalink()); ?>"
            data-title="<?php echo esc_attr(get_the_title()); ?>" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.png" alt="twitter" onclick="shareToTwitter()" data-url="<?php echo esc_url(get_permalink()); ?>"
            data-title="<?php echo esc_attr(get_the_title()); ?>" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="linkedin" onclick="shareToLinkedIn()" data-url="<?php echo esc_url(get_permalink()); ?>"
            data-title="<?php echo esc_attr(get_the_title()); ?>" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png" alt="whatsapp" onclick="shareToWhatsApp()" data-url="<?php echo esc_url(get_permalink()); ?>"
            data-title="<?php echo esc_attr(get_the_title()); ?>" />
    </div>
    
</div>
<div style="
    height: 2px;
    background: linear-gradient(to left, transparent 50%, #f1f1f1ff 50%);
    background-size: 20px 2px, 100% 2px;
    position: relative;"></div>
<div class="event-content">
    <img class="pattern" src="<?php echo get_template_directory_uri() . "/assets/images/BTC_pattern.png" ?>" alt="BTC pattern" />

    <h4 style="margin-bottom: 20px;"><?php echo t('aboutEvent'); ?></h4>
   

    <?php the_content(); ?>
</div>

<?php
$latitude = get_field('latitude');
$longitude = get_field('longitude');
if ($latitude && $longitude) {


?>

    <section id="event_location">
        <div class="heading">
            <p><?php echo t('getDirections'); ?></p>
            <h2><?php echo t('eventLocation'); ?></h2>
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
                <button id="copyBtn" onclick="copyAddress(this)" data-lat="<?php echo esc_attr($latitude); ?>" data-lng="<?php echo esc_attr($longitude); ?>">
                    <span class="icon-wrapper">
                        <img
                            class="copy-icon active"
                            src="<?php echo get_template_directory_uri() . '/assets/images/copy.svg'; ?>"
                            alt="Copy" />
                        <img
                            class="check-icon"
                            src="<?php echo get_template_directory_uri() . '/assets/images/check.png'; ?>"
                            alt="Copied" />
                    </span>
                    <?php echo t('copyAddress'); ?>
                </button>

            </div>
            <a target="_blank" href="https://www.google.com/maps?q=<?php echo $latitude ?>,<?php echo $longitude ?>" class="cta"><?php echo t('openInMaps'); ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>" alt="" /></a>
        </div>
    </section>
<?php } ?>
<?php

$gallery = get_post_meta(get_the_ID(), '_event_gallery', true);
if ($gallery && is_array($gallery)) {
?>
    <section id="event_gallery">
        <div class="heading">
            <p><?php echo t('seeTheAction'); ?></p>
            <h2><?php echo t('eventGallery'); ?></h2>
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
                            <img src="<?php echo esc_url($img) ?>" alt="<?php echo $alt; ?>" />
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
            <div class="swiper-wrapper" style="padding: 0px 10px;">



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
                                    alt="<?php echo esc_attr($alt ?: $title); ?>" />
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>

                <div class="swiper-slide" ></div>
                <div class="swiper-slide" ></div>



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

<?php
$today = date('Ymd');
$event_Start_Date = get_field('event_from_date');


if ($event_Start_Date) {
    $event_id = get_the_ID();
    if ($today < $event_Start_Date) {
?>
        <section id="event_registration">
            <div class="heading">
                <p><?php echo t('neverMissAnOpportunity'); ?></p>
                <h2><?php echo t('registerNow'); ?></h2>
            </div>
            <form class="event_reg_form" id="btc-event-form">
                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                <div class="f_name">
                    <label for="first_name"><?php echo t('yourname'); ?></label>
                    <br />
                    <input id="first_name" class="text-control__input" type="text" name="name" placeholder="<?php echo t('enterYourName'); ?>" />
                </div>

                <div class="email_g">
                    <label for="email"><?php echo t('youremail'); ?></label>
                    <br />
                    <input id="email" type="email" class="email-input" name="email" placeholder="<?php echo t('enterYourEmail'); ?>" />
                </div>
                <div class="phone_number" style="position: relative;z-index: 2;" >
                    <label for="phoneno"><?php echo t('yourphone'); ?></label>
                    <br />
                    <span data-lenis-prevent>
                        <input id="phoneno" type="tel" class="phone-input" autocomplete="new-number" name="phone" placeholder="<?php echo t('enterYourPhoneNumber'); ?>" />
                    </span>
                </div>
                <div class="reason_to_attend">
                    <label for="reason"><?php echo t('reasonToAttend'); ?></label>
                    <br />
                    <textarea name="reason_to_attend" id="reason" placeholder="<?php echo t('enterYourReasonToAttend'); ?>"></textarea>
                </div>
                <div class="no_of_attendees">
                    <label for="attendees_number"><?php echo t('noOfAttendees'); ?></label>
                    <br />
                    <div class="combine_box">
                        <div class="input-group">
                            <div
                                class="value-button descrease"
                                onclick="changeAttendees(-1)"
                                value="Decrease Value">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/minus.svg'; ?>" alt="" />
                            </div>
                            <input
                                name="no_of_attendees"
                                type="number"
                                id="attendees_number"
                                value="01"
                                min="01"
                                max="99"
                                maxlength="2"
                                readonly />
                            <div
                                class="value-button increase"
                                onclick="changeAttendees(1)"
                                value="Increase Value">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/plus.svg'; ?>" alt="" />
                            </div>
                        </div>
                        <button class="cta">
                            <?php echo t('submitBtn'); ?>
                            <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/right_arrow.svg'; ?>"
                                alt="right arrow" />
                        </button>
                    </div>
                </div>
            </form>
            <div class="event_form_error_container">
                <p class="event_form_error"></p>
            </div>
        </section>
<?php
    }
}
?>

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
            <p><?php echo t('eventLineup'); ?></p>
            <h2><?php echo t('exploreOtherEvents'); ?></h2>
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
                                    <?php echo t('viewEvent'); ?>
                                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                                </p>
                            </div>
                            <div class="event_description">
                                <h2><?php the_title(); ?></h2>
                                <div class="event_date">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/images/event/calender.png" ?>" alt="" />
                                    <p><?php echo date('j M Y', strtotime(get_field('event_from_date'))); ?>
                                        <?php if (get_field('event_to_date') != get_field('event_from_date')) { ?>
                                            - <?php echo date('j M Y', strtotime(get_field('event_to_date')));
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
                <button class="event_btc-prev globalNavigation navBtnColor">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
                <button class="event_btc-next globalNavigation navBtnColor">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
                </button>
            </div>
        </div>
    </section>

<?php } ?>





<?php
get_footer();

?>