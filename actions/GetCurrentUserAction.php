<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/23
 * Time: 2:05
 */

namespace app\actions;


use app\models\User;
use yii\base\Action;

class GetCurrentUserAction extends Action
{
    public function run(){
        $token = \Yii::$app->request->get('token');
        $user = User::findOne(['accessToken' => $token]);
        if (is_null($user)){
            return [
                'error' => "未找到该用户",
            ];
        }else {
            return $user;
        }
    }
}