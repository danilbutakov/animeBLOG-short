<?php

session_start();

include_once 'connect.php';
// $connect = mysqli_connect('localhost', 'phpadmin', 'password', 'anime-blog');

$conn = $_GET['conn'];

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass_confirm = $_POST['pass_confirm'];

if ($pass === $pass_confirm) {

    $pass = md5($pass);

    mysqli_query($conn, "INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$email', '$pass')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../login.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
}
