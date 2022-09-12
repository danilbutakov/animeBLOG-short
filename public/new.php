<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>

<?php
$qur = "SELECT * FROM new;";
$result = $conn->query("SELECT * FROM new");
$res = mysqli_fetch_assoc($row);
foreach ($result as $rows) {
}
?>
<section class="new">
    <div class="new__content _container">
        <h3 class="new__title title">New & Trendly</h3>
        <div class="new__rows">
            <div class="new__row">
                <div class="row__items">
                    <a href="" class="row__img">
                        <img src="img/home/Rectangle 39.png" alt="">
                    </a>
                    <div class="row__item">
                        <div class="row__info"><span><?= $rows['info_genre']; ?></span> <span>· <?= $rows['info_date']; ?></span></div>
                        <div class="row__title"><a href="#"><span><?= $rows['title']; ?></span></a></div>
                        <div class="row__text"><span><?= $rows['descr']; ?></span></div>
                        <div class="row__under under">
                            <div class="under__read">
                                <span><?= $rows['read_info']; ?></span>
                            </div>
                            <div class="under__full">
                                <a href="attack-on-titans.php"><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new__row">
                <div class="row__items">
                    <div class="row__item">
                        <div class="row__info">Fantasy <span>· 1 Month Ago</span></div>
                        <div class="row__title"><a href="attack-on-titans.php">Attack On Titans</a></div>
                        <div class="row__text">The CSS Grid Layout Module offers a <br> grid-based layout system, with rows and <br> columns, making it easier to design web pages <br> without having to use floats and positioning.</div>
                        <div class="row__under under">
                            <div class="under__read">
                                <span>12 Min Read</span>
                            </div>
                            <div class="under__full">
                                <a href="attack-on-titans.php"><span>Read Full <img src="img/ico/arrow.png" alt=""></span></a>
                            </div>
                        </div>
                    </div>
                    <a href="attack-on-titans.php" class="row__img">
                        <img src="img/home/Rectangle 42.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>