<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css"/>
        <title>고객 지원</title>
    </head>
    <body class="post customer">
        <!-- 상단 표시줄 -->
        <?php include 'include/header_nav.php'?>

        <!-- NAVIGATION BAR -->
        <?php include 'include/nav_bar.php'?>

        <!-- SIDE MENU -->
        <div class="sidemenu">
            <ul>
                <li class="sidemenu__list sidemenu-active"><a href="#">자주묻는 질문</a></li>
                <li class="sidemenu__list"><a href="board.php">공지사항</a></li>
            </ul>
        </div>

        <!-- HEADER -->
        <header class="post__header"></header>

        <!-- CONTENT -->
        <main class="post__content">
            <section class="post__section qna">
                <div class="accordion">
                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q1. OM School이 뭐예요?</div>
                        <div class="contentBox__content">
                            <p>
                            OM School은 Oak Meadow School의 약자로, 미국의 Oak Meadow의 전 과정 커리큘럼 컨텐츠를 한국에서 동영상강좌와 함께 제공합니다.<br/>
                            <br/>
                            Oak Meadow는 1975년 미국 동부 Vermont주(州)에서 설립 되었으며 유치원과 초, 중, 고교과정의 (Kindergarten / K-12)정규학교 <br/>
                            인증을 받은 미국 최고, 최대의 온라인 홈스쿨 입니다. <br/>
                            <br/>

                            Oak Meadow는 창의성과 상상력 향상에 중점을 두는 온라인 홈스쿨 프로그램과 교과목으로 미국 내 뿐 아니라, 국제교육기관인 <br/>
                            CITA의 인증을 받아 전 세계 영어권 국가에서 학력을 인정받는 정규학교입니다. 
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q2. 미국 Oak Meadow학교의 졸업장을 받을 수도 있나요? </div>
                        <div class="contentBox__content">
                            <p>
                            Oak Meadow학교는 미국 내에 위치하고 있지만, 기본적으로는 홈스쿨입니다. 따라서 미국 Oak Meadow의 정규등록 학생으로서 <br/>
                            과정을 이수한 후 졸업장을 취득하시면 미국, 캐나다, 영국, 호주 등 다른 나라의 대학으로 별도의 TOEFL Test 없이 진학을 <br/>
                            할 수 있습니다. <br/>
                            <br/>
                            다만, 한국에서 대학입학을 하고자 할 경우 교육규정상 이중 학점을 금지하고 있으므로 한국 내에서 정규과정의 졸업장 없이 <br/>
                            Oak Meadow의 졸업장만을 취득한 경우 검정고시를 통과해야만 한국대학에 진학이 가능합니다. <br/>
                            (미국 본교등록은 개별적인 상담에 의합니다) 
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q3. 미국 정규 과정이라니… 너무 어렵지 않을까요? </div>
                        <div class="contentBox__content">
                            <p>
                            OM School의 동영상은 원어민 강의로 진행되기 때문에 처음 생각할 때는 어렵다고 느낄 수 있습니다.<br/>
                            <br/>
                            하지만, 동영상 강의를 맡으신 외국인 선생님들은 현지에서 학생들을 대상으로 강의를 진행한 풍부한 경험을 가진 선생님들입니다.<br/>
                            우리 학생들을 배려하여 최대한 알아듣기 쉽게 강의하였으므로, 학생들은 “외국어 공부다. 외워야한다”는 부담에서 벗어나,<br/>
                            학습이 진행되는 동안 점진적으로 실력이 향상되는 것을 느끼게 됩니다. <br/>
                            <br/>
                            또한, 학습능률을 향상시키기 위해 본 동영상에 구간반복기능과 속도조절기능 등 어학 카세트와 같은 기능을 첨부하여, 기존의 학원 <br/>
                            수업처럼 한 번 듣고 그 자리에서 끝나는 것이 아니라 반복학습이 가능하고, 강의 중 필요한 부분을 집중 학습할 수 있기 때문에 <br/>
                            학습효과가 배가 됩니다. <br/>
                            더불어 각 지역의 캠퍼스에서 이해가 되지 않는 내용이나 개념에 대해서 상세한 설명을 들을 수 있습니다.
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q4.영어만 하는 것도 아니고 여러 과목이 있는데, 별도의 레벨 테스트가 있나요? </div>
                        <div class="contentBox__content">
                            <p>
                            수강레벨의 결정은 부모님과 학생 스스로가 결정을 하셔야 합니다. <br/>
                            <br/>
                            학생 본인의 영어 청취력 및 학습 이해도에 따라 등급을 결정하시고, 수강등록 후 일정기간 등급을 조정하실 수 있습니다. <br/>
                            영어를 제외한 과목의 경우, 한국 정규과정이 더 어렵기 때문에 다른 과목보다는 영어 학습능력 부분, 즉 강의의 영어 이해도를 <br/>
                            고려하셔서 학년을 결정하시면 됩니다. 
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q5. 학습은 어떻게 진행 하나요?</div>
                        <div class="contentBox__content">
                            <p>
                            본 온라인 강좌는 풍부한 교육경험을 가진 실력 있는 원어민 선생님의 강의를 담고 있습니다.<br/>
                            학습 진도는 미국 Oak Meadow 의 교과과정에 따라 진행됩니다. <br/>
                            각 캠퍼스에 배정된 선생님들이 공부해야 할 교육과정과 학사일정을 학생들에게 정해주며 수업 시 과제물을 내어주고 그에 대한 평가를 <br/>
                            하게 되므로, 학생들은 온오프라인 통합학습관리를 받을 수 있습니다.
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q6. 온라인 동영상 수업에 대해 궁금한 점은 어떻게 질문하나요? </div>
                        <div class="contentBox__content">
                            <p>
                            학습게시판을 통해 질문하거나, 각 지역 캠퍼스에서 언제든지 궁금한 부분에 대한 자세한 설명을 들을 수 있습니다.
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q7. 교재는 어떤 것을 사용하나요? </div>
                        <div class="contentBox__content">
                            <p>
                                동영상 강의 교재는 30년간 저명한 교육학자들이 심혈을 기울여 개발한 미국 학교의 정규 교과서입니다.<br/>
                                또한 각 등급별로 학습 수준에 최적화된 스토리 북이 별도로 구비되어 있으며 수업 진행 중 필요에 따라 구입하실 수 있습니다. 
                            </p>
                        </div>
                    </div>

                    <div class="accordion__contentBox">
                        <div class="contentBox__label">Q8. 교재는 어떻게 구입하나요? </div>
                        <div class="contentBox__content">
                            <p>
                            수업 진행시 필요한 교재는 해당 캠퍼스에서 구입하실 수 있습니다. <br/>
                            온라인수강학생의 경우 홈페이지를 통해서도 구입하실 수 있습니다. 
                            </p>
                        </div>
                    </div>
                </div>
            </section>
           
        </main>

        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script src="js/bundle.js"></script>
    </body>
</html>
