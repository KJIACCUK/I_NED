<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 09.02.2018
 * Time: 13:56
 */

use yii\helpers\Url;
use yii\bootstrap\Modal;

?>

<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Подробнее</h2>
                    <p><a href="<?=Url::home()?>">Главная</a> | <a href="<?=Url::toRoute('site/shoplist')?>">Каталог</a> | Продукт</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- single peoduct content section start -->
<section class="single-product-area sit">
    <?php foreach($one_products as $one_product):?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 col-sm-6 none-si-pro">
                        <div class="pro-img-tab-content tab-content">
                            <div class="tab-pane active" id="image-1">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="<?=Yii::getAlias('@web/img/products/12.jpg')?>" href="<?=Yii::getAlias('@web/img/products/12.jpg')?>">
                                        <img src="<?=Yii::getAlias('@web/img/products/12.jpg')?>" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-2">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="<?=Yii::getAlias('@web/img/products/13.jpg')?>" href="<?=Yii::getAlias('@web/img/products/13.jpg')?>">
                                        <img src="<?=Yii::getAlias('@web/img/products/13.jpg')?>" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-3">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="<?=Yii::getAlias('@web/img/products/14.jpg')?>" href="<?=Yii::getAlias('@web/img/products/14.jpg')?>">
                                        <img src="<?=Yii::getAlias('@web/img/products/14.jpg')?>" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-4">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="<?=Yii::getAlias('@web/img/products/15.jpg')?>" href="<?=Yii::getAlias('@web/img/products/15.jpg')?>">
                                        <img src="<?=Yii::getAlias('@web/img/products/15.jpg')?>" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-5">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="<?=Yii::getAlias('@web/img/products/11.jpg')?>" href="<?=Yii::getAlias('@web/img/products/11.jpg')?>">
                                        <img src="<?=Yii::getAlias('@web/img/products/11.jpg')?>" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-6">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="<?=Yii::getAlias('@web/img/products/10.jpg')?>" href="<?=Yii::getAlias('@web/img/products/10.jpg')?>">
                                        <img src="<?=Yii::getAlias('@web/img/products/10.jpg')?>" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-img-tab-slider indicator-style2">
                            <div class="item"><a href="#image-1" data-toggle="tab"><img src="<?=Yii::getAlias('@web/img/products/12.jpg')?>" alt="" /></a></div>
                            <div class="item"><a href="#image-2" data-toggle="tab"><img src="<?=Yii::getAlias('@web/img/products/13.jpg')?>" alt="" /></a></div>
                            <div class="item"><a href="#image-3" data-toggle="tab"><img src="<?=Yii::getAlias('@web/img/products/14.jpg')?>" alt="" /></a></div>
                            <div class="item"><a href="#image-4" data-toggle="tab"><img src="<?=Yii::getAlias('@web/img/products/15.jpg')?>" alt="" /></a></div>
                            <div class="item"><a href="#image-5" data-toggle="tab"><img src="<?=Yii::getAlias('@web/img/products/11.jpg')?>" alt="" /></a></div>
                            <div class="item"><a href="#image-6" data-toggle="tab"><img src="<?=Yii::getAlias('@web/img/products/10.jpg')?>" alt="" /></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="cras">
                            <div class="product-name">
                                <h2><?= $one_product['name']?></h2>
                            </div>
                            <div class="pro-rating cendo-pro">
<!--                                <div class="pro_one">-->
<!--                                    <img src="--><?//=Yii::getAlias('@web/img/icon-img/stars-1.png')?><!--" alt="">-->
<!--                                </div>-->
<!--                                <p class="rating-links">-->
<!--                                    <a href="#">----</a>-->
<!--                                </p>-->
                            </div>
                            <p class="availability in-stock">
                                -------: ----------
                            </p>
                            <p class="availability in-stock2">
                                -------: ---------
                            </p>
                            <div class="short-description">
                                <p><?=$one_product['description']?></p>
                            </div>
                            <div class="pre-box">
                                <span class="special-price"><?=$one_product['price']?></span>
                            </div>
                            <div class="add-to-box1">
                                <div class="add-to-box add-to-box2">
                                    <div class="add-to-cart">
                                        <div class="input-content">
                                            <label>Кол-во:</label>
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box" id = "col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-icon">
                                            <a href="<?=Url::toRoute(['cart/add', 'id'=>$one_product['id']])?>" class="add-prod-to-cart" data-id ="<?=$one_product['id']?>">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
<!--                                            <a href="#">-->
<!--                                                <i class="fa fa-heart"></i>-->
<!--                                            </a>-->
<!--                                            <a href="#">-->
<!--                                                <i class="fa fa-retweet"></i>-->
<!--                                            </a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="s-cart-img">-->
<!--                                <a href="#">-->
<!--                                    <img alt="" src="--><?//=Yii::getAlias('@web/img/icon-img/screenshot_2.png')?><!--">-->
<!--                                </a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="text">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Детальное описание</a>
                                </li>
<!--                                <li role="presentation">-->
<!--                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews (1)</a>-->
<!--                                </li>-->
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tab-con2">
                                <div role="tabpanel" class="tab-pane active" id="home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. </div>
