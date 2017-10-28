<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 15:09
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class StuAddOrderAction extends Action
{
    public function run(){
        $order = new Order();
        $post = \Yii::$app->request->post();
        $order->load($post, '');

        if ($order->save()) {
            return [
                'success' => true,
                'message' => '问题发布成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '问题发布失败',
                'errors' => $order->errors,
            ];
        }
    }
}