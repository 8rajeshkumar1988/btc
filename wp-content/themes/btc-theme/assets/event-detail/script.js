var event_btc_detail = new Swiper(".event_btc", {
  slidesPerView: 1.05,
  spaceBetween: 20,

  navigation: {
    nextEl: ".event_btc-next",
    prevEl: ".event_btc-prev",
  },

  // slidesOffsetBefore: 0,
  // slidesOffsetAfter: 0,
  breakpoints: {
    768: {
      slidesPerView: 3,
      // slidesOffsetBefore: window.innerWidth * 0.1,
      // slidesOffsetAfter: window.innerWidth * 0.1,
    },
  },
});

function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}