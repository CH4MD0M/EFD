<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="css/style.css"/>
        <title>EFDkorea</title>
    </head>
    <body class="container grid">
        <!-- Modal -->
        <?php if(isset($_SESSION['id']) && !$_SESSION['verified']) : ?>
            <div class="modal hidden">
                <div class="modal__overlay"></div>
                <div class="modal__content">
                    <div class="modal__text">
                        로그인을 위해서<br/> 회원가입한 이메일로 인증해주세요
                    </div>
                    <button class="modal-close-btn">닫기</button>
                </div>
            </div> 
            <script>
                const modal = document.querySelector('.modal');
                const modal_btn = document.querySelector('.modal-close-btn');
                
                // Modal display
                modal.classList.remove('hidden');

                // Modal - when close btn click.
                const closeModal =()=> {
                    modal.classList.add('hidden');
                }
                modal_btn.addEventListener("click", closeModal);
            </script>
        <?php endif ?>

        <!-- Back TO Top -->
        <button class="scroll-top" id="scroll-btn">
            <svg class="scroll-top__icon">
                <use xlink:href="img/sprite.svg#icon-circle-up"></use>
            </svg>
        </button>

        <!-- 상단 표시줄 -->
        <?php include 'include/header_nav.php'?>

        <!-- NAVIGATION BAR -->
        <?php include 'include/nav_bar.php'?>

        <!-- HEADER -->
        <header class="header">
            <!-- 이미지 슬라이더 -->

            <!-- Swiper -->
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide slide-1"
                        style="background-image: url('img/slide/slide-1.png')"
                    >
                        <div class="slide__content">
                            <div class="caption">
                                <h1 class="caption__title">Title</h1>
                                <p class="caption__content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide-2"
                        style="background-image: url('img/slide/slide-2.png')"
                    >
                        <div class="slide__content">
                            <div class="caption">
                                <h1 class="caption__title">Title</h1>
                                <p class="caption__content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide-3"
                        style="background-image: url('img/slide/slide-3.png')"
                    >
                        <div class="slide__content">
                            <div class="caption">
                                <h1 class="caption__title">Title</h1>
                                <p class="caption__content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide-4"
                        style="background-image: url('img/slide/slide-1.png')"
                    >
                        <div class="slide__content">
                            <div class="caption">
                                <h1 class="caption__title">Title</h1>
                                <p class="caption__content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide-5"
                        style="background-image: url('img/slide/slide-2.png')"
                    >
                        <div class="slide__content">
                            <div class="caption">
                                <h1 class="caption__title">Title</h1>
                                <p class="caption__content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-slide slide-6"
                        style="background-image: url('img/slide/slide-3.png')"
                    >
                        <div class="slide__content">
                            <div class="caption">
                                <h1 class="caption__title">Title</h1>
                                <p class="caption__content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <svg class="next__icon">
                        <use xlink:href="img/sprite.svg#icon-circle-right"></use>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg class="prev__icon">
                        <use xlink:href="img/sprite.svg#icon-circle-left"></use>
                    </svg>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </header>

        <!-- HOME SECTION -->
        <section class="homes">
            <!-- HOME TITLE -->
            <div class="title--primary">OM School 소개</div>

            <!-- HOME ITEM BOX -->
            <div class="homes__items">
                <!-- item-1 -->
                <div class="item">
                    <div class="item__icon">
                        <img src="./img/svg/book.svg" alt="book" />
                    </div>
                    <div class="item__title">
                        <p>새로운 교육 패러다임</p>
                    </div>
                    <div class="item__content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ducimus
                            hic numquam qui provident molestias quibusdam perferendis fugiat tempora
                            doloremque!
                        </p>
                    </div>
                </div>

                <!-- item-1 -->
                <div class="item">
                    <div class="item__icon">
                        <img src="./img/svg/earth.svg" alt="" />
                    </div>
                    <div class="item__title">
                        <p>글로벌 인재 육성</p>
                    </div>
                    <div class="item__content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ducimus
                            hic numquam qui provident molestias quibusdam perferendis fugiat tempora
                            doloremque!
                        </p>
                    </div>
                </div>

                <!-- item-1 -->
                <div class="item">
                    <div class="item__icon">
                        <img src="./img/svg/study.svg" alt="" />
                    </div>
                    <div class="item__title">
                        <p>교육 비전</p>
                    </div>
                    <div class="item__content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ducimus
                            hic numquam qui provident molestias quibusdam perferendis fugiat tempora
                            doloremque!
                        </p>
                    </div>
                </div>

                <!-- item-1 -->
                <div class="item">
                    <div class="item__icon">
                        <img src="./img/svg/online.svg" alt="" />
                    </div>
                    <div class="item__title">
                        <p>온라인 과정</p>
                    </div>
                    <div class="item__content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ducimus
                            hic numquam qui provident molestias quibusdam perferendis fugiat tempora
                            doloremque!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PREVIEW SECTION -->
        <section class="preview">
            <div class="title--primary">강좌 <span>미리보기</span></div>
            <!-- 반응형 모바일 -->
            <!--     <div class="swiper-container swiper2">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide"
            style="background-image: url('img/slide/slide-1.png');"
          ></div>
          <div
            class="swiper-slide"
            style="background-image: url('img/slide/slide-2.png');"
          ></div>
          <div
            class="swiper-slide"
            style="background-image: url('img/slide/slide-3.png');"
          ></div>
        </div>
        
        <div class="swiper-pagination"></div>
      </div> -->
            <div class="preview__cards">
                <div class="card">
                    <!-- card__side--front -->
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">&nbsp;</div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1"> TITLE </span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>list text 1</li>
                                <li>list text 2</li>
                                <li>list text 3</li>
                                <li>list text 4</li>
                                <li>list text 5</li>
                            </ul>
                        </div>
                    </div>

                    <!-- card__side--back -->
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__text-box">
                                <p class="card__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Excepturi deserunt molestias ipsam eveniet incidunt eos,
                                    dignissimos nemo eum quo.
                                </p>
                            </div>
                            <a href="#" class="btn btn--white">Button</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <!-- card__side--front -->
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">&nbsp;</div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2"> TITLE </span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>list text 1</li>
                                <li>list text 2</li>
                                <li>list text 3</li>
                                <li>list text 4</li>
                                <li>list text 5</li>
                            </ul>
                        </div>
                    </div>

                    <!-- card__side--back -->
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__text-box">
                                <p class="card__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Excepturi deserunt molestias ipsam eveniet incidunt eos,
                                    dignissimos nemo eum quo.
                                </p>
                            </div>
                            <a href="#" class="btn btn--white">Button</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <!-- card__side--front -->
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--3">&nbsp;</div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--3"> TITLE </span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>list text 1</li>
                                <li>list text 2</li>
                                <li>list text 3</li>
                                <li>list text 4</li>
                                <li>list text 5</li>
                            </ul>
                        </div>
                    </div>

                    <!-- card__side--back -->
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__text-box">
                                <p class="card__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Excepturi deserunt molestias ipsam eveniet incidunt eos,
                                    dignissimos nemo eum quo.
                                </p>
                            </div>
                            <a href="#" class="btn btn--white">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTENT SECTION -->
        <section class="content">
            <div class="contents">
                <div class="content__box">
                    <h2 class="content__title">This is title</h2>
                    <ul>
                        <li>list text 1</li>
                        <li>list text 2</li>
                        <li>list text 3</li>
                        <li>list text 4</li>
                        <li>list text 5</li>
                    </ul>
                </div>
                <div class="content__box">
                    <div class="content__context">
                        <p class="content__paragraph">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit sunt
                            laboriosam quasi velit ullam reprehenderit quas nam magni beatae
                            consequuntur?
                        </p>
                    </div>
                    <div class="content__icons">
                        <img class="content__icon" src="./img/SVG/graph.svg" alt="graph" />
                        <img class="content__icon" src="./img/SVG/graph.svg" alt="graph" />
                        <img class="content__icon" src="./img/SVG/graph.svg" alt="graph" />
                        <img class="content__icon" src="./img/SVG/graph.svg" alt="graph" />
                    </div>
                </div>
                <div class="content__box">
                    <h2 class="content__title">This is title.</h2>
                    <p class="content__paragraph">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit sunt
                        laboriosam quasi velit ullam reprehenderit quas nam magni beatae
                        consequuntur?
                    </p>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script def src="js/bundle.js"></script>
    </body>
</html>
