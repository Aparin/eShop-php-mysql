<?php
  function search($search_query) {
    $mysqli = connectDB();

    $read = $mysqli->query("SELECT * FROM `products` where product_keywords like '%$search_query%'");

    showProducts($read);
    
    $mysqli->close();
  }