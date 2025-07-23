let lenis;
$(document).ready(function () {
  lenis = new Lenis();

  lenis.on("scroll", ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });

  gsap.ticker.lagSmoothing(0);

  gsap.registerPlugin(ScrollTrigger);

  const social_media = new Swiper(".social_media", {
    slidesPerView: "auto",
    spaceBetween: 20,
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



// header js
$(document).ready(function () {
  $('.headerBtn').click(function () {
    $(this).toggleClass('open');

    if ($(this).hasClass('open')) {
      lenis.stop();
      $('.heroBanner').addClass('activated');
      $('#header').addClass('active');      
    } else {
      lenis.start();
      $('#header').removeClass('active');
      $('.heroBanner').removeClass('activated');
    }
  });


  $('.right a').each(function () {
    const el = $(this);
    el.mouseenter(function () {
      const path = el.attr('h');
    });
  });

});
