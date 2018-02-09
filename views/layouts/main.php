<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <div class="left-header clearfix">
                        <ul>
                            <li><p><i class="fa fa-phone" aria-hidden="true"></i>+375 ( ) ............</p></li>
                            <li class="hd-none"><p><i class="fa fa-clock-o" aria-hidden="true"></i>Раб. время : 8:00-17:00</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="right-header">
                        <ul>
                            <li><a href="<?=Url::toRoute('site/myaccount')?>"><i class="fa fa-user"></i>Мой профиль</a></li>
                            <!--<li><a href="cart.html"><i class="fa fa-shopping-cart"></i>My cart</a></li>
                            <li><a href="wishlist.html"><i class="fa fa-heart"></i>My wishlist</a></li>
                            -->
                            <li><a href="<?=Url::toRoute('site/login')?>"><i class="fa fa-lock"></i>Вход</a></li>
                            <li><a href="<?=Url::toRoute('site/registration')?>"><i class="fa fa-user-plus"></i>Регистрация</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-one" id="sticky-menu">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-xs-4">
                    <div class="logo">
                        <a href="<?=Url::home()?>"><?= Html::img('@web/img/logo4.png', ['alt' => 'ImgName'])?></a>
<!--                        <a href="site/index"><img src="img/logo4.png" alt="" /></a>-->
                    </div>
                </div>
                <div class="col-sm-10 col-md-10 col-xs-8 static">
                    <div class="all-manu-area">
                        <div class="mainmenu clearfix hidden-sm hidden-xs">
                            <nav>
                                <ul>
                                    <li><a href="<?=Url::home()?>">Главная</a></li>
                                    <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
                                    <li><a href="<?=Url::toRoute('site/shoplist')?>">Каталог</a>
                                        <div class="magamenu ">
                                            <ul class="again">
                                                <li class="single-menu colmd4">
                                                    <span>Категория 1</span>
                                                    <a href="#">1</a>
                                                    <a href="#">2</a>
                                                    <a href="#">3</a>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Категория 2</span>
                                                    <a href="#">1</a>
                                                    <a href="#">2</a>
                                                    <a href="#">3</a>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Категория 3</span>
                                                    <a href="#">1</a>
                                                    <a href="#">2</a>
                                                    <a href="#">3</a>
                                                </li>
                                                <li class="single-menu colmd4 colmd5">
                                                    <a href="#">
                                                        <img alt="" src="<?=Yii::getAlias('@web/img/maga-banner.png')?>">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
<!--                                    <li><a href="shop.html">Lookbook</a></li>-->
<!--                                    <li><a href="blog.html">Blog</a></li>-->
                                    <li><a href="#">Страницы</a>
                                        <ul>
                                            <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
                                            <!--<li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>-->
                                            <li><a href="<?=Url::toRoute('site/contact')?>">Контакты</a></li>
                                            <li><a href="<?=Url::toRoute('site/login')?>">Вход</a></li>
                                            <li><a href="#">Мой профиль</a></li>
                                            <li><a href="<?=Url::toRoute('site/shoplist')?>">Каталог</a></li>
                                            <!--<li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shopping-cart.html">Shopping-Cart</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>-->
                                        </ul>
                                    </li>

                                    <li><a href="<?=Url::toRoute('site/contact')?>">Контакты</a></li>
                                </ul>

                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-menu-area hidden-lg hidden-md">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="<?=Url::home()?>">Главная</a></li>
                                        <li><a href="<?=Url::toRoute('site/shoplist')?>">Каталог</a>
                                            <ul>
                                                <li><a href="#">Комплектующие 1</a>
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!---->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!---->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!---->
<!--                                                        </li>-->
<!--                                                    </ul>-->
                                                </li>
                                                <li><a href="#">Комплектующие 2</a>
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!--                                                            <a href="#">4</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!---->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
                                                </li>
                                                <li><a href="#">Комплектующие 3</a>
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <span>Раздел</span>-->
<!--                                                            <a href="#">1</a>-->
<!--                                                            <a href="#">2</a>-->
<!--                                                            <a href="#">3</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
                                                </li>
                                            </ul>
                                        </li>
                                        <!--<li><a href="shop.html">Lookbook</a></li>
                                        <li><a href="blog.html">Blog</a></li>-->
                                        <li><a href="#">Страницы</a>
                                            <ul>
                                                <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
                                                <!--<li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>-->
                                                <li><a href="<?=Url::toRoute('site/contact')?>">Контакты</a></li>
                                                <li><a href="<?=Url::toRoute('site/login')?>">Вход</a></li>
                                                <li><a href="#">Мой профиль</a></li>
                                                <!--<li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shopping-cart.html">Shopping-Cart</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>-->
                                            </ul>
                                        </li>
                                        <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
                                        <li><a href="<?=Url::toRoute('site/contact')?>">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- mobile menu end -->
                        <div class="right-header re-right-header">
                            <ul>
                                <li class="re-icon tnm"><i class="fa fa-search" aria-hidden="true"></i>
                                    <form method="get" id="searchform" action="#">
                                        <input type="text" value="" name="s" id="ws" placeholder="Поиск.." />
                                        <button type="submit"><i class="pe-7s-search"></i></button>
                                    </form>
                                </li>
                                <li><a href="<?=Url::toRoute('site/shoppingcart')?>"><i class="fa fa-shopping-cart"></i><span class="color1">*</span></a>
                                    <ul class="drop-cart">
                                       <!-- <li>
                                            <a href="cart.html"><img src="img/cart/1.png" alt="" /></a>
                                            <div class="add-cart-text">
                                                <p><a href="#">1</a></p>
                                                <p>$50.00</p>
                                                <span>Color : Blue</span>
                                                <span>Size   : SL</span>
                                            </div>
                                            <div class="pro-close">
                                                <i class="pe-7s-close"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="cart.html"><img src="img/cart/2.png" alt="" /></a>
                                            <div class="add-cart-text">
                                                <p><a href="#">2</a></p>
                                                <p>$50.00 x 2</p>
                                                <span>Color : Blue</span>
                                                <span>Size   : SL</span>
                                            </div>
                                            <div class="pro-close">
                                                <i class="pe-7s-close"></i>
                                            </div>
                                        </li>
                                        <li class="total-amount clearfix">
                                            <span class="floatleft">total</span>
                                            <span class="floatright"><strong>= $150.00</strong></span>
                                        </li>
                                        <li>
                                            <div class="goto text-center">
                                                <a href="cart.html"><strong>go to cart &nbsp;<i class="pe-7s-angle-right"></i></strong></a>
                                            </div>
                                        </li>
                                        <li class="checkout-btn text-center">
                                            <a href="checkout.html">Check out</a>
                                        </li>-->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->
