<?php require_once 'controllers/authController.php'; ?>
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
    <body class="post">
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

        <!-- HEADER -->
        <header class="post__header"></header>

        <!-- CONTENT -->
        <main class="post__content customer__main">
            <h1 class="board__title">공지사항</h1>
            <table class="table">
                <thead class="table__head">
                    <tr>
                        <th nowrap>번호</th>
                        <th nowrap>제목</th>
                        <th nowrap>글쓴이</th>
                        <th nowrap>작성일</th>
                        <th nowrap>조회수</th>
                    </tr>
                </thead>
                <?php
                    $query = "SELECT * FROM board ORDER BY board_index DESC LIMIT 0,5"; 
                    $select_all_posts_query = mysqli_query($conn, $query);

                    while($board = mysqli_fetch_assoc($select_all_posts_query)){
                        // title변수에 DB에서 가져온 title을 선택
                        $title = $board["board_title"]; 
                        if(strlen($title)>30){ 
                            // title이 30을 넘어서면 ...표시
                            $title = str_replace($board["board_title"], mb_substr($board["board_title"],0,30,"utf-8")."...",$board["board_title"]);
                        }
                ?>
                        <tbody class="table__body">
                            <tr>
                                <td><?php echo $board['board_index']; ?></td>
                                <td><a href="read.php?idx=<?php echo $board['board_index'];?>"><?php echo $title;?></a></td>
                                <td><?php echo $board['board_author']?></td>
                                <td><?php echo $board['board_date']?></td>
                                <td><?php echo $board['hit']; ?></td>
                            </tr>
                        </tbody>
              <?php } ?>
            </table>
            <?php 
                if (!isset($_SESSION['username']) || !isset($_SESSION['id'])){ ?>
            <?php
                } else{ ?>
                        <div id="write_btn">
                            <a href="write.php"><button>글쓰기</button></a>
                        </div>
            <?php
                }?>
            
            
        </main>

        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script src="js/bundle.js"></script>
    </body>
</html>
