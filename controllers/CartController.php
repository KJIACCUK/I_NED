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
        $col = (int)Yii::$app->request->get('col');

        $col = !$col ? 1 : $col;

        $product = Products::findOne($id);

        if(empty($product)) return false;

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart ->addToCart($product, $col);
        if(!Yii::$app->request->isAjax){
            return $this->redirect(Yii::$app->request->referrer);
        }

        $this -> layout = false;
        return $this->render('cartmodal', compact('session'));
    }

    public function actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.col');
        $session->remove('cart.sum');

        $this -> layout = false;
        return $this->render('cartmodal', compact('session'));
    }

    public function actionClearSingleCart(){
        $id = Yii::$app->request->get('id');

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);

        $this -> layout = false;
        return $this->render('cartmodal', compact('session'));
    }

    public function actionDropCart(){
        $session = Yii::$app->session;
        $session->open();
        $this -> layout = false;

        return $this->render('drop-cart', compact($session));
    }

}