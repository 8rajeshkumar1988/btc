let lenis;
gsap.registerPlugin(SplitText);

// window.onload = function () {
// };

function scrollToTop() {
  lenis.scrollTo(0, {
    offset: 0,          // adjust offset if needed
    duration: 1,      // smooth duration in seconds
    immediate: false,   // true = no animation
  });
  // console.log("Scroll to top");
}
//   scrollToTop()

let flaggged = true;
let animatedFooter;
$(document).ready(function () {

  document.querySelectorAll("#customization .leadpopup").forEach(el => {
    el.removeAttribute("ctabutton");
  });

  // Remove 'animateheading' from headings inside .our_clients
  document.querySelectorAll("#our_clients .heading").forEach(el => {
    el.removeAttribute("animateheading");
  });

  // if (window.innerWidth > 1024) {
  lenis = new Lenis();
  lenis.on("scroll", ScrollTrigger.update);
  gsap.ticker.add((time) => {
    lenis.raf(time * 600);
  });
  // }

  gsap.ticker.lagSmoothing(2000);

  gsap.registerPlugin(ScrollTrigger);


  const backToTop = document.getElementById("backToTop");
  const arrowPath = document.querySelector(".arrow-path");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;
    const triggerHeight = window.innerHeight * 1.5; // 250vh

    if (scrollY > triggerHeight) {
      // if (scrollY > triggerHeight && scrollY < lastScrollY) {
      // scrolling UP & beyond trigger height
      backToTop.classList.add("show");
      arrowPath.style.animation = "none";
      void arrowPath.offsetWidth; // Force reflow
      arrowPath.style.animation = "drawArrow 2s ease forwards";
    } else {
      // scrolling DOWN or above trigger height
      backToTop.classList.remove("show");
      arrowPath.style.animation = "none";
    }

    lastScrollY = scrollY; // update scroll position
  });


  const leftTrack = document.querySelector(".left-slide");
  const leftContent = leftTrack.querySelector(".marquee-content");
  const leftContentWidth = leftContent.offsetWidth;
  const speed = 100;
  const duration = leftContentWidth / speed;

  gsap.to(leftTrack, {
    x: -leftContentWidth,
    ease: "none",
    duration: duration,
    repeat: -1,
  });
  const rightTrack = document.querySelector(".right-slide");
  const rightContent = rightTrack.querySelector(".marquee-content");
  const rightContentWidth = rightContent.offsetWidth;
  const rightDuration = rightContentWidth / speed;
  gsap.fromTo(
    rightTrack,
    { x: -rightContentWidth },
    {
      x: 0,
      ease: "none",
      duration: rightDuration,
      repeat: -1,
    }
  );


});

function scrollToSectionById(id) {
  const el = document.getElementById(id);
  if (!el) {
    // console.warn(`Element with ID '${id}' not found.`);
    return;
  }

  lenis.scrollTo(el, {
    offset: 0,          // adjust offset if needed
    duration: 1,      // smooth duration in seconds
    immediate: false,   // true = no animation
  });
}

function shareToFacebook() {
  const url = event.currentTarget.dataset.url;
  const fbURL = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
  window.open(fbURL, '_blank', 'noopener,noreferrer,width=600,height=400');
}

function shareToTwitter() {
  const el = event.currentTarget;
  const url = el.dataset.url;
  const title = el.dataset.title || '';
  const twitterURL = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`;
  window.open(twitterURL, '_blank', 'noopener,noreferrer,width=600,height=400');
}

function shareToLinkedIn() {
  const url = event.currentTarget.dataset.url;
  const linkedInURL = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
  window.open(linkedInURL, '_blank', 'noopener,noreferrer,width=600,height=400');
}

function shareToWhatsApp() {
  const el = event.currentTarget;
  const url = el.dataset.url;
  const title = el.dataset.title || '';
  const message = `${title} - ${url}`;
  const whatsappURL = `https://wa.me/?text=${encodeURIComponent(message)}`;
  window.open(whatsappURL, '_blank', 'noopener,noreferrer,width=600,height=400');
}

$(document).ready(function () {
  var headerMenuSwiper = new Swiper("#headerMenuSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    centeredSlides: true,
    // navigation: {
    //   nextEl: ".explore_other-next",
    //   prevEl: ".explore_other-prev",
    // },
    loop: true,
    speed: 800,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    },
  });
})

