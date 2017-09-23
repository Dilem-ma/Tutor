<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:01
 */

namespace app\actions;


use app\models\User;
use yii\base\Action;

class LogoutAction extends Action
{
    public function run(){
        \Yii::$app->user->logout();

        if (\Yii::$app->user->isGuest) {
            return [
                'success' => true,
                'message' => '退出成功',
                ];
        }else{
            return[
                'success' => false,
                'message' => '退出失败',
                ];
        }


    }
}