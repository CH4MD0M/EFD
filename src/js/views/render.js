// NAV-BAR
export const renderNavBar = parent => {
    const navRender = `
    <div class="navigation__logo"><span>EFD</span>korea</div>
    <nav class="navigation__nav">
        <ul class="nav">
            <!-- Home -->
            <li class="nav__item active">
                <a href="index.html" class="nav__link">
                    <svg class="home__icon">
                        <use xlink:href="img/sprite.svg#icon-home"></use>
                    </svg>
                    <span>Home</span>
                </a>
            </li>

            <!-- 교육안내 -->
            <li class="nav__item">
                <a href="info.html" class="nav__link">
                    <svg class="nav__icon">
                        <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                    </svg>
                    <span>교육안내</span>
                </a>

                <ul class="dropdown">
                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link">
                            <span>초등부 과정</span>
                        </a>
                    </li>

                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link">
                            <span>중등부 과정</span>
                        </a>
                    </li>

                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link">
                            <span>고등부 과정</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- 교육자료소개 -->
            <li class="nav__item">
                <a href="intro.html" class="nav__link">
                    <svg class="nav__icon">
                        <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                    </svg>
                    <span>교육자료 소개</span>
                </a>

                <ul class="dropdown">
                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link">
                            <span>Elementary</span>
                        </a>
                    </li>

                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link">
                            <span>Middle</span>
                        </a>
                    </li>

                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link"> <span>High</span></a>
                    </li>
                </ul>
            </li>

            <!-- 고객지원 -->
            <li class="nav__item">
                <a href="customer.html" class="nav__link">
                    <svg class="nav__icon">
                        <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                    </svg>
                    <span>고객 지원</span>
                </a>

                <ul class="dropdown">
                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link"> <span>공지사항</span></a>
                    </li>

                    <li class="dropdown__item">
                        <a href="#" class="dropdown__link"> <span>Q&A</span></a>
                    </li>
                </ul>
            </li>

            <!-- 나의 강의실 -->
            <li class="nav__item">
                <a href="#" class="nav__link">
                    <svg class="nav__icon">
                        <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                    </svg>
                    <span>My class</span>
                </a>
            </li>

            <!-- 로그인 -->
            <li class="nav__item">
                <a href="signin.html" class="nav__link">
                    <svg class="nav__icon">
                        <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                    </svg>
                    <span>로그인</span>
                </a>
            </li>
        </ul>
    </nav>`;
    parent.insertAdjacentHTML('afterbegin', navRender);
};

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
    parent.insertAdjacentHTML('afterbegin', ftrRender);
};

// SCROLL-BUTTON
export const renderBtn = parent => {
    const scrollBtn = ` 
<button class="scroll-top" id="scroll-btn">
    <svg class="scroll-top__icon">
        <use xlink:href="img/sprite.svg#icon-circle-up"></use>
    </svg>
</button>`;
    parent.insertAdjacentHTML('afterbegin', scrollBtn);
};
