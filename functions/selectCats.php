<?php
  function selectCats() {

  $mysqli = connectDB();
  $read = $mysqli->query('SELECT * FROM `categories`');

  while ($row = mysqli_fetch_assoc($read)) {
    $cat = $row['cat_title'];
    echo "<option>$cat</option>";
  }
  $mysqli->close();
  }