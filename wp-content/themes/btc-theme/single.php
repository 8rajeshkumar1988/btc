
<?php

get_header();

?>
<section class="blog_hero">
      <div>
        <img src="../assets/blog.jpg" alt="" />
        <div class="content">
          <div class="heading">
            <p>Blog type</p>
            <h1>
              Africa's Inner & Active Wear Edge: <br />
              A New Investment Frontier
            </h1>
          </div>
        </div>
      </div>
      <div class="breadcrub_container">
        <p class="breadcrub">
          Home / Blog / Africa's Inner & Active Wear Edge: A New Investment
          Frontier
        </p>
          <div class="social_links">
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/insta.png'; ?>" alt="instagram"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>" alt="facebook"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/x.png'; ?>" alt="twitter"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>" alt="linkedin"></a>
                <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/youtube.png'; ?>" alt="youtube"></a>
            </div>
      </div>
      <div class="tags">
        <p class="date">7 May 2025</p>
        <a href="/">Tag</a>
        <a href="/">Tag</a>
        <a href="/">Tag</a>
        <a href="/">Tag</a>
      </div>
    </section>

    <section id="recommendations_categories">
      <div class="recommendations_head">
        <div class="heading">
          <p>Curated for You</p>
          <h2>Browse Recommendations</h2>
        </div>
      </div>
      <div class="recommendations_categories_container">
        <div class="swiper recommendations_categories">
          <div class="swiper-wrapper">
            <div class="swiper-slide category_item">
              <a href="./index.html" class="category_image">
                <img src="../assets/category_item.png" alt="" />
                <p class="cta">
                  View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                </p>
              </a>
              <a href="./index.html" class="category_title"
                >BTC discusses journey of transformation, looks at a digital
                futuretransformation, looks at a digital future</a
              >
            </div>
            <div class="swiper-slide category_item">
              <a href="./index.html" class="category_image">
                <img src="../assets/category_item2.png" alt="" />
                <p class="cta">
                  View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                </p>
              </a>
              <a href="./index.html" class="category_title"
                >BTC discusses journey of transformation, looks at a digital
                future</a
              >
            </div>
            <div class="swiper-slide category_item">
              <a href="./index.html" class="category_image">
                <img src="../assets/category_item3.png" alt="" />
                <p class="cta">
                  View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                </p>
              </a>
              <a href="./index.html" class="category_title"
                >BTC discusses journey of transformation, looks at a digital
                future</a
              >
            </div>
            <div class="swiper-slide category_item">
              <a href="./index.html" class="category_image">
                <img src="../assets/category_item4.png" alt="" />
                <p class="cta">
                  View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                </p>
              </a>
              <a href="./index.html" class="category_title"
                >BTC discusses journey of transformation, looks at a digital
                future</a
              >
            </div>
            <div class="swiper-slide category_item">
              <a href="./index.html" class="category_image">
                <img src="../assets/category_item5.png" alt="" />
                <p class="cta">
                  View Article <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="" />
                </p>
              </a>
              <a href="./index.html" class="category_title"
                >BTC discusses journey of transformation, looks at a digital
                future</a
              >
            </div>
          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
      <div class="recommendations_buttons">
        <button class="recommendations-prev">
          <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
        </button>
        <button class="recommendations-next">
          <img src="<?php echo get_template_directory_uri() . "/assets/images/right_arrow.svg" ?>" alt="right arrow " />
        </button>
      </div>
    </section>

<?php
get_footer();

?>