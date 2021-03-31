<?php require_once 'controllers/authController.php';

    $bno = $_GET['idx']; 
    $sql = mq("SELECT * FROM board WHERE board_index ='$bno';");
    $board = $sql->fetch_array();
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
        <title>글 수정</title>
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

        <!-- WRITE SECTION -->
        <section class="board__write">
            <form class="write__container" action="modifyCheck.php?idx=<?php echo $bno; ?>" method="post">
                <?php 
                    $query = "SELECT * FROM board WHERE board_index = $bno"; 
                    $select_all_posts_query = mysqli_query($conn, $query);

                    while($board = mysqli_fetch_assoc($select_all_posts_query)) { ?>
                        <div class="write__id">
                            <span><?php echo $board['board_author']; ?></span>
                        </div>

                        <div class="write__pw">
                            <input type="password" name="pw" id="upw"  placeholder="비밀번호">
                        </div>

                        <div class="write__title">
                            <input name="title" id="utitle" placeholder="제목" maxlength="100" value="<?php echo $board['board_title']; ?>">
                        </div>
                        
                        <div class="write__content">
                            <textarea name="content" id="ucontent" placeholder="내용">
                                <?php echo $board['board_content']; ?>
                            </textarea>
                        </div>

                        <div class="write-btn board-btn">
                            <input name="create_post" type="submit" value="글작성">
                        </div>
                  
                  <?php  
                  }
                    ?>
            </form>
        </section>

        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script src="js/bundle.js"></script>
    </body>
</html>

