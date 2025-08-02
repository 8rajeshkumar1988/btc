let swiper1 = new Swiper(" .event_btc", {
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
    }
  }
});

window.addEventListener("load", () => {
  const activeSlide = document.querySelector("#spotlight .swiper-slide-active .event_description");
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


let eventSwiper = new Swiper("#spotlight .hero-slider", {
  slidesPerView: 1,
  spaceBetween: 0,
  // grabCursor: true,
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
      gsap.utils.toArray("#spotlight .event_description").forEach((desc) => {
        const children = desc.children;
        gsap.set(children, { opacity: 0, y: 50 });
      });
    },
    // Animate only current slide's .event_description children
    slideChangeTransitionEnd: () => {
      const activeSlide = document.querySelector(
        "#spotlight .swiper-slide-active .event_description"
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




  let impactScrollTrigger;

$(document).ready(function () {
  $(".impact_wrapper.open .content").css("display", "grid").show();

  $(".impact_wrapper").click(function () {
    const $clicked = $(this);

    if ($clicked.hasClass("open")) return;

    const $previousOpen = $(".impact_wrapper.open");

    // $previousOpen.css("background-position", "50% 50%");

    $previousOpen.find(".content").slideUp(800);

    $previousOpen.removeClass("open");

    $clicked.addClass("open");
    $clicked.find(".content").css("display", "grid").hide().slideDown(800);

    if (impactScrollTrigger) {
      impactScrollTrigger.kill();
      impactScrollTrigger = null;
    }

    const selector = "#upcoming_events .impact_wrapper.open > img";

    if (window.innerWidth > 1024) {
      impactScrollTrigger = gsap.from(selector, {
         y: -100,
        ease: "none",
        scrollTrigger: {
          trigger: selector,
          start: "top 90%",
          end: "bottom top",
          toggleActions: "restart none none reverse",
          scrub: true,
        },
      });
    } else {
      impactScrollTrigger = gsap.from(
        selector,{
          y: -100,
          ease: "none",
          scrollTrigger: {
            trigger: selector,
            start: "top 90%",
            end: "bottom top",
            toggleActions: "restart none none reverse",
            scrub: true,
          },
        }
      );
    }
  });

  const defaultSelector = "#upcoming_events .impact_wrapper.open > img";
  if ($(defaultSelector).length) {
    if (window.innerWidth > 1024) {
      impactScrollTrigger = gsap.from(defaultSelector, {
        y: -100,
        ease: "none",
        scrollTrigger: {
          trigger: defaultSelector,
          start: "top 80%",
          end: "bottom top",
          toggleActions: "restart none none reverse",
          scrub: true,
        },
      });
    } else {
      impactScrollTrigger = gsap.from(
        defaultSelector,{
          y: -100,
          ease: "none",
          scrollTrigger: {
            trigger: defaultSelector,
            start: "top 90%",
            end: "bottom top",
            toggleActions: "restart none none reverse",
            scrub: true,
          },
        }
      );
    }
  }
});





function toggleNavButtons(swiperInstance) {
  const totalSlides = swiperInstance.slides.length;
  const slidesPerView = swiperInstance.params.slidesPerView;

  const nextBtn = document.querySelector('.event_btc-next');
  const prevBtn = document.querySelector('.event_btc-prev');
  const buttonsContainer = document.querySelector('.event_btc_buttons');
  if (totalSlides <= slidesPerView) {
    nextBtn.style.display = 'none';
    prevBtn.style.display = 'none';
    buttonsContainer.style.display = 'none';
  } else {
    nextBtn.style.display = 'flex';
    prevBtn.style.display = 'flex';
    buttonsContainer.style.display = 'flex';
  }
}




  // gsap.utils.toArray(".event_btc  .event_image").forEach((card, i) => {
  //   const media = card.querySelector(".eventImage");
  //   if (!media) return;

  //   gsap.to(media, {
  //     y: -100,
  //     ease: "none",
  //     delay: i * 0.5,
  //     scrollTrigger: {
  //       trigger: card,
  //       start: "top 90%",
  //       end: "bottom 0%",
  //       scrub: true,
  //       toggleActions: "play none none reverse",
  //     },
  //   });
  // });

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


