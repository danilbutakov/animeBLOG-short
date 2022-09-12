<?php
session_start();

if (!$_SESSION['user']) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="reg">
    <form class="reg__form">
        <h1 style="margin: 15px 0 15px 0"><?= $_SESSION['user']['name'] ?></h1>
        <a href="#" style="margin: 15px 0 15px 0; text-decoration: none; color: #ffc908"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/exit.php" style="margin: 15px 0 15px 0; text-decoration: none; color: #000">Выход</a>
    </form>
</div>
</body>

</html>