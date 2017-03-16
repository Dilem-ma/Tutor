<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/8
 * Time: 11:22
 */

namespace app\controllers;

use app\models\LoginForm;
use app\models\Student;
use app\models\User;
use yii\rest\Controller;

class ApiController extends Controller
{
    public function actionLogin(){
        $post = \Yii::$app->request->post();
        $form = new LoginForm();

        if ($form->load($post, '') && $form->login()) {
            return [
                'success' => true,
                'message' => '登陆成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '登录失败',
                'errors' => $form->getFirstError('password'),
            ];
        }
    }

    public function actionRegister(){
        $post = \Yii::$app->request->post();
        $user = new User();

        if ($user->load($post, '') && $user->save()) {
            return [
                'success' => true,
                'message' => '注册成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '注册失败',
                'errors' => $user->getFirstError('username'),
            ];
        }
    }

    public function actionChange(){

        $user = User::findOne(['username' => \Yii::$app->request->post('username')]);
        $user->password = \Yii::$app->request->post('password');

        if ($user->save()) {
            return [
                'success' => true,
                'message' => '修改成功',
                'username' => $user,
            ];
        } else {
            return [
                'success' => false,
                'message' => '修改失败',
                'errors' => $user->getFirstError('username'),
            ];
        }
    }

    public function actionIdentity(){
        $stu = new Student();
        $stu->load(\Yii::$app->request->post(), '');
        $user = User::findByUsername(\Yii::$app->request->post('phone'));
        $stu->u_id = $user->getId();

        if ($stu->save()) {
            return [
                'success' => true,
                'message' => '操作成功',
            ];
        } else {
            return [
                'success' => false,
                'message' => '操作失败',
                'errors' => $stu->errors,
                'user' => $user,
                'stu' => $stu,
            ];
        }
    }
}