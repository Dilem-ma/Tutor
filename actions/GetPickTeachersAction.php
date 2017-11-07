<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/7
 * Time: 22:22
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;
use yii\db\Query;

class GetPickTeachersAction extends Action
{
    public function run(){
        $o_id = \Yii::$app->request->post('o_id');

        $order = Order::findOne(['id' => $o_id]);

        if (is_null($order)){
            return [
                'success' => false,
                'errors' => 'Order '.$o_id.' not found.',
            ];
        }

        $t_ids = explode(',', $order->t_id);

        $rows = (new Query())
            ->select(['user.id', 'teacher.id AS t_id', 'name', 'url', 'star', 'gender', 'education', 'major', 'describe', 'area'])
            ->from(['user', 'teacher'])
            ->where('user.id = teacher.u_id')
            ->andWhere(['in', 'user.id', $t_ids])
            ->all();

        return $rows;
    }
}