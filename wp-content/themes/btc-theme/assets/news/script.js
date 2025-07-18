var swiper = new Swiper(".spotlight_slider", {
  slidesPerView: "auto",
  spaceBetween: 30,
});

var swiper2 = new Swiper(".about_more_news", {
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
});
