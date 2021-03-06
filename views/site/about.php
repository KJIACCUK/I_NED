<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">О нас</h2>
                        <p><a href="<?=Url::home()?>">Главная</a> | О нас</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- about content section start -->
    <section class="main_shop_area">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="about-us-all">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="about-optima-img">
                                <img class="primary-image" src="<?=Yii::getAlias('@web/img/about/samsport.jpg')?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="about-optima-text">
                                <h1>

                                    <strong>Торговый дом МАЗ</strong>
                                </h1>
                                <p>В Республике Беларусь реализацией всей гаммы запасных частей по ценам завода изготовителя, к автомобилям МАЗ,  автобусам и троллейбусам АМАЗ, прицепам и полуприцепам МАЗ занимаются сотрудники филиала ОАО МАЗ «Торговый Дом».
                                    Филиал ОАО МАЗ «Торговый Дом» занимается изучением спроса заказчиков (потребителей) на запасные части, компоненты и другие принадлежности  для автомобилей, других товаров производства ОАО «МАЗ» с целью совершенствования производства и наиболее полного удовлетворения спроса потребителей.</p>
                                <ul>
                                    <li>..................................................................</li>
                                    <li>..................................................................</li>
                                    <li>..................................................................</li>
                                </ul>
                                <a class="learn_btn" href="#">Прочитать больше информации</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 client-say">
                        <div class="about-sec-head">
                            <h2>
                                Что говорят наши
                                <strong>клиенты</strong>
                            </h2>
                            <p>Lorem ipsum scelerisque molestie id molestie magna ante etiam</p>
                        </div>
                        <div class="what-client-say">
                            <div class="single-item-testi">
                                <div class="client-image">
                                    <img alt="" src="<?=Yii::getAlias('@web/img/about/testi1.jpg')?>">
                                </div>
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
                                    <h2>Миг Александр</h2>
                                    <p class="client-info">-- Graphics Designer --</p>
                                </div>
                            </div>
                            <div class="single-item-testi">
                                <div class="client-image">
                                    <img alt="" src="<?=Yii::getAlias('@web/img/about/testi2.jpg')?>">
                                </div>
                                <div class="client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
                                    <h2>Миг Александр</h2>
                                    <p class="client-info">-- Web Developer --</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row creative-member-area">
                    <div class="about-sec-head">
                        <h2 class="creative-member">
                            наши
                            <strong>содрудники</strong>
                        </h2>
                        <p> Наше мастерство работы с клиентами действительно высокое и стандарт.</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-creative-member res2">
                            <div class="member-image">
                                <img alt="" src="<?=Yii::getAlias('@web/img/about/member1.jpg')?>">
                                <div class="member-title">
                                    <h2>Миг Александр</h2>
                                    <h3>Front end developer</h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
<!--                                <div class="member-social">-->
<!--                                    <a class="m-facebook" href="#">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-twitter" href="#">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-g-plus" href="#">-->
<!--                                        <i class="fa fa-google-plus"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-linkedin" href="#">-->
<!--                                        <i class="fa fa-linkedin"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-creative-member res2 res-mem">
                            <div class="member-image">
                                <img alt="" src="<?=Yii::getAlias('@web/img/about/member2.jpg')?>">
                                <div class="member-title">
                                    <h2>Миг Александр</h2>
                                    <h3>Back end developer</h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
<!--                                <div class="member-social">-->
<!--                                    <a class="m-facebook" href="#">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-twitter" href="#">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-g-plus" href="#">-->
<!--                                        <i class="fa fa-google-plus"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-linkedin" href="#">-->
<!--                                        <i class="fa fa-linkedin"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-creative-member res-mem2">
                            <div class="member-image">
                                <img alt="" src="<?=Yii::getAlias('@web/img/about/member3.jpg')?>">
                                <div class="member-title">
                                    <h2>Миг Александр</h2>
                                    <h3>Designer</h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
<!--                                <div class="member-social">-->
<!--                                    <a class="m-facebook" href="#">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-twitter" href="#">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-g-plus" href="#">-->
<!--                                        <i class="fa fa-google-plus"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-linkedin" href="#">-->
<!--                                        <i class="fa fa-linkedin"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-creative-member">
                            <div class="member-image">
                                <img alt="" src="<?=Yii::getAlias('@web/img/about/member4.jpg')?>">
                                <div class="member-title">
                                    <h2>Миг Александр</h2>
                                    <h3>Ceo Founder</h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
<!--                                <div class="member-social">-->
<!--                                    <a class="m-facebook" href="#">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-twitter" href="#">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-g-plus" href="#">-->
<!--                                        <i class="fa fa-google-plus"></i>-->
<!--                                    </a>-->
<!--                                    <a class="m-linkedin" href="#">-->
<!--                                        <i class="fa fa-linkedin"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="row newsletter-area">-->
<!--                    <div class="signup-newsletter">-->
<!--                        <h2>Sign Up For Newsletter</h2>-->
<!--                        <div class="blog-search">-->
<!--                            <form action="#">-->
<!--                                <input type="text" placeholder="Search">-->
<!--                                <button type="submit">Sign up</button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </section>
