let swiper1 = new Swiper(".event_btc", {
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

window.addEventListener("load", () => {
  const activeSlide = document.querySelector(".swiper-slide-active .event_description");
  if (activeSlide) {
    const children = activeSlide.children;
    gsap.set(children, { opacity: 0, y: 50 });
    gsap.to(children, {
      opacity: 1,
      y: 0,
      duration: 0.6,
      stagger: 0.1,
      ease: "power2.out",
    });
  }
});


let eventSwiper = new Swiper(".hero-slider", {
  slidesPerView: 1,
  spaceBetween: 0,
  grabCursor: true,
  speed: 1000,
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
  navigation: {
    nextEl: ".hero_slider-next",
    prevEl: ".hero_slider-prev",
  },
  on: {
    // Reset all descriptions before animation
    slideChangeTransitionStart: () => {
      gsap.utils.toArray(".event_description").forEach((desc) => {
        const children = desc.children;
        gsap.set(children, { opacity: 0, y: 50 });
      });
    },
    // Animate only current slide's .event_description children
    slideChangeTransitionEnd: () => {
      const activeSlide = document.querySelector(
        ".swiper-slide-active .event_description"
      );
      if (activeSlide) {
        const children = activeSlide.children;
        gsap.to(children, {
          opacity: 1,
          y: 0,
          duration: 0.6,
          stagger: 0.1,
          ease: "power2.out",
        });
      }
    },
  },
});

// let swiper2 = new Swiper(".hero-slider", {
//   slidesPerView: 1,
//   spaceBetween: 0,
//   grabCursor: true,
//   effect: "creative",
//   speed: 1000,
//   keyboard: {
//     enabled: true,
//   },
//   creativeEffect: {
//     prev: {
//       shadow: true,
//       translate: ["-20%", 0, -1],
//     },
//     next: {
//       translate: ["100%", 0, 0],
//     },
//   },
//   navigation: {
//     nextEl: ".hero_slider-next",
//     prevEl: ".hero_slider-prev",
//   },
// });

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
    $clicked.find(".content").css("display", "grid").hide().slideDown(800);
  });
});