<!-- slider-section-start -->

    <?= $content ?>

<!-- brand section start -->
<section class="section-padding-top">
    <div class="brand-logo">
        <div class="barnd-bg">
            <div class="container">
                <div class="row text-center">
                    <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/1.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/2.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/3.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/4.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/5.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/6.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/1.png')?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="<?=Yii::getAlias('@web/img/brand/3.png')?>" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand section end -->

<!-- service section start -->
<section class="re-section-padding">
    <div class="service section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-service">
                        <i class="pe-7s-plane"></i>
                        <h4>ДОСТАВКА ЗАПЧАСТЕЙ</h4>
                        <p>апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ...</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-service res-single">
                        <i class="pe-7s-headphones"></i>
                        <h4>СЛУЖБА ПОДДЕРЖКИ</h4>
                        <p>апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ...</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-service">
                        <i class="pe-7s-refresh"></i>
                        <h4>14 Дней на проверку</h4>
                        <p>апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->
<!-- footer section start -->
<footer class="re-footer-section">
    <!-- footer-top area start -->
    <div class="footer-top section-padding-top">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="single-text res-text">
                            <div class="footer-title">
                                <h4>Контакты</h4>
                                <hr class="dubble-border"/>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="pe-7s-map-marker"></i>
                                        <p>Торговый дом МАЗ</p>
                                        <p class="rs">Республика Беларусь</p>
                                    </li>
                                    <li>
                                        <i class="pe-7s-call"></i>
                                        <p>+375 (...) ........</p>
                                        <p>+375 (...) ........</p>
                                    </li>
                                    <li>
                                        <i class="pe-7s-mail-open"></i>
                                        <p>maz.by</p>
                                        <p>maz.by</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="single-text res-text">
                            <div class="footer-title">
                                <h4>Мой данные</h4>
                                <hr class="dubble-border"/>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?=Url::toRoute('site/myaccount')?>">Мой профиль</a></li>
                                    <li><a href="<?=Url::toRoute('site/login')?>">Вход</a></li>
                                    <li><a href="<?=Url::toRoute('site/registration')?>">Регистрация</a></li>
                                   <li><a href="<?=Url::toRoute('site/shoppingcart')?>">Корзина</a></li>
                                    <!-- <li><a href="order-complete">My Orders</a></li>
                                    <li><a href="#">My Credit slips</a></li>
                                    <li class="nm"><a href="#">My Addresses</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3 margin-top">
                        <div class="single-text res-text">
                            <div class="footer-title">
                                <h4>Сервис</h4>
                                <hr class="dubble-border"/>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="<?=Url::toRoute('site/about')?>">О нас</a></li>
                                     <li><a href="<?=Url::toRoute('site/contact')?>">Контакты</a></li>
                                    <li><a href="<?=Url::toRoute('site/shoplist')?>">Каталог</a> </li>
                                    <!-- <li><a href="#">Brands</a></li>
                                     <li><a href="#">Site Map</a></li>
                                     <li class="nm"><a href="#">Gift Vouchers</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 hidden-sm col-md-3 margin-top">
                        <div class="single-text res-text">
                            <div class="footer-title">
                                <!--<h4>NEWSLETTER</h4>
                                <hr class="dubble-border"/>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consectetures do adipisicing elit, sed do eiusmod tempores incididunt ut labore</p>
                                <form action="mail.php" method="post">
                                    <input type="text" name="email" placeholder="Enter your mail" />
                                    <input type="submit" value="submit" />
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <hr class="dubble-border"/>
        </div>
        <div class="social-media">
            <div class="container">
                <div class="row">
                   <!-- <div class="col-xs-12 col-sm-6">
                        <div class="paypal social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
                            </ul>
                        </div>
                    </div>
<!--                   <div class="col-xs-12 col-sm-6">-->
<!--                        <div class="social-icon">-->
<!--                            <ul class="floatright">-->
<!--                                <li class="res-mar"><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy; 2018. Минск</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
