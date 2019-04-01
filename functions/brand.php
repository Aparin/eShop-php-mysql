<?php
function brand($brand_id) {
  $mysqli = connectDB();
  $read = $mysqli->query("SELECT * FROM products WHERE product_brand = '$brand_id'");
  $row_count = mysqli_num_rows($read);
  
  if($row_count == 0) {
    echo '<h2>Нет продуктов этого бренда...</h2>';
  } else {
    showProducts($read);
  }
  
  $mysqli->close();
}