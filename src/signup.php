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
            <div class="signIn-container">
                <div class="signUp-content">
                    <form class="signUp-form" action="login.php">
                        <img class="signUp-form__img" src="img/avatar.svg">
                        <h2 class="signUp-form__title">회원가입</h2>
                        <!-- 아이디 입력 -->
                        <div class="signUp-form__input">
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
                        <div class="signUp-form__input">
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
                        <!-- 패스워드 입력 확인 -->
                        <div class="signUp-form__input">
                            <div class="input__icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#icon-lock"></use>
                                </svg>
                            </div>
                            <div class="input__box">
                                <h5>비밀번호 확인</h5>
                                <input type="password" class="inputs">
                            </div>
                        </div>
                        <!-- 이메일 -->
                        <div class="signUp-form__input">
                            <div class="input__icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#icon-envelop"></use>
                                </svg>
                            </div>
                            <div class="input__box">
                                <h5>이메일</h5>
                                <input type="email" class="inputs">
                            </div>
                        </div>

                        <!-- 회원가입 버튼 -->
                        <div class="btn-container">
                            <input type="submit" class="signUp-btn" value="회원가입">
                        </div>
                    </form>
                </div>
                <div class="signUp-img">
                    <img src="img/signup.svg">
                </div>
            </div>
            <img class="wave2" src="img/wave2.png">
        </section>
        <script src="js/bundle.js"></script>
        <script>
            (function(){
                window.scrollTo(0,500);
            })();
        </script>
    </body>
</html>

