<?php
   function getCats() {

    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `categories`');

    while ($row = mysqli_fetch_assoc($read)) {
      $cat = $row['cat_title'];
      echo "<li><a href='#'>$cat</a></li>";
    }
     $mysqli->close();
  }