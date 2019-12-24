<?php

/* @var $this yii\web\View */
/* @var $categories */
/* @var $projects */

$this->title = 'Kievflower dream - свадебное агенство';
?>
<!-- HERO SECTION  -->
<div class="site-hero">
    <ul class="slides">
        <li>
            <div><span class="small-title uppercase montserrat-text">we're</span></div>
            <div class="big-title uppercase montserrat-text">Свадебное агенство</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </li>
<!--        <li>-->
<!--            <div><span class="small-title uppercase montserrat-text">we do</span></div>-->
<!--            <div class="big-title uppercase montserrat-text">Букет невесты</div>-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
<!--                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,-->
<!--                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
<!--                consequat. </p>-->
<!--        </li>-->
    </ul>
</div>

<!-- HISTORY OF AGENCY -->
<div class="container">
    <div class="agency">
        <div class="col-md-5 col-sm-12">
            <div class="row">
                <img src="../img/topMain.jpg" alt="image">
            </div>
        </div>
        <div class="col-md-offset-1 col-md-6 col-sm-12">
            <div class="row">
                <div class="section-title">
                    <span>Kievflower dream</span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor nisi ut aliquip ex ea commodo
                    consequat. in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
                <a href="/about" class="btn green" style="float:right;margin-top:30px"><span>read more</span></a>
            </div>
        </div>
    </div>
</div>


<!-- WHY CHOOSE US -->
<section class="services">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <span>Почему выбирают нас</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <div class="col-md-7 col-sm-12 services-left wow fadeInUp">
            <div class="row" style="margin-bottom:50px">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
<!--                        <i class="icon ion-ios-infinite-outline"></i>-->
                        <span class="montserrat-text uppercase service-title">МЫ СОЗДАЕМ КАЧЕСТВЕННЫЙ ПРОДУКТ</span>
                        <ul>
                            <li>branding</li>
                            <li>design &amp; copywriting</li>
                            <li>concept development</li>
                            <li>user experience</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
<!--                        <i class="icon ion-ios-shuffle"></i>-->
                        <span class="montserrat-text uppercase service-title">НАША МИССИЯ</span>
                        <ul>
                            <li>branding</li>
                            <li>design &amp; copywriting</li>
                            <li>concept development</li>
                            <li>user experience</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
<!--                        <i class="icon ion-ios-cart-outline"></i>-->
                        <span class="montserrat-text uppercase service-title">МЫ УВЕРЕНЫ</span>
                        <ul>
                            <li>branding</li>
                            <li>design &amp; copywriting</li>
                            <li>concept development</li>
                            <li>user experience</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
<!--                        <i class="icon ion-ios-settings"></i>-->
                        <span class="montserrat-text uppercase service-title">МЫ МОЛОДЦЫ</span>
                        <ul>
                            <li>branding</li>
                            <li>design &amp; copywriting</li>
                            <li>concept development</li>
                            <li>user experience</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-sm-12 services-right wow fadeInUp" data-wow-delay=".1s">
            <div class="row">
                <img src="../img/whyWe.jpg" alt="image">
            </div>
        </div>

    </div>
</section>


<!-- PORTFOLIO -->
<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <span>Наши проекты</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>


        <!-- categories  -->
        <div class="col-md-3">
            <div class="row categories-grid wow fadeInLeft">
                <span class="montserrat-text uppercase">choose category</span>

                <nav class="categories">
                    <ul class="portfolio_filter">
                        <li><a href="" class="active" data-filter="*">all</a></li>
                        <?php
                        foreach ($categories as $item) {
                            ?>
                            <li><a href="" data-filter=".cat<?=$item['id']?>"><?=$item['name']?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- all works -->
        <div class="col-md-9">
            <div class="row portfolio_container">
                <!-- single work -->

                <?php
                foreach ($projects as $item) {
                ?>
                <div class="col-md-4 cat<?=$item['square']?>">
                    <a href="/portfolio?id=<?= $item['id'] ?>" class="portfolio_item work-grid wow fadeInUp">
                        <img src="/<?=$item['plan_picture']?>" alt="image">
                        <div class="portfolio_item_hover">
                            <div class="item_info">
                                <span><?=$item['client']?></span>
                                <em>photography</em>
                            </div>
                        </div>
                    </a>
                </div>
                    <?php
                }
                ?>
                <!-- end single work -->

            </div>
            <!-- end row -->
        </div>
        <!-- all works end -->
    </div>
    <!-- end container -->
</section>
<!-- portfolio -->



