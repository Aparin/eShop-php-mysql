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