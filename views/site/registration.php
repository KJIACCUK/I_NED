<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 02.02.2018
 * Time: 15:55
 */

use yii\helpers\Url;

$this->title = 'Регистрация пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Регистрация пользователей</h2>
                    <p><a href="<?=Url::home()?>">Главная</a> | Регистрация</p>
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
                    <h5 class="tb-title">Личная информация</h5>
                    <form action="#">
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Компания
                                <em>*</em>
                            </label>
                            <input type="text">
                        </p>
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                ФИО
                                <em>*</em>
                            </label>
                            <input type="text">
                        </p>
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Номер диллерского сертификата
                            </label>
                            <input type="text">
                        </p>
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Телефон
                            </label>
                            <input type="text">
                        </p>

                    </form>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="tb-login-form res">
                    <h5 class="tb-title">Профиль</h5>
                    <p></p>
                    <form action="#">



                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Логин
                                <em>*</em>
                            </label>
                            <input type="email">
                        </p>
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Email
                                <em>*</em>
                            </label>
                            <input type="email">
                        </p>
                        <p class="checkout-coupon top-down log a-an">
                            <label class="l-contact">
                                Пароль
                                <em>*</em>
                            </label>
                            <input type="password">
                        </p>
                        <p class="checkout-coupon top-down log a-an">
                            <label class="l-contact">
                                Подтверждение пароля
                                <em>*</em>
                            </label>
                            <input type="password">
                        </p>
<!--                        <div class="forgot-password1">-->
<!--                            <label class="inline2">-->
<!--                                <input type="checkbox" name="rememberme7">-->
<!--                                С условиями ознакомлен! <em>*</em>-->
<!--                            </label>-->
<!--                            <a class="forgot-password" href="#">Условия</a>-->
<!--                        </div>-->

                    </form>
                    <!--                    <div class="tb-info-login ">-->
                    <!--                        <h5 class="tb-title4">Войдя в профиль, вам будет доступно: </h5>-->
                    <!--                        <ul>-->
                    <!--                            <li>...</li>-->
                    <!--                            -->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>
            </div>

            <div class="col-xs-12">
                <div class="tb-login-form">
                        <p class="registration-submit">
                            <input class="btn center-block" type="submit" value="Зарегистрироваться">
                        </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- login  content section end -->

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
