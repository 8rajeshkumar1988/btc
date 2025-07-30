$(document).ready(function () {
    gsap.from("#globalSearch", {
        y: 150,
        ease: "none",
        scrollTrigger: {
            trigger: "#globalSearch",
            start: "top 100%",
            end: "top 0%",
            scrub: true,
            toggleActions: "play none none reverse",
        }
    });

    gsap.from("#globalSearch .content", {
        y: 100,
        opacity: 0,
        duration: 1.2,
        ease: "power4.out",
        scrollTrigger: {
            trigger: "#globalSearch .content",
            start: "top 85%",
            toggleActions: "play none none reverse",
        }
    });

    gsap.to("#globalSearch .content_wrapper", {
        y: 150,
        ease: "none",
        scrollTrigger: {
            trigger: "#globalSearch .content_wrapper",
            start: "top 85%",
            end: "top 0%",
            toggleActions: "play none none reverse",
            scrub: true
        }
    });



    gsap.utils.toArray("#sustainableManufacturer .img img").forEach((img) => {
        gsap.to(img, {
            y: 0,
            ease: "none",
            scrollTrigger: {
                trigger: img.closest(".img") || img, 
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    });

})