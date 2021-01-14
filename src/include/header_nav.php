<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="header_nav">
            <?php 
                if ((isset($_SESSION['username']) || isset($_SESSION['id'])) && $_SESSION['verified']){ ?>
            <a href="#" class="header__link user-info">
                <svg class="header__icon">
                    <use xlink:href="img/sprite.svg#icon-lock"></use>
                </svg>
                <span>내정보</span>
            </a>
            <a href="index.php?logout=1" class="header__link logout"><span>로그아웃</span></a>
            <?php
                } else if(!$_SESSION['verified']){?>
            <div></div>
            <?php
                }?>
        </div>
    </body>
</html>
