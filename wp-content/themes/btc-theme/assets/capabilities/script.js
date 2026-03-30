$(document).ready(function () {
    if (window.innerWidth > 1024) {
        gsap.utils.toArray(".cards_wrapper .card").forEach((card, i) => {
            gsap.from(card, {
                rotationY: 90,
                x: -100,
                transformOrigin: "center bottom",
                autoAlpha: 0,
                duration: 1.2,
                ease: "back.out(0.3)",
                delay: i * 0.1,
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    toggleActions: "play none none none"
                }
            });
        });
    } else {
        gsap.utils.toArray(".cards_wrapper .card").forEach((card, i) => {
            gsap.from(card, {
                rotationY: 20,
                y: 100,
                transformOrigin: "center bottom",
                autoAlpha: 0,
                duration: 1.2,
                ease: "back.out(1.1)",
                // delay: i * 0.1,
                scrollTrigger: {
                    trigger: card,
                    start: "top 90%",
                    toggleActions: "play none none none"
                }
            });
        });
    }

    gsap.utils.toArray("#vertical_integration .card > img").forEach((img) => {
        gsap.to(
            img,
            {
                y: 0,
                ease: "none",
                scrollTrigger: {
                    trigger: img.closest(".card") || img,
                    start: "top bottom",
                    end: "bottom 20%",
                    scrub: true
                }
            }
        );
    });


    gsap.to('#sustainability_details .image_wrapper img', {
        y: 0,
        ease: "none",
        scrollTrigger: {
            trigger: '#sustainability_details .image_wrapper',
            start: "top bottom",
            end: "bottom 0%",
            scrub: true
        }
    });

    gsap.from('#sustainability_details .sustainability_info h2, #sustainability_details .sustainability_info p, #sustainability_details .sustainability_info li', {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: window.innerWidth > 1024 ? 0.2 : 0.05,
        scrollTrigger: {
            trigger: '#sustainability_details .sustainability_info',
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    })

    gsap.fromTo('#sustainability_details .sustainability_info .leftt', {
        y: window.innerWidth > 1024 ? 50 : 0
    }, {
        y: window.innerWidth > 1024 ? -50 : 0,
        ease: "none",
        scrollTrigger: {
            trigger: '#sustainability_details .sustainability_info .leftt',
            start: "top bottom",
            end: "bottom 20%",
            scrub: true
        }
    });

    gsap.from('#sustainability_details .tai_container .static h3, #sustainability_details .tai_container .static p', {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.1,
        scrollTrigger: {
            trigger: '#sustainability_details .tai_container',
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    })
    if (window.innerWidth > 1024) {
        gsap.from('#sustainability_details .tai_container .dynamic_desc p, #sustainability_details .tai_container .dynamic_desc li', {
            y: 100,
            opacity: 0,
            ease: "power4.out",
            duration: 1.2,
            stagger: 0.1,
            scrollTrigger: {
                trigger: '#sustainability_details .tai_container',
                start: "top 80%",
                toggleActions: "play none none reverse",
            }
        })
    } else {
        gsap.from('#sustainability_details .tai_container .dynamic_desc p, #sustainability_details .tai_container .dynamic_desc li', {
            y: 100,
            opacity: 0,
            ease: "power4.out",
            duration: 1.2,
            stagger: 0.1,
            scrollTrigger: {
                trigger: '#sustainability_details .tai_container .dynamic_desc p',
                start: "top 90%",
                toggleActions: "play none none reverse",
                // markers:true
            }
        })
    }

    // if (window.innerWidth > 1024) {
    //     gsap.fromTo('#sustainability_details .tai_container .dynamic_desc', {
    //     y: -50
    //     }, {
    //         y: 0,
    //         ease: "none",
    //         scrollTrigger: {
    //             trigger: '#sustainability_details .tai_container',
    //             start: "top bottom",
    //             end: "bottom 20%",
    //             scrub: true
    //         }
    //     });
    // }


    gsap.from('.logistics_shipping_efficiency_container .first h2, .logistics_shipping_efficiency_container .first p, .logistics_shipping_efficiency_container .first .category_image', {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.2,
        scrollTrigger: {
            trigger: '.logistics_shipping_efficiency_container .first',
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    })
    gsap.from('.logistics_shipping_efficiency_container .second h2, .logistics_shipping_efficiency_container .second p, .logistics_shipping_efficiency_container .second .category_image', {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.2,
        delay: 0.5,
        scrollTrigger: {
            trigger: '.logistics_shipping_efficiency_container .second',
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    })
    gsap.from('.logistics_shipping_efficiency_container .third h2, .logistics_shipping_efficiency_container .third p, .logistics_shipping_efficiency_container .third .category_image', {
        y: 100,
        opacity: 0,
        ease: "power4.out",
        duration: 1.2,
        stagger: 0.2,
        delay: 0.5,
        scrollTrigger: {
            trigger: '.logistics_shipping_efficiency_container .third',
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    })

    gsap.utils.toArray('.logistics_shipping_efficiency_container img').forEach((img) => {
        gsap.to(
            img,
            {
                y: 0,
                ease: "none",
                scrollTrigger: {
                    trigger: img,
                    start: "top bottom",
                    end: "bottom 0%",
                    scrub: true,
                }
            }
        );
    });


});



$(document).ready(function () {
    const loadHeroSlideImages = (swiper) => {
        if (!swiper || !swiper.slides || !swiper.slides.length) return;

        const total = swiper.slides.length;
        const indexesToLoad = [
            swiper.activeIndex,
            (swiper.activeIndex + 1) % total,
            (swiper.activeIndex - 1 + total) % total,
        ];

        indexesToLoad.forEach((index) => {
            const slide = swiper.slides[index];
            if (!slide) return;

            const deferredImg = slide.querySelector("img[data-src]");
            if (!deferredImg) return;

            deferredImg.setAttribute("src", deferredImg.getAttribute("data-src"));
            deferredImg.removeAttribute("data-src");
        });
    };

    var capabilitySwiper = new Swiper(".capabilitySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        speed: 800,
        autoplay: {
            delay: 3000,
            //   disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination_capabilities",
            clickable: true,
        },
        on: {
            init: function () {
                loadHeroSlideImages(this);
            },
            slideChangeTransitionStart: function () {
                loadHeroSlideImages(this);
            },
        },
    });
})

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll("#sustainability_details .js-countup");
    if (!counters.length) return;

    const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

    const animateCounter = (el) => {
        const target = parseFloat(el.dataset.target || "0");
        const decimals = parseInt(el.dataset.decimals || "0", 10);
        const duration = parseInt(el.dataset.duration || "1400", 10);
        const startTime = performance.now();

        const tick = (now) => {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = easeOutCubic(progress);
            const current = target * eased;

            el.textContent = decimals > 0 ? current.toFixed(decimals) : Math.round(current).toString();

            if (progress < 1) {
                requestAnimationFrame(tick);
            } else {
                el.textContent = decimals > 0 ? target.toFixed(decimals) : Math.round(target).toString();
            }
        };

        requestAnimationFrame(tick);
    };

    const runAll = () => counters.forEach((el) => animateCounter(el));

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0] && entries[0].isIntersecting) {
                runAll();
                observer.disconnect();
            }
        }, { threshold: 0.35 });

        const trigger = document.querySelector("#sustainability_details .tai_container .static");
        if (trigger) {
            observer.observe(trigger);
        } else {
            runAll();
        }
    } else {
        runAll();
    }
});
