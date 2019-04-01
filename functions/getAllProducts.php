<?php 
  function getAllProducts() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `products`');
    $row_count = mysqli_num_rows($read);
  
    if($row_count == 0) {
      echo '<h2>В магазине пока ещё нет продуктов...</h2>';
    } else {
      showProducts($read);
    }
  
    $mysqli->close();
  }