<?php
function category($cat_id) {
  $mysqli = connectDB();
  $read = $mysqli->query("SELECT * FROM products WHERE product_cat = '$cat_id'");
  $row_count = mysqli_num_rows($read);
  if($row_count == 0) {
    echo '<h2>Нет продуктов в этой категории...</h2>';
  }
  while ($row = mysqli_fetch_assoc($read)) {
    $id = $row['product_id'];
    $cat = $row['product_cat'];
    $brand = $row['product_brand'];
    $title = $row['product_title'];
    $price = $row['product_price'];
    $image = $row['product_image'];
    echo "
      <div class='single_product'>
        <h2 class='cardTitle'>$title</h2>
        <img class='single_product' src='admin_area/product_images/$image' />
        <p class='price'>$price</p>
        <a href='details.php?id=$id'><button class='more'>Подробнее</button></a>
        <a href='index.php?id=$id' class='addToCart'>
          <button class='addToCard'>Добавить в корзину</button>
        </a>
        
      </div>
    ";    
  }
   $mysqli->close();
}