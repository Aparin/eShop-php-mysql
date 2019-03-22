<?php

  $con = mysqli_connect('localhost', 'admin', '1', 'ecommerce');

  /* проверка соединения */
  if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
  }