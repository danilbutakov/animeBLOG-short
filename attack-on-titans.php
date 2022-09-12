<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attack on Titans</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/blog-detail.css">
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
            <?php require_once __DIR__ . '/public/preview.php'; ?>
            <?php require_once __DIR__ . '/public/popup.php'; ?>
            <?php require_once __DIR__ . '/public/desc.php'; ?>
            <?php require_once __DIR__ . '/public/short.php'; ?>
            <?php require_once __DIR__ . '/public/comments.php'; ?>
        </main>
        <?php require_once __DIR__ . '/public/footer.php'; ?>
    </div>
    <script src="js/popup.js"></script>
    <script src="js/more.js"></script>
</body>
<script src="js/formIndex1.js"></script>

</html>