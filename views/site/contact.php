<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="con-text">
                    <h2 class="page-title">
                        Контакты</h2>
                    <p><a href="<?=Url::home()?>">Главная</a> | Контакты</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- contact content section start -->
<section class="top-map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="map-area">
                    <div class="contact-map">
                        <div id="hastech">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A33642dad274f05d2dcc847cd67234b2ee14bda087370f64346a9a229f003e949&amp;source=constructor" width="1120" height="350" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="page-title">
                    <h2>Контакты</h2>
                    <h3>Наше местоположение</h3>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>http://maz.by/</strong>
                                <br>
                                <address> </address>
                            </div>
                            <div class="col-sm-3">
                                <strong>Телефон</strong>
                                <br>
                                +375 (...)
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Контактная форма</h3>
                    </div>
                    <form class="cendo" action="mail.php" method="post">

                        <div class="form-group required">
                            <label class="col-md-2 control-label">Имя</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="name">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-md-2 control-label">E-Mail</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-md-2 control-label">Вопрос</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="10" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="buttons">
                                <div class="pull-right">
                                    <input class="btn btn-primary" type="submit" value="Отправить">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact content section end -->
<!-- brand section start -->
<section class="section-padding-top">
    <div class="brand-logo">
        <div class="barnd-bg">
            <div class="container">
                <div class="row text-center">
                    <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/6.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/3.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand section end -->

