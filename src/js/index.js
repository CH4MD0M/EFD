import { elements } from './views/base';
import { renderNavBar } from './views/nav';
import { renderFooter } from './views/footer';
import { scrollTop } from './views/button';

// Navigation bar Render
renderNavBar(elements.navBar);
renderFooter(elements.footer);

// Scrolltop Button
scrollTop(elements.scrollBtn, 300);

// Swiper slide
new Swiper('.swiper1', {
    loop: true,
    autoplay: true,
    speed: 1500,

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

/* new Swiper(".swiper2", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
 */
