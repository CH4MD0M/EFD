<?php
    include 'controllers/authController.php'; 
    
    $bno = $_GET['idx'];
    $sql = mq("DELETE FROM board WHERE board_index='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=board.php" />
