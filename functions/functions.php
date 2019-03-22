<?php
  function connectDB() {
    $mysqli = new mysqli('localhost', 'admin', '1', 'ecommerce'); // адрес бд, логин, пароль, название бд

    if(mysqli_connect_error()) {
      printf('Соединение не установлено', mysqli_connect_error());
      exit(); 
    }
    $mysqli->set_charset("utf8");

    return $mysqli;
  }

  function getCats() {

    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `categories`');

    while ($row = mysqli_fetch_assoc($read)) {
      $cat = $row['cat_title'];
      echo "<li><a href='#'>$cat</a></li>";
    }
     $mysqli->close();
  }

  function getBrands() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `brands`');

    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['brand_title'];
      echo "<li><a href='#'>$brand</a></li>";
    }
     $mysqli->close();
  }

  function getOS() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `os`');

    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['OS_title'];
      echo "<li><a href='#'>$brand</a></li>";
    }
     $mysqli->close();
  }
  function selectCats() {

    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `categories`');

    while ($row = mysqli_fetch_assoc($read)) {
      $cat = $row['cat_title'];
      echo "<option>$cat</option>";
    }
     $mysqli->close();
  }
  function selectBrands() {
    $mysqli = connectDB();
    $read = $mysqli->query('SELECT * FROM `brands`');

    while ($row = mysqli_fetch_assoc($read)) {
      $brand = $row['brand_title'];
      echo "<option>$brand</option>";
    }
     $mysqli->close();
  }