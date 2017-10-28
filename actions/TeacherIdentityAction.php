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
        $post = \Yii::$app->request->post();
        $tea = Teacher::find()->where(['u_id' => $post['u_id']])->one();
        if ($tea != null){
            return [
                'success' => false,
                'message' => '操作失败',
                'errors' => 'You have already been identified as a teacher.',
            ];
        }
        $tea = new Teacher();

        $tea->u_id = $post['u_id'];
        $tea->education = $post['education'];
        $tea->major = $post['major'];
        $tea->certificate = $post['certificate'];
        $tea->describe = $post['describe'];

        $res = User::find()->where(['id' => $post['u_id']])->one();
        $res->name = $post['name'];
        $res->birthday = $post['birthday'];
        $res->gender = $post['gender'];

        $tea->save();
        $res->save();

        return [
            'success' => true,
            'message' => '操作成功',
        ];

//        if ($tea->save()&&$res->save()) {
//            return [
//                'success' => true,
//                'message' => '操作成功',
//            ];
//        } else {
//            return [
//                'success' => false,
//                'message' => '操作失败',
//                'errors' => 'You have already been identified as a teacher.',
//            ];
//        }
    }
}