const mySwiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  effect: 'fade',
  speed: 1000,
  autoplay: {
    delay: 2500,
  },
 
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
 
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});