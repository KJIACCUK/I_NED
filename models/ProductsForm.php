<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 09.02.2018
 * Time: 10:37
 */

namespace app\models;


use yii\db\ActiveRecord;

class ProductsForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function rules()
    {
        return [

        ];
    }

    public function attributeLabels()
    {
        return [
            'category' => 'Категория',
            'name' => 'Имя',
            'price' => 'Цена',
            'price_old' => 'Старая цена',
            'img' => 'Картинка',
            'description' => 'Описание',
        ];
    }
}