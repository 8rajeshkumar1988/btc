// const images = document.querySelectorAll(".animate-scale img");
// const vh = window.innerHeight;
// const heroHeight = document.querySelector(".heroBanner").offsetHeight;

// images.forEach((img, i) => {
//   const tl = gsap.timeline({
//     scrollTrigger: {
//       trigger: document.body,
//       start: () => `top -${heroHeight + vh * i}`,
//       end: () => `top -${heroHeight + vh * (i + 1)}`,
//       scrub: true,
//     },
//     defaults: { ease: "power2.inOut" },
//   });

//   tl.fromTo(img, { scale: 0 }, { scale: 1 });

//   const nextImg = images[i + 1];
//   if (nextImg) {
//     gsap.set(nextImg, { scale: 0 });
//   }
// });
// gsap.registerPlugin(ScrollTrigger, Observer);

// const slides = gsap.utils.toArray(".image-wrapper");
// let currentIndex = 0;
// let isAnimating = false;
// let observer = null;
// let observerEnabled = false;

// // Initialize slides
// gsap.set(slides, { scale: 0 });
// gsap.set(slides[0], { scale: 1 });

// const st = ScrollTrigger.create({
//   trigger: ".traceability",
//   start: "top top",
//   // end: () => `+=${slides.length * window.innerHeight}`,
//   pin: true,
//   pinSpacing: true,
//   anticipatePin: 1,
//   // markers: false,
//   invalidateOnRefresh: true,
//   onEnter: () => enableObserver(),
//   onEnterBack: () => enableObserver(),
//   onLeave: () => disableObserver(),
//   onLeaveBack: () => disableObserver(),
// });

// function throttle(func, delay) {
//   let lastCall = 0;
//   return function (...args) {
//     const now = Date.now();
//     if (now - lastCall >= delay) {
//       lastCall = now;
//       func(...args);
//     }
//   };
// }

// function goToSlide(index, direction) {
//   if (
//     isAnimating ||
//     index === currentIndex ||
//     index < 0 ||
//     index >= slides.length
//   )
//     return;

//   isAnimating = true;
//   pauseLenisFor(1500);
//   const tl = gsap.timeline({
//     onComplete: () => {
//       currentIndex = index;
//       isAnimating = false;

//       // Set scroll position manually to match animation step
//       ScrollTrigger.getById("traceTrigger")?.scroll((self) => {
//         const y = window.innerHeight * currentIndex;
//         window.scrollTo({ top: self.start + y });
//       });
//     },
//   });

//   if (direction === "down") {
//     gsap.set(slides[index], { scale: 0 });
//     tl.to(slides[index], {
//       scale: 1,
//       duration: 1,
//       ease: "power2.inOut",
//     });
//   } else {
//     tl.to(slides[currentIndex], {
//       scale: 0,
//       duration: 1,
//       ease: "power2.inOut",
//     });
//   }
// }

// function enableObserver() {
//   if (observer || observerEnabled) return;

//   observer = Observer.create({
//     target: window,
//     type: "wheel,touch,pointer",
//     preventDefault: true,
//     tolerance: 10,
//     onDown: throttle(() => {
//       const nextIndex = currentIndex + 1;
//       if (nextIndex < slides.length) {
//         goToSlide(nextIndex, "down");
//       } else {
//         disableObserver();
//       }
//     }, 500),
//     onUp: throttle(() => {
//       const prevIndex = currentIndex - 1;
//       if (prevIndex >= 0) {
//         goToSlide(prevIndex, "up");
//       } else {
//         disableObserver();
//       }
//     }, 500),
//   });

//   observerEnabled = true;
//   console.log("Observer enabled");
// }

// function disableObserver() {
//   if (!observer || !observerEnabled) return;

//   observer.kill();
//   observer = null;
//   observerEnabled = false;
//   console.log("Observer disabled");
// }

// function pauseLenisFor(ms) {
//   lenis.stop();
//   setTimeout(() => {
//     lenis.start();
//   }, ms);
// }

// lenis.distroy();
// $("body").css("overflow", "auuto");

// gsap.registerPlugin(ScrollTrigger);

// const slides = document.querySelectorAll(".image-wrapper");
// const triggers = document.querySelectorAll(".scroll-trigger");

