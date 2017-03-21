<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/20
 * Time: 16:11
 */

namespace app\actions;


use app\models\Order;
use app\models\Student;
use yii\base\Action;

class AddOrderAction extends Action
{
    public function run(){
        $order = new Order();
        $post = \Yii::$app->request->post();
        $order->load($post, '');
        $order->s_id = Student::findByUsername($post['name'])->getPrimaryKey();

        if ($order->save()) {
            return [
                'success' => true,
                'message' => '下单成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '下单失败',
                'errors' => $order->errors,
            ];
        }
    }
}