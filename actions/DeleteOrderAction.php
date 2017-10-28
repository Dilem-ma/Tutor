<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/10/28
 * Time: 15:31
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class DeleteOrderAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $order = Order::findOne(['id' => $post['id']]);

        if ($order->delete() != false){
            return [
                'success' => true,
                'message' => '删除成功',
            ];
        }else {
            return [
                'success' => false,
                'message' => '删除失败',
                'error' => $order->errors,
            ];
        }
    }
}