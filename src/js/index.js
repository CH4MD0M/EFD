import { elements } from './views/base';
import { renderNavBar, renderFooter, renderBtn } from './views/render.js';
import { swiper } from './views/swiper.js';

// Render
renderNavBar(elements.navBar);
renderFooter(elements.footer);
renderBtn(elements.body);

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