// header js
$(document).ready(function () {
  $(".headerBtn").click(function () {
    $(this).toggleClass("open");

    if ($(this).hasClass("open")) {
      // if (window.innerWidth > 1024) {
      lenis.stop();
      // }
      $("body").css({ overflow: "hidden" });
      $(".heroBanner").addClass("activated");
      $("#header").addClass("active");
      $("header .logo").css({ opacity: "0" });
      $("#header .logoBlue").css({ opacity: "1" });
    } else {
      // if (window.innerWidth > 1024) {
      lenis.start();
      // }
      $("body").css({ overflow: "auto" });
      $("#header").removeClass("active");
      $(".heroBanner").removeClass("activated");
      setTimeout(function () {
        $("header .logo").css({ opacity: "1" });
        $("#header .logoBlue").css({ opacity: "0" });
      }, 100);
    }
  });

  if (window.innerWidth > 1024) {
    $(".right a").each(function () {
      const el = $(this);
      let hoverTimer;

      el.on("mouseenter", function () {
        $(".right a").removeClass("active");
        el.addClass("active");
        hoverTimer = setTimeout(function () {
          $(".bannerArea").removeClass("active");
          $(".else").removeClass("active");

          const path = el.attr("path");

          const matchedBanner = $(".bannerArea").filter(function () {
            return $(this).attr("source") === path;
          });

          if (matchedBanner.length) {
            matchedBanner.addClass("active");
          } else {
            $(".else").addClass("active");
          }
        }, 200); // delay in milliseconds
      });

      el.on("mouseleave", function () {
        clearTimeout(hoverTimer); // cancel if user leaves before 0.2s
      });
    });
  }

  $(".extendClick")?.click(function (e) {
    e.preventDefault(); // ✅ prevent anchor navigation
    e.stopPropagation();
    if ($(this).hasClass("active")) {
      $(".extended").slideUp(500);
      $(this).removeClass("active");
    } else {
      $(this).addClass("active");
      $(".extended").slideDown(500);
    }
  });
});

$(document).ready(function () {
  const text_inputs = document.querySelectorAll(".text-control__input");
  if (text_inputs.length > 0) {
    text_inputs.forEach((input) => {
      input.addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-z\s]/g, "");
      });
    });
  }
  const phoneInputs = document.querySelectorAll(".phone-input");
  if (phoneInputs.length > 0) {
    phoneInputs.forEach((input) => {
      input.addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");
      });
    });
  }

  const emailInputs = document.querySelectorAll(".email-input");
  if (emailInputs.length > 0) {
    emailInputs.forEach((input) => {
      input.addEventListener("blur", function () {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (this.value && !emailPattern.test(this.value)) {
          this.classList.add("error_input");
          // this.focus();
        } else {
          this.classList.remove("error_input");
        }
      });
    });
  }


  $(".leadpopup").on("click", function () {
    const $popupForm = $("#lead_popup_form");
    $('.backtoTop').hide()

    if ($popupForm.length) {
      $popupForm.fadeIn(300, function () {
        // $popupForm.scrollTop(50); // reset after animation
      });

      $("body").css({ overflow: "hidden" });

      if (typeof lenis !== "undefined" && typeof lenis.stop === "function") {
        if (window.innerWidth > 1024) {
          lenis.stop();
        }
      }
    }
  });


  // Close popup with fadeOut
  $("#closeleadpopup").on("click", function () {
    if (window.innerWidth > 1024) {
      lenis.start();
    }
    $("body").css({ overflow: "auto" });
    $('.backtoTop').show()
    $("#lead_popup_form").fadeOut(300);
    // $("body").css({ overflow: "auto" });
  });
});

