<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:02
 */

namespace app\actions;


use app\models\User;
use yii\base\Action;

class RegisterAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $user = new User();

        if ($user->load($post, '') && $user->save()) {
            return [
                'success' => true,
                'message' => '注册成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '注册失败',
                'errors' => $user->getFirstError('username'),
            ];
        }
    }
}