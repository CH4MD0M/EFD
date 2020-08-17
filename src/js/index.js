var swiper = new Swiper(".swiper-container", {
  loop: true,
  autoplay: true,
  speed: 1000,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});
