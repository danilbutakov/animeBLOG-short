<?php
session_start();

if ($_SESSION['user']) {
    header("Location: /");
}

include_once 'vendor/connect.php';

// require_once __DIR__ . '/vendor/subscribe.php';

require_once __DIR__ . '/vendor/registration.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . '/public/meta.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home-page.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script src="slick/slick.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php require_once __DIR__ . '/public/header.php'; ?>
        <main class="page">
            <section class="welcome">
                <div class="welcome__content">
                    <div class="content__info">
                        <div class="content__title">Welcome to <br> Gates</div>
                        <div class="content__text">Get the latest news on your favourite mangas, anime and <br> manhwa around the world!</div>
                        <div class="content__form form">
                            <form action="php/subscribe.php" method="post" class="js-form2" novalidate>
                                <button class="form__button" type="submit" name="submit">SUBSCRIBE</button>
                                <input type="email" name="email__sub" class="form__input js-input2 js-input-email2" placeholder="Enter your email">
                                <button class="form__ico" type="submit" name="submit"><img src="img/ico/Group 4.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                    <div class="content__category">
                        <ul class="content__item">
                            <li><a href="" class="content__link">Action</a></li>
                            <li><a href="" class="content__link">Comedy</a></li>
                            <li><a href="" class="content__link">Drama</a></li>
                            <li><a href="" class="content__link">Military</a></li>
                            <li><a href="" class="content__link">Fantasy</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <?php require_once __DIR__ . '/public/popup.php'; ?>
            <?php require_once __DIR__ . '/public/new.php'; ?>
            <?php require_once __DIR__ . '/public/trend.php'; ?>
            <?php require_once __DIR__ . '/public/short.php'; ?>
            <?php require_once __DIR__ . '/public/blog.php'; ?>
        </main>
        <?php require_once __DIR__ . '/public/footer.php'; ?>
    </div>
    <script src="js/popup.js"></script>
</body>
<script src="js/formIndex1.js"></script>
<script src="js/formIndex2.js"></script>
<script src="js/formIndex3.js"></script>

</html>