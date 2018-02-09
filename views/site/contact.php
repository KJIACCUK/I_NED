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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4705.865542097702!2d27.653891!3d53.8618434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcdf7a170a34b%3A0x1a32f05349b7a6f5!2z0JzQuNC90YHQutC40Lkg0LDQstGC0L7QvNC-0LHQuNC70YzQvdGL0Lkg0LfQsNCy0L7QtA!5e0!3m2!1sru!2sby!4v1518077645452" width="1130" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                                <input class="form-control" type="text" value="" name="name" placeholder="Введите имя">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-md-2 control-label">E-Mail</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="email" placeholder="Введите адрес эл. почты">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-md-2 control-label">Вопрос</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="10" name="message" placeholder="Введите текст сообщения"></textarea>
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

