import { elements } from './views/base';
import { renderNavBar, renderFooter } from './views/render.js';
import { scrollTop } from './views/button.js';
import { swiper } from './views/swiper.js';
import './views/input.js';

// Render
renderNavBar(elements.navBar);
renderFooter(elements.footer);

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
