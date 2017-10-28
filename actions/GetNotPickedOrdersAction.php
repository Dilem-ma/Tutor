<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/10/28
 * Time: 13:54
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class GetNotPickedOrdersAction extends Action
{
    public function run(){
        return Order::find()
            ->where(['status' => -1])
            ->all();
    }
}