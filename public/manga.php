<?php
$qur = "SELECT * FROM manga;";
$result = $conn->query("SELECT * FROM manga");
$res = mysqli_fetch_assoc($row);
foreach ($result as $rows) {
}
?>
<div class="blog__manga">
    <div class="manga__title"><span><?= $rows['head']; ?></span></div>
    <div class="manga__item2">
        <a href="" class="item3__link3">
            <img src="img/home/akame-small (2).png" alt="">
        </a>
        <div class="item3__info3">
            <div class="item2__title2">
                <a href="">
                    <h4><span><?= $rows['title']; ?></span></h4>
                </a>
            </div>
            <div class="item3__text3">
                <span><?= $rows['info']; ?></span>
            </div>
        </div>
    </div>
    <div class="manga__item2">
        <a href="" class="item3__link3">
            <img src="img/home/naruto-small.png" alt="">
        </a>
        <div class="item3__info3">
            <div class="item2__title2">
                <a href="">
                    <h4>Naruto Uzumaki: Hidden Village</h4>
                </a>
            </div>
            <div class="item3__text3">
                21 march 2021
            </div>
        </div>
    </div>
    <div class="manga__item2">
        <a href="" class="item3__link3">
            <img src="img/home/love-small.png" alt="">
        </a>
        <div class="item3__info3">
            <div class="item2__title2">
                <a href="">
                    <h4>Love juice Season Priemere</h4>
                </a>
            </div>
            <div class="item3__text3">
                21 march 2021
            </div>
        </div>
    </div>
    <div class="manga__item2">
        <a href="" class="item3__link3">
            <img src="img/home/love-small.png" alt="">
        </a>
        <div class="item3__info3">
            <div class="item2__title2">
                <a href="">
                    <h4>Love juice Season Priemere</h4>
                </a>
            </div>
            <div class="item3__text3">
                21 march 2021
            </div>
        </div>
    </div>
    <div class="manga__item2">
        <a href="" class="item3__link3">
            <img src="img/home/love-small.png" alt="">
        </a>
        <div class="item3__info3">
            <div class="item2__title2">
                <a href="">
                    <h4>Love juice Season Priemere</h4>
                </a>
            </div>
            <div class="item3__text3">
                21 march 2021
            </div>
        </div>
    </div>
</div>