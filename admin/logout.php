<?php
session_start();
unset($_SESSION['login']);
header('Location: localhost/admin.php');
