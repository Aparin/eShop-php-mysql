<?php
   function getCats() {

    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `categories`');

    while ($row = mysqli_fetch_assoc($read)) {
      $cat = $row['cat_title'];
      $id = $row['cat_id'];
      echo "<li><a href='index.php?cat=$id'>$cat</a></li>";
    }
     $mysqli->close();
  }