<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <?php 
            if (!isset($_SESSION['username']) || !isset($_SESSION['id'])){ ?>
                <div class="header_nav"></div>
        <?php
            } else{ ?>
                <div class="header_nav">
                    <a href="index.php?logout=1" class="header__logout">로그아웃</a>
                </div> 
        <?php
            }?>
    </body>
</html>
