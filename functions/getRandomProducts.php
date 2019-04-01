<?php 
  function getRandomProducts() {
    $mysqli = connectDB();
    
    $read = $mysqli->query('SELECT * FROM `products` order by RAND() limit 0,6');
    $row_count = mysqli_num_rows($read);
  
    if($row_count == 0) {
      echo '<h2>В магазине пока нет продуктов...</h2>';
    } else {
      showProducts($read);
    }

    $mysqli->close();
  }