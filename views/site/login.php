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
<!--                            <label class="inline2">-->
<!--                                <input type="checkbox" name="rememberme7">-->
<!--                                Запоминить меня <em>*</em>-->
<!--                            </label>-->

                            <label for="log-zap" class="label-cbx inline2">
                                <input id="log-zap" type="checkbox" class="invisible">
                                <div class="checkbox">
                                    <svg width="20px" height="20px" viewBox="0 0 20 20">
                                        <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                        <polyline points="4 11 8 15 16 6"></polyline>
                                    </svg>
                                </div>
                                <span>Запомнить меня <em>*</em></span>
                            </label>

                            <!--                            <a class="forgot-password" href="--><?//=Url::toRoute('modal/sendemail')?><!--">Забыли пароль?</a>-->
                            <a class="forgot-password" data-original-title="Забыли пароль?" data-toggle="modal" data-trigger="hover" data-target="#quick-view" data-placement="top" href="#">Забыли пароль?
                            </a>
                            <div class="quick-view modal fade in" id="quick-view">
                                <div class="col-md-3 col-md-offset-5">
                                    <div class="d-table">
                                        <div class="d-tablecell">
                                            <div class="main-view_my modal-content">
                                                <div class="modal-footer" data-dismiss="modal">
                                                    <span>x</span>
                                                </div>
                                                <h7 class="l-contact">
                                                    Введите адрес эл. почты:
                                                </h7>
                                                <input type="email" class="form-control" placeholder="">
                                                <input value="Отправить" class="btn btn-default mod-sub" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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