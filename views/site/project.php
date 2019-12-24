<?php

/* @var $this yii\web\View */
/* @var $all */
/* @var $project */
/* @var $projects */
/* @var $categories */

use yii\helpers\Html;

$gallery = $project->getImages();

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>

    <!-- HERO SECTION  -->
    <div class="site-hero_2" style="background: url('/<?= $project['plan_picture'] ?>') no-repeat; background-size: cover;">
        <div class="page-title">
            <div class="big-title montserrat-text uppercase"><?= $project['client'] ?></div>
            <div class="small-title montserrat-text uppercase">home / portfolio / single_project</div>
        </div>
    </div>
    <section>
        <div class="container">
<!--            <div class="project_images">-->
            <div class="col-md-12">
                <div class="cocoen">
                    <img src="/<?= $project['poster_picture'] ?>" />
                    <img src="/<?= $project['some_picture'] ?>" />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <span><?= $project['client'] ?></span>
                    <p><?= $project['location'] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

            </div>


            <div class="row">
                <div class="related_projects">

                    <?php foreach ($gallery as $item) { ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <a data-fancybox="gallery" href="<?= $item->getPath('800x')?>"><img src="<?= $item->getPath('300x')?>"></a>
                        </div>
                    <?php } ?>

                </div><!-- end related projects -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>