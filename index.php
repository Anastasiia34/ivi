<?php
$spoPrefix = "ivi";
$title = "ivi kids";
$spoPath = "spo/2019/ivi";
$htmlClass = "";
$bodyClass = "bb-adaptive";
$css = array(
	"/$spoPath/css/style.css",
    "/$spoPath/css/assets/owl.carousel.css",
    "/$spoPath/css/assets/materialize.min.css"
);
$script = array(
	"/$spoPath/js/respond.min.js",
    "/$spoPath/js/modernizr.min.js",
//	"/$spoPath/js/current-device.min.js",
//  "/$spoPath/js/maskedinput.js",
    "/$spoPath/js/perfect-scrollbar.jquery.js",
	"/$spoPath/js/owl.carousel.min.js",
	"/$spoPath/js/wow.min.js",
);
include($_SERVER['DOCUMENT_ROOT']."/core/includes/headers.php") ?>

    <!-- -->
<?php include($_SERVER['DOCUMENT_ROOT']."/core/includes/header/2019.php") ?>
    <!-- -->

<section class="<?php echo $spoPrefix ?>-main">

        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/banner.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/king.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/dragon.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/fairy.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/diamonds.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/coach.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/watch.php") ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/elements/modals.php") ?>

</section>

</body>
</html>
