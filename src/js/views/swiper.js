import Swiper from 'swiper/bundle';
import { Navigation, Pagination } from 'swiper';

Swiper.use([Navigation, Pagination]);
export const swiper = new Swiper('.swiper-container', {
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
