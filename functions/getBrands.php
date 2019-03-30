<?php
function getBrands() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `brands`');

    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['brand_title'];
      $id = $row['brand_id'];
      echo "<li><a href='index.php?brand=$id'>$brand</a></li>";
    }
     $mysqli->close();
  }