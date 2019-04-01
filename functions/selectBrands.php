<?php
  function selectBrands() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `brands`');
  
    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['brand_title'];
      $id = $row['brand_id'];
      echo "<option value='$id'>$brand</option>";
    }

    $mysqli->close();
  }