<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Торговый дом МАЗ';
?>
<!--<div class="site-index">-->
<section class="slider-main-area">
    <div class="main-slider an-si">
        <div class="bend niceties preview-2 hm-ver-1">
            <div id="ensign-nivoslider-2" class="slides">
                <img src="img/slider/5.jpg" alt="" title="#slider-direction-3"  />
                <img src="img/slider/6.jpg" alt="" title="#slider-direction-3"  />
                <img src="img/slider/3.jpg" alt="" title="#slider-direction-3"  />
                <img src="img/slider/4.jpg" alt="" title="#slider-direction-1"  />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-3" class="t-cn slider-direction Builder">
                <div class="slide-all">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h3 class="title5">Торговая площадка МАЗ</h3>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <h2 class="title6">запчасти на ваш выбор</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title0">на технику МАЗ</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a class="min1" href="<?=Url::toRoute('site/shoplist')?>">Перейти</a>
                    </div>
                </div>
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction Builder">
                <div class="slide-all slide2">
                    <!-- layer 1 -->
                    <div class="layer-1">
                        <h2 class="title5">Каталог АМАЗ</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <h2 class="title6">все запчасти</h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2">
                        <p class="title0">на любую технику АМАЗ</p>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3">
                        <a class="min1" href="<?=Url::toRoute('site/shoplist')?> ">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider section end -->
<!-- collection section start -->
<div class="banner-area">
    <div class="container">
        <div class="section-padding1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-box banner-box-re">
                        <a href="#">
                            <img alt="" src="img/banner/2.jpg">
                            <div>
                                <h2>
                                    инфа
                                    <span>т2</span>
                                </h2>
                                <p>кратко</p>
                            </div>
                        </a>
                    </div>
                    <div class="banner-box res-btm">
                        <a href="#">
                            <img alt="" src="img/banner/3.jpg">
                            <div>
                                <h2>
                                    инфа
                                    <span>т2</span>
                                </h2>
                                <p>Кратко</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-container banner-box res-btm">
                        <a href="#">
                            <img alt="" src="img/banner/r6.png">
                            <div>
                                <h2>
                                    инфа
                                    <span>т3</span>
                                </h2>
                                <p>кратко</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="banner-box banner-box-re">
                        <a href="#">
                            <img alt="" src="img/banner/4.jpg">
                            <div>
                                <h2>
                                    инфа
                                    <span>т4</span>
                                </h2>
                                <p>Кратко</p>
                            </div>
                        </a>
                    </div>
                    <div class="banner-box">
                        <a href="#">
                            <img alt="" src="img/banner/5.jpg">
                            <div>
                                <h2>
                                    инфа
                                    <span>т5</span>
                                </h2>
                                <p>Кратко</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- collection section end -->
<!-- new-products section start -->
<section class="featured-products single-products section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>Запчасти по категориям</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="product-tab nav nav-tabs">
                    <ul>
                        <li class="active"><a data-toggle="tab" href="#all">Стандартные</a></li>
                        <li><a data-toggle="tab" href="#clothings">АКПП</a></li>
                        <li><a data-toggle="tab" href="#shoes">Радиаторы</a></li>
                        <li><a data-toggle="tab" href="#bags">Сальники</a></li>
                        <li><a data-toggle="tab" href="#accessories">Электрозапчасти</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row tab-content">
            <div class="tab-pane  fade in active" id="all">
                <div id="tab-carousel-1" class="re-owl-carousel owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>акция</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/1.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/2.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">1</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/3.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/4.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">2</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/5.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/6.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">3</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/7.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/8.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">4</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/9.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/10.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">5</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/14.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">6</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/15.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/14.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">7</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/2.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/1.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">8</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/4.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/3.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">9</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">10</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
            <!-- all shop product end -->
            <div class="tab-pane  fade in" id="clothings">
                <div id="tab-carousel-2" class="owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/12.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/11.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">11</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/1.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/2.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">12</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/3.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/4.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">13</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/5.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/6.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">14</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/8.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/7.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">15</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/9.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/10.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">16</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">17</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/14.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/13.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">18</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/15.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">19</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/1.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">20</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
            <!-- clothings product end -->
            <div class="tab-pane  fade in" id="shoes">
                <div id="tab-carousel-3" class="owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/10.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/9.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">21</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">22</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/14.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/13.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">23</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/15.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/8.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">24</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/6.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/7.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">25</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/4.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/5.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">26</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/2.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/1.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">27</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/13.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/15.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">28</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/7.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">29</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/10.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">30</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
            <!-- shoes product end -->
            <div class="tab-pane  fade in" id="bags">
                <div id="tab-carousel-4" class="owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/1.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/2.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">31</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/3.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/4.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">32</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/5.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/6.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">33</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/8.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/7.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">34</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/9.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/10.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">35</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">36</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/14.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/13.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">37</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/15.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/1.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">38</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">38</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/11.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">39</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
            <!-- bags product end -->
            <div class="tab-pane  fade in" id="accessories">
                <div id="tab-carousel-5" class="owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/6.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/7.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">40</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/9.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/8.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">41</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/3.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/7.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">42</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/8.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/2.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">43</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/1.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/15.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">44</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/14.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/8.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">45</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/2.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/1.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">46</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <a href="#">
                                    <img src="img/products/7.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/4.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">47</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                    <div class="col-xs-12">
                        <div class="single-product">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Новая</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/5.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/6.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">48</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
