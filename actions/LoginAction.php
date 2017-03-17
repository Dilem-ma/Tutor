<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:01
 */

namespace app\actions;


use app\models\LoginForm;
use yii\base\Action;

class LoginAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $form = new LoginForm();

        if ($form->load($post, '') && $form->login()) {
            return [
                'success' => true,
                'message' => '登陆成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '登录失败',
                'errors' => $form->getFirstError('password'),
            ];
        }
    }
}