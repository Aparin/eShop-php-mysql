<?php
function getBrands() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `brands`');

    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['brand_title'];
      echo "<li><a href='#'>$brand</a></li>";
    }
     $mysqli->close();
  }