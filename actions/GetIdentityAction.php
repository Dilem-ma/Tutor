<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/22
 * Time: 15:16
 */

namespace app\actions;


use app\models\Student;
use app\models\Teacher;
use app\models\User;
use yii\base\Action;

class GetIdentityAction extends Action
{
    public function run(){
        $token = \Yii::$app->request->get('token');
        $user = User::findOne(['accessToken' => $token]);
        if ($user){
            $teacher = Teacher::findOne(['u_id' => $user->getId()]);
            $student = Student::findOne(['u_id' => $user->getId()]);
            return[
                'teacher' => $teacher == null ? "未认证成为教师" : $teacher ,
                'student' => $student == null ? "未认证成为学生" : $student ,
            ];
        } else {
            return [
                "未找到该用户"
            ];
        }
    }
}