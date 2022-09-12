<?php

require_once __DIR__ . '/vendor/connect.php';
require_once __DIR__ . '/admin/logadmin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
    <h2 class="title">Вход в административную панель</h2>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="login" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <button class="btn">Войти</button>
    </form>
    <a href="index.php"><button class="btn">Выйти из админки</button></a>
</body>

</html>