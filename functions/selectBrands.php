<?php
    function selectBrands() {
      $mysqli = connectDB();
      $read = $mysqli->query('SELECT * FROM `brands`');
  
      while ($row = mysqli_fetch_assoc($read)) {
        $brand = $row['brand_title'];
        echo "<option>$brand</option>";
      }
       $mysqli->close();
    }