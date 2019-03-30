<?php 
   function product($id) {
    $mysqli = connectDB();
    $read = $mysqli->query("SELECT * FROM `products` WHERE product_id='$id'");

    while ($row = mysqli_fetch_assoc($read)) {
      $id = $row['product_id'];
      $title = $row['product_title'];
      $price = $row['product_price'];
      $image = $row['product_image'];
      $desc = $row['product_desc'];
      echo "
        <div class='product'>
          <h2 class='cardTitle'>$title</h2>
          <img class='product' src='admin_area/product_images/$image' />         
        </div>
        <p class='price'>Цена: $price руб.</p>
        <div class='desc'>$desc</div>
        <a href='index.php'><button class='more'>На главную</button></a>
        <a href='index.php?id=$id' class='addToCart'>
          <button class='addToCard'>Добавить в корзину</button>
        </a>  
      ";    
    }
     $mysqli->close();
  }