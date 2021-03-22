<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <title>게시판</title>
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
                <li class="sidemenu__list sidemenu-active"><a href="board.php">공지사항</a></li>
            </ul>
        </div>

        <?php
            $bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
            $hit = mysqli_fetch_array(mq("SELECT * FROM board WHERE board_index ='".$bno."'"));
            $hit = $hit['hit'] + 1;
            $fet = mq("UPDATE board SET hit = '".$hit."' WHERE board_index = '".$bno."'");
            $sql = mq("SELECT * FROM board WHERE board_index = '".$bno."'"); /* 받아온 idx값을 선택 */
            $board = $sql->fetch_array();
        ?>
        <!-- READ SECTION -->
        <section class="board__read">
            
            <!-- title -->
            <div class="read__title">
                <p><?php echo $board['board_title']; ?></p>
            </div>

            <!-- info -->
            <div class="read__info">
                <span class="info--name">
                    <svg class="info-icon">
                        <use xlink:href="img/sprite.svg#icon-user"></use>
                    </svg>
                    <?php echo $board['board_author']; ?>
                </span>
                <span class="info--date">
                    <svg class="info-icon">
                        <use xlink:href="img/sprite.svg#icon-clock"></use>
                    </svg>
                    <?php echo $board['board_date']; ?>
                </span>
                <span class="info--hit">
                    <svg class="info-icon">
                        <use xlink:href="img/sprite.svg#icon-eye"></use>
                    </svg>
                    <?php echo $board['hit']; ?>
                </span>
            </div> 

            <!-- content -->
			<div class="read__content">
				<?php echo nl2br("$board[board_content]"); ?>
			</div>
 
            <!-- 목록 -->
            <div class="read__menu">
                
                <button class="read-btn">   
                    <a href="board.php">목록</a>
                </button>
                <!-- <li><a href="modify.php?idx=<?php echo $board['board_index']; ?>">[수정]</a></li>
                <li><a href="delete.php?idx=<?php echo $board['board_index']; ?>">[삭제]</a></li> -->
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script src="js/bundle.js"></script>
    </body>
</html>
