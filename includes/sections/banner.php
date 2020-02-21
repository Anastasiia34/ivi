<section class="<?php echo $spoPrefix ?>-banner">
    <div class="<?php echo $spoPrefix ?>-container">
        <div class="ivi-wrapper">
            <a href="#" class="logo"><img src="/<?= $spoPath ?>/src/images/logo.svg"></a>
            <h1>Срочное послание
                из королевства познавательных мультиков ivi kids!</h1>
            <a href="#king" class="blue-btn">Читать без промедления</a>
            <div class="app-block">
                <p>Скачать приложение ivi kids:</p>
                <div class="row">
                    <a href="#"><img src="/<?= $spoPath ?>/src/images/google-play.svg"></a>
                    <a href="#"><img src="/<?= $spoPath ?>/src/images/app-store.svg"></a>
                </div>
            </div>
        </div>
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
    <div class="bird-block bird-block4">
        <div class="bird-wrapper">
            <div class="bird">
                <img src="/<?= $spoPath ?>/src/images/wing1.svg" class="wing1">
                <img src="/<?= $spoPath ?>/src/images/wing2.svg" class="wing2">
                <img src="/<?= $spoPath ?>/src/images/bird.svg" class="bird-body">
            </div>
        </div>
    </div>
</section>
<script>
    $(".bird-block").click(function(){
        $(this).addClass('clicked')
    })
</script>