<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:02
 */

namespace app\actions;


use app\models\Pwd;
use app\models\User;
use yii\base\Action;

class RegisterAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $user = new User();
        $user->load($post, '');

        if ($user->save()) {

            $user = User::findOne(['username' => $post['username']]);
            $pwd = new Pwd();
            $pwd->id = $user->id;
            $pwd->password = $user->password;
            $pwd->save();

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