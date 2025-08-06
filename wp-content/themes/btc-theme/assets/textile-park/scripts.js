$(document).ready(function () {
  $("#parking .containers").each(function (index) {
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

  //   gsap.utils
  //     .toArray(
  //       "#textile_processing .left .tag_div, #textile_processing .left .inner_bottom p, #textile_processing .left .first, #textile_processing .left .second"
  //     )
  //     .forEach((item, i) => {
  //       gsap.from(item, {
  //         y: 100,
  //         ease: "power4.out",
  //         duration: 0.5,
  //         opacity: 0,

  //       });
  //     });


let currentTween = null;

$("#textile_processing .tags").click(function () {
  const tab = $(this).data("tab");
  const newImageSrc = $(this).data("img"); // Add data-img attribute on .tags
  if ($(this).hasClass("active")) return;

  if (currentTween) currentTween.kill();

  $("#textile_processing .tags").removeClass("active").addClass("unactive");
  $(this).addClass("active").removeClass("unactive");

  const $currentContent = $("#textile_processing .inner_bottom:visible");
  const $nextContent = $("#" + tab);
  const $image = $("#textile_processing_img");

  // Animate current content out
  currentTween = gsap.to($currentContent.children(), {
    opacity: 0,
    y: 40,
    ease: "power4.out",
    duration: 0.3,
    onComplete: () => {
      $currentContent.css("display", "none");

      if (window.innerWidth > 1024) {
        $nextContent.css("display", "flex");
      } else {
        $nextContent.css("display", "grid");
      }

      gsap.set($nextContent.children(), {
        opacity: 0,
        y: 40,
      });

      gsap.to($nextContent.children(), {
        opacity: 1,
        y: 0,
        ease: "power4.out",
        duration: 0.3,
        stagger: 0.1,
      });
    }
  });

  // ✅ Image Transition
  gsap.to($image, {
    opacity: 0,
    duration: 0.3,
    onComplete: () => {
      $image.attr("src", newImageSrc); // Change image source
      gsap.to($image, {
        opacity: 1,
        duration: 0.3,
        ease: "power2.out"
      });
    }
  });
});




  if (window.innerWidth > 1024) {
    gsap.utils
      .toArray(
        "#parking .containers h3, #parking .containers p, #parking .containers .right,  #parking .containers .tags"
      )
      .forEach((item, i) => {
        gsap.from(item, {
          y: 100,
          ease: "power4.out",
          duration: 0.5,
          opacity: 0,
          scrollTrigger: {
            trigger: item,
            start: "top 90%",
            // markers: true
          },
        });
      });
  }

  gsap.utils.toArray("#parking .containers .right img").forEach((item, i) => {
    gsap.from(item, {
      y: 0,
      scrollTrigger: {
        trigger: item.closest(".right"),
        start: "top 90%",
        end: "top 0%",
        scrub: true,
        // markers: true
      },
    });
  });
});
