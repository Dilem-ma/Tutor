<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/25
 * Time: 14:15
 */

namespace app\controllers;


use yii\rest\ActiveController;

class IssueController extends ActiveController
{
    public $modelClass = 'app\models\Issue';
}