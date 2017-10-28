<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 15:11
 */

namespace app\actions;


use app\models\Order;
use yii\base\Action;

class SelectOrdersAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        return Order::find()
            ->filterWhere(['gender' => $post['gender'], 'area' => $post['area']])
            ->andFilterCompare('technique', $post['technique'], 'like')
            ->andFilterCompare('title', $post['text'],'like')
            ->andFilterCompare('price', $post['price_min'], '>=')
            ->andFilterCompare('price', $post['price_max'], '<=')
            ->all();
    }
}