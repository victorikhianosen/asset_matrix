
// HERO
// var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     loop: true,
//     autoplay: {
//         delay: 3000,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });



// var swiper = new Swiper(".mySwiperPartners", {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     loop: true,
//     autoplay: {
//         delay: 3000,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });



var swiperLoan = new Swiper(".swiperLoan", {
    slidesPerView: 1, // Default to 1 slide per view
    spaceBetween: 30, // Space between slides
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    breakpoints: {
        // when window width is >= 640px
        640: {
            slidesPerView: 2, // 2 slides for medium screens (tablet)
        },
        // when window width is >= 1024px
        1024: {
            slidesPerView: 3, // 3 slides for large screens (laptop)
        },
    },
});
