<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/8
 * Time: 11:22
 */

namespace app\controllers;

use app\actions\GetImgAction;
use app\actions\PickUpOrderAction;
use app\actions\SearchOrderAction;
use app\actions\SearchTeacherAction;
use app\actions\SelectOrdersAction;
use app\actions\SmsSendAction;
use app\actions\ChangePasswordAction;
use app\actions\GetCurrentUserAction;
use app\actions\GetIdentityAction;
use app\actions\GetTopTeachersAction;
use app\actions\LoginAction;
use app\actions\RegisterAction;
use app\actions\StuAddOrderAction;
use app\actions\StudentIdentityAction;
use app\actions\TeacherIdentityAction;
use app\actions\GetTeacherListAction;
use app\actions\TestSaveImgAction;
use app\actions\UpdatePersonDataAction;
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
                    'actions' => ['login', 'teacher_identity', 'student_identity', 'stu_add_order', 'select_orders', 'update_person_data', 'sms_send', 'search_teacher', 'search_order', ],
                    'verbs' => ['POST'],
                ],
                [
                    'allow' => true,
                    'actions' => ['top_teachers', 'get_identity', 'get_current_user','get_teacher_list'],
                    'verbs' => ['GET'],
                ],
                [
                    'allow' => true,
                    'actions' => ['register', 'change_password', 'test_save_img', 'get_img', 'pick_up_order'],
                    'verbs' => ['POST'],
                ],
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
            'stu_add_order' => StuAddOrderAction::className(),
            'select_orders' => SelectOrdersAction::className(),
            'get_identity' => GetIdentityAction::className(),
//            'current_user' => $this->actionCurrentUser(),
            'register' => RegisterAction::className(),
            'change_password' => ChangePasswordAction::className(),
            'student_identity' => StudentIdentityAction::className(),
            'get_current_user' => GetCurrentUserAction::className(),
            'get_teacher_list' => GetTeacherListAction::className(),
            'update_person_data' => UpdatePersonDataAction::className(),
            'sms_send' => SmsSendAction::className(),
            'search_teacher' => SearchTeacherAction::className(),
            'search_order' => SearchOrderAction::className(),
            'test_save_img' => TestSaveImgAction::className(),
            'get_img' => GetImgAction::className(),
            'pick_up_order' => PickUpOrderAction::className(),
        ];
    }

    public function logout(){
        return \Yii::$app->user->logout();
    }

//    public function actionCurrentUser(){
//        return \Yii::$app->user->isGuest ? null : \Yii::$app->user->identity->getId();
//    }
}