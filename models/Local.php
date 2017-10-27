<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 17:14
 */

namespace app\models;


use yii\db\ActiveRecord;

class Local extends ActiveRecord
{
    public static function tableName()
    {
        return 'local';
    }
}