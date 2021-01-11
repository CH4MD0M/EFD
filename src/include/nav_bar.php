<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="navigation" id="navBar">
            <div class="navigation__logo"><span>EFD</span>korea</div>
            <nav class="navigation__nav">
                <ul class="nav">
                    <!-- Home -->
                    <li class="nav__item home_active">
                        <a href="index.php" class="nav__link">
                            <svg class="home__icon">
                                <use xlink:href="img/sprite.svg#icon-home"></use>
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>

                    <!-- 교육안내 -->
                    <li class="nav__item">
                        <a href="info.php" class="nav__link">
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
                        <a href="intro.php" class="nav__link">
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
                        <a href="customer.php" class="nav__link">
                            <svg class="nav__icon">
                                <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                            </svg>
                            <span>고객 지원</span>
                        </a>

                        <ul class="dropdown">
                            <li class="dropdown__item">
                                <a href="#" class="dropdown__link"> <span>자주묻는 질문</span></a>
                            </li>

                            <li class="dropdown__item">
                                <a href="board.php" class="dropdown__link">
                                    <span>공지사항</span></a
                                >
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
                        <a href="signin.php" class="nav__link">
                            <svg class="nav__icon">
                                <use xlink:href="img/sprite.svg#icon-keyboard_arrow_right"></use>
                            </svg>
                            <span>로그인</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </body>
</html>
