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
$(document).ready(function () {
  

gsap.registerPlugin(ScrollTrigger, Observer);

const slides = gsap.utils.toArray(".image-wrapper");
let currentIndex = 0;
let isAnimating = false;
let observer = null;
let observerEnabled = false;

// Initialize slides
gsap.set(slides, { scale: 0 });
gsap.set(slides[0], { scale: 1 });

const st = ScrollTrigger.create({
  trigger: ".traceability",
  start: "top top",
  // end: () => `+=${slides.length * window.innerHeight}`,
  pin: true,
  pinSpacing: true,
  anticipatePin: 1,
  // markers: false,
  invalidateOnRefresh: true,
  onEnter: () => enableObserver(),
  onEnterBack: () => enableObserver(),
  onLeave: () => disableObserver(),
  onLeaveBack: () => disableObserver(),
});

function throttle(func, delay) {
  let lastCall = 0;
  return function (...args) {
    const now = Date.now();
    if (now - lastCall >= delay) {
      lastCall = now;
      func(...args);
    }
  };
}

function goToSlide(index, direction) {
  if (
    isAnimating ||
    index === currentIndex ||
    index < 0 ||
    index >= slides.length
  )
    return;

  isAnimating = true;
  pauseLenisFor(1500);
  const tl = gsap.timeline({
    onComplete: () => {
      currentIndex = index;
      isAnimating = false;

      // Set scroll position manually to match animation step
      ScrollTrigger.getById("traceTrigger")?.scroll((self) => {
        const y = window.innerHeight * currentIndex;
        window.scrollTo({ top: self.start + y });
      });
    },
  });

  if (direction === "down") {
    gsap.set(slides[index], { scale: 0 }); 
    tl.to(slides[index], {
      scale: 1,
      duration: 1,
      ease: "power2.inOut",
    });
  } else {
    tl.to(slides[currentIndex], {
      scale: 0,
      duration: 1,
      ease: "power2.inOut",
    });
  }
}

function enableObserver() {
  if (observer || observerEnabled) return;

  observer = Observer.create({
    target: window,
    type: "wheel,touch,pointer",
    preventDefault: true,
    tolerance: 10,
    onDown: throttle(() => {
      const nextIndex = currentIndex + 1;
      if (nextIndex < slides.length) {
        goToSlide(nextIndex, "down");
      } else {
        disableObserver();
      }
    }, 500),
    onUp: throttle(() => {
      const prevIndex = currentIndex - 1;
      if (prevIndex >= 0) {
        goToSlide(prevIndex, "up");
      } else {
        disableObserver();
      }
    }, 500),
  });

  observerEnabled = true;
  console.log("Observer enabled");
}

function disableObserver() {
  if (!observer || !observerEnabled) return;

  observer.kill();
  observer = null;
  observerEnabled = false;
  console.log("Observer disabled");
}

function pauseLenisFor(ms) {
  lenis.stop();
  setTimeout(() => {
    lenis.start();
  }, ms);
}




  gsap.from('#sustainability_details h2, #sustainability_details p ', {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.5,
    stagger: 0.3,
    scrollTrigger: {
        trigger: '#sustainability_details',
        start: "top 80%",
        toggleActions: "play none none reverse",
    }
  })

   gsap.utils.toArray("#certificates_compliances .certificate_card").forEach((card, i) => {
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
    }
  });
});


})