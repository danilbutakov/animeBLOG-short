<?php

session_start();

require_once 'connect.php';

$conn = $_GET['conn'];

$query = mysqli_query($conn,"SELECT * FROM `subscribe`");

$emailSub = $_POST['email__sub'];

if ($query != '') {
    $query = "INSERT INTO subscribe VALUES ('$emailSub')";
}

