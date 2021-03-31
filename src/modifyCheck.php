<?php
include 'controllers/authController.php'; 

    $bno = $_GET['idx'];
    $author = $_SESSION['username'];
    $userpw = $_POST['pw'];
    // password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = mq("UPDATE board SET board_author='".$author."',board_password='".$userpw."',board_title='".$title."',board_content='".$content."' WHERE board_index='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?idx=<?php echo $bno; ?>">

