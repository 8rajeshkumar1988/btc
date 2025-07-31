let lenis;
gsap.registerPlugin(SplitText);
$(document).ready(function () {
  lenis = new Lenis();

  lenis.on("scroll", ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 500);
  });

  gsap.ticker.lagSmoothing(2000);

  gsap.registerPlugin(ScrollTrigger);




  const leftTrack = document.querySelector(".left-slide");
  const leftContent = leftTrack.querySelector(".marquee-content");
  const leftContentWidth = leftContent.offsetWidth;
  const speed = 50;
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




// header js
$(document).ready(function () {
  $(".headerBtn").click(function () {
    $(this).toggleClass("open");

    if ($(this).hasClass("open")) {
      lenis.stop();
      $(".heroBanner").addClass("activated");
      $("#header").addClass("active");
      $("header .logo").css({ opacity: "0" });
      $("#header .logoBlue").css({ opacity: "1" });
    } else {
      lenis.start();
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
    $("#lead_popup_form").fadeIn(300);
    $("body").css({ overflow: "hidden" });
    lenis.stop();

  });

  // Close popup with fadeOut
  $("#closeleadpopup").on("click", function () {
    $("#lead_popup_form").fadeOut(300);
    // $("body").css({ overflow: "auto" });
    lenis.start();
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
    transform: "translate(0%, -10%)",
    duration: 1.2,
  });



  gsap.from('.footerCopy', {
    y: 100,
    opacity: 0,
    ease: "'power4.out'",
    duration: 0.8,
    scrollTrigger: {
      trigger: '.footerCopy',
      start: "top 90%",
      toggleActions: "play none none reverse",
    },
  });




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
      each: 0.05,
      from: "random"
    },
    scrollTrigger: {
      trigger: '.marquee-content',
      start: "top 90%",
      toggleActions: "play none none reverse",
    }
  });

$('.heroBanner > img, .heroBanner > video').each(function () {
  gsap.to(this, {
    y: '50dvh',
    ease: "none",
    scrollTrigger: {
      trigger: this,
      start: "bottom 90%",
      toggleActions: "play none none reverse",
      scrub: true
    }
  });
})


});
