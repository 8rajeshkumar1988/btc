var swiper = new Swiper(".about_btc", {
  slidesPerView: 1,
  spaceBetween: 20,

  navigation: {
    nextEl: ".about_btc-next",
    prevEl: ".about_btc-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2.8,
      spaceBetween: 30,

    },
  },
});

$(document).ready(function () {
  $(".impact_wrapper.open .content").css("display", "grid").show();

  $(".impact_wrapper").click(function () {
    const $clicked = $(this);

    if ($clicked.hasClass("open")) {
      return;
    }

    $(".impact_wrapper.open .content").slideUp(800);
    $(".impact_wrapper").removeClass("open");

    $clicked.addClass("open");
    $clicked.find(".content")
      .css("display", "grid")
      .hide()
      .slideDown(800);
  });
});

// $(".faq.default-open .ans").slideDown(500);

// $(".faq").click(function () {
//   const item = $(this);
//   $(".faq.default-open .ans").slideUp(500);
//   const answer = item.find(".ans");
//   if (item.hasClass("default-open")) {
//     item.removeClass("default-open");
//     answer.slideUp(500);
//   } else {
//     $(".faq").removeClass("default-open");
//     item.addClass("default-open");
//     answer.slideDown(500);
//   }
// });