// slides.forEach((slide, i) => {
//   gsap.set(slide, { scale: i === 0 ? 1 : 0 });
// });

// triggers.forEach((trigger, index) => {
//   ScrollTrigger.create({
//     trigger: trigger,
//     start: "top center",
//     end: "bottom center",
//     // markers:true,
//     onEnter: () => {
//       activateSlide(index);
//     },
//     onLeaveBack: () => {
//       reverseSlide(index);
//     },
//   });
// });

// function activateSlide(index) {
//   const slide = slides[index];
//   if (!slide) return;
//   gsap.to(slides[index], {
//     scale: 1,
//     duration: 0.6,
//     overwrite: "auto",
//   });
// }

// function reverseSlide(index) {
//   if (index === 0) return;
//   const slide = slides[index];
//   if (!slide) return;
//   gsap.to(slides[index], {
//     scale: 0,
//     duration: 0.6,
//     overwrite: "auto",
//   });
// }
$(document).ready(function () {
    $("#traceability .containers").each(function (index) {
    const isEven = index % 2 === 0;
    gsap.to(this, {
      transform: isEven
        ? "rotateY(-10deg) rotateX(5deg) scale(0.7, 0.7) translateY(0%)"
        : "rotateY(10deg) rotateX(5deg) scale(0.7, 0.7) translateY(0%)",
      filter: "blur(5px) brightness(0.5)",
      ease: "none",
      scrollTrigger: {
        trigger: this,
        start: "top -20%",
        end: "bottom 0%",
        toggleActions: "play none none reverse",
        scrub: true,
        onEnter: () => {
          if (window.innerWidth < 1024) {
            lenis.stop();
            setTimeout(() => {
              lenis.start();
            }, 100)
          }
        },
      },
    });
  });

  document.querySelectorAll("#traceability .parent_pers").forEach((_, index) => {
  const dot = document.createElement("div");
  dot.classList.add("dot");
  if (index === 0) dot.classList.add("active");
  document.getElementById("progress_indication").appendChild(dot);
});

function updateActiveDot(activeIndex) {
  document.querySelectorAll("#progress_indication .dot").forEach((dot, i) => {
    dot.classList.toggle("active", i === activeIndex);
  });
}

let progressVisible = false;

function checktraceabilityInViewAndActiveDot() {
  const traceability = document.getElementById("traceability");
  const progress = document.getElementById("progress_indication");
  const traceabilityRect = traceability.getBoundingClientRect();

  const inView = traceabilityRect.top < window.innerHeight / 2 && traceabilityRect.bottom > window.innerHeight / 2;

  if (inView && !progressVisible) {
    progressVisible = true;
    gsap.to(progress, {
      x: 0,
      autoAlpha: 1,
      duration: 0.5,
      ease: "power2.out"
    });
  } else if (!inView && progressVisible) {
    progressVisible = false;
    gsap.to(progress, {
      x: 40,
      autoAlpha: 0,
      duration: 0.2,
      ease: "power2.in"
    });
  }

  if (!inView) return;

  // Highlight the active dot
  const parentPersList = document.querySelectorAll("#traceability .parent_pers");
  let activeIndex = 0;

  parentPersList.forEach((el, index) => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight / 2 && rect.bottom > window.innerHeight / 2) {
      activeIndex = index;
    }
  });

  updateActiveDot(activeIndex);
}


window.addEventListener("scroll", checktraceabilityInViewAndActiveDot);
window.addEventListener("resize", checktraceabilityInViewAndActiveDot);

checktraceabilityInViewAndActiveDot();

  gsap.from("#sustainability_details h2, #sustainability_details p ", {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.5,
    stagger: 0.3,
    scrollTrigger: {
      trigger: "#sustainability_details",
      start: "top 80%",
      toggleActions: "play none none reverse",
    },
  });

  gsap.utils
    .toArray("#certificates_compliances .certificate_card")
    .forEach((card, i) => {
      gsap.from(card, {
        y: 100,
        opacity: 0,
        // ease: "power4.out",
        duration: 1.2,
        delay: 0.1 * i,
        scrollTrigger: {
          trigger: card,
          start: "top 90%",
          toggleActions: "restart none none reverse",
        },
      });
    });
});
