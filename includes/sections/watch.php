<section class="<?php echo $spoPrefix ?>-watch">
    <div class="<?php echo $spoPrefix ?>-container">
        <a href="#" class="logo"><img src="/<?= $spoPath ?>/src/images/logo.svg"></a>
        <h1>Скачивайте ivi kids — смотрите <br>
            правильные мультики</h1>
        <div class="owl-carousel video">
            <div class="item">
                <iframe src="https://www.youtube.com/embed/f6uNckdMRZg" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    wmode="Opaque"></iframe>
                <div class="vid-overlay"></div>
            </div>
            <div class="item">
                <iframe src="https://www.youtube.com/embed/oyDMkTs6zXQ" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    wmode="Opaque"></iframe>
                <div class="vid-overlay"></div>
            </div>
            <div class="item">
                <iframe src="https://www.youtube.com/embed/6bacZ5qRziw" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    wmode="Opaque"></iframe>
                <div class="vid-overlay"></div>
            </div>
        </div>
        <h2>Мамы доверяют!</h2>
        <div class="owl-carousel review">
            <div class="item item1">
                <a href="https://www.babyblog.ru/user/Oksana250503/3152307">
                    <img src="/<?= $spoPath ?>/src/images/ava1.png" alt="" class="ava">
                </a>
                <div class="text">Мультфильм, мультфильм, да здравствует мультфильм! О, да, мультики в нашей семье очень уважают.</div>
                <div class="blue-btn">Читать отзыв</div>
            </div>
            <div class="item item2">
                <a href="https://www.babyblog.ru/user/id1932871/1021183">
                    <img src="/<?= $spoPath ?>/src/images/ava2.png" alt="" class="ava">
                </a>
                <div class="text">Ваши дети любят мультики? А вы? Признавайтесь!)</div>
                <div class="blue-btn">Читать отзыв</div>
            </div>
            <div class="item item3">
                <a href="https://www.babyblog.ru/user/Zimina-foto/3247259">
                    <img src="/<?= $spoPath ?>/src/images/ava3.png" alt="" class="ava">
                </a>
                <div class="text">Честно признаюсь, мультфильмы для детей в нашей семье - явление не очень регулярное. За обеденный стол с планшетом мы никогда не садимся, с этим строго.</div>
                <div class="blue-btn">Читать отзыв</div>
            </div>
        </div>
        <div class="app-block">
            <p>Скачать приложение ivi kids:</p>
            <div class="row">
                <a href="#"><img src="/<?= $spoPath ?>/src/images/google-play.svg"></a>
                <a href="#"><img src="/<?= $spoPath ?>/src/images/app-store.svg"></a>
            </div>
        </div>
        <div class="sharing">
            <h3>Поделитесь с подругами!</h3>
            <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/common/sharing.php") ?>
        </div>
        <div class="bird-block bird-block1">
            <div class="bird-wrapper">
                <div class="bird">
                    <img src="/<?= $spoPath ?>/src/images/wing1.svg" class="wing1">
                    <img src="/<?= $spoPath ?>/src/images/wing2.svg" class="wing2">
                    <img src="/<?= $spoPath ?>/src/images/bird.svg" class="bird-body">
                </div>
            </div>
        </div>
        <div class="bird-block bird-block2">
            <div class="bird-wrapper">
                <div class="bird">
                    <img src="/<?= $spoPath ?>/src/images/wing1.svg" class="wing1">
                    <img src="/<?= $spoPath ?>/src/images/wing2.svg" class="wing2">
                    <img src="/<?= $spoPath ?>/src/images/bird.svg" class="bird-body">
                </div>
            </div>
        </div>
        <div class="bird-block bird-block3">
            <div class="bird-wrapper">
                <div class="bird">
                    <img src="/<?= $spoPath ?>/src/images/wing1.svg" class="wing1">
                    <img src="/<?= $spoPath ?>/src/images/wing2.svg" class="wing2">
                    <img src="/<?= $spoPath ?>/src/images/bird.svg" class="bird-body">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $(".owl-carousel.video").owlCarousel({
            items: 3,
            center: true,
            loop: true,
            autoWidth: true,
            nav: true,
            navText: ["<img src='/<?= $spoPath ?>/src/images/arrow-left.svg'>","<img src='/<?= $spoPath ?>/src/images/arrow-right.svg'>"]
        });
        $(".owl-carousel.review").owlCarousel({
            responsive:{
                0:{
                    items:1,
                    dots: false,
                    nav:true,
                    navText: ["<img src='/<?= $spoPath ?>/src/images/arrow-left.svg'>","<img src='/<?= $spoPath ?>/src/images/arrow-right.svg'>"]
                },
                700:{
                    items:2,
                    nav: true,
                    navText: ["<img src='/<?= $spoPath ?>/src/images/arrow-left.svg'>","<img src='/<?= $spoPath ?>/src/images/arrow-right.svg'>"]
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    });
</script>