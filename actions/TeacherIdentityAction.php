<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:10
 */

namespace app\actions;


use app\models\Teacher;
use app\models\User;
use yii\base\Action;

class TeacherIdentityAction extends Action
{
    public function run(){
        $tea = new Teacher();
        $tea->load(\Yii::$app->request->post(), '');

        if ($tea->save()) {
            return [
                'success' => true,
                'message' => '操作成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '操作失败',
                'errors' => 'You have already been identified as a teacher.',
            ];
        }
    }
}