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
        <h1>Редактирование информации о манге</h1>
        <?php if (!empty($_SESSION['login'])) : ?>

            <div class="hello"><?php echo "Добрый день, " . $_SESSION['login']; ?><br></div>
            <div class="logout"><a href="adminauth.php" style="padding: 10px 0px;">Выйти</a><br></div>
            <?php
            $query = "SELECT * FROM manga";
            $row = mysqli_query($mysqli, $query);
            foreach ($row as $rows) {
            }
            ?>
            <form action="" method="post" class="admin">
                <input type="text" name="head" placeholder="<?= $rows['head']; ?>">
                <input type="text" name="title" placeholder="<?= $rows['title']; ?>">
                <input type="text" name="info" placeholder="<?= $rows['info']; ?>">
                <input type="submit" value="Сохранить">
            </form>
            <?php

            if ($_POST['head'] != '') {
                $head = $_POST['head'];
            } else {
                $head = $rows['head'];
            }
            if ($_POST['title'] != '') {
                $title = $_POST['title'];
            } else {
                $title = $rows['title'];
            }
            if ($_POST['info'] != '') {
                $info = $_POST['info'];
            } else {
                $info = $rows['info'];
            }
            if (isset($head, $title, $info)) {
                $row = "UPDATE manga SET head='$head', title='$title', info='$info' WHERE id=1";
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