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

        $user = User::findOne(['username' => $post['username']]);
        if (!is_null($user)){
            return [
                'success' => false,
                'message' => '注册失败',
                'errors' => 'Username '.$post['username'].' has already been token',
            ];
        }

        $user = new User();
        $user->load($post, '');

        $user->base_64 = base64_encode(\Yii::$app->security->encryptByPassword($post['password'],''));

        if ($user->save()) {
            return [
                'success' => true,
                'message' => '注册成功',
            ];
        } else {
            $error = $user->getFirstError('username') ? $user->getFirstError('username') : $user->getFirstError('password');
            return [
                'success' => false,
                'message' => '注册失败',
                'errors' => $error,
            ];
        }
    }
}