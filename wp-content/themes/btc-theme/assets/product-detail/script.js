$(".faq.default-open .ans").slideDown(500);

$(".faq").click(function () {
  const item = $(this);
  $(".faq.default-open .ans").slideUp(500);
  const answer = item.find(".ans");
  if (item.hasClass("default-open")) {
    item.removeClass("default-open");
    answer.slideUp(500);
  } else {
    $(".faq").removeClass("default-open");
    item.addClass("default-open");
    answer.slideDown(500);
  }
});

var explore_other_categories = new Swiper(".explore_other_categories", {
  slidesPerView: 1.1,
  spaceBetween: 20,

  navigation: {
    nextEl: ".explore_other-next",
    prevEl: ".explore_other-prev",
  },
  speed: 1000,

  breakpoints: {
    768: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
  },
});

var spotlight_slider = new Swiper(".spotlight_slider", {
  slidesPerView: 1.2,
  initialSlide: 1,
  spaceBetween: 30,
  centeredSlides: true,
  watchSlidesProgress: true,
  speed: 1500,
  watchSlidesVisibility: true,
  navigation: {
    nextEl: ".product_spotlight-next",
    prevEl: ".product_spotlight-prev",
  },
});

$(document).ready(function () {

  gsap.utils.toArray("#explore_products .product_image").forEach((card, i) => {
    const media = card.querySelector(".productsImages");
    if (!media) return;

    gsap.to(media, {
      y: -100,
      ease: "none",
      delay: i * 0.5,
      scrollTrigger: {
        trigger: card,
        start: "top 90%",
        end: "bottom 0%",
        scrub: true,
        toggleActions: "play none none reverse",
      },
    });
  });

  $("#explore_products .products_item").each(function (index) {
    gsap.from(this, {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      delay: index * 0.08,
      scrollTrigger: {
        trigger: this,
        start: "top 90%",
        toggleActions: "restart none none reverse",
      },
    });
  });



  gsap.from("#faqs .faq, #faqs .faq p, #faqs .faq li", {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.2,
    stagger: 0.05,
    scrollTrigger: {
      trigger: "#faqs .accordian",
      start: "top 70%",
      toggleActions: "play none none reverse",
    },
  });


});
