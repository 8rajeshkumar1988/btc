<section id="newsletter">
    <div class="heading">
        <p>Never Miss an Update</p>
        <h2>Sign Up for Our Newsletter</h2>
    </div>
    <form class="newsletter_form" action="/">
        <div class="f_name">
            <label for="first_name"> Name</label>
            <br />
            <input
                id="first_name"
                type="text"
                placeholder="Enter your name" />
        </div>
        
        <div class="email_g">
            <label for="email">Email</label>
            <br />
            <input id="email" type="email" placeholder="Enter your email" />
        </div>
        <button class="cta">
            Subscribe
            <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg"  ?>" alt="right arrow" />
        </button>
    </form>
</section>