<?php

session_start();
//include_once __DIR__ . 'connect.php';
$connect = mysqli_connect("localhost", "phpadmin", "password", "anime-blog");

if (!$connect) {
    die('Error connect to DataBase');
}

$email = $_POST['email'];
$pass = md5($_POST['pass']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $user['email'],
    ];

    header("Location: ../profile.php");
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../login.php');
}
