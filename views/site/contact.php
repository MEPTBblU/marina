<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- HERO SECTION  -->
<div class="site-hero_2">
    <div class="page-title">
        <div class="big-title montserrat-text uppercase">Контакты</div>
        <div class="small-title montserrat-text uppercase">свяжитесь с нами</div>
    </div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <form action="#" method="post">
                        <div class="col-md-6">
                            <div class="input_1" style="margin-bottom:30px">
                                <input type="text" name="name">
                                <span>ваше имя</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input_1" style="margin-bottom:30px">
                                <input type="text" name="email">
                                <span>ваш email</span>
                            </div>
                        </div>
<!--                        <div class="col-md-12">-->
<!--                            <div class="input_1" style="margin-bottom:30px">-->
<!--                                <input type="text" name="object">-->
<!--                                <span>object</span>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-md-12">
                            <div class="textarea_1" style="margin-bottom:30px">
                                <textarea name="message"></textarea>
                                <span>Сообщение</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="btn green"><span>Отправить</span></a>
                        </div>
                    </form>
                </div>

                <h4 class="montserrat-text uppercase" style="margin-top:100px">Контактная информация</h4>
                <p>Lorem ipsum dolor sit amet, conse adipisicing elit. Libero incidunt quod ab mollitia quia dolorum conse.</p>

                <p>
                    14001, Kievflower dream, Киев, 1<br/>
                    +380 123-456-780 <br/>
                    +380 123-456-780 <br/>
                <div><a href="mailto:email@website.com" class="link">email@website.com</a></div>
                </p>

                <ul class="social-icons" style="margin-top:30px;">
                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                </ul>
            </div><!-- end col -->

            <div class="col-md-6">
                <div id="map" style="width:100%"></div>
            </div>

        </div>
    </div>
</section>


<!-- newsletter -->
<section class="green-section wow fadeInUp" style="padding:50px 0">
    <div class="container">
        <div class="col-md-6 col-sm-12">
            <div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
                <a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="row">
                <div class="white-section" style="padding:20px">
                    <span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <form action="#" method="post">
                        <div class="input_1">
                            <input type="text" name="email">
                            <span>your email</span>
                        </div>
                        <button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>



