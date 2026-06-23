$(document).ready(function () {
  let spotlight_slider = new Swiper(".spotlight_slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
  });

  const about_more_news = new Swiper(".about_more_news", {
    slidesPerView: 1,
    spaceBetween: 20,

    navigation: {
      nextEl: ".about_more_news-next",
      prevEl: ".about_more_news-prev",
    },

    breakpoints: {
      600: {
        slidesPerView: 1.5,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 2.3,
        spaceBetween: 40,
      },
    },
    on: {
      init: function () {
        toggleNavButtons(this, ".about_more_news-prev", ".about_more_news-next");
      },
      resize: function () {
        toggleNavButtons(this, ".about_more_news-prev", ".about_more_news-next");
      },
    },
  });
  const about_more_blogs = new Swiper(".about_more_blogs", {
    slidesPerView: 1,
    spaceBetween: 20,

    navigation: {
      nextEl: ".about_more_blogs-next",
      prevEl: ".about_more_blogs-prev",
    },

    breakpoints: {
      600: {
        slidesPerView: 1.5,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 2.3,
        spaceBetween: 40,
      },
    },
    on: {
      init: function () {
        toggleNavButtons(this, ".about_more_blogs-prev", ".about_more_blogs-next");
      },
      resize: function () {
        toggleNavButtons(this, ".about_more_blogs-prev", ".about_more_blogs-next");
      },
    },
  });

  function toggleNavButtons(swiperInstance, prevSelector, nextSelector) {
    const section = swiperInstance.el.closest("section");
    if (!section) return;

    const nextBtn = section.querySelector(nextSelector);
    const prevBtn = section.querySelector(prevSelector);
    const buttonsContainer = section.querySelector(
      ".more_news_buttons, .more_news_buttons_news"
    );
    if (!nextBtn || !prevBtn || !buttonsContainer) return;

    const totalSlides = swiperInstance.slides.length;
    const slidesPerView =
      typeof swiperInstance.params.slidesPerView === "number"
        ? swiperInstance.params.slidesPerView
        : 1;
    const shouldShow = totalSlides > slidesPerView;
    const display = shouldShow ? "flex" : "none";

    nextBtn.style.display = display;
    prevBtn.style.display = display;
    buttonsContainer.style.display = display;
  }

  gsap.utils.toArray("#news_spotlight .news_detail").forEach((wrap, i) => {
    const img = wrap.querySelector("img");
    if (!img) return;
    gsap.from(img, {
      y: -100,
      // opacity: 0,
      ease: "none",
      // duration: 1.2,
      // stagger: 0.2,
      scrollTrigger: {
        trigger: wrap,
        start: "top 90%",
        end: "bottom top",
        scrub: true, 
        // toggleActions: "play none none reverse",
      },
    });
  });
  gsap.utils.toArray(".blog_card .blog_image").forEach((wrap, i) => {
    const img = wrap.querySelector("img");
    if (!img) return;
    gsap.from(img, {
      y: -100,
      // opacity: 0,
      ease: "none",
      // duration: 1.2,
      // stagger: 0.2,
      scrollTrigger: {
        trigger: wrap,
        start: "top 90%",
        end: "bottom top",
        scrub: true, 
        // toggleActions: "play none none reverse",
      },
    });
  });

  gsap.utils.toArray(".explore_media_card .explore_media_image").forEach((wrap, i) => {
    const img = wrap.querySelector("img");
    if (!img) return;
    gsap.from(img, {
      y: -100,
      // opacity: 0,
      ease: "none",
      // duration: 1.2,
      // stagger: 0.2,
      scrollTrigger: {
        trigger: wrap,
        start: "top 90%",
        end: "bottom top",
        scrub: true, 
        // toggleActions: "play none none reverse",
      },
    });
  });

  const isMobile = window.innerWidth <= 768;
  const startValue = isMobile ? "top 90%" : "top 80%";
  $(".about_more_news .blog_card").each(function (index) {
    let delayValue = isMobile ? 0 : index * 0.08;
    gsap.from(this, {
      y: 150,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      delay: delayValue,
      scrollTrigger: {
        trigger: this,
        start: startValue,
        toggleActions: "restart none none reverse",
      },
    });
  });
  $(".explore_media_container .explore_media_card").each(function (index) {
    let delayValue = isMobile ? 0 : index * 0.08;
    gsap.from(this, {
      y: 150,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      delay: delayValue,
      scrollTrigger: {
        trigger: this,
        start: startValue,
        toggleActions: "restart none none reverse",
      },
    });
  });
});
