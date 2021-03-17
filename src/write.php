<?php require 'writeCheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet"
        />
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>고객 지원</title>
    </head>
    <body class="board">
        <!-- 상단 표시줄 -->
        <?php include 'include/header_nav.php'?>

        <!-- NAVIGATION BAR -->
        <?php include 'include/nav_bar.php'?>

        <!-- SIDE MENU -->
        <div class="sidemenu">
            <ul>
                <li class="sidemenu__list"><a href="customer.php">자주묻는 질문</a></li>
                <li class="sidemenu__list sidemenu-active"><a href="#">공지사항</a></li>
            </ul>
        </div>

        <section class="board__write">
            <form class="write__container" action="writeCheck.php" method="post">
                <div class="write--id">
                    <span><?php echo $_SESSION['username']; ?></span>
                </div>
                <div class="write--pw">
                    <input type="password" name="pw" id="upw"  placeholder="비밀번호">  
                </div>
                <div class="write--title">
                    <input name="title" id="utitle" placeholder="제목" maxlength="100">
                </div>
                
                <div class="write--content">
                    <input name="content" id="ucontent" placeholder="내용">
                </div>
                <div class="write--btn">
                    <input name="create_post" type="submit" value="글작성">
                </div>
            </form>
        </section>

        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script src="js/bundle.js"></script>
    </body>
</html>
