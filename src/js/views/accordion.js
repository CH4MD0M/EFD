const accordions = document.querySelectorAll('.accordion__contentBox');

accordions.forEach(function (accordion) {
    accordion.addEventListener('click', function () {
        this.classList.toggle('accordion-active');
    });
});
