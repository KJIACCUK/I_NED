<?php if (!empty($_SESSION['cart'])):?>
<?php foreach ($_SESSION['cart'] as $id =>$item): ?>
    <li>
        <a href="#"><img src="<?=Yii::getAlias('@web/img/cart/1.png')?>" height="60px" alt="" /></a>
        <div class="add-cart-text">
            <p><a href="#"><?= $item['name']?></a></p>
            <p> <?= $item['price']?>$</p>
        </div>
        <div class="pro-close">
            <i class="pe-7s-close"></i>
        </div>
    </li>
    <?php endforeach; ?>
    <div class="total-amount clearfix">
        <span class="floatleft">Общая сумма:</span>
        <span class="floatright"><strong><?=$_SESSION['cart.sum']?>$</strong></span>
    </div>
    <div class=" text-center">
        <button type="button" class="btn btn-default">Оформить заказ</button>
    </div>
<!--<li class="checkout-btn text-center">-->
<!--    <a href="--><?//=Url::toRoute('site/shoppingcart')?><!--">Оформить заказ</a>-->
<!--</li>-->
<?php else:?>
    <h7 align="center"><i class="fa fa-trash-o" aria-hidden="true"></i>
        Корзина пуста..</h7>
<?php endif;?>



