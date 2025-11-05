var swiper = new Swiper(".about_btc", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop:true,
  navigation: {
    nextEl: ".about_btc-next",
    prevEl: ".about_btc-prev",
  },
   autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 800,
  breakpoints: {
    1200: {
      slidesPerView: 3,
      spaceBetween: 30,
       autoplay: false,
        loop: false,  
    },
    1024: {
      slidesPerView: 2.1,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 1.5,
      spaceBetween: 30,
    },
    550: {
      slidesPerView: 1.3,
      spaceBetween: 20,
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

function toggleNavButtons(swiperInstance) {
  const totalSlides = swiperInstance.slides.length;
  const slidesPerView = swiperInstance.params.slidesPerView;

  const nextBtn = document.querySelector(".about_btc-next");
  const prevBtn = document.querySelector(".about_btc-prev");
  if (totalSlides <= slidesPerView) {
    nextBtn.style.display = "none";
    prevBtn.style.display = "none";
  } else {
    nextBtn.style.display = "";
    prevBtn.style.display = "";
  }
}

let impactScrollTrigger;

$(document).ready(function () {
  $(".impact_wrapper.open .content").css("display", "grid").show();

  $(".impact_wrapper").click(function () {
    const $clicked = $(this);

    if ($clicked.hasClass("open")) return;

    const $previousOpen = $(".impact_wrapper.open");

    $previousOpen.css("background-position", "50% 50%");

    $previousOpen.find(".content").slideUp(800);

    $previousOpen.removeClass("open");

    $clicked.addClass("open");
    $clicked.find(".content").css("display", "grid").hide().slideDown(800);

    if (impactScrollTrigger) {
      impactScrollTrigger.kill();
      impactScrollTrigger = null;
    }

    const selector = "#our_impact .impact_wrapper.open";

    if (window.innerWidth > 1024) {
      impactScrollTrigger = gsap.from(selector, {
        backgroundPosition: "100% 0%",
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
      impactScrollTrigger = gsap.fromTo(
        selector,
        { backgroundPosition: "100% 0%" },
        {
          backgroundPosition: "90% 0%",
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

  const defaultSelector = "#our_impact .impact_wrapper.open";
  if ($(defaultSelector).length) {
    if (window.innerWidth > 1024) {
      impactScrollTrigger = gsap.from(defaultSelector, {
        backgroundPosition: "100% 0%",
        ease: "none",
        scrollTrigger: {
          trigger: defaultSelector,
          start: "top 90%",
          end: "bottom top",
          toggleActions: "restart none none reverse",
          scrub: true,
        },
      });
    } else {
      impactScrollTrigger = gsap.fromTo(
        defaultSelector,
        { backgroundPosition: "100% 0%" },
        {
          backgroundPosition: "90% 0%",
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

// document.addEventListener("DOMContentLoaded", function () {
//   const cards = document.querySelectorAll(".leader_card");
//   const popup = document.getElementById("popup");
//   const popupImg = document.getElementById("popupImg");
//   const popupHeading = document.getElementById("popupHeading");
//   const popupPara = document.getElementById("popupPara");
//   const popupleaderBio = document.getElementById("leader_bio");
//   const linkedinProfile = document.getElementById("linkedin_profile");
//   const closeBtn = document.getElementById("closeBtn");

//   cards.forEach((card) => {
//     card.addEventListener("click", () => {
//       popupImg.src = "";
//       const img = card.querySelector("img");
//       const heading = card.querySelector(".leader_title");
//       const para = card.querySelector(".leader_description");
//       const leaderBio = card.querySelector(".leader_bio");
//       const linkedin_link = card.querySelector(".linkedin_profile");

//       // Set content

//       popupImg.src = img.src;
//       popupHeading.innerText = heading.innerText;
//       popupPara.innerText = para.innerText;
//       popupleaderBio.innerHTML = leaderBio.innerHTML;
//       if (linkedin_link.innerText) {
//         linkedinProfile.style.display = "block";
//       } else {
//         linkedinProfile.style.display = "none";
//       }
//       linkedinProfile.href = linkedin_link.innerText;

//       // Show popup and fade in
//       popup.classList.remove("hidden");
//       lenis.stop();
//       gsap.fromTo(
//         popup,
//         { autoAlpha: 0 },
//         { autoAlpha: 1, duration: 0.6, ease: "power2.out" }
//       );
//     });
//   });

//   closeBtn.addEventListener("click", () => {
//     // Fade out popup
//     gsap.to(popup, {
//       autoAlpha: 0,
//       duration: 0.4,
//       ease: "power2.in",
//       onComplete: () => {
//         popup.classList.add("hidden");
//         lenis.start();
//       },
//     });
//   });
// });
// $(document).on("click", ".card a", function (event) {
//   event.stopPropagation();
// });
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".leader_card");
  const popup = document.getElementById("popup");
  const popupImg = document.getElementById("popupImg");
  const popupHeading = document.getElementById("popupHeading");
  const popupPara = document.getElementById("popupPara");
  const popupleaderBio = document.getElementById("leader_bio");
  const closeBtn = document.getElementById("closeBtn");
  const popContainer = document.querySelector(".pop_container");

  let lastImageRect = null;
  let lastCardHeading = null;
  let lastClickedImage = null;

  cards.forEach((card) => {
    card.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", (e) => {
        e.stopPropagation();
      });
    });
    card.addEventListener("click", () => {
      const img = card.querySelector("img");
      const heading = card.querySelector(".leader_title");
      const para = card.querySelector(".leader_description");
      const leaderBio = card.querySelector(".leader_bio");
      $("body").css({ overflow: "hidden" });
      if (typeof lenis !== "undefined" && typeof lenis.stop === "function") {
        if (window.innerWidth > 1024) {
          lenis.stop();
        }
      }
      lastClickedImage = img;
      lastImageRect = img.getBoundingClientRect();
      lastCardHeading = heading;

      popupImg.src = img.src;
      popupHeading.innerText = heading.innerText;
      popupPara.innerHTML = para.innerHTML;
      popupleaderBio.innerHTML = leaderBio.innerHTML;

      popup.classList.remove("hidden");
      popup.offsetHeight;

      // Get final container position
      const containerRect = popContainer.getBoundingClientRect();

      // Start animation from card image position
      gsap.to("#popup", {
        duration: 1,
        backdropFilter: "blur(10px)",
        backgroundColor: "rgba(0, 0, 0, 0.2)",
        ease: "power1.out",
      });
      gsap.set(popContainer, {
        position: "absolute",
        top: lastImageRect.top,
        left: lastImageRect.left,
        width: lastImageRect.width,
        height: lastImageRect.height,
        // scale: 0.95,
        opacity: 0,
        overflow: "hidden",
        zIndex: 1000,
      });

      gsap.to(popContainer, {
        top: containerRect.top,
        left: containerRect.left,
        width: containerRect.width,
        height: containerRect.height,
        // scale: 1,
        opacity: 1,
        duration: 0.7,
        ease: "power3.inOut",
        onComplete: () => {
          gsap.set(popContainer, { clearProps: "all" });
        },
      });

      gsap.set([popupHeading, popupPara, popupleaderBio], {
        autoAlpha: 0,
        x: 50,
      });

      gsap.to([popupHeading, popupPara, popupleaderBio], {
        autoAlpha: 1,
        x: 0,
        duration: 0.5,
        delay: 0.5,
        stagger: 0.1,
        ease: "power2.out",
      });

      // gsap.set(heading, { autoAlpha: 0 });
    });
  });

  closeBtn.addEventListener("click", () => {
    const rect = lastImageRect;

    const currentRect = popContainer.getBoundingClientRect();
    const backdrop = document.querySelector("#popup");
    if (window.innerWidth > 1024) {
      lenis.start();
    }
    $("body").css({ overflow: "auto" });
    gsap.to("#popup", {
      duration: 1,
      backdropFilter: "blur(0px)",
      backgroundColor: "rgba(0, 0, 0, 0)",
      ease: "power1.out",
    });

    gsap.set(popContainer, {
      position: "absolute",
      top: currentRect.top,
      left: currentRect.left,
      width: currentRect.width,
      height: currentRect.height,
      zIndex: 1000,
    });

    gsap.to([popupHeading, popupPara, popupleaderBio], {
      autoAlpha: 0,
      x: 50,
      duration: 0.3,
      ease: "power2.in",
    });

    gsap.to([popContainer], {
      top: rect.top,
      left: rect.left,
      width: rect.width,
      height: rect.height,
      // scale: 0.95,
      opacity: 0,
      duration: 0.6,
      ease: "power3.inOut",
      onComplete: () => {
        popup.classList.add("hidden");
        gsap.set(popContainer, { clearProps: "all" });
        //  gsap.set(backdrop, { clearProps: "all" });
        if (lastCardHeading) {
          gsap.set(lastCardHeading, { autoAlpha: 1 });
        }
      },
    });
  });
});

$(document).ready(function () {
  gsap.utils.toArray("#about_btc .category_item").forEach((item, i) => {
    gsap.fromTo(
      item,
      { y: i * 30 },
      {
        y: i * -40,
        ease: "none",
        scrollTrigger: {
          trigger: item,
          start: "top 100%",
          end: "bottom top",
          scrub: true,
          // markers: true
        },
      }
    );
  });

  gsap.utils.toArray("#about_btc .category_image").forEach((wrap, i) => {
    const img = wrap.querySelector("img");
    if (!img) return;
    gsap.to(img, {
      y: 0 + i * 10,
      ease: "none",
      scrollTrigger: {
        trigger: wrap,
        start: "top 80%",
        end: "bottom 20%",
        scrub: true,
      },
    });
  });

  gsap.utils.toArray("#vision_mission .videoC video, #vision_mission .videoC img").forEach((img) => {
    gsap.to(img, {
      y: 0,
      ease: "none",
      scrollTrigger: {
        trigger: img.closest(".videoC") || img,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    });
  });
  gsap.utils.toArray("#vision_mission .text").forEach((text) => {
    gsap.to(text, {
      y: "-20%",
      ease: "none",
      scrollTrigger: {
        trigger: text,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    });
  });

  gsap.utils.toArray("#vision_mission .videoC").forEach((videoDiv) => {
    gsap.from(videoDiv, {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      scrollTrigger: {
        trigger: videoDiv,
        start: "top 80%",
        toggleActions: "play none none reverse",
      },
    });
  });

  if (window.innerWidth > 768) {
    gsap.utils.toArray("#our_leadership .leader_card").forEach((leader, i) => {
      gsap.from(leader, {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        delay: i * 0.1,
        scrollTrigger: {
          trigger: leader,
          start: "top 90%",
          toggleActions: "restart none none reverse",
        },
      });
    });
  } else {
    gsap.utils.toArray("#our_leadership .leader_card").forEach((leader, i) => {
      gsap.from(leader, {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1,
        // delay: i * 0.1,
        stagger: 0.2,
        scrollTrigger: {
          trigger: leader,
          start: "top 90%",
          toggleActions: "play none none reverse",
        },
      });
    });
  }

  if (window.innerWidth > 1024) {
    gsap.fromTo(
      "#product_page_details .left ",
      {
        y: -50,
      },
      {
        y: 50,
        ease: "none",
        duration: 1.2,
        scrollTrigger: {
          trigger: "#product_page_details .left",
          start: "top 100%",
          end: "130% 0%",
          toggleActions: "play none none reverse",
          scrub: true,
        },
      }
    );

    gsap.fromTo(
      "#product_page_details .right ",
      {
        y: -80,
      },
      {
        y: 80,
        ease: "none",
        duration: 1.2,
        scrollTrigger: {
          trigger: "#product_page_details .right",
          start: "top 100%",
          end: "120% 0%",
          toggleActions: "play none none reverse",
          scrub: true,
        },
      }
    );
  } else {
    gsap.from(
      "#product_page_details .left img, #product_page_details .right img ",
      {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.2,
        scrollTrigger: {
          trigger: "#product_page_details .left",
          start: "top 90%",
          toggleActions: "play none none reverse",
        },
      }
    );
  }

  gsap.from("#our_impact .impact_wrapper", {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.2,
    stagger: 0.4,
    scrollTrigger: {
      trigger: "#our_impact  .impact_wrapper",
      start: "top 85%",
      toggleActions: "play none none reverse",
    },
  });
  if (window.innerWidth > 1024) {
    gsap.utils
      .toArray("#certificates_compliances .certificate_card")
      .forEach((card, i) => {
        gsap.from(card, {
          y: 100,
          opacity: 0,
          // ease: "power4.out",
          duration: 1.2,
          // delay: 0.1 * i,
          scrollTrigger: {
            trigger: card,
            start: "top 95%",
            toggleActions: "restart none none reverse",
          },
        });
      });
  } else {
    gsap.utils
      .toArray("#certificates_compliances .certificate_card")
      .forEach((card, i) => {
        gsap.from(card, {
          y: 100,
          opacity: 0,          
          duration: 1.2,
          scrollTrigger: {
            trigger: card,
            start: "top 95%",
            toggleActions: "restart none none reverse",
          },
        });
      });
  }
});
