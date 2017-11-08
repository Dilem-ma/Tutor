<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/11/5
 * Time: 19:21
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class StuCheckOrderAction extends Action
{
    public function run(){

        $id = \Yii::$app->request->post('id');
        $t_id = \Yii::$app->request->post('t_id');

        $order = Order::findOne(['id' => $id]);

        if (is_null($order)){
            return [
                'success' => false,
                'message' => "未找到该订单",
            ];
        }else{
            $order->t_id = $t_id;
            $order->status = 0;

            $order -> gender = ($order->gender == "male" ? 1 : 2);

            if ($order->save()){
                return [
                    'success' => true,
                    'message' => "确认成功",
                ];
            }else{
                return [
                    'success' => false,
                    'message' => "确认失败",
                    'errors' => $order->errors,
                ];
            }
        }

    }
}