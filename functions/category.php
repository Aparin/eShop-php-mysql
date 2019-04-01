<?php
function category($cat_id) {
  $mysqli = connectDB();
  $read = $mysqli->query("SELECT * FROM products WHERE product_cat = '$cat_id'");
  $row_count = mysqli_num_rows($read);
  
  if($row_count == 0) {
    echo '<h2>Нет продуктов в этой категории...</h2>';
  } else {
    showProducts($read);
  }

  $mysqli->close();
}