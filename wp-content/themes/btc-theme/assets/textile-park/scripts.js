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
          // if (window.innerWidth > 1024) {
          //   lenis.stop();
          //   setTimeout(() => {
          //     lenis.start();
          //   }, 100)
          // }
        },
      },
    });
  });

// Create dots dynamically 
document.querySelectorAll("#parking .parent_pers").forEach((_, index) => {
  const dot = document.createElement("div");
  dot.classList.add("dot");
  if (index === 0) dot.classList.add("active");
  document.getElementById("progress_indication").appendChild(dot);
});

function updateActiveDot(activeIndex) {
  document.querySelectorAll("#progress_indication .dot").forEach((dot, i) => {
    dot.classList.toggle("active", i === activeIndex);
  });
}

let progressVisible = false;

function checkParkingInViewAndActiveDot() {
  const parking = document.getElementById("parking");
  const progress = document.getElementById("progress_indication");
  const parkingRect = parking.getBoundingClientRect();

  const inView = parkingRect.top < window.innerHeight / 2 && parkingRect.bottom > window.innerHeight / 2;

  if (inView && !progressVisible) {
    progressVisible = true;
    gsap.to(progress, {
      x: 0,
      autoAlpha: 1,
      duration: 0.5,
      ease: "power2.out"
    });
  } else if (!inView && progressVisible) {
    progressVisible = false;
    gsap.to(progress, {
      x: 40,
      autoAlpha: 0,
      duration: 0.2,
      ease: "power2.in"
    });
  }

  if (!inView) return;

  // Highlight the active dot
  const parentPersList = document.querySelectorAll("#parking .parent_pers");
  let activeIndex = 0;

  parentPersList.forEach((el, index) => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight / 2 && rect.bottom > window.innerHeight / 2) {
      activeIndex = index;
    }
  });

  updateActiveDot(activeIndex);
}


window.addEventListener("scroll", checkParkingInViewAndActiveDot);
window.addEventListener("resize", checkParkingInViewAndActiveDot);

checkParkingInViewAndActiveDot();




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
  const $this = $(this);
  const tab = $this.data("tab");
  const newImageSrc = $this.data("img"); // Add data-img attribute on .tags
  if ($this.hasClass("active")) return;

  if (currentTween) currentTween.kill();

  const prevTab = $("#textile_processing .tags.active").first().data("tab");
  const $allPanels = $("#textile_processing .inner_bottom");
  const $currentContent = prevTab ? $("#" + prevTab) : $allPanels.first();
  const $nextContent = $("#" + tab);
  const $image = $("#textile_processing_img");

  // Enforce single-panel visibility (prevents "all tabs at once" state).
  $allPanels.css("display", "none");
  if (window.innerWidth > 1024) {
    $currentContent.css("display", "flex");
  } else {
    $currentContent.css("display", "grid");
  }

  // Update active classes (visual UI)
  $("#textile_processing .tags").removeClass("active").addClass("unactive");
  $this.addClass("active").removeClass("unactive");

  // Update ARIA selected states (tabs)
  $("#textile_processing .tags").each(function () {
    const $tag = $(this);
    const isActive = $tag.data("tab") === tab;
    $tag.attr("aria-selected", isActive ? "true" : "false");
    $tag.attr("tabindex", isActive ? "0" : "-1");
  });

  // Update ARIA hidden states (panels)
  $allPanels.each(function () {
    const $panel = $(this);
    const isActivePanel = $panel.attr("id") === tab;
    $panel.attr("aria-hidden", isActivePanel ? "false" : "true");
  });

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

      gsap.set($nextContent.children(), { opacity: 0, y: 40 });

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

// Initialize ARIA tab semantics + keyboard navigation (no UI redesign).
$(document).ready(function () {
  const $tagContainer = $("#textile_processing .tag_div");
  const $tags = $("#textile_processing .tags");
  const $panels = $("#textile_processing .inner_bottom");
  if (!$tags.length || !$panels.length) return;

  if ($tagContainer.length) {
    $tagContainer.attr("role", "tablist");
  }

  $tags.each(function () {
    const $tag = $(this);
    const tab = $tag.data("tab");
    if (!tab) return;

    const tagId = "textile-tab-" + tab;
    $tag.attr("id", tagId);
    $tag.attr("role", "tab");
    $tag.attr("aria-controls", tab);
  });

  $panels.each(function () {
    const $panel = $(this);
    const panelId = $panel.attr("id");
    if (!panelId) return;

    $panel.attr("role", "tabpanel");
    $panel.attr("aria-labelledby", "textile-tab-" + panelId);
  });

  const activeTab = $tags.filter(".active").first().data("tab") || $tags.first().data("tab");

  $tags.each(function () {
    const $tag = $(this);
    const tab = $tag.data("tab");
    const isActive = tab === activeTab;
    $tag.attr("aria-selected", isActive ? "true" : "false");
    $tag.attr("tabindex", isActive ? "0" : "-1");
  });

  $panels.each(function () {
    const $panel = $(this);
    const panelId = $panel.attr("id");
    $panel.attr("aria-hidden", panelId === activeTab ? "false" : "true");
  });

  // Keyboard: Arrow keys navigate tabs, Enter/Space activates.
  const tagArr = $tags.toArray();

  $tags.on("keydown", function (e) {
    const $current = $(this);
    const currentTab = $current.data("tab");
    const currentIndex = tagArr.findIndex((el) => $(el).data("tab") === currentTab);

    if (currentIndex < 0) return;

    let nextIndex = currentIndex;
    if (e.key === "ArrowRight") nextIndex = (currentIndex + 1) % tagArr.length;
    if (e.key === "ArrowLeft") nextIndex = (currentIndex - 1 + tagArr.length) % tagArr.length;
    if (e.key === "Home") nextIndex = 0;
    if (e.key === "End") nextIndex = tagArr.length - 1;

    if (nextIndex !== currentIndex) {
      e.preventDefault();
      $(tagArr[nextIndex]).trigger("click");
      $(tagArr[nextIndex]).focus();
      return;
    }

    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      $current.trigger("click");
      return;
    }
  });

  // Ensure only the active panel is visible on load.
  if (activeTab) {
    $panels.css("display", "none");
    if (window.innerWidth > 1024) {
      $("#" + activeTab).css("display", "flex");
    } else {
      $("#" + activeTab).css("display", "grid");
    }
  }
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

document.addEventListener("DOMContentLoaded", function () {
  const heroVideo = document.querySelector(".heroBanner .js-lazy-textile-hero-video");
  if (!heroVideo) return;

  const videoSrc = heroVideo.getAttribute("data-src");
  if (!videoSrc || heroVideo.getAttribute("src")) return;

  let hasLoaded = false;

  function loadAndPlayHeroVideo() {
    if (hasLoaded) return;
    hasLoaded = true;

    heroVideo.setAttribute("src", videoSrc);
    heroVideo.removeAttribute("data-src");
    heroVideo.load();
    heroVideo.play().catch(function () {
      return;
    });
  }

  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        if (entries[0] && entries[0].isIntersecting) {
          loadAndPlayHeroVideo();
          observer.disconnect();
        }
      },
      { rootMargin: "200px 0px" }
    );

    observer.observe(heroVideo);
  } else {
    loadAndPlayHeroVideo();
  }
});
