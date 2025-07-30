var swiper = new Swiper(".about_btc", {
  slidesPerView: 1,
  spaceBetween: 20,

  navigation: {
    nextEl: ".about_btc-next",
    prevEl: ".about_btc-prev",
  },
  speed: 1000,
  breakpoints: {
    1200: {
      slidesPerView: 3,
      spaceBetween: 20,

    },
    1024: {
      slidesPerView: 2.1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    550: {
      slidesPerView: 1.3,
      spaceBetween: 20,
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

  const nextBtn = document.querySelector('.about_btc-next');
  const prevBtn = document.querySelector('.about_btc-prev');
  console.log(totalSlides);
  console.log(slidesPerView);
  console.log(totalSlides <= slidesPerView);
  if (totalSlides <= slidesPerView) {
    nextBtn.style.display = 'none';
    prevBtn.style.display = 'none';
  } else {
    nextBtn.style.display = '';
    prevBtn.style.display = '';
  }
}

$(document).ready(function () {
  $(".impact_wrapper.open .content").css("display", "grid").show();

  $(".impact_wrapper").click(function () {
    const $clicked = $(this);

    if ($clicked.hasClass("open")) {
      return;
    }

    $(".impact_wrapper.open .content").slideUp(800);
    $(".impact_wrapper").removeClass("open");

    $clicked.addClass("open");
    $clicked.find(".content")
      .css("display", "grid")
      .hide()
      .slideDown(800);
  });
});

 document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".leader_card");
    const popup = document.getElementById("popup");
    const popupImg = document.getElementById("popupImg");
    const popupHeading = document.getElementById("popupHeading");
    const popupPara = document.getElementById("popupPara");
    const popupleaderBio = document.getElementById("leader_bio");
    const closeBtn = document.getElementById("closeBtn");

    cards.forEach((card) => {
      card.addEventListener("click", () => {
        const img = card.querySelector("img");
        const heading = card.querySelector(".leader_title");
        const para = card.querySelector(".leader_description");
        const leaderBio = card.querySelector(".leader_bio");

        // Set content
        popupImg.src = img.src;
        popupHeading.innerText = heading.innerText;
        popupPara.innerText = para.innerText;
        popupleaderBio.innerHTML = leaderBio.innerHTML;

        // Show popup and fade in
        popup.classList.remove("hidden");
        lenis.stop();
        gsap.fromTo(
          popup,
          { autoAlpha: 0 },
          { autoAlpha: 1, duration: 0.6, ease: "power2.out" }
        );
      });
    });

    closeBtn.addEventListener("click", () => {
      // Fade out popup
      gsap.to(popup, {
        autoAlpha: 0,
        duration: 0.4,
        ease: "power2.in",
        onComplete: () => {
          popup.classList.add("hidden");
          lenis.start();
        },
      });
    });
  });

$(document).ready(function () {
  
});