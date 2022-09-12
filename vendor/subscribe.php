<?php

$conn = mysqli_connect("localhost", "root", "", "anime-blog");

if (!$conn) {
    die('Error connect to DataBase');
}

$query = mysqli_query($conn,"SELECT * FROM `subscribe`");

$emailSub = $_REQUEST['email__sub'];

if (isset($query)) {
    $query = "INSERT INTO subscribe VALUES ('$emailSub')";
}

