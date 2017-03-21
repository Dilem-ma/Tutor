<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/20
 * Time: 17:14
 */

namespace app\controllers;

use yii\rest\ActiveController;

class OrderController extends ActiveController
{
    public $modelClass = 'app\models\Order';
}