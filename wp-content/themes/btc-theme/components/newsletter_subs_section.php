<style>
    .newsletter_error{
        color:#ff0000;
        margin-top: 10px;
    }
</style>
<section id="newsletter">
    <div class="heading" animateHeading>
        <p>Never Miss an Update</p>
        <h2>Sign Up for Our Newsletter</h2>
    </div>
    <form class="newsletter_form" id="btc-subscribe-form">
        <div class="f_name">
            <label for="first_name"> Name*</label>
            <br />
            <input
                id="first_name"
                type="text"
                name="name"
                
                class="text-control__input"
                placeholder="Enter your name" />
        </div>        
        <div class="email_g">
            <label for="email">Email*</label>
            <br />
            <input id="email"  type="email" name="email" placeholder="Enter your email" />
        </div>
        <button class="cta">
            Subscribe
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow" />
        </button>
    </form>
    <p class="newsletter_error"></p>
    <p class="subscribe_success"></p>
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

