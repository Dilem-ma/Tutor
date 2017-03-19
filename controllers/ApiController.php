<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/8
 * Time: 11:22
 */

namespace app\controllers;

use app\actions\ChangePasswordAction;
use app\actions\GetStudentAction;
use app\actions\StudentIdentityAction;
use app\actions\LoginAction;
use app\actions\RegisterAction;
use yii\filters\AccessControl;
use yii\rest\Controller;

class ApiController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        unset($behaviors['contentNegotiator']['formats']['application/xml']);

        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'actions' => ['login', 'student_identity', 'get_student'],
                    'verbs' => ['POST'],
                ],
                [
                    'allow' => true,
                    'actions' => ['register', 'change_password'],
                    'verbs' => ['POST'],
                ],
                [
                    'allow' => true,
                    'actions' => ['current_user'],
                    'verbs' => ['GET'],
                ],
                [
                    'allow' => true,
                    'actions' => ['logout'],
                    'roles' => ['@'],
                    'verbs' => ['POST'],
                ],
            ],
        ];

        return $behaviors;
    }

    public function actions()
    {
        return [
            'login' => LoginAction::className(),
//            'register' => RegisterAction::className(),
//            'change_password' => ChangePasswordAction::className(),
//            'student_identity' => StudentIdentityAction::className(),
//            'get_student' => GetStudentAction::className(),
        ];
    }

    public function actionCurrentUser()
    {
        return \Yii::$app->user->isGuest ? false : \Yii::$app->user->identity->username;
    }

    public function logout(){
        return \Yii::$app->user->logout();
    }
}