<!--                                <div role="tabpanel" class="tab-pane" id="profile">-->
<!--                                    <form class="form-horizontal">-->
<!--                                        <div id="review">-->
<!--                                            <table class="table table-striped table-bordered">-->
<!--                                                <tr>-->
<!--                                                    <td style="width: 50%;">-->
<!--                                                        <strong>demo</strong>-->
<!--                                                    </td>-->
<!--                                                    <td class="text-right">25/02/2018</td>-->
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td colspan="2">-->
<!--                                                        <p class="text an-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet sem varius, fringilla erat a, blandit arcu. Cras sit amet justo eu erat imperdiet dictum ac eget nulla. Aliquam erat volutpat.</p>-->
<!--                                                        <span class="fa fa-stack">-->
<!--                                                                    <i class="fa fa-star fa-stack-2x"></i>-->
<!--                                                                    <i class="fa fa-star-o fa-stack-2x"></i>-->
<!--                                                                </span>-->
<!--                                                        <span class="fa fa-stack">-->
<!--                                                                    <i class="fa fa-star fa-stack-2x"></i>-->
<!--                                                                    <i class="fa fa-star-o fa-stack-2x"></i>-->
<!--                                                                </span>-->
<!--                                                        <span class="fa fa-stack">-->
<!--                                                                    <i class="fa fa-star-o fa-stack-2x"></i>-->
<!--                                                                </span>-->
<!--                                                        <span class="fa fa-stack">-->
<!--                                                                    <i class="fa fa-star-o fa-stack-2x"></i>-->
<!--                                                                </span>-->
<!--                                                        <span class="fa fa-stack">-->
<!--                                                                    <i class="fa fa-star-o fa-stack-2x"></i>-->
<!--                                                                </span>-->
<!--                                                    </td>-->
<!--                                                </tr>-->
<!--                                            </table>-->
<!--                                            <div class="text-right"></div>-->
<!--                                        </div>-->
<!--                                        <h2 class="write">Write a review</h2>-->
<!--                                        <div class="form-group required">-->
<!--                                            <div class="col-sm-12">-->
<!--                                                <label class="control-label" for="input-name">Your Name</label>-->
<!--                                                <input id="input-name" class="form-control" type="text" value="" name="name">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group required">-->
<!--                                            <div class="col-sm-12">-->
<!--                                                <label class="control-label" for="input-review">Your Review</label>-->
<!--                                                <textarea id="input-review" class="form-control" rows="5" name="text"></textarea>-->
<!--                                                <div class="help-block">-->
<!--                                                    <span class="text-danger">Note:</span>-->
<!--                                                    HTML is not translated!-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group required">-->
<!--                                            <div class="col-sm-12">-->
<!--                                                <label class="control-label">Rating</label>-->
<!--                                                Bad-->
<!--                                                <input type="radio" value="1" name="rating">-->
<!--                                                <input type="radio" value="2" name="rating">-->
<!--                                                <input type="radio" value="3" name="rating">-->
<!--                                                <input type="radio" value="4" name="rating">-->
<!--                                                <input type="radio" value="5" name="rating">-->
<!--                                                Good-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group required">-->
<!--                                            <div class="col-sm-12">-->
<!--                                                <label class="control-label" for="input-captcha">Enter the code in the box below</label>-->
<!--                                                <input id="input-captcha" class="form-control" type="text" value="" name="captcha">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="buttons si-button">-->
<!--                                            <div class="pull-right">-->
<!--                                                <button id="button-review" class="btn btn-primary" data-loading-text="Loading..." type="button">Continue</button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </form>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="col-md-3">-->
<!--                <div class="single-sidebar">-->
<!--                    <div class="single-sidebar an-shop">-->
<!--                        <h3 class="wg-title">Популярное</h3>-->
<!--                        <ul>-->
<!--                            <li class="b-none7">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/6.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb7">-->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">-------</a>-->
<!--                                    </div>-->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount">$180.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="b-none7">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/10.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb7">-->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">------</a>-->
<!--                                    </div>-->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount">$180.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="b-none7">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/8.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb7">-->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">------</a>-->
<!--                                    </div>-->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount">$180.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="b-none7">-->
<!--                                <div class="tb-recent-thumbb">-->
<!--                                    <a href="">-->
<!--                                        <img class="attachment" src="--><?//=Yii::getAlias('@web/img/products/9.jpg')?><!--" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="tb-recentb7">-->
<!--                                    <div class="tb-beg">-->
<!--                                        <a href="#">Lambskin Shoe</a>-->
<!--                                    </div>-->
<!--                                    <div class="tb-product-price font-noraure-3">-->
<!--                                        <span class="amount">$180.00</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="ro-info-box-wrap tpl3 st">-->
<!--                        <div class="tb-image">-->
<!--                            <img src="--><?//=Yii::getAlias('@web/img/products/a1.jpg')?><!--" alt="">-->
<!--                        </div>-->
<!--                        <div class="tb-content">-->
<!--                            <div class="tb-content-inner an-inner">-->
<!--                                <h5>----------</h5>-->
<!--                                <h3>------------------</h3>-->
<!--                                <h6>-->
<!--                                    <a href="#">Купить сейчас</a>-->
<!--                                </h6>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
    <?php endforeach;?>
</section>

<!-- мод окн -->
<?php
Modal::begin([
    'size' => 'modal-lg',
    'header' => '<h5><i class="fa fa-shopping-cart"></i> Предварительный просмотр корзины</h5>',
    'id' => 'quick-view_cart',
    'footer' => '<button type = "button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                     <button type="button" class="btn btn-success">Оформить заказ</button>
                     <button type="button" class="btn btn-danger clear-cart">Очистить корзину</button>'
]);
Modal::end();
?>
<!---------->