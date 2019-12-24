<?php

/* @var $this yii\web\View */
/* @var $all */
/* @var $project */
/* @var $projects */
/* @var $categories */

use yii\helpers\Html;

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>

    <!-- HERO SECTION  -->
    <div class="site-hero_2">
        <div class="page-title">
            <div class="big-title montserrat-text uppercase">our work</div>
            <div class="small-title montserrat-text uppercase">home / portfolio</div>
        </div>
    </div>


    <!-- PORTFOLIO -->
    <section class="portfolio">
        <div class="container">
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
                                <li><a href="" data-filter=".cat<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
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
                        <div class="col-md-4 cat<?= $item['square'] ?>">
                            <a href="/portfolio?id=<?= $item['id'] ?>" class="portfolio_item work-grid wow fadeInUp">
                                <img src="/<?= $item['plan_picture'] ?>" alt="image">
                                <div class="portfolio_item_hover">
                                    <div class="item_info">
                                        <span><?= $item['client'] ?></span>
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


