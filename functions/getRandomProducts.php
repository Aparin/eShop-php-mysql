<?php 
  function getRandomProducts() {
    $mysqli = connectDB();

    $read = $mysqli->query('SELECT * FROM `products` order by RAND() limit 0,6');
    showProducts($read);

    $mysqli->close();
  }