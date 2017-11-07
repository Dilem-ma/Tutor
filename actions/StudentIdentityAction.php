<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/17
 * Time: 14:10
 */

namespace app\actions;


use app\models\Student;
use yii\base\Action;

class StudentIdentityAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $stu = new Student();
        $stu->load(\Yii::$app->request->post(), '');
//        $stu->u_id = $post['u_id'];
//        $stu->describe = $post['describe'];
//        $stu->grade = $post['grade'];
//        $stu->school = $post['school'];
//        $stu->stu_id = $post['stu_id'];

        if ($stu->save()) {
            return [
                'success' => true,
                'message' => '操作成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '操作失败',
                'errors' => 'You have already been identified as a student.',
            ];
        }
    }
}