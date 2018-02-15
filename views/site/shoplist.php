<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 02.02.2018
 * Time: 8:38
 */

use yii\helpers\Url;
use yii\bootstrap\Modal;

?>
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Каталог</h2>
                    <p><a href="<?=Url::home()?>">Главная</a> | Каталог</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- shop-style content section start -->
<section class="pages products-page section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-12">
                <div class="all-shop-sidebar">
                    <div class="top-shop-sidebar">
                        <h3 class="wg-title">ОАО "МАЗ"</h3>
                    </div>
                    <div class="shop-one">
                        <h3 class="wg-title2">Категории</h3>
                        <ul class="product-categories">
<!--                            --><?php //foreach ($categories as $category):?>
<!--                                <li class="cat-item">-->
<!--                                    <a href="#">--><?//= $category['name']?><!--</a>-->
<!--                                    <span class="count">(10)</span>-->
<!--                                </li>-->
<!--                            --><?php //endforeach;?>

                            </li>
                        </ul>
                    </div>

                    <div class="shop-one">
                        <h3 class="wg-title2">-------------</h3>
                        <ul class="product-categories">
                            <li class="cat-item">
                                <a href="#">-----</a>
                                <span class="count">(1)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">----</a>
                                <span class="count">(1)</span>
                            </li>
                            <li class="cat-item-10">
                                <a href="#">-----</a>
                                <span class="count">(1)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">---</a>
                                <span class="count">(1)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-one re-shop-one">
                        <h3 class="wg-title2">ценовой диапазон</h3>
                        <div class="widget shop-filter">
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div id="amount">
                                        <input type="text" name="first_price" class="first_price" />
                                        <input type="text" name="last_price" class="last_price"/>
                                        <button class="button-shop" type="submit"><i class="fa fa-search search-icon"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div class="shop-one re-shop-one">-->
<!--                        <h3 class="wg-title2">Choose Color</h3>-->
<!--                        <ul class="product-categories">-->
<!--                            <li class="cat-item cat-item-11">-->
<!--                                <a href="#">Black</a>-->
<!--                                <span class="count">(1)</span>-->
<!--                            </li>-->
<!--                            <li class="cat-item cat-item-8">-->
<!--                                <a href="#">Orange</a>-->
<!--                                <span class="count">(1)</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="top-shop-sidebar sim">-->
<!--                        <h3 class="wg-title">Compare Products</h3>-->
<!--                        <ul class="products-list">-->
<!--                            <li class="cat-item cat-item-11">No products to compare</li>-->
<!--                        </ul>-->
<!--                        <a class="clear-all" href="#">Clear all</a>-->
<!--                        <a class="blog8" href="#">Compare</a>-->
<!--                    </div>-->
<!--                    <div class="top-shop-sidebar sim2">-->
<!--                        <h3 class="wg-title">Community Pool</h3>-->
<!--                    </div>-->
<!--                    <div class="shop-one">-->
<!--                        <ul class="product-categories">-->
<!--                            <li class="cat-item cat-item-11">-->
<!--                                <a href="#">Black</a>-->
<!--                                <span class="count">(1)</span>-->
<!--                            </li>-->
<!--                            <li class="cat-item cat-item-8">-->
<!--                                <a href="#">Orange</a>-->
<!--                                <span class="count">(1)</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->


<!--                    <div class="top-shop-sidebar an-shop">-->
<!--                        <h3 class="wg-title">Последние</h3>-->
<!--                        <ul>-->
<!--                            <li class="b-none">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/p1.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb">-->
<!---->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">----</a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount">$180.00</span>-->
<!--                                        <span class="amount2 ana">$170.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="b-none">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/p1.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb">-->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">------</a>-->
<!--                                    </div>-->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount2 ana">$170.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="b-none agn">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/p1.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb">-->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">------</a>-->
<!--                                    </div>-->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount2 ana">$170.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->



                    <div class="ro-info-box-wrap tpl3 st">
                        <div class="tb-image">
                            <img src="<?=Yii::getAlias('@web/img/products/a1.jpg')?>" alt="">
                        </div>
                        <div class="tb-content">
                            <div class="tb-content-inner an-inner">
                                <h5>МАЗ</h5>
                                <h3>ывывывыв</h3>
                                <h6>
                                    <a href="#">Заказать сейчас</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="features-tab">
                            <!-- Nav tabs -->
                            <div class="shop-all-tab">
                                <div class="two-part">
                                    <ul class="nav tabs" role="tablist">
                                        <li class="vali">Вид :</li>
                                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                        <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                    </ul>
                                </div>
                                <div class="re-shop">
                                    <div class="sort-by">
                                        <div class="shop6">
                                            <label>Сортировать по :</label>
                                            <select>
                                                <option value="">Default sorting</option>
                                                <option value="">Sort by popularity</option>
                                                <option value="">Sort by average rating</option>
                                                <option value="">Sort by newness</option>
                                                <option value="">Sort by price: low to high</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop5">
                                        <label>Показать :</label>
                                        <select>
                                            <option value="">12</option>
                                            <option value="">24</option>
                                            <option value="">36</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="home">
                                    <div class="row">
                                        <div class="shop-tab">
                                            <!-- single-product start -->
                                            <?php foreach ($products as $product):?>
                                            <div class="col-md-4 col-lg-4 col-sm-6">
                                                <div class="single-product">
                                                    <div class="product-img">
