<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/31
 * Time: 23:51
 */

namespace app\actions;


use app\models\Teacher;
use app\models\User;
use yii\base\Action;

class GetUserDataAction extends Action
{
    public function run(){
        $id = \Yii::$app->request->post('id');
        $user = User::findOne(['id' => $id]);

        if (is_null($user)){
            return [
                'error' => "未找到该用户",
            ];
        }else {
            $tea = Teacher::findOne(['u_id' => $id]);

            if (is_null($tea)){
                return $user;
            }else {
                return array($user, $tea);
            }
        }
    }
}