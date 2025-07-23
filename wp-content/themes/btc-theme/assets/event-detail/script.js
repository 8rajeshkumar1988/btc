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
    const input = document.getElementById('attendees_number');
    let value = parseInt(input.value, 10) || 0;
    if (value < 99) input.value = value + 1;
  }

  function decreaseValue() {
    const input = document.getElementById('attendees_number');
    let value = parseInt(input.value, 10) || 0;
    if (value > 1) input.value = value - 1;
  }


   var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.gallery-button-next',
        prevEl: '.gallery-button-prev',
      },
	 		
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,

      // slideToClickedSlide: true,
			// loop: true,
			// loopedSlides: 4

    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;