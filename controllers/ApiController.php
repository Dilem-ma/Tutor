<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/8
 * Time: 11:22
 */

namespace app\controllers;

use app\models\LoginForm;
use yii\rest\Controller;
use yii\web\ForbiddenHttpException;

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
            throw new ForbiddenHttpException(json_encode([
                'success' => false,
                'message' => '登录失败',
                'errors' => $form->errors,
            ]));
        }
    }
}