$(document).ready(function () {
  $("[animateHeading]").each(function () {
    const container = $(this);
    const children = container.children();

    gsap.from(children.toArray(), {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      stagger: 0.3, // ✅ stagger between children
      scrollTrigger: {
        trigger: container,
        start: "top 80%",
        toggleActions: "play none none reverse",
      },
    });
  });

  // cta animation

  $("[ctaButton]").each(function () {
    const cta = $(this);
    gsap.from(cta, {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      scrollTrigger: {
        trigger: cta,
        start: "top 90%",
        toggleActions: "play none none reverse",
      },
    });
  });



  //  footer background
  gsap.to("#footerContact > img", {
    scrollTrigger: {
      trigger: "#footerContact",
      start: "top 80%",
      end: "bottom 0%",
      toggleActions: "play none none reverse",
      scrub: true,
      // markers: true
    },
    y: -100,
  });

  animatedFooter = () => {
    if (flaggged) {
      console.log("flaggged");
      gsap.to('#footerContact .content p, #footerContact .content h3, #footerContact .content button', {
        y: 0,
        opacity: 1,
        ease: "'power4.out'",
        duration: 0.8,
        stagger: 0.2,
        scrollTrigger: {
          trigger: '#footerContact',
          start: "top 90%",
          toggleActions: "play none none reverse",
        },
      });
    }
  }
  animatedFooter()


  $("[animateHeadingBanner]").each(function () {
    const container = $(this);
    const children = container.children();

    gsap.to(children.toArray(), {
      y: 0,
      opacity: 1,
      ease: "power4.out",
      duration: 1.2,
      stagger: 0.3, // ✅ stagger between children      
    });
  });


  const marqeeImgs = gsap.utils.toArray('.marquee-container img');
  gsap.from(marqeeImgs, {
    scale: 0,
    opacity: 0,
    ease: "power4.out",
    duration: 1.2,
    stagger: {
      each: 0.01,
      from: "random"
    },
    scrollTrigger: {
      trigger: '.marquee-content',
      start: "top 90%",
      toggleActions: "play none none none",
    }
  });

  $('.heroBanner > img, .heroBanner > video, .hero-slider .swiper-slide > img, .hero-slider .swiper-slide > video ').each(function () {
    const heightVH = window.innerHeight / 3
    if (window.innerWidth > 1200) {
      gsap.to(this, {
        y: heightVH,
        scrollTrigger: {
          trigger: this,
          start: `${window.innerWidth < 768 ? "bottom 85%" : "bottom 90%"}`,
          toggleActions: "play none none reverse",
          scrub: true,
        }
      });
    } else {
      gsap.to(this, {
        y: heightVH,
        scrollTrigger: {
          trigger: this,
          start: `${window.innerWidth < 768 ? "bottom 85%" : "bottom 90%"}`,
          toggleActions: "play none none reverse",
          scrub: true,
        }
      });
    }
  })





});

document.addEventListener("DOMContentLoaded", function () {
  // Find all videos
  const videos = document.querySelectorAll("video");

  videos.forEach(video => {
    // Ensure autoplay requirements are met
    video.muted = true; // Safari requires muted for autoplay
    video.playsInline = true; // Prevent fullscreen on iOS

    // Try to play
    video.play().catch(err => {
      console.warn("Video couldn't autoplay:", err);
    });
  });
});

$(document).ready(function () {
  const flag = window.innerWidth > 1024
  gsap.utils.toArray("[btcPattern]").forEach((item, i) => {
    gsap.fromTo(item, {
      y: flag ? -150 : -80
    }, {
      y: flag ? 150 : 80,
      ease: "none",
      scrollTrigger: {
        trigger: item,
        start: "top 100%",
        end: "bottom top",
        scrub: true,
      },
    })
  })



  let exitedToTop = false;
  let scrolledPast200 = false;

  window.addEventListener("mousemove", function (e) {
    const scrollTop = window.scrollY; // or $(window).scrollTop();

    // Run effect only if page is scrolled more than 200px
    if (window.innerWidth > 1024) {
      if (scrollTop > 200) {
        if (e.clientY <= 100 && !exitedToTop) {
          console.log("Cursor exited at the top of the viewport!");
          $('header').addClass('sticky');
          exitedToTop = true;
        } else if (e.clientY > 100 && exitedToTop) {
          console.log("Cursor re-entered the viewport!");
          if (!$('#header').hasClass('active')) {
            $('header').removeClass('sticky');
          }
          exitedToTop = false;
        }
      }
    }

  });

  window.addEventListener("scroll", function () {
    const scrollTop = window.scrollY || window.pageYOffset;

    if (scrollTop > 30 && !scrolledPast200) {
      // console.log("Scrolled more than 200px");
      $('header').addClass('scrolled');
      scrolledPast200 = true;
    } else if (scrollTop <= 30 && scrolledPast200) {
      $('header').removeClass('scrolled');
      scrolledPast200 = false;
    }
  });

})



$(document).on("scroll", function () {
  var pixels = $(document).scrollTop();
  var pageHeight = $(document).height() - $(window).height();
  var progress = 100 * pixels / pageHeight;

  $("#bar").css("width", progress + "%");
})




$(document).ready(function () {
  function isOverlapping($div1, $div2) {
    const d1 = $div1[0].getBoundingClientRect();
    const d2 = $div2[0].getBoundingClientRect();

    return !(
      d1.right < d2.left ||
      d1.left > d2.right ||
      d1.bottom < d2.top ||
      d1.top > d2.bottom
    );
  }

  function checkOverlap() {
    const $fixedBtn = $('.backtoTop');
    let overlap = false;

    $('.globalNavigation, .cta').each(function () {
      if (isOverlapping($fixedBtn, $(this))) {
        overlap = true;
      }
    });

    if (overlap) {
      $fixedBtn.css({ opacity: 0, visibility: "hidden", pointerEvents: "none" });
    } else {
      $fixedBtn.css({ opacity: 1, visibility: "visible", pointerEvents: "auto" });
    }
  }

  $(window).on('scroll resize', checkOverlap);
  checkOverlap();

})