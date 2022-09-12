<?php

$conn = mysqli_connect("localhost", "phpadmin", "password", "anime-blog");

$_SESSION['$conn'] = $conn;

if (!$conn) {
    die('Error connect to DataBase');
}
