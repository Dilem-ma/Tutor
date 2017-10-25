<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/25
 * Time: 14:10
 */

namespace app\actions;

use app\models\Issue;
use yii\base\Action;

class StuAddIssueAction extends Action
{
    public function run(){
        $issue = new Issue();
        $post = \Yii::$app->request->post();
        $issue->load($post, '');

        if ($issue->save()) {
            return [
                'success' => true,
                'message' => '问题发布成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '问题发布失败',
                'errors' => $issue->errors,
            ];
        }
    }
}