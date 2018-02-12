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
    public function addToCart($product, $qty = 1)
    {
        echo 'Worked';
    }

}