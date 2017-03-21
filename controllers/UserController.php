<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/19
 * Time: 19:35
 */

namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\ForbiddenHttpException;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function checkAccess($action, $model = null, $params = [])
    {
        if (\Yii::$app->user->isGuest){
            throw new ForbiddenHttpException();
        }
    }


//    public $serializer = [
//        'class' => 'yii\rest\Serializer',
//        'collectionEnvelope' => 'items',
//    ];
}