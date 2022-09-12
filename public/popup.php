<section class="popup" id="pop_up">
    <div class="popup__container">
        <div class="popup__body">
            <form action="../php/registration.php" method="post" class="js-form1" enctype="multipart/form-data" novalidate>
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
                <div class="form2__item">
                    <label for="" class="form__label__password">Confirm password</label>
                    <input type="password" name="pass_confirm" class="form__input2 js-input1 js-input-password1" placeholder="Confirm your Password" />
                </div>
                <div class="form2__button1">
                    <button type="submit" name="do_signup" class="button__send1">Sign up</button>
                </div>
                <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
                <div class="form2__button1_close1">
                    <button type="submit" name="do_signup" class="button__send1">Sign up</button>
                    <button class="close__pop_up" id="close__pop_up_1">Close</button>
                </div>
            </form>
            <div class="close__popup" id="close__pop_up">&#10006</div>
        </div>
    </div>
</section>