<?php

get_header();

?>

<?php
$today = date('Ymd');

$liveEvents = new WP_Query(array(
  'post_type' => 'event',
  'meta_key' => 'event_from_date',
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'event_from_date',
      'value' => $today,
      'compare' => '<=',
      'type' => 'NUMERIC'
    ),
    array(
      'key' => 'event_to_date',
      'value' => $today,
      'compare' => '>=',
      'type' => 'NUMERIC'
    ),
  )
));
if (!$liveEvents->have_posts()) {
  $liveEvents = new WP_Query(array(
    'post_type' => 'event',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'meta_key' => 'event_to_date',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'meta_query' => array(
      array(
        'key' => 'event_to_date',
        'value' => $today,
        'compare' => '<',
        'type' => 'NUMERIC'
      ),
    )
  ));
}

?>
<?php if ($liveEvents->have_posts()) {

  $event_count = $liveEvents->post_count;

?>

  <section id="spotlight">
    <!-- <video playsinline autoplay muted loop src="../assets/homeVideo.mp4"></video> -->
    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        <?php while ($liveEvents->have_posts()) {
          $liveEvents->the_post(); ?>
          <div class="swiper-slide">
            <?php
            $banner_image = get_field('banner_image');
            if ($banner_image) {
              $image_url = isset($banner_image['sizes']['full']) ? $banner_image['sizes']['full'] : $banner_image['url'];
              $alt_text = isset($banner_image['alt']) ? $banner_image['alt'] : '';

              echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
            }

            ?>

            
            <div class="content">
              <p class="breadcrub">&nbsp;</p>
              <div class="heading">
                <p style="font-weight: 400;margin-bottom: 20px;">SPOTLIGHT</p>
                <div class="event_description">
                  <h1><?php the_title() ?></h1>
                  <div class="event_date">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/event/calender-white.png" ?>" alt="" />
                    <p><?php echo date('j F Y', strtotime(get_field('event_from_date'))); ?>
                      <?php if (get_field('event_to_date') != get_field('event_from_date')) { ?>
                        - <?php echo date('j F Y', strtotime(get_field('event_to_date')));
                        } ?></p>
                  </div>
                  <div class="event_location">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/event/location-white.png" ?>" alt="" />
                    <p><?php echo get_field('event_location'); ?></p>
                  </div>
                  <a class="cta" href="<?php the_permalink(); ?>">
                    View Event
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
    <?php if ($event_count > 1) { ?>
      <div class="hero_slider_button_container">
        <div class="hero_slider_buttons">
          <button class="hero_slider-prev">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
          </button>
          <button class="hero_slider-next">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
          </button>
        </div>
      </div>
    <?php } ?>
  </section>
<?php } ?>

<?php
$upcomingEvents = new WP_Query(array(
  'post_type' => 'event',
  'meta_key' => 'event_from_date',
  'orderby' => 'meta_value_num',
  'order' => 'ASC',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'event_from_date',
      'value' => $today,
      'compare' => '>',
      'type' => 'NUMERIC'
    ),

  )
));

if ($upcomingEvents->have_posts()) {


?>


  <section id="upcoming_events">
    <div class="heading">
      <p>Don't Miss</p>
      <h2>Upcoming events</h2>
    </div>
    <div class="our_impact_container">
      <?php
      $counter = 1;
      while ($upcomingEvents->have_posts()) {
        $upcomingEvents->the_post(); ?>
        <div class="impact_wrapper upcoming-events <?php echo $counter == 1 ? 'open' : ''; ?>">
          <?php
          $banner_image = get_field('banner_image');
          if ($banner_image) {
            $image_url = isset($banner_image['sizes']['full']) ? $banner_image['sizes']['full'] : $banner_image['url'];
            $alt_text = isset($banner_image['alt']) ? $banner_image['alt'] : '';

            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
          }

          ?>
          <div class="overlay"></div>
          <div class="impact_wrapper_head">
            <h2><?php the_title() ?></h2>
            <button class="open-btn">
              <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>"
                alt="right arrow" />
            </button>
          </div>
          <div class="content">
            <div class="content-details">
              <p>
                <?php echo get_the_excerpt(); ?>
              </p>

              <div class="content-bottom">
                <div class="event_date">
                  <img src="<?php echo get_template_directory_uri() . "/assets/images/event/calender-white.png" ?>" alt="" />
                  <p><?php echo date('j F Y', strtotime(get_field('event_from_date'))); ?>
                    <?php if (get_field('event_to_date') != get_field('event_from_date')) { ?>
                      - <?php echo date('j F Y', strtotime(get_field('event_to_date')));
                      } ?></p>
                </div>
                <div class="event_location">
                  <img src="<?php echo get_template_directory_uri() . "/assets/images/event/location-white.png" ?>" alt="" />
                  <p><?php echo get_field('event_location'); ?></p>
                </div>
                <a class="cta" href="<?php the_permalink(); ?>">
                  Register Now <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>"
                    alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php $counter++;
      } ?>
    </div>
  </section>
<?php } ?>
<?php
$pastEvents = new WP_Query(array(
  'post_type' => 'event',
  'post_status' => 'publish',
  'posts_per_page' => -1, // or set to any number like 10
  'meta_key' => 'event_to_date',
  'orderby' => 'meta_value_num',
  'order' => 'DESC', // latest past events first
  // 'meta_query' => array(
  //   array(
  //     'key' => 'event_to_date',
  //     'value' => $today,
  //     'compare' => '<',
  //     'type' => 'NUMERIC'
  //   ),
  // )
));

if ($pastEvents->have_posts()) {

?>
  <section id="event_archive">
    <div class="heading">
      <p>Event Archive</p>
      <h2>Previous Events</h2>
    </div>
    <div class="event_btc_container">
      <div class="swiper event_btc">
        <div class="swiper-wrapper">

          <?php
          while ($pastEvents->have_posts()) {
            $pastEvents->the_post(); ?>
            <div class="swiper-slide event_item">
              <div class="event_image">
                <?php
                if (has_post_thumbnail()) {
                  $thumbnail_id = get_post_thumbnail_id();
                  $image_url = wp_get_attachment_url($thumbnail_id);
                  $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                  $title_text = get_the_title($thumbnail_id);
                  if (empty($alt_text)) {
                    $alt_text = get_the_title();
                  }
                  if (empty($title_text)) {
                    $title_text = get_the_title();
                  }

                  $image = '<img title="' . esc_attr($title_text) . '" src="' . esc_url($image_url) . '" alt="' . esc_attr($alt_text) . '">';
                  echo $image;
                }

                ?>
              </div>
              <div class="event_description">
                <h2>BTC at FutureTextiles Summit 2025</h2>
                <div class="event_date">
                  <img src="<?php echo get_template_directory_uri() . "/assets/images/event/calender.png" ?>" alt="" />
                  <p><?php echo date('j F Y', strtotime(get_field('event_from_date'))); ?>
                    <?php if (get_field('event_to_date') != get_field('event_from_date')) { ?>
                      - <?php echo date('j F Y', strtotime(get_field('event_to_date')));
                      } ?></p>
                </div>
                <div class="event_location">
                  <img src="<?php echo get_template_directory_uri() . "/assets/images/event/location.png" ?>" alt="" />
                  <p><?php echo get_field('event_location'); ?></p>
                </div>
                <button class="cta">
                  View Event
                  <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow" />
                </button>
              </div>
            </div>
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

<?php get_template_part('components/socials'); ?>
<?php get_template_part('components/newsletter_subs_section'); ?>


<?php
get_footer();

?>