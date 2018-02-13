<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 12.02.2018
 * Time: 10:40
 */

namespace app\models;

use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $col = 1)
    {
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['col'] += $col;
        }else{
            $_SESSION['cart'][$product->id] = [
                'col' => $col,
                'name' => $product->name,
                'price' => $product->price,
                'img' => $product->img
            ];
        }

        $_SESSION['cart.col'] = isset($_SESSION['cart.col']) ? $_SESSION['cart.col'] + $col : $col;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $col * $product->price : $col * $product->price;
    }

    public function recalc($id){
        if(!isset($_SESSION['cart'][$id])) return false;

        $colMin = $_SESSION['cart'][$id]['col'];
        $sumMin = $_SESSION['cart'][$id]['col'] * $_SESSION['cart'][$id]['price'];

        $_SESSION['cart.col'] -= $colMin;
        $_SESSION['cart.sum'] -= $sumMin;

        unset($_SESSION['cart'][$id]);
    }

}