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