<!--                                    <span class="star-right">-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star"></i>-->
<!--                                                <i class="fa fa-star-half-o"></i>-->
<!--                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="single-product margin-top">
                            <div class="product-img">
                                <div class="pro-type">
                                    <span>Скидка</span>
                                </div>
                                <a href="#">
                                    <img src="img/products/9.jpg" alt="Product Title" />
                                    <img class="secondary-image" alt="Product Title" src="img/products/12.jpg">
                                </a>
                            </div>
                            <div class="product-dsc">
                                <h3><a href="#">49</a></h3>
                                <div class="star-price">
                                    <span class="price-left">$52.00</span>
                                    <!--<span class="star-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>-->
                                </div>
                            </div>
                            <div class="actions-btn">
                                <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
            <!-- accessories product end -->
        </div>
    </div>
</section>
<!-- new-products section end -->
<!-- testimonials section start -->
<section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
    <div class="re-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title re-section-title">
                        <h3>Информация общая</h3>
                        <div class="section-icon re-section1">
                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-text-center text-center">
                    <div id="testimonials" class="re-owl-carousel2 owl-carousel product-slider owl-theme">
                        <div class="single-testimonial">
                            <div class="testimonial-dsc">
                                <p>лллллллллллллрждрждржржджр држ рджжжжжжжжжж  ржджрждр плорл рдждрждрждр жрдж рждржд <br>опаотпоатпо апьатпаьтпьат апьатпьтаьптаьпт ьатпьать
                                    аптл авокло адлапаоп лалопатпапатл<br> аопоапоат паоптаоптоатп оатпоатпоатпо пиаопиаопоа ооа опатпоатпоа потаопа</p>
                            </div>
                            <div class="testimonial-img">
                                <a href="#"><img src="img/testimonial/1.png" alt="Title" /></a>
                                <h4><a href="#">некая подпись</a></h4>
                                <span>фото</span>
                            </div>
                        </div>
                        <!-- single testimonial item end -->
                        <div class="single-testimonial">
                            <div class="testimonial-dsc">
                                <p>лполплр папаор апрокорп копрпокт окпкопок окпокпок в валолол локу ауоауор ауотауло л ораовоа оваов ваоураоурок орукорукр оуро  аруоаоураоуо уауо
                                    оваоруо оуаруоро  ваваовоаыццци орлоддопд вадашуо  уауолау жжжаоулоаут </p>
                            </div>
                            <div class="testimonial-img">
                                <a href="#"><img src="img/testimonial/2.png" alt="Title" /></a>
                                <h4><a href="#">некая подпись</a></h4>
                                <span>фото</span>
                            </div>
                        </div>
                        <!-- single testimonial item end -->
                        <div class="single-testimonial">
                            <div class="testimonial-dsc">
                                <p>лполплр папаор апрокорп копрпокт окпкопок окпокпок в валолол локу ауоауор ауотауло л ораовоа оваов ваоураоурок орукорукр оуро  аруоаоураоуо уауо
                                    оваоруо оуаруоро  ваваовоаыццци орлоддопд вадашуо  уауолау жжжаоулоаут</p>
                            </div>
                            <div class="testimonial-img">
                                <a href="#"><img src="img/testimonial/3.png" alt="Title" /></a>
                                <h4><a href="#">некая подпись</a></h4>
                                <span>фото</span>
                            </div>
                        </div>
                        <!-- single testimonial item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonials section end -->
