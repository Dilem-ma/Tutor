<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/7
 * Time: 20:20
 */

namespace app\actions;


use app\models\Student;
use yii\base\Action;

class GetStuDataAction extends Action
{
    public function run(){
        $u_id = \Yii::$app->request->post('u_id');

        $stu = Student::findOne(['u_id' => $u_id]);

        if (is_null($stu)){
            return [
                'success' => false,
                'errors' => 'The user has not been identified as a student.',
            ];
        }else {
            return $stu;
        }
    }
}