<!--                                                        <div class="pro-type">-->
<!--                                                            <span>new</span>-->
<!--                                                        </div>-->
                                                        <a href="#">
                                                            <img src="<?=Yii::getAlias('@web')?>/img/products/<?=$product['img'];?>" alt="Product Title" />
                                                            <img class="secondary-image" alt="Product Title" src="<?=Yii::getAlias('@web/img/products/2.jpg')?>">
                                                        </a>
                                                    </div>
                                                    <div class="product-dsc">
                                                        <h3><a href="<?=Url::to(['site/singleproduct', 'id'=>$product['id']])?>"><?=$product['name'];?></a></h3>
                                                        <div class="star-price">
                                                            <span class="price-left"><?=$product['price']?>$</span>
<!--                                                            <span class="star-right">-->
<!--                                                                        <i class="fa fa-star"></i>-->
<!--                                                                        <i class="fa fa-star"></i>-->
<!--                                                                        <i class="fa fa-star"></i>-->
<!--                                                                        <i class="fa fa-star"></i>-->
<!--                                                                        <i class="fa fa-star-half-o"></i>-->
<!--                                                                    </span>-->
                                                        </div>
                                                    </div>
                                                    <div class="actions-btn">
                                                        <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Подробнее"><i class="fa fa-eye"></i></a>
<!--                                                        <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>-->
<!--                                                        <a title="#" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>-->
                                                        <a class="add-prod-to-cart" href="<?=Url::to(['cart/add', 'id' => $product['id']])?>" data-toggle="tooltip" data-placement="top" data-id ="<?=$product['id']?>" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <div class="row">
                                        <?php foreach ($products as $product): ?>
                                        <div class="li-item">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="tb-product-item-inner tb2 pct-last">
                                                    <div class="re-img">
                                                        <a href="#"><img alt="" src="<?=Yii::getAlias('@web/')?>img/products/<?=$product['img']?>"></a>
                                                    </div>
                                                    <div class="actions-btn">
                                                        <a class="id-my" data-original-title="Подробнее" data-toggle="modal" data-trigger="hover" data-target="#quick-view" data-placement="top" href="#" ?>
                                                            <i class="fa fa-eye"><?=$product['id']?></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="f-fix">
                                                    <div class="tb-beg">
                                                        <a href="<?=Url::toRoute(['site/singleproduct', 'id'=>$product['id']])?>"><?=$product['name']?></a>
                                                    </div>
                                                    <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana"><?=$product['price']?>$</span>
                                                        </div>
                                                    </div>
                                                    <p class="desc"><?=$product['description']?></p>
                                                    <div class="last-cart l-mrgn ns">
                                                        <a class="las4 add-prod-to-cart" href="<?=Url::toRoute(['cart/add', 'id' => $product['id']])?>" data-id="<?=$product['id']?>">Добавить в корзину</a>
                                                    </div>
<!--                                                    <div class="tb-product-btn">-->
<!--                                                        <a href="#">-->
<!--                                                            <i class="fa fa-eye"></i>-->
<!--                                                        </a>-->
<!--                                                        <a href="#">-->
<!--                                                            <i class="fa fa-heart"></i>-->
<!--                                                        </a>-->
<!--                                                        <a href="#">-->
<!--                                                            <i class="fa fa-retweet"></i>-->
<!--                                                        </a>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                      <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-all-tab-nor">
                                <div class="two-part">
                                    <ul class="nav tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-style  content section end -->
<!-- мод окн нач -->
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
                                                        <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-2">
                                                        <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-3">
                                                        <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-4">
                                                        <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="" />
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <div class="nav nav-tabs">
                                                        <ul>
                                                            <li><a data-toggle="tab" href="#sin-pro-1"> <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-2"> <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-3"> <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-4"> <img src="<?=Yii::getAlias('@web/img/quick-view/10.jpg')?>" alt="quick view" /> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="quick-right">
                                                <div class="quick-right-text">

                                                    <h3><strong>----</strong></h3>

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
                                                    <p>Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
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
                                                                                    <input type="text" value="1" name="qtybutton" class="plus-minus-box">
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
                                                                    <a href="#">Добавить в корзину</a>
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
            </div>
        </div>
    </div>
</div>

<!-- мод окн -->
<?php
Modal::begin([
    'size' => 'modal-lg',
    'header' => '<h5><i class="fa fa-shopping-cart"></i> Предварительный просмотр корзины</h5>',
    'id' => 'quick-view_cart',
    'footer' => '<button type = "button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                     <button type="button" class="btn las4 btn-success">Оформить заказ</button>
                     <button type="button" class="btn btn-danger clear-cart">Очистить корзину</button>'
]);
Modal::end();
?>
<!---------->
