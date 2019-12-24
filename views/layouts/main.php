<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="animsition">
<?php $this->beginBody() ?>
<header class="main-header">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="../img/logo.png" alt="logo"></a>
        </div>

        <div class="menu">
            <!-- desktop navbar -->
            <nav class="desktop-nav">
                <ul class="first-level">
                    <li><a href="/" class="animsition-link">Главная</a></li>
                    <li><a href="/about" class="animsition-link">Почему мы</a></li>
                    <li><a href="/service" class="animsition-link">Услуги</a></li>
                    <li><a href="/portfolio" class="animsition-link">Портфолио</a></li>
<!--                    <li><a href="">portfolio</a>-->
<!--                        <ul class="second-level">-->
<!--                            <li><a href="portfolio-1.html" class="animsition-link">portfolio list</a></li>-->
<!--                            <li><a href="single-project.html" class="animsition-link">single project 1</a></li>-->
<!--                            <li><a href="single-project-2.html" class="animsition-link">single project 2</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="">blog</a>-->
<!--                        <ul class="second-level">-->
<!--                            <li><a href="blog-1.html" class="animsition-link">posts list</a></li>-->
<!--                            <li><a href="single-post.html" class="animsition-link">single post</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="/contact" class="animsition-link">Контакты</a></li>
                </ul>
            </nav>
            <!-- mobile navbar -->
            <nav class="mobile-nav"></nav>
            <div class="menu-icon">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</header>


<?= $content ?>


<!-- FOOTER -->
<footer class="main-footer wow fadeInUp">
    <div class="container">
        <div class="col-md-8 col-sm-12">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="/" class="animsition-link link">Главная</a></li>
                        <li><a href="about.html" class="animsition-link link">about us</a></li>
                        <li><a href="services.html" class="animsition-link link">services</a></li>
                        <li><a href="portfolio-1.html" class="animsition-link link">portfolio</a></li>
                        <li><a href="blog-1.html" class="animsition-link link">blog</a></li>
                        <li><a href=".contact" class="animsition-link link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="col-md-4 col-sm-12" style="text-align:right">
            <div class="row">
                <div class="uppercase gray-text">
                    created by OI
                </div>
                <ul class="social-icons" style="margin-top:30px;float:right">
                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>

<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        new WOW().init();

        // initialise flexslider
        $('.site-hero').flexslider({
            animation: "fade",
            directionNav: false,
            controlNav: false,
            keyboardNav: true,
            slideToStart: 0,
            animationLoop: true,
            pauseOnHover: false,
            slideshowSpeed: 4000,
        });


        // initialize isotope
        var $container = $('.portfolio_container');
        $container.isotope({
            filter: '*',
        });

        $('.portfolio_filter a').click(function(){
            $('.portfolio_filter .active').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    animationEngine : "jquery"
                }
            });
            return false;
        });
    });
</script>

<script type="text/javascript">
    // initialize google maps
    google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(50.45466, 30.5238), // Kyiv
            scrollwheel: false,
            styles:[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };

        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            icon: 'assets/img/map.png',
            title: 'Find us here!'
        });
    }
    $(window).load(function(){
        new WOW().init();
        $("#map").css("height",$("#map").parent().parent().height() + "px");
    });
</script>

<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        new WOW().init();
        // initialize flexslider
        $('.project_images').flexslider({
            directionNav : false,
            controlNav : false
        });

        // initialize social buttons
        $("[data-social]").socialButtons();
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new Cocoen();
    });
</script>

</body>
</html>
<?php $this->endPage() ?>
