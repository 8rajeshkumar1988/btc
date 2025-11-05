$(document).ready(function () {
  const homeBtcSwiper = new Swiper(".home-btc-swiper", {
    // grabCursor: true,
    effect: "creative",
    speed: 600,
    loop: true,
    // autoplay: {
    //   delay: 18000,
    //   disableOnInteraction: true,
    // },
    creativeEffect: {
      prev: {
        translate: [0, 0, -400],
        opacity: 0,
      },
      next: {
        translate: ["100%", 0, 0],
        opacity: 0,
      },
      current: {
        translate: [0, 0, 0],
        opacity: 1,
      },
    },
    on: {
      slideChangeTransitionStart() {
        document
          .querySelectorAll(".swiper-slide")
          .forEach((el) => el.classList.add("blurring"));
      },
      slideChangeTransitionEnd() {
        document
          .querySelectorAll(".swiper-slide")
          .forEach((el) => el.classList.remove("blurring"));
      },
    },

    navigation: {
      nextEl: ".why_btc-next",
      prevEl: ".why_btc-prev",
    },
  });

  if (window.innerWidth > 768) {
    gsap.from("#globalSearch", {
      y: 150,
      ease: "none",
      scrollTrigger: {
        trigger: "#globalSearch",
        start: "top 100%",
        end: "top 0%",
        scrub: true,
        toggleActions: "play none none reverse",
      },
    });

    gsap.from("#globalSearch .content", {
      y: 100,
      opacity: 0,
      duration: 1.2,
      ease: "power4.out",
      scrollTrigger: {
        trigger: "#globalSearch .content",
        start: "top 85%",
        toggleActions: "play none none reverse",
      },
    });
    gsap.to("#globalSearch .content_wrapper", {
      y: 150,
      ease: "none",
      scrollTrigger: {
        trigger: "#globalSearch .content_wrapper",
        start: "top 85%",
        end: "top 0%",
        toggleActions: "play none none reverse",
        scrub: true,
      },
    });
  } else {
    // gsap.fromTo(
    //   "#globalSearch",
    //   { y: 100 },
    //   {
    //     y: 0,
    //     ease: "none",
    //     scrollTrigger: {
    //       trigger: "#globalSearch",
    //       start: "top 100%",
    //       end: "top 0%",
    //       scrub: true,
    //       toggleActions: "play none none reverse",
    //     },
    //   }
    // );
    // gsap.from("#globalSearch .content", {
    //   y: 50,
    //   opacity: 0,
    //   duration: 1.2,
    //   ease: "power4.out",
    //   scrollTrigger: {
    //     trigger: "#globalSearch .content",
    //     start: "top 90%",
    //     toggleActions: "play none none reverse",
    //   },
    // });
  }



  gsap.utils.toArray("#sustainableManufacturer .img img").forEach((img) => {
    gsap.to(img, {
      y: 0,
      ease: "none",
      scrollTrigger: {
        trigger: img.closest(".img") || img,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    });
  });

  if (window.innerWidth > 1024) {
    gsap.utils.toArray("#sustainableManufacturer .text").forEach((text) => {
      gsap.to(text, {
        y: "-25%",
        ease: "none",
        scrollTrigger: {
          trigger: text,
          start: "top bottom",
          end: "bottom top",
          scrub: true,
        },
      });
    });
  } else {
    gsap.utils.toArray("#sustainableManufacturer .img").forEach((item) => {
      gsap.from(item, {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        scrollTrigger: {
          trigger: item,
          start: "top 90%",
          end: "bottom top",
          toggleActions: "play none none reverse",
        },
      });
    });
  }

  gsap.utils.toArray("#sustainableManufacturer .img p").forEach((text) => {
    gsap.from(text, {
      y: 100,
      duration: 1.2,
      opacity: 0,
      ease: "power4.out",
      scrollTrigger: {
        trigger: text,
        start: "top 85%",
      },
    });
  });

  gsap.utils.toArray("#sustainableManufacturer .text").forEach((container) => {
    const items = container.querySelectorAll("p, li");
    if (window.innerWidth > 1024) {
      gsap.from(items, {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.2,
        scrollTrigger: {
          trigger: container,
          start: "top 80%",
          end: "bottom top",
          toggleActions: "play none none reverse",
        },
      });
    } else {
      gsap.from(items, {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        scrollTrigger: {
          trigger: container,
          start: "top 80%",
          end: "bottom top",
          toggleActions: "play none none reverse",
        },
      });
    }
  });

  if (window.innerWidth > 1024) {
    gsap.fromTo(
      "#glance > .svg",
      {
        top: "-20dvh",
      },
      {
        top: "20dvh",
        ease: "none",
        scrollTrigger: {
          trigger: "#glance",
          start: "top 100%",
          end: "bottom 0%",
          scrub: true,
          toggleActions: "play none none reverse",
        },
      }
    );
  } else {
    gsap.fromTo(
      "#glance > .svg",
      {
        top: "-5vh",
      },
      {
        top: "5vh",
        ease: "none",
        scrollTrigger: {
          trigger: "#glance",
          start: "top 100%",
          end: "top 0%",
          scrub: true,
          toggleActions: "play none none reverse",
        },
      }
    );
  }
  if(window.innerWidth > 1024) {
    gsap.from("#glance .first, #glance .second", {
      y: 100,
      opacity: 0,
      stagger: 0.01,
      duration: 1.2,
      ease: "power4.out",
      scrollTrigger: {
        trigger: "#glance .subContent",
        start: "top 85%",
        end: "bottom 0%",
        toggleActions: "play none none reverse",
      },
    })
    gsap.from("#glance .subContent > div", {
      y: 100,
      opacity: 0,
      stagger: 0.2,
      duration: 1.2,
      ease: "power4.out",
      scrollTrigger: {
        trigger: "#glance .subContent",
        start: "top 85%",
        end: "bottom 0%",
        toggleActions: "play none none reverse",
      },
    });
  } else{
    gsap.from("#glance .first, #glance .second, #glance .subContent > div", {
      y: 100,
      opacity: 0,
      stagger: 0.1,
      duration: 1.2,
      ease: "power4.out",
      scrollTrigger: {
        trigger: "#glance .subContent",
        start: "top 90%",
        end: "bottom 0%",
        toggleActions: "play none none reverse",
      },
    })
  }

  gsap.utils.toArray("#roleOfbtc .img img").forEach((img) => {
    gsap.to(img, {
      y: 0,
      ease: "none",
      scrollTrigger: {
        trigger: img.closest(".img") || img,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    });
  });

  gsap.utils.toArray("#roleOfbtc .text").forEach((container) => {
    const items = container.querySelectorAll("p, li");
    gsap.from(items, {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      stagger: 0.2,
      scrollTrigger: {
        trigger: container,
        start: "top 80%",
        end: "bottom top",
        toggleActions: "play none none reverse",
      },
    });
  });

  if (window.innerWidth > 1024) {
    gsap.utils.toArray("#roleOfbtc .text").forEach((text) => {
      gsap.to(text, {
        y: "-25%",
        ease: "none",
        scrollTrigger: {
          trigger: text,
          start: "top bottom",
          end: "bottom top",
          scrub: true,
        },
      });
    });
  } else {
    gsap.utils.toArray("#roleOfbtc .img").forEach((item) => {
      gsap.from(item, {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        scrollTrigger: {
          trigger: item,
          start: "top 90%",
          end: "bottom top",
          toggleActions: "play none none reverse",
        },
      });
    });
  }

  // const paths = document.querySelectorAll("#glance path");

  // function getCenter(path) {
  //     const bbox = path.getBBox();
  //     return {
  //         x: bbox.x + bbox.width / 2,
  //         y: bbox.y + bbox.height / 2
  //     };
  // }

  // paths.forEach((path) => {
  //     path.addEventListener("mouseenter", () => {
  //         // reset all paths
  //         paths.forEach(p => p.setAttribute("fill", "#554DA5"));

  //         const center = getCenter(path);

  //         // Calculate distance for all paths
  //         const distances = Array.from(paths).map(p => {
  //             const c = getCenter(p);
  //             const dx = c.x - center.x;
  //             const dy = c.y - center.y;
  //             return { path: p, dist: Math.sqrt(dx * dx + dy * dy) };
  //         });

  //         // Sort by distance and pick 20 closest
  //         distances.sort((a, b) => a.dist - b.dist);
  //         distances.slice(0, 21).forEach(item => {
  //             item.path.setAttribute("fill", "#d4ff32");
  //         });
  //     });

  //     path.addEventListener("mouseleave", () => {
  //         paths.forEach(p => p.setAttribute("fill", "#554DA5"));
  //     });
  // });
});
