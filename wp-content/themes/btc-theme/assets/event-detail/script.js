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

function copyAddress(button) {
  const latitude = button.getAttribute("data-lat");
  const longitude = button.getAttribute("data-lng");
  const url = `https://www.google.com/maps?q=${latitude},${longitude}`;

  navigator.clipboard.writeText(url).then(() => {
    const copyIcon = button.querySelector(".copy-icon");
    const checkIcon = button.querySelector(".check-icon");

    copyIcon.classList.remove("active");
    checkIcon.classList.add("active");

    setTimeout(() => {
      checkIcon.classList.remove("active");
      copyIcon.classList.add("active");
    }, 1500);
  });
}



function changeAttendees(delta) {
    const input = document.getElementById("attendees_number");
    let val = parseInt(input.value, 10) || 1;
    val += delta;
    if (val < 1) val = 1;
    if (val > 99) val = 99;
    input.value = val.toString().padStart(2, "0");
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