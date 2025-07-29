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
  if(phoneInputs.length > 0){
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
          this.addClass("error_input");
          this.focus();
        }
      });
    });
  }


  $(".leadpopup").on("click", function () {
    $("#lead_popup_form").fadeIn(300);
  });

  // Close popup with fadeOut
  $("#closeleadpopup").on("click", function () {
    $("#lead_popup_form").fadeOut(300);
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
      stagger: 0.3, // ✅ stagger between children
      scrollTrigger: {
        trigger: cta,
        start: "top 80%",
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
    ease: "power4.out",
    duration: 1.2,
  });


  const bannertext = SplitText.create("[animateHeadingBanner] > h1, [animateHeadingBanner] > h2, [animateHeadingBanner] > h3", {type:"chars,words,lines"})

});
