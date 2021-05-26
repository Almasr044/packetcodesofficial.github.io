<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <!-- <meta charset="utf-8"> -->
    <title>Профиль</title>
  </head>
  <body>
    Добро пожаловать!, <span class="email"><?= $_SESSION['username']?></span>
    <a href="contact.php">Добавить номер</a>
    <a href="show.php">Посмотреть контакты</a>
<a href="logout.php">Выход</a>
  </body>
</html>
