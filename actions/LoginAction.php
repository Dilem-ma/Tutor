<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:01
 */

namespace app\actions;

use app\models\LoginForm;
use app\models\User;
use yii\base\Action;

class LoginAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $form = new LoginForm();
        $form->load($post, '');
        $token = \Yii::$app->security->generateRandomString();

        $user = User::findOne(['username' => $post['username']]);
        if ($user) {
            $user->accessToken = $token;
        }

        if ($form->login()) {
            $user->save();
//            $pwd->save();
            return [
                'success' => true,
                'message' => '登陆成功',
                'identity' => $user->identity(),
                'token' => $token,
            ];
        } else {
            return [
                'success' => false,
                'message' => '登录失败',
                'errors' => $form->getFirstError('password'),
                'identity' => 0,
            ];
        }
    }
}