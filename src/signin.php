<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="css/style.css"/>
        <title>로그인</title>    
    </head>
    <body class="signinContainer grid">
        <div class="header_nav"></div>

        <!-- NAVIGATION BAR -->
        <div class="navigation" id="navBar"></div>

        <!-- LOGIN SECTION -->
        <section class="sign-in-up-container">
        <img class="wave" src="img/wave.png">
            <div class="signIn-container">
                <div class="signIn-img">
                    <img src="img/signin.svg">
                </div>
                <div class="signIn-content">
                    <form class="signIn-form" action="login.php">
                        <img class="signIn-form__img" src="img/avatar.svg">
                        <h2 class="signIn-form__title">로그인</h2>
                        <!-- 아이디 입력 -->
                        <div class="signIn-form__input">
                            <div class="input__icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#icon-user"></use>
                                </svg>
                            </div>                 
                            <div class="input__box">
                                    <h5>아이디</h5>
                                    <input type="text" class="inputs">
                            </div>
                        </div>
                        <!-- 패스워드 입력 -->
                        <div class="signIn-form__input">
                            <div class="input__icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#icon-lock"></use>
                                </svg>
                            </div>
                            <div class="input__box">
                                <h5>비밀번호</h5>
                                <input type="password" class="inputs">
                            </div>
                        </div>

                        <!-- 로그인 버튼 -->
                        <div class="btn-container">
                            <input type="submit" class="signIn-btn" value="로그인">
                            <input type="submit" class="signIn-btn facebook" value="페이스북 계정으로 로그인">
                            <input type="submit" class="signIn-btn kakao" value="카카오 계정으로 로그인">
                            <input type="submit" class="signIn-btn naver" value="네이버 계정으로 로그인">    
                        </div>

                        <!-- 링크 바로가기 -->
                        <div class="links">
                            <a class="find-pw" href="#">비밀번호찾기</a>
                            <a href="signup.php" class="sign-up-link">회원가입</a>
                        </div>
                    </form>

                    
                </div>
            </div>
        </section>
        <script src="js/bundle.js"></script>
        <script>
            (function(){
                window.scrollTo(0,500);
            })();
        </script>
    </body>
</html>

