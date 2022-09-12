<?php
session_start();

include_once '../php/mysqlauthentication.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="/css/admin.css">

</head>

<body>
    <div>
        <h1>Редактирование контактной информации</h1>
        <?php if (!empty($_SESSION['login'])) : ?>

            <div class="hello"><?php echo "Добрый день, " . $_SESSION['login']; ?><br></div>
            <div class="logout"><a href="adminauth.php" style="padding: 10px 0px;">Выйти</a><br></div>
            <?php
            $query = "SELECT * FROM new";
            $row = mysqli_query($mysqli, $query);
            foreach ($row as $rows) {
            }
            ?>
            <form action="" method="post" class="admin">
                <input type="text" name="info_genre" placeholder="<?= $rows['info_genre']; ?>">
                <input type="text" name="info_date" placeholder="<?= $rows['info_date']; ?>">
                <input type="text" name="title" placeholder="<?= $rows['title']; ?>">
                <input type="text" name="descr" placeholder="<?= $rows['descr']; ?>">
                <input type="text" name="read_info" placeholder="<?= $rows['read_info']; ?>">
                <input type="submit" value="Сохранить">
            </form>
            <?php

            if ($_POST['info_genre'] != '') {
                $info_genre = $_POST['info_genre'];
            } else {
                $info_genre = $rows['info_genre'];
            }
            if ($_POST['info_date'] != '') {
                $info_date = $_POST['info_date'];
            } else {
                $info_date = $rows['info_date'];
            }
            if ($_POST['title'] != '') {
                $title = $_POST['title'];
            } else {
                $title = $rows['title'];
            }
            if ($_POST['descr'] != '') {
                $descr = $_POST['descr'];
            } else {
                $descr = $rows['descr'];
            }
            if ($_POST['read_info'] != '') {
                $read_info = $_POST['read_info'];
            } else {
                $read_info = $rows['read_info'];
            }
            if (isset($info_genre, $info_date, $title, $descr, $read_info)) {
                $row = "UPDATE new SET info_genre='$info_genre', info_date='$info_date', title='$title', descr='$descr', read_info='$read_info' WHERE id=1";
                $mysqli->query($row);
            }
            ?>
        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
    </div>
</body>

</html>