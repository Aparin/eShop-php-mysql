<?php
  function getOS() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `os`');

    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['OS_title'];
      echo "<li><a href='#'>$brand</a></li>";
    }
     $mysqli->close();
  }