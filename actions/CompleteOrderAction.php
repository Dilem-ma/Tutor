<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/6
 * Time: 21:48
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class CompleteOrderAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $order = Order::findOne(['id' => $post['o_id']]);

        if (is_null($order)){
            return [
                'success' => false,
                'message' => '未找到该订单',
            ];
        }

        $order->status = -2;

        if ($order->save()){
            return [
                'success' => true,
                'message' => '订单已完成',
            ];
        }else{
            return [
                'success' => false,
                'message' => '确认订单完成失败',
                'errors' => $order->errors,
            ];
        }
    }
}