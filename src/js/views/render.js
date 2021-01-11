// FOOTER
export const renderFooter = parent => {
    const ftrRender = `
    <!-- navigation -->
    <ul class="footer__nav">
        <li class="footer__item">
            <a href="#" class="footer__link">교육안내</a>
        </li>
        <li class="footer__item">
            <a href="#" class="footer__link">교육자료소개</a>
        </li>
        <li class="footer__item">
            <a href="#" class="footer__link">고객지원</a>
        </li>
        <li class="footer__item">
            <a href="#" class="footer__link">My Class</a>
        </li>
    </ul>

    <!-- copyright -->
    <p class="copyright">
        &copy; Copyright 2020 by ch4md0m <br />Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Voluptates, libero nobis.
    </p>`;
    if (parent) {
        parent.insertAdjacentHTML('afterbegin', ftrRender);
    }
};
