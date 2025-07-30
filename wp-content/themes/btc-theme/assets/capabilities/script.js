$(document).ready(function () {
    gsap.utils.toArray(".cards_wrapper .card").forEach((card, i) => {
        gsap.from(card, {
            rotationY: 90, 
            x: -100,
            transformOrigin: "center bottom",
            opacity: 0,
            duration: 1.5,
            ease: "back.out(1.8)",
            scrollTrigger: {
                trigger: card,
                start: "top 85%",
                toggleActions: "play none none none",
            },
            delay: i * 0.1, // optional stagger
        });
    });

    

});
