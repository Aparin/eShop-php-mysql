<?php
function menu() {
  echo '
    <!-- Начало меню -->
    <div class="menubar" id="menu">
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="#">Товары</a></li>
        <li><a href="#">Мой профиль</a></li>
        <li><a href="#">Войти</a></li>
        <li><a href="#">Корзина</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
      <span id="form">
        <form method="get" action="result.php" enctype="multipart/form-data">
          <input type="text" name="user_query" />
          <input type="submit" name="search" value="Искать" />
        </form>
      </span>
    </div>
    <!-- Конец меню -->
  ';
}