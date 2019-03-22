<!DOCTYPE html>
<?php
  include('functions/functions.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My e-shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./styles/reset.css" media="all">
  <link rel="stylesheet" type="text/css" media="screen" href="./styles/style.css" media="all">
  
</head>
<body>
  <div class="main_wrapper">
    <div class="header_wrapper">
      <img src="images/logo.png"  >
      <img src="images/banner_w700.png" style="float: right">
    </div>
    <!-- Начало меню -->
    <div class="menubar" id="menu">
      <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Товары</a></li>
        <li><a href="#">Мой профиль</a></li>
        <li><a href="#">Войти</a></li>
        <li><a href="#">Корзина</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
      <span id="form">
        <form method="get" action="result.php" enctype="multipart/form-data">
          <input type="text" name="user_query" />
          <input type="submit" name="search" value="Искать" />
        </form>
      </span>
    </div>
    <!-- Конец меню -->

    <div class="content_wrapper">
      <div id="content_area">     
        
      </div>

      <div id="sidebar">
        <div class="sidebar_title">
          Категории:
        </div>
        <ul class="cats">
          <?php getCats(); ?>
        </ul>

        <div class="sidebar_title">
          Бренды:
        </div>
        <ul class="cats">
        <?php getBrands(); ?>
        </ul>

        <div class="sidebar_title">
          ОС:
        </div>
        <ul class="cats">
          <?php getOS(); ?>
        </ul>

      </div>
    </div>
    
    <div id="footer">&copy; This is footer</div>
  </div>
</body>
</html>