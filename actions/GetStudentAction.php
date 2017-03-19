<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/19
 * Time: 18:43
 */

namespace app\actions;


use app\models\Student;
use yii\base\Action;

class GetStudentAction extends Action
{
    public function run(){
        $name = \Yii::$app->request->post('name');
        $stu = Student::findByUsername($name);
        if (!is_null($stu)){
            return [
                'success' => true,
                'message' => '操作成功',
                'student' => $stu,
            ];
        } else {
            return [
                'success' => false,
                'message' => '操作失败',
                'errors' => $stu->errors,
            ];
        }
    }
}