<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;

$this->title = 'Вход в профиль';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Вход</h2>
                    <p><a href="<?=Url::home()?>">Главная</a> | Вход</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- login content section start -->
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="tb-login-form ">
                    <h5 class="tb-title">Вход в аккаунт</h5>
<!--                    <p>Hello, Welcome your to account</p>-->
<!--                    <div class="tb-social-login">-->
<!--                        <a class="tb-facebook-login" href="#">-->
<!--                            <i class="fa fa-facebook"></i>-->
<!--                            Sign In With Facebook-->
<!--                        </a>-->
<!--                        <a class="tb-twitter-login res" href="#">-->
<!--                            <i class="fa fa-twitter"></i>-->
<!--                            Sign In With Twitter-->
<!--                        </a>-->
<!--                    </div>-->
                    <form action="#">
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Логин (Email)
                                <em>*</em>
                            </label>
                            <input type="email" placeholder="Введите логин">
                        </p>
                        <p class="checkout-coupon top-down log a-an">
                            <label class="l-contact">
                                Пароль
                                <em>*</em>
                            </label>
                            <input type="password" placeholder="Введите пароль">
                        </p>
                        <div class="forgot-password1">
                            <label class="inline2">
                                <input type="checkbox" name="rememberme7">
                                Запоминить меня <em>*</em>
                            </label>
<!--                            <a class="forgot-password" href="--><?//=Url::toRoute('modal/sendemail')?><!--">Забыли пароль?</a>-->
                            <?php
                                Modal::begin([
                                    'size' => 'modal-sm',
                                    'header' => '<b>Восстановление пароля</b>',
                                    'toggleButton' => [
                                        'label' => 'Забыли пароль?',
                                        'tab' => 'text',
                                        'class' => 'forgot-password '
                                    ]
                                ]);
                                echo '<label class="l-contact">Введите адрес эл. почты:</label>
                                    <p class="checkout-coupon log a-an"><input type="email"></p>
                                    <input value="Отправить" class="btn btn-default mod-sub" type="submit">';
                                Modal::end();
                            ?>
                        </div>
                        <p class="login-submit5">
                            <input class="button-primary" type="submit" value="Войти">
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="tb-login-form res">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- login  content section end -->
