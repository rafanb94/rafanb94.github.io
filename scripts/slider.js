const mySwiper = new Swiper('.swiper-container', {
    autoHeight: true,
    grabCursor: true,
    loop: false,
    pagination: {
    el: '.swiper-pagination',
  },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
  },
  // autoplay: {
  //       delay: 2500,
  //       disableOnInteraction: false,
  //     },
})