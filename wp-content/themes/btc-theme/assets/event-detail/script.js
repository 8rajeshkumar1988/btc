$(document).ready(function () {
  let event_btc = new Swiper(" .event_btc", {
    slidesPerView: 1.05,
    spaceBetween: 20,
    // initialSlide: 2,
    centerSlides: true,
    navigation: {
      nextEl: ".event_btc-next",
      prevEl: ".event_btc-prev",
    },

    breakpoints: {
      550: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2.1,
      },
      1100: {
        slidesPerView: 3,
      },
    },
    on: {
      init: function () {
        toggleNavButtons(this);
      },
      resize: function () {
        toggleNavButtons(this);
      },
    },
  });
  $(".event_btc .event_item").each(function (index) {
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
});

function toggleNavButtons(swiperInstance) {
  const totalSlides = swiperInstance.slides.length;
  const slidesPerView = swiperInstance.params.slidesPerView;

  const nextBtn = document.querySelector(".event_btc-next");
  const prevBtn = document.querySelector(".event_btc-prev");
  const buttonsContainer = document.querySelector(".event_btc_buttons");
  if (totalSlides <= slidesPerView) {
    nextBtn.style.display = "none";
    prevBtn.style.display = "none";
    buttonsContainer.style.display = "none";
  } else {
    nextBtn.style.display = "flex";
    prevBtn.style.display = "flex";
    buttonsContainer.style.display = "flex";
  }
}

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

 const galleryThumbs = new Swiper(".gallery-thumbs", {
    spaceBetween: 10,
    slidesPerView: "auto",
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
  });

  const galleryTop = new Swiper(".gallery-top", {
    spaceBetween: 0,
    parallax: true,
    speed: 1200,
    navigation: {
      nextEl: ".gallery-button-next",
      prevEl: ".gallery-button-prev",
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });


window.addEventListener("load", () => {  
    gsap.to('.eventDetailsHead h1', {
      opacity: 1,
      y: 0,
      duration: 0.6,
      stagger: 0.1,
      ease: "power2.out",
    });
});
