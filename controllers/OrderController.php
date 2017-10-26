<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 15:25
 */

namespace app\controllers;


use yii\rest\ActiveController;

class OrderController extends ActiveController
{
    public $modelClass = 'app\models\Order';
}