<!-- new-products section start -->
<section class="new-products single-products section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>Новинки запчастей</h3>
                    <div class="section-icon">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="new-products" class="owl-carousel product-slider owl-theme">
                <div class="col-xs-12">
                    <div class="single-product">
                        <div class="product-img">
                            <div class="pro-type">
                                <span>Скидка</span>
                            </div>
                            <a href="#">
                                <img src="img/products/2.jpg" alt="Product Title" />
                                <img class="secondary-image" alt="Product Title" src="img/products/1.jpg">
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">1</a></h3>
<!--                            <div class="star-price">-->
<!--                                <span class="price-left">$52.00</span>-->
<!--                                <span class="star-right">-->
<!--									        <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-half-o"></i>-->
<!--									    </span>-->
<!--                            </div>-->
                        </div>
                        <div class="actions-btn">
                            <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                            <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single product end -->
                <div class="col-xs-12">
                    <div class="single-product">
                        <div class="product-img">
                            <div class="pro-type">
                                <span>Новая</span>
                            </div>
                            <a href="#">
                                <img src="img/products/4.jpg" alt="Product Title" />
                                <img class="secondary-image" alt="Product Title" src="img/products/3.jpg">
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">2</a></h3>
<!--                            <div class="star-price">-->
<!--                                <span class="price-left">$52.00</span>-->
<!--                                <span class="star-right">-->
<!--									        <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-half-o"></i>-->
<!--									    </span>-->
<!--                            </div>-->
                        </div>
                        <div class="actions-btn">
                            <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                            <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single product end -->
                <div class="col-xs-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/products/6.jpg" alt="Product Title" />
                                <img class="secondary-image" alt="Product Title" src="img/products/5.jpg">
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">3</a></h3>
<!--                            <div class="star-price">-->
<!--                                <span class="price-left">$52.00</span>-->
<!--                                <span class="star-right">-->
<!--									        <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-half-o"></i>-->
<!--									    </span>-->
<!--                            </div>-->
                        </div>
                        <div class="actions-btn">
                            <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                            <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single product end -->
                <div class="col-xs-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img src="img/products/8.jpg" alt="Product Title" />
                                <img class="secondary-image" alt="Product Title" src="img/products/7.jpg">
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">4</a></h3>
<!--                            <div class="star-price">-->
<!--                                <span class="price-left">$52.00</span>-->
<!--                                <span class="star-right">-->
<!--									        <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-half-o"></i>-->
<!--									    </span>-->
<!--                            </div>-->
                        </div>
                        <div class="actions-btn">
                            <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                            <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single product end -->
                <div class="col-xs-12">
                    <div class="single-product">
                        <div class="product-img">
                            <div class="pro-type">
                                <span>Скидка</span>
                            </div>
                            <a href="#">
                                <img src="img/products/10.jpg" alt="Product Title" />
                                <img class="secondary-image" alt="Product Title" src="img/products/9.jpg">
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">5</a></h3>
<!--                            <div class="star-price">-->
<!--                                <span class="price-left">$52.00</span>-->
<!--                                <span class="star-right">-->
<!--									        <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-half-o"></i>-->
<!--									    </span>-->
<!--                            </div>-->
                        </div>
                        <div class="actions-btn">
                            <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                            <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single product end -->
                <div class="col-xs-12">
                    <div class="single-product">
                        <div class="product-img">
                            <div class="pro-type">
                                <span>Новая</span>
                            </div>
                            <a href="#">
                                <img src="img/products/1.jpg" alt="Product Title" />
                                <img class="secondary-image" alt="Product Title" src="img/products/2.jpg">
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">6</a></h3>
<!--                            <div class="star-price">-->
<!--                                <span class="price-left">$52.00</span>-->
<!--                                <span class="star-right">-->
<!--									        <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star-half-o"></i>-->
<!--									    </span>-->
<!--                            </div>-->
                        </div>
                        <div class="actions-btn">
                            <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                            <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- single product end -->
            </div>
        </div>
    </div>
