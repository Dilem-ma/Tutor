<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/27
 * Time: 12:31
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class PickUpOrderAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $order = Order::findOne(['id' => $post['o_id']]);

        if ($order->gender == "male") $order->gender = 1;
        else $order->gender = 2;

        if ($order != null){
            if ($order->status == -1){
                $order->status = 1;
                $order->t_id = $post['t_id'];
            }else {
                if (strpos($order->t_id, $post['t_id'])) {
                    $order->status += 1;
                    $order->t_id = $order->t_id . "," . $post['t_id'];
                }else {
                    return [
                        "success" => false,
                        "message" => "Pick up failed.",
                        "errors" => "You have picked up this order.",
                    ];
                }
            }
            if ($order->save()){
                return [
                    "success" => true,
                    "message" => "订单领取成功",
                ];
            }else{
                return [
                    "success" => false,
                    "message" => "订单领取失败",
                    "errors" => $order->errors,
                ];
            }
        }
    }
}