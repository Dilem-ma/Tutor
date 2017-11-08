<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/8
 * Time: 23:41
 */

namespace app\actions;


use app\models\Comment;
use yii\base\Action;

class GetOrderCommentAction extends Action
{
    public function run(){
        $o_id = \Yii::$app->request->post('o_id');

        $comment = Comment::findOne(['o_id' => $o_id]);

        if (is_null($comment)){
            return [
                'success' => false,
                'errors' => 'Order '.$o_id.' have not finished.'
            ];
        }

        return $comment;
    }
}