</section>
<!-- new-products section end -->
<!-- blog section start -->
<!--<section class="blog section-padding-top">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-xs-12">-->
<!--                <div class="section-title">-->
<!--                    <h3>Эт на случай создания каких то статей</h3>-->
<!--                    <div class="section-icon">-->
<!--                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div id="blog" class="owl-carousel product-slider owl-theme re-blog">-->
<!--                <div class="col-xs-12">-->
<!--                    <div class="blog-container-inner">-->
<!--                        <div class="post-thumb">-->
<!--                            <a href="#"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="img/blog/111.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="visual-inner">-->
<!--                            <h2 class="blog-title">-->
<!--                                <a href="#"> 1</a>-->
<!--                            </h2>-->
<!--                            <div class="blog-meta">-->
<!--                                        <span class="post-category">-->
<!--                                            кат:-->
<!--                                            <a rel="category" href="#">техническая</a>-->
<!--                                        </span>-->
<!--                                <span class="published">-->
<!--                                            <i class="fa fa-clock-o"></i>-->
<!--                                            Jan 31, 2018-->
<!--                                        </span>-->
<!--                                <span class="published2">0 comment</span>-->
<!--                            </div>-->
<!--                            <div class="blog-content"> апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ... </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!-- single blog item end -->-->
<!--                <div class="col-xs-12">-->
<!--                    <div class="blog-container-inner">-->
<!--                        <div class="post-thumb">-->
<!--                            <a href="#"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="img/blog/222.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="visual-inner">-->
<!--                            <h2 class="blog-title">-->
<!--                                <a href="#"> 2</a>-->
<!--                            </h2>-->
<!--                            <div class="blog-meta">-->
<!--                                        <span class="post-category">-->
<!--                                            кат:-->
<!--                                            <a rel="category" href="#">так о чем то</a>-->
<!--                                        </span>-->
<!--                                <span class="published">-->
<!--                                            <i class="fa fa-clock-o"></i>-->
<!--                                            Jan 31, 2018-->
<!--                                        </span>-->
<!--                                <span class="published2">1 комментарий</span>-->
<!--                            </div>-->
<!--                            <div class="blog-content"> апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ... </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!-- single blog item end -->-->
<!--                <div class="col-xs-12">-->
<!--                    <div class="blog-container-inner">-->
<!--                        <div class="post-thumb">-->
<!--                            <a href="#"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="img/blog/333.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="visual-inner">-->
<!--                            <h2 class="blog-title">-->
<!--                                <a href="#"> 3</a>-->
<!--                            </h2>-->
<!--                            <div class="blog-meta">-->
<!--                                        <span class="post-category">-->
<!--                                            кат:-->
<!--                                            <a rel="category" href="#">так о чем то</a>-->
<!--                                        </span>-->
<!--                                <span class="published">-->
<!--                                            <i class="fa fa-clock-o"></i>-->
<!--                                            Jan 31, 2018-->
<!--                                        </span>-->
<!--                                <span class="published2">0 комментариев</span>-->
<!--                            </div>-->
<!--                            <div class="blog-content"> апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ... </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!-- single blog item end -->-->
<!--                <div class="col-xs-12">-->
<!--                    <div class="blog-container-inner">-->
<!--                        <div class="post-thumb">-->
<!--                            <a href="#"><img class="attachment-blog-list wp-post-image" alt="blog-2" src="img/blog/111.jpg"></a>-->
<!--                        </div>-->
<!--                        <div class="visual-inner">-->
<!--                            <h2 class="blog-title">-->
<!--                                <a href="#"> 4</a>-->
<!--                            </h2>-->
<!--                            <div class="blog-meta">-->
<!--                                        <span class="post-category">-->
<!--                                            кат:-->
<!--                                            <a rel="category" href="#"> так о чем то</a>-->
<!--                                        </span>-->
<!--                                <span class="published">-->
<!--                                            <i class="fa fa-clock-o"></i>-->
<!--                                            Jan 31, 2018-->
<!--                                        </span>-->
<!--                                <span class="published2">0 комментариев</span>-->
<!--                            </div>-->
<!--                            <div class="blog-content"> апаорпоа алполаоп аоллдав лавалоа ллваукда лаость лсолоула лауолкукло ...</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!-- single blog item end -->-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- blog section end -->
<!-- quick view start -->
<div class="quick-view modal fade in" id="quick-view">
    <div class="container">
        <div class="row">
            <div id="view-gallery" class="owl-carousel product-slider owl-theme">
                <div class="col-xs-12">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="modal-dialog">
                                <div class="main-view modal-content">
                                    <div class="modal-footer" data-dismiss="modal">
                                        <span>x</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="quick-image">
                                                <div class="single-quick-image tab-content text-center">
                                                    <div class="tab-pane  fade in active" id="sin-pro-1">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-2">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-3">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-4">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <div class="nav nav-tabs">
                                                        <ul>
                                                            <li><a data-toggle="tab" href="#sin-pro-1"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-2"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-3"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-4"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="quick-right">
                                                <div class="quick-right-text">
                                                    <h3><strong>product name title</strong></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <a href="#">06 Review</a>
                                                        <a href="#">Add review</a>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>$65.00</h4>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                                    <div class="row m-p-b">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="por-dse responsive-strok clearfix">
                                                                <ul>
                                                                    <li><span>Availability</span><strong>:</strong> In stock</li>
                                                                    <li><span>Condition</span><strong>:</strong> New product</li>
                                                                    <li><span>Category</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="por-dse color">
                                                                <ul>
                                                                    <li><span>color</span><strong>:</strong> <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a> <a href="#">Orange</a></li>
                                                                    <li><span>size</span><strong>:</strong>  <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a></li>
                                                                    <li><span>tag</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dse-btn">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse clearfix">
                                                                    <ul>
                                                                        <li class="share-btn qty clearfix"><span>quantity</span>
                                                                            <form action="#" method="POST">
                                                                                <div class="plus-minus">
                                                                                    <a class="dec qtybutton">-</a>
                                                                                    <input type="text" value="02" name="qtybutton" class="plus-minus-box">
                                                                                    <a class="inc qtybutton">+</a>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="share-btn clearfix"><span>share</span>
                                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse clearfix responsive-othre">
                                                                    <ul class="other-btn">
                                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="por-dse add-to">
                                                                    <a href="#">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product item end -->
                <div class="col-xs-12">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="modal-dialog">
                                <div class="main-view modal-content">
                                    <div class="modal-footer" data-dismiss="modal">
                                        <span>x</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="quick-image">
                                                <div class="single-quick-image tab-content text-center">
                                                    <div class="tab-pane  fade in active" id="sin-pro-5">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-6">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-7">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-8">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <div class="nav nav-tabs">
                                                        <ul>
                                                            <li><a data-toggle="tab" href="#sin-pro-5"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-6"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-7"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-8"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="quick-right">
                                                <div class="quick-right-text">
                                                    <h3><strong>product name title</strong></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <a href="#">06 Review</a>
                                                        <a href="#">Add review</a>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>$65.00</h4>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                                    <div class="row m-p-b">
                                                        <div class="col-sm-6">
                                                            <div class="por-dse">
                                                                <ul>
                                                                    <li><span>Availability</span><strong>:</strong> In stock</li>
                                                                    <li><span>Condition</span><strong>:</strong> New product</li>
                                                                    <li><span>Category</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="por-dse color">
                                                                <ul>
                                                                    <li><span>color</span><strong>:</strong> <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a> <a href="#">Orange</a></li>
                                                                    <li><span>size</span><strong>:</strong>  <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a></li>
                                                                    <li><span>tag</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dse-btn">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="por-dse">
                                                                    <ul>
                                                                        <li class="share-btn qty clearfix"><span>quantity</span>
                                                                            <form action="#" method="POST">
                                                                                <div class="plus-minus">
                                                                                    <a class="dec qtybutton">-</a>
                                                                                    <input type="text" value="02" name="qtybutton" class="plus-minus-box">
                                                                                    <a class="inc qtybutton">+</a>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="share-btn clearfix"><span>share</span>
                                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="por-dse clearfix">
                                                                    <ul class="other-btn">
                                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="por-dse add-to">
                                                                    <a href="#">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product item end -->
            </div>
        </div>
    </div>
</div>
<!-- quick view end -->
<!--</div>-->
