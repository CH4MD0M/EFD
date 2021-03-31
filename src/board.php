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

                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    } else{
                        $page = 1;
                    }

                    $sql = mq("SELECT * FROM board");
                    $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
                    $list = 10; //한 페이지에 보여줄 개수
                    $block_ct = 10; //블록당 보여줄 페이지 개수

                    $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
                    $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
                    $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

                    $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
                    if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
                    $total_block = ceil($total_page/$block_ct); //블럭 총 개수
                    $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.


                    $query = "SELECT * FROM board ORDER BY board_index DESC LIMIT $start_num, $list"; 
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

            
            <!-- 글쓰기 버튼 -->
            <div class="list__menu">
                <!-- 페이지 넘버 -->
                <div class="page_num">
                    <ul>
                        <?php
                        if($page <= 1)
                        { //만약 page가 1보다 크거나 같다면
                            echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
                        }else{
                            echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
                        }
                        if($page <= 1)
                        { //만약 page가 1보다 크거나 같다면 빈값
                            
                        }else{
                        $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
                            echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
                        }
                        for($i=$block_start; $i<=$block_end; $i++){ 
                            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
                            if($page == $i){ //만약 page가 $i와 같다면 
                            echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
                            }else{
                            echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
                            }
                        }
                        if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
                        }else{
                            $next = $page + 1; //next변수에 page + 1을 해준다.
                            echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
                        }
                        if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
                            echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
                        }else{
                            echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
                        }
                        ?>
                    </ul>
                </div>
            <?php 
                if ($_SESSION['isadmin']===1){ ?>
                    <button class="list-btn board-btn">
                        <a href="write.php">글쓰기</a>
                    </button>
                <?php
                    } else{ ?>
                    
                <?php
                    }?>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="footer" id="footer"></footer>
        <script src="js/bundle.js"></script>
    </body>
</html>

