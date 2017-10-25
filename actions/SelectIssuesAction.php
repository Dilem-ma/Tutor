<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/25
 * Time: 14:12
 */

namespace app\actions;

use app\models\Issue;
use yii\base\Action;

class SelectIssuesAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        return Issue::find()
            ->filterWhere(['gender' => $post['gender'], 'area' => $post['area']])
            ->andFilterCompare('technique', $post['technique'], 'like')
            ->andFilterCompare('title', $post['text'],'like')
            ->andFilterCompare('price', $post['price_min'], '>=')
            ->andFilterCompare('price', $post['price_max'], '<=')
            ->all();
    }
}