<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 12.02.2018
 * Time: 10:38
 */

namespace app\controllers;
use app\models\Products;
use app\models\Cart;
use Yii;


class CartController extends AppController
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $product = Products::findOne($id);

        if(empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart ->addToCart($product);
        $this -> layout = false;
        return $this->render('cartmodal', compact('session'));
    }

}