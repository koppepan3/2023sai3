var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.3,
    centeredSlides: false,
    spaceBetween: 20,
    
    breakpoints: {
      // 1200px以上の場合
      1200: {
        slidesPerView: 4
      },
      // 600px以上の場合
      600: {
        slidesPerView: 3,
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        spaceBetween: 30,
      }
    },
  });