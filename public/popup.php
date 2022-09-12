<?php
session_start();

require_once __DIR__ . '../../vendor/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if (isset($name) && isset($email) && isset($pass)) {

    $pass = md5($pass);

    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $_SESSION['message'] = 'Email уже зарагестрирован';
        unset($_SESSION['message']);
    } else {
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$email', '$pass')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../login.php');
    }
} else {
    $_SESSION['message'] = 'Не все поля заполнены';
    unset($_SESSION['message']);
}
?>
<section class="popup" id="pop_up">
    <div class="popup__container">
        <div class="popup__body">
            <form action="/" method="post" class="js-form1" enctype="multipart/form-data" novalidate>
                <div class="form2__item">
                    <label for="" class="form__label">Name</label>
                    <input type="text" name="name" class="form__input2 js-input1" placeholder="Enter your Name" />
                </div>
                <div class="form2__item">
                    <label for="" class="form__label">Email</label>
                    <input type="email" name="email" class="form__input2 js-input1 js-input-email1" placeholder="Enter your Email" />
                </div>
                <div class="form2__item">
                    <label for="" class="form__label__password">Password</label>
                    <input type="password" name="pass" class="form__input2 js-input1 js-input-password1" placeholder="Enter your Password" />
                </div>
                <?php
                if ($_SESSION['message']) {
                    echo '<div class="form2__msg">
                    <p class="msg">' . $_SESSION['message'] . '</p>
                    </div>';
                }
                unset($_SESSION['message']);
                ?>
                <div class="form2__button1">
                    <button type="submit" name="do_signup" class="button__send1">Sign up</button>
                </div>
                <div class="form2__button1_close1">
                    <button type="submit" name="do_signup" class="button__send1">Sign up</button>
                    <button class="close__pop_up" id="close__pop_up_1">Close</button>
                </div>
            </form>
            <div class="close__popup" id="close__pop_up">&#10006</div>
        </div>
    </div>
</section>