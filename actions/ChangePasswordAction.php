<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:04
 */

namespace app\actions;

use app\models\User;
use yii\base\Action;

class ChangePasswordAction extends Action
{
    public function run(){
        $user = User::findOne(['username' => \Yii::$app->request->post('username')]);

        if (is_null($user)){
            return [
                'success' => false,
                'message' => '该用户不存在',
            ];
        }

        $user->password = \Yii::$app->request->post('password');

        if ($user->save()) {
//            $pwd->save();
            return [
                'success' => true,
                'message' => '修改成功',
//                'pwd' => $pwd->password,
            ];
        } else {
            return [
                'success' => false,
                'message' => '修改失败',
                'errors' => $user->getFirstError('username'),
            ];
        }
    }
}