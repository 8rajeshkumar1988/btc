$(document).ready(function () {


    const sliderAbout = new Swiper('.sliderAbout', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        grabCursor: true, // 👈 adds grab cursor on hover
        speed: 800,
        // autoplay: {
        //     delay: 5000, // change delay as needed
        //     disableOnInteraction: false, // keeps autoplay after manual swipe
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // optional: makes pagination dots clickable
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });



    // my products  
    const slidesPerViewProduct = window.innerWidth > 820 ? 2.2 : window.innerWidth > 600 ? 1.8 : 1;
    const ourProducts = new Swiper(".ourProducts", {
        spaceBetween: 30,
        centeredSlides: false,
        slidesPerView: slidesPerViewProduct,
        loop: true,
        // autoplay: { 
        //     delay: 2500,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    $('.faq.default-open .ans').slideDown(500)

    $('.faq').click(function () {
        const item = $(this)
        $('.faq.default-open .ans').slideUp(500)
        const answer = item.find('.ans');
        if (item.hasClass('default-open')) {
            item.removeClass('default-open')
            answer.slideUp(500)
        } else {
            $('.faq').removeClass('default-open')
            item.addClass('default-open')
            answer.slideDown(500)
        }
    })


    // ourCapabilities

    const resetSpiral = () => {
        $('.swiper-slide').css('position', 'relative');
        $('.spiralImage').css('transform', 'unset');
        $('.spiralImage').css('position', 'initial');
        $('.empty').css('display', 'none');
    }
    const makeSwiper = () => {
        $('.spiralImage').addClass('active');
        resetSpiral();
        const swiperCapabilities = new Swiper(".ourCapabilities", {
            spaceBetween: window.innerWidth > 1024 ? 40 : 20,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: false,
            // initialSlide: 3,
            // autoplay: { 
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            allowTouchMove: false,     // 👈 disables swipe/drag
            simulateTouch: false,
            pagination: {
                el: ".swiper-pagination",
                // clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }



    const images = document.querySelectorAll('.spiralImage');
    const container = document.querySelector('.cap_container');
    const containerWidth = container.offsetWidth;
    const containerHeight = container.offsetHeight;

    const centerIndex = Math.floor(images.length / 2);
    let swirlTimeline;

    // Fixed directions for scattered images (for rest)
    const fixedPaths = [
        { x: -1300, y: -1200 }, { x: -800, y: -1400 },
        { x: -1400, y: 0 }, { x: -1300, y: 1200 },
        { x: 1300, y: -1200 }, { x: 800, y: -1400 },
        { x: 1400, y: 0 }, { x: 1300, y: 1200 },
        { x: 0, y: -1600 }, { x: 0, y: 1600 },
        { x: -900, y: 1600 }, { x: 900, y: 1600 }
    ];

    // Initial stacked setup
    function setInitialLayout() {
        images.forEach((img, index) => {
            let offset;
            let spaceEx;
            const windowWidth = window.innerWidth;
            if (windowWidth > 1024) {
                spaceEx = (windowWidth / 2) - (windowWidth / 10) - (img.offsetWidth / 2);
            } else if (windowWidth > 768) {
                spaceEx = (windowWidth / 20);
            } else {
                spaceEx = (windowWidth / 2) - (windowWidth / 30) - (img.offsetWidth / 2);
            }
            if (index === 0) {
                offset = 0; // center image
            } else {
                // Alternate right (1, 3, 5...) and left (2, 4, 6...) with increasing distance
                const position = Math.ceil(index / 2);
                offset = index % 2 === 1 ? position : -position;
            }
            const isDesk = window.innerWidth > 1700;
            const isTab = window.innerWidth > 1170;
            const isMobile = window.innerWidth < 1024;
            const scale = 1 - Math.abs(offset) * 0.1;
            const xOffset = offset * (isDesk ? 60 : isTab ? 40 : isMobile ? 25 : 35);

            gsap.set(img, {
                x: xOffset,
                y: 0,
                left: spaceEx,
                scale: scale,
                rotation: 0,
                zIndex: 100 - Math.abs(offset),
            });
        });
    }


    setInitialLayout();

    // ✅ Swirl animation triggered by center image click
    document.getElementById('exploreWhatWeDo').addEventListener('click', () => {
        // Prevent replay if already played
        if (swirlTimeline && swirlTimeline.progress() === 1) return;

        swirlTimeline = gsap.timeline({
            onComplete: () => {
                makeSwiper(); // ✅ called after timeline completes
            }
        });

        images.forEach((img, index) => {
            const isCenter = index === 0;
            const isRightNext = index === 1;
            const isDesk = window.innerWidth > 1024;
            const additionNal = window.innerWidth / (isDesk ? 10 : 20);
            let xDisplacementFir;
            let xDisplacementSec;
            if (window.innerWidth > 1024) {
                xDisplacementFir = -containerWidth / 2 + img.offsetWidth / 2 + additionNal
                xDisplacementSec = containerWidth / 2 - (img.offsetWidth / 1) + images[0].offsetWidth + (isDesk ? 60 : 120) + 20
            } else {
                xDisplacementFir = $('.cap_container').width() / -20
                xDisplacementSec = containerWidth - (img.offsetWidth / 1) + (isDesk ? 60 : 200) + 18
            }
            if (isCenter) {
                if (window.innerWidth > 768) {
                    swirlTimeline.to(img, {
                        x: xDisplacementFir - 5,
                        y: 0,
                        scale: 1,
                    }, 0);
                } else {
                    swirlTimeline.to(img, {
                        width: '80vw',
                        x: -containerWidth / 2 + img.offsetWidth / 2 + (additionNal * 2),
                        y: 0,
                        scale: 1,
                        onComplete: () => {
                            $('.spiralImage').css('width', '80vw');
                        }
                    }, 0);
                }
            } else if (isRightNext) {
                swirlTimeline.to(img, {
                    x: xDisplacementSec,
                    y: 0,
                    scale: 1,
                }, 0);
            } else {
                const pathIndex = (index < centerIndex) ? index : index - 2;
                const path = fixedPaths[pathIndex % fixedPaths.length];

                swirlTimeline.to(img, {
                    x: path.x,
                    y: path.y,
                    scale: 0.9,
                    duration: 1,
                }, 0);
            }

            swirlTimeline.to('#ourCapabilities .leftContent', {
                x: isDesk ? '-40vw' : '0vw',
                y: isDesk ? 0 : 0,
                scale: 1,
                duration: 1,
                opacity: isDesk ? 0 : 1,
            }, 0);
            swirlTimeline.to('#ourCapabilities .rightContent', {
                x: '40vw',
                y: 0,
                scale: 1,
                duration: 1,
                opacity: 0,
                pointerEvent: 'none',
                zIndex: 0
            }, 0);
            swirlTimeline.to('.swiper-slide .text, .btnssNew', {
                x: 0,
                y: 0,
                scale: 1,
                duration: 0.5,
                opacity: 1
            }, 0);
        });
    });


    // ✅ Reset button to reverse the animation
    document.getElementById('resetButton').addEventListener('click', () => {
        if (swirlTimeline) {
            swirlTimeline.reverse();
        }
    });



})