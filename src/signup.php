<?php require_once 'controllers/authController.php'; ?>

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
        <title>회원가입</title>    
    </head>
    <body class="signUpContainer grid">
        <!-- 상단 표시줄 -->
        <?php include 'include/header_nav.php'?>

        <!-- NAVIGATION BAR -->
        <?php include 'include/nav_bar.php'?>

        <!-- LOGIN SECTION -->
        <section class="sign-in-up-container">
            <div class="signUp-container">
                <div class="signUp-content">
                    <form class="signUp-form" action="signup.php" method="post">
                        <img class="signUp-form__img" src="img/avatar.svg">
                        <h2 class="signUp-form__title">회원가입</h2>
                        <!-- 경고 메시지 -->
                        <?php if(count($errors) > 0): ?>
                            <div class="alert">
                                <?php foreach($errors as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- 아이디 입력 -->
                        <div class="signUp-form__input">
                            <div class="input__icon">
                                <svg>
                                    <use xlink:href="img/sprite.svg#icon-user"></use>
                                </svg>
                            </div>                 
                            <div class="input__box">
                                    <h5>아이디</h5>
                                    <input type="text" class="inputs" name="username" value="<?php echo $username; ?>">
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
                                <input type="email" class="inputs" name="email" value="<?php echo $email; ?>">
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
                                <input type="password" class="inputs" name="password">
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
                                <input type="password" class="inputs" name="passwordConf">
                            </div>
                        </div>

                        <!-- 회원가입 버튼 -->
                        <div class="btn-container">
                            <input type="submit" class="signUp-btn" value="회원가입" name="signup-btn">
                        </div>
                    </form>
                </div>
                <div class="signUp-img">
                    <img src="img/signup.svg">
                </div>
            </div>
            <img class="wave2" src="img/wave2.png">
        </section>
        
        <!-- script -->
        <script src="js/bundle.js"></script>
        
    </body>
</html>

