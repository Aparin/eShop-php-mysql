<!DOCTYPE html>
<?php
  include('functions/functions.php');
  include('areas/areas.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My e-shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./styles/style.css" media="all">
  
</head>
<body>
  <div class="main_wrapper">
    <?php 
      head();
      menu(); 
    ?>
    <div class="content_wrapper">
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
      </div>
      <div id="content_area">     
        <div id="infoPanel">
          <span style="float: right;">Здравствуйте, Гость. Товаров: Сумма: <a href="cart.php">Перейти в корзину</a></span>
        </div>
        <div class="products_box">
          <?php 
            getAllProducts();
          ?>
        </div>
      </div>
      <div id="right_sidebar"></div>
    </div>
    
    <div id="footer">&copy; This is footer</div>
  </div>
</body>
</html>