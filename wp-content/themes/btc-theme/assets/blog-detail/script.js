$(document).ready(function () {
  const recommendations_categories = new Swiper(".recommendations_categories", {
    slidesPerView: 1,
    spaceBetween: 20,
  
    navigation: {
      nextEl: ".recommendations-next",
      prevEl: ".recommendations-prev",
    },
    
     
    breakpoints: {
      768: {
        slidesPerView: 2.5,
        spaceBetween:20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1400: {
        slidesPerView: 3.5,
        spaceBetween: 40,
      },
    },
    on: {
      init: function () {
        toggleNavButtons(this);
      },
      resize: function () {
        toggleNavButtons(this);
      }
    }
  });
  




function toggleNavButtons(swiperInstance) {
  const totalSlides = swiperInstance.slides.length;
  const slidesPerView = swiperInstance.params.slidesPerView;

  const nextBtn = document.querySelector('.recommendations-next');
  const prevBtn = document.querySelector('.recommendations-prev');
  // const buttonsContainer = document.querySelector('.event_btc_buttons');
  // console.log(totalSlides , slidesPerView);
  if (totalSlides <= slidesPerView) {
    nextBtn.style.display = 'none';
    prevBtn.style.display = 'none';
    // buttonsContainer.style.display = 'none';
  } else {
    nextBtn.style.display = 'flex';
    prevBtn.style.display = 'flex';
    // buttonsContainer.style.display = 'flex';
  }
}

  gsap.utils.toArray(".recommendations_categories .category_item").forEach((wrap, i) => {
    const img = wrap.querySelector("img");
    if (!img) return;
    gsap.from(img, {
      y: -100,
      // opacity: 0,
      ease: "none",
      // duration: 1.2,
      // stagger: 0.2,
      scrollTrigger: {
        trigger: wrap,
        start: "top 90%",
        end: "bottom top",
        scrub: true, 
        // toggleActions: "play none none reverse",
      },
    });
  });

$(".recommendations_categories .category_item").each(function (index) {
    gsap.from(this, {
      y: 100,
      opacity: 0,
      ease: "power4.out",
      duration: 1.2,
      delay: index * 0.08,
      scrollTrigger: {
        trigger: this,
        start: "top 90%",
        toggleActions: "restart none none reverse",
      },
    });
  });

});