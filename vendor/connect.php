<?php

$conn = mysqli_connect("localhost", "phpadmin", "password", "anime-blog");

if (!$conn) {
    die('Error connect to DataBase');
}
