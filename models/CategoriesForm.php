<?php
/**
 * Created by PhpStorm.
 * User: uit06
 * Date: 09.02.2018
 * Time: 10:36
 */

namespace app\models;
use yii\db\ActiveRecord;


class CategoriesForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function rules()
    {
        return [
            [['name', 'img', 'description', 'required']],
            [['name', 'img', 'description', 'string']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'img' => 'Картинка',
            'description' => 'Описание',
        ];
    }
}