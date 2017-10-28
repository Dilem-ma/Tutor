<?php
/**
 * Created by PhpStorm.
 * User: Molly
 * Date: 17/10/28
 * Time: 下午3:40
 */

namespace app\actions;

use yii\base\Action;
use yii\db\Query;

class GetMyFavourite extends Action
{
    public function run(){

        $post = \Yii::$app->request->post();

        $rows = (new Query())
            ->select('favourite')
            ->from(['user'])
            ->where(['id' => $post['id']]);
        return $rows->all();
    }
}