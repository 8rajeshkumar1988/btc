$(".faq.default-open .ans").slideDown(500);

$(".faq").click(function () {
  const item = $(this);
  $(".faq.default-open .ans").slideUp(500);
  const answer = item.find(".ans");
  if (item.hasClass("default-open")) {
    item.removeClass("default-open");
    answer.slideUp(500);
  } else {
    $(".faq").removeClass("default-open");
    item.addClass("default-open");
    answer.slideDown(500);
  }
});


$(document).ready(function () {
  gsap.from("#faqs .faq, #faqs .faq p, #faqs .faq li", {
    y: 100,
    opacity: 0,
    ease: "power4.out",
    duration: 1.2,
    stagger: 0.05,
    scrollTrigger: {
      trigger: "#faqs .accordian",
      start: "top 70%",
      toggleActions: "play none none reverse",
    },
  });


  gsap.to('.contacts', {
    y: 0,
    opacity: 1,
    ease: "power4.out",
    delay: 0.7,
    duration: 1.2,
    scrollTrigger: {
      trigger: '.contacts',
      start: "top 100%",
      toggleActions: "play none none reverse",
    }
  })
  // gsap.from('.virtual_container', {
  //   y: 100,
  //   opacity: 0,
  //   ease: "power4.out",
  //   duration: 1.2,
  //   scrollTrigger: {
  //     trigger: '.virtual_container',
  //     start: "top 85%",
  //     toggleActions: "play none none reverse",
  //   }
  // })

  
  // gsap.to('.virtual_container iframe', {
  //   y: 50,
  //   ease: "none",
  //   scrollTrigger: {
  //     trigger: '.virtual_container',
  //     start: "top 85%",
  //     toggleActions: "play none none reverse",
  //     scrub: true
  //   }
  // })


});



