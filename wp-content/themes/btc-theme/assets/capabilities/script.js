$(document).ready(function () {
    gsap.utils.toArray(".cards_wrapper .card").forEach((card, i) => {
        gsap.from(card, {
            rotationY: 90,
            x: -100,
            transformOrigin: "center bottom",
            autoAlpha: 0,
            duration: 1.2,
            ease: "back.out(1.6)",
            delay: i * 0.1,
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });
    });

    gsap.utils.toArray("#vertical_integration .card > img").forEach((img) => {
        gsap.fromTo(
            img,
            { y: -120 },
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


    gsap.fromTo('#sustainability_details .image_wrapper img', {
        y: -150
    }, {
        y: 50,
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
        stagger: 0.2,
        scrollTrigger: {
            trigger: '#sustainability_details .sustainability_info',
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    })

    gsap.fromTo('#sustainability_details .sustainability_info .leftt', {
        y: 80
    }, {
        y: -20,
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

    gsap.fromTo('#sustainability_details .tai_container .dynamic_desc', {
        y: -100
    }, {
        y: 0,
        ease: "none",
        scrollTrigger: {
            trigger: '#sustainability_details .tai_container',
            start: "top bottom",
            end: "bottom 20%",
            scrub: true
        }
    });

    gsap.from('.logistics_shipping_efficiency_container .first h2, .logistics_shipping_efficiency_container .first p, .logistics_shipping_efficiency_container .first img', {
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
    gsap.from('.logistics_shipping_efficiency_container .second h2, .logistics_shipping_efficiency_container .second p, .logistics_shipping_efficiency_container .second img', {
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
    gsap.from('.logistics_shipping_efficiency_container .third h2, .logistics_shipping_efficiency_container .third p, .logistics_shipping_efficiency_container .third img', {
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
        gsap.fromTo(
            img,
            { top: -100 },
            {
                top: 50,
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
