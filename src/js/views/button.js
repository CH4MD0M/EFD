const el = document.querySelector('.scroll-top');

window.addEventListener('scroll', () => {
    if (el) {
        if (window.pageYOffset > 250) {
            el.classList.add('scroll__active');
        } else {
            el.classList.remove('scroll__active');
        }
    }
});

const scrollTop = duration => {
    if (el) {
        el.addEventListener('click', function () {
            let currentY = window.pageYOffset;
            let step = duration / currentY > 1 ? 10 : 100;
            let timeStep = (duration / currentY) * step;
            let intervalID = setInterval(scrollUp, timeStep);

            function scrollUp() {
                currentY = window.pageYOffset;
                if (currentY === 0) {
                    clearInterval(intervalID);
                } else {
                    scrollBy(0, -step);
                }
            }
        });
    }
};
scrollTop(300);
