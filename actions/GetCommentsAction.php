<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/6
 * Time: 16:55
 */

namespace app\actions;


use app\models\Comment;
use yii\base\Action;
use yii\db\Query;

class GetCommentsAction extends Action
{
    public function run(){
        $t_id = \Yii::$app->request->post('t_id');

        $rows = Comment::findAll(['t_id' => $t_id]);

        return $rows;
    }
}