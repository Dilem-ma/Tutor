<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/10/28
 * Time: 15:39
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class GetCurrentOrderAction extends Action
{
    public function run(){
        return Order::findOne(['id' => \Yii::$app->request->post('id')]);
    }
}