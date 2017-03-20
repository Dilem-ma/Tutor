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
use app\actions\GetTopTeachersAction;
use app\actions\StudentIdentityAction;
use app\actions\TeacherIdentityAction;
use app\actions\LoginAction;
use app\actions\RegisterAction;
use app\actions\TeacherIdentityAction;
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
<<<<<<<<< Temporary merge branch 1
                    'actions' => ['login', 'student_identity', 'teacher_identity','get_student'],
=========
                    'actions' => ['login', 'teacher_identity'],
>>>>>>>>> Temporary merge branch 2
                    'verbs' => ['POST'],
                ],
                [
                    'allow' => true,
                    'actions' => ['top_teachers'],
                    'verbs' => ['GET'],
                ],
//                [
//                    'allow' => true,
//                    'actions' => ['register', 'change_password'],
//                    'verbs' => ['POST'],
//                ],
//                [
//                    'allow' => true,
//                    'actions' => ['current_user'],
//                    'verbs' => ['GET'],
//                ],
//                [
//                    'allow' => true,
//                    'actions' => ['logout'],
////                    'roles' => ['@'],
//                    'verbs' => ['POST'],
//                ],
            ],
        ];

        return $behaviors;
    }

    public function actions()
    {
        return [
            'login' => LoginAction::className(),
            'top_teachers' => GetTopTeachersAction::className(),
            'teacher_identity' => TeacherIdentityAction::className(),
//            'register' => RegisterAction::className(),
//            'change_password' => ChangePasswordAction::className(),
//            'student_identity' => StudentIdentityAction::className(),
//            'get_student' => GetStudentAction::className(),
            'teacher_identity' => TeacherIdentityAction::className(),
        ];
    }

    public function logout(){
        return \Yii::$app->user->logout();
    }
}