<?php
require_once 'controllers/authController.php';


if(isset($_POST['create_post'])){
    $author = $_SESSION['username'];
    $userpw = $_POST['pw'];
    // password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d');

    if($userpw && $title && $content){
        $sql = mq("INSERT INTO board(board_author, board_password, board_title, board_content, board_date) VALUES ('{$author}', '{$userpw}', '{$title}', '{$content}', '{$date}')");
        

        echo $sql;
        
        echo "<script>
        alert('글쓰기가 완료되었습니다.');
        location.href='board.php';
        </script>";
    }else{
        echo "<script>
        alert('글쓰기에 실패했습니다.');
        history.back();
        </script>";
    }

}
    


?>