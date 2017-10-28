<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 16:24
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class SearchOrderAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        return Order::find()
            ->filterWhere(['like', 'description', $post['description']])
            ->all();
    }
}