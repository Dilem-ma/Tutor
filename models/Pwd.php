<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/27
 * Time: 16:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class Pwd extends ActiveRecord
{
    public static function tableName()
    {
        return 'pwd';
    }
}