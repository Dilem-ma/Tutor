<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/7
 * Time: 11:44
 */

namespace app\actions;


use app\models\LoginForm;
use app\models\User;
use yii\base\Action;

class FastLoginAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $form = new LoginForm();

        $form->username = $post['username'];

        $user = User::findOne(['username' => $post['username']]);

        if (is_null($user)){
            return [
                'success' => false,
                'errors' => 'User '.$post['username'].' not found.',
            ];
        }

        $form->password = \Yii::$app->security->decryptByPassword(base64_decode($user->base_64), '');

        $token = \Yii::$app->security->generateRandomString();

        $user->accessToken = $token;

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