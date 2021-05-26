<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="check.php" method="post">
          <br>
          <h1>Создать аккаунт</h1>

          <input type="text" placeholder="Name" name="name" />
          <input type="email" placeholder="Email" name="username" />
          <input type="password" placeholder="Password" name="password" />
          <button type="submit">создать</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form method="post" action="sign.php">
          <img src="assets/img/shanyraq.png" alt="" width = "50">
          <br>
          <h1>Войти</h1>
          <input type="username" placeholder="Email" name="username" />
          <input type="password" placeholder="Password" name="password" />
          <a href="#">Забыл пароль?</a>
          <button type="submit">войти</button>
        </form>
      </div>

    </div>
