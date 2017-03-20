<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/20
 * Time: 10:40
 */

namespace app\controllers;


use yii\rest\ActiveController;

class StudentController extends ActiveController
{
    public $modelClass = 'app\models\Student';
}