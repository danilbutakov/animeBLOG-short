<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div style="padding-top: 100px;">

        <?php if (!empty($_SESSION['login'])) : ?>

            <div class="hello"><?php echo "Добрый день, " . $_SESSION['login']; ?><br></div>
            <div class="logout"><a href="logout.php" style="padding: 10px 0px;">Выйти</a><br></div>
            <div class="section">
                <a href="new.php">New</a>
                <a href="#">Trending</a>
                <a href="manga.php">Manga</a>
            </div>
        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
    </div>
</body>

</html>