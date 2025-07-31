$(document).ready(function () {
    $('#parking .containers').each(function (index) {
        const isEven = index % 2 === 0;
        gsap.to(this, {
            transform: isEven
                ? 'rotateY(-10deg) rotateX(5deg) scale(0.7, 0.7) translateY(0%)'
                : 'rotateY(10deg) rotateX(5deg) scale(0.7, 0.7) translateY(0%)',
            filter: 'blur(5px) brightness(0.5)',
            ease: "none",
            scrollTrigger: {
                trigger: this,
                start: "top 0%",
                end: "bottom 0%",
                toggleActions: "play none none reverse",
                scrub: true,
            }
        });
    });


    gsap.utils.toArray('#parking .containers h3, #parking .containers p, #parking .containers .right,  #parking .containers .tags').forEach((item, i) => {
        gsap.from(item,
            {
                y: 100,
                ease: 'power4.out',
                duration: 0.5,
                opacity: 0,
                scrollTrigger: {
                    trigger: item,
                    start: 'top 90%',
                    // markers: true
                }
            }
        );
    });


    gsap.utils.toArray('#parking .containers .right img').forEach((item, i) => {
        gsap.from(item, {
            y: 0,
            scrollTrigger: {
                trigger: item.closest('.right'),
                start: 'top 90%',
                end: 'top 0%',
                scrub: true,
                // markers: true
            }
        }
        );
    });

});
