<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="navigation__header">
      <div class="naivgation__container">
        <input type="checkbox" name="" id="check" />

        <!-- 로고 -->
        <div class="logo-container">
          <a href="index.php" class="logo">EFD<span>Korea</span></a>
        </div>

        <!-- 메뉴 -->
        <nav class="nav-container">
          <div class="nav-links">
            <ul class="nav-ul">
              <!-- 교육안내 -->
              <li class="nav-link" style="--i: 0.85s">
                <a href="#">교육안내</a>
                <!-- dropdown -->
                <div class="dropdown">
                  <ul class="dropdown-ul">
                    <li class="dropdown-link">
                      <a href="info.php">초등부 과정</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="info2.php">중등부 과정</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="info3.php">고등부 과정</a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- 교육자료 소개 -->
              <li class="nav-link" style="--i: 1.1s">
                <a href="#">교육자료 소개</a>
                <!-- dropdown -->
                <div class="dropdown">
                  <ul class="dropdown-ul">
                    <li class="dropdown-link">
                      <a href="intro.php">Elementary</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="intro2.php">Middle</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="intro3.php">High</a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- 고객 지원 -->
              <li class="nav-link" style="--i: 1.35s">
                <a href="#">고객 지원</a>
                <!-- dropdown -->
                <div class="dropdown">
                  <ul class="dropdown-ul">
                    <li class="dropdown-link">
                      <a href="customer.php">자주묻는 질문</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="board.php">공지사항</a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- My class -->
              <li class="nav-link" style="--i: 1.6s">
                <a href="#">My class</a>
              </li>

              <!-- 로그인 -->
              <li class="nav-link">
                <?php 
                    if(isset($_SESSION['id']) && $_SESSION['verified']){ ?>
                <a href="#" class="username">
                  <?php echo $_SESSION['username']; ?>
                  님
                </a>
                <?php
                    } else { ?>
                <a href="signin.php">
                  <span> 로그인 </span>
                </a>
                <?php     
                    }?>
              </li>
            </ul>
          </div>
        </nav>

        <div class="hamburger-menu-container">
          <div class="hamburger-menu">
            <div></div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
