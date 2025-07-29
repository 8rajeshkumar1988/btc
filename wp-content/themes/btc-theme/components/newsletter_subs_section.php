<style>
    .newsletter_error{
        color:#ff0000;
        margin-top: 20px;
    }
</style>
<section id="newsletter">
    <div class="heading">
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
                required
                class="text-control__input"
                placeholder="Enter your name" />
        </div>
        
        <div class="email_g">
            <label for="email">Email*</label>
            <br />
            <input id="email" required type="email" name="email" placeholder="Enter your email" />
        </div>
        <button class="cta">
            Subscribe
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow" />
        </button>
    </form>
    <p class="newsletter_error"></p>
</section>




