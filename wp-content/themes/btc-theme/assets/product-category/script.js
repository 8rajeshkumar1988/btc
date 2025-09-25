$(document).ready(function () {
  $(".customization_buttons .cta").click(function () {
    const tab = $(this).data("tab");
    if ($(this).hasClass("active")) return;
    $(".customization_buttons .cta").removeClass("active").addClass("unactive");
    $(this).addClass("active").removeClass("unactive");

    const $currentText = $(".customization_text.active");
    const $nextText = $("#" + tab + "_text");

    gsap.to($currentText, {
      opacity: 0,
      y: 10,
      duration: 0.3,
      onComplete: () => {
        $currentText.removeClass("active").hide();
        $nextText.show().addClass("active");

        gsap.fromTo(
          $nextText,
          { opacity: 0, y: 10 },
          { opacity: 1, y: 0, duration: 0.5 }
        );
      },
    });

    const $currentCards = $(".customization_cards.active");
    const $nextCards = $("#" + tab);
    console.log($nextCards);
    gsap.to($currentCards, {
      opacity: 0,
      y: 20,
      duration: 0.3,
      onComplete: () => {
        $currentCards.removeClass("active").css("display", "none");
        $nextCards.css("display", "grid").addClass("active");

        gsap.set($nextCards.children(), { opacity: 0, y: 30 });

        gsap.to($nextCards.children(), {
          opacity: 1,
          y: 0,
          duration: 0.5,
          stagger: 0.1,
        });

        gsap.to($nextCards, { opacity: 1, y: 0, duration: 0.3 });
      },
    });
  });



  gsap.utils.toArray("#product_category .category_card").forEach((card, index) => {
    const video = card.querySelector("video");

    if (!video) return;

    gsap.to(video, {
      y: 0, // move up by 100px
      ease: "none",
      delay: index * 0.2, // simulate stagger (adjust value as needed)
      scrollTrigger: {
        trigger: card,
        start: "top 90%",
        end: "bottom 0%",
        scrub: true,
        toggleActions: "play none none reverse",
      }
    });
  });

  gsap.from("#product_category .category_card", {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.2,
    stagger: 0.2,
    scrollTrigger: {
      trigger: "#product_category .category_card",
      start: "top 90%",
      toggleActions: "play none none reverse",
    },
  })


  gsap.from("#product_page_details h2, #product_page_details p", {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.2,
    stagger: 0.3,
    scrollTrigger: {
      trigger: "#product_page_details",
      start: "top 70%",
      toggleActions: "play none none reverse",
    },
  })

  $('#category_listing .category_list_card').each(function (index) {
    gsap.from(this, {
      opacity: 0,
      y: 100,
      ease: "power4.out",
      duration: 1,
      delay: index * 0.08,
      scrollTrigger: {
        trigger: this,
        start: "top 90%",
        toggleActions: "play none none reverse",
      },
    })
  })


  gsap.utils.toArray("#category_listing .category_list_card").forEach((card, i) => {
    const media = card.querySelector(".category_list_img");
    if (!media) return;

    gsap.to(media, {
      y: 0,
      ease: "none",
      delay: i * 0.2,
      scrollTrigger: {
        trigger: card,
        start: "top 90%",
        end: "bottom 0%",
        scrub: true,
        toggleActions: "play none none reverse",
      }
    });
  });


     gsap.from('#customization .customization_buttons button', {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      stagger: 0.05,
      delay: 0.5,
      scrollTrigger: {
        trigger: '#customization .customization_buttons',
        start: "top 90%",
        toggleActions: "play none none reverse",
      },
    });

     gsap.from('.customization_text.active', {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      delay: 0.5,
      scrollTrigger: {
        trigger: '.customization_text.active',
        start: "top 90%",
        toggleActions: "play none none reverse",
      },
    });


     gsap.from('.customization_cards.active .customization_card', {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      stagger: 0.2,
      scrollTrigger: {
        trigger: '.customization_cards.active',
        start: "top 80%",
        toggleActions: "play none none reverse",
      },
    });


});
