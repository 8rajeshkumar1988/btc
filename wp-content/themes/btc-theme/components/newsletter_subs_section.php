<?php
$lang = get_locale();
if($lang=='fr_FR'){
  $fr_class = 'fr';
}else{
  $fr_class = '';
}
?>
<style>
    .newsletter_error{
        color:#ff0000;
        margin-top: 10px;
    }
</style>
<section id="newsletter">
    <div class="heading <?php echo $fr_class; ?>" animateHeading>
        <p><?php echo t('newsletterHeading'); ?></p>
        <h2><?php echo t('newsletterSubHeading'); ?></h2>
    </div>
    <form class="newsletter_form" id="btc-subscribe-form">
        <div class="f_name">
            <label for="first_name"><?php echo t('newsletterName'); ?>*</label>
            <br />
            <input
                id="first_name"
                type="text"
                name="name"
                
                class="text-control__input"
                placeholder="<?php echo t('newsletterNamePlaceholder'); ?>" />
        </div>        
        <div class="email_g">
            <label for="email"><?php echo t('newsletterEmail'); ?>*</label>
            <br />
            <input id="email"  type="email" name="email" placeholder="<?php echo t('newsletterEmailPlaceholder'); ?>" />
        </div>
        <div class="subscribe_btn">
            <button class="cta subscribeCta <?php echo $fr_class; ?>">
            <?php echo t('newsletterSubscribe'); ?>
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow" />
            </button>
            <p class="newsletter_error"></p>
            <p class="subscribe_success"></p>
        </div>
    </form>
</section>


<script>
    $(document).ready(function () {
        gsap.from('.newsletter_form > div', {
            opacity: 0,
            y: 100,
            duration: 1,
            delay: 0.5,
            ease: "power4.out",
            stagger: 0.1,
            scrollTrigger: {
                trigger: ".newsletter_form",
                start: "top 85%",
                toggleActions: "play none none reverse",
            }
        })
    })
</script>

