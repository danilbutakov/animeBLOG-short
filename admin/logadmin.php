<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

if ($user['id'] > 0) {
    $_SESSION['login'] = $user['login'];
    header("Location: ../adminauth.php");
    die();
} else {
    //header("Location: http://45.144.179.146/admin.php");
}
