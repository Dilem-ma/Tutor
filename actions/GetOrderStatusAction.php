<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/7
 * Time: 21:41
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class GetOrderStatusAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $order = Order::findOne(['id' => $post['o_id']]);

        if (is_null($order)){
            return [
                'success' => false,
                'errors' => 'Order '.$post['o_id'].' not found.',
            ];
        }

        $t_ids = explode(',',$order->t_id);

        return [
            'success' => in_array($post['t_id'], $t_ids),
            'status' => $order->status,
        ];

        if (in_array($post['t_id'], $t_ids)){
            if ($order->status == 0){
                return [
                    'success' => true,
                    'message' => 'You have picked up the order.',
                    'status' => $order->status,
                ];
            }else{
                return [
                    'success' => true,
                    'message' => 'You have picked up the order.',
                    'status' => $order->status,
                ];
            }
        }else{
            return [
                'success' => false,
                'status' => $order->status,
            ];
        }
    }
}