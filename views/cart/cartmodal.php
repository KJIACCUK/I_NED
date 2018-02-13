<?php if (!empty($session['cart'])):?>
<div class="shopping-cart-area ">
                    <div class="cart-form table-responsive">
                        <table class="data-table cart-table">
                            <tr>
                                <th>Фото</th>
                                <th class="low2">Наименование</th>
                                <th>Количество</th>
                                <th class="low1">Цена</th>
                                <th class="low1"></th>
                            </tr>
                            <?php foreach ($session['cart'] as $id =>$item): ?>
                            <tr>
                                <td class="sop-cart">
                                    <a href="#"><img class="primary-image" alt="" src="<?= $item['img']?>"></a>
                                </td>
                                <td class="sop-cart an-sh">
                                    <div class="tb-beg">
                                        <a href="#"><?= $item['name']?></a>
                                    </div>
                                </td>
                                <td class="sop-cart">
                                    <div class="tb-beg">
                                        <a href="#"><?= $item['col']?></a>
                                    </div>
                                </td>
                                <td class="sop-cart">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount"><?= $item['price']?>$</span>
                                    </div>
                                </td>
                                <td class="sop-icon1">
                                    <a href="#">
                                        <i class="fa fa-times del-sing-cart" data-id="<?=$id?>"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table><br/>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="sub-total">
                                <table class="data-table cart-table col-md-4">
                                    <tr>
                                        <td>Общее кол-во запчастей:</td>
                                        <td><?=$session['cart.col']?></td>
                                    </tr>
                                    <tr>
                                        <td>Общая сумма запчастей:</td>
                                        <td><?=$session['cart.sum']?>$</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
</div>
<?php else:?>
    <h4 align="center">Корзина пуста..</h4>
<?php endif;?>

