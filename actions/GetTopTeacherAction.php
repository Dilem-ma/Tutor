<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/20
 * Time: 14:10
 */

namespace app\actions;


use app\models\Teacher;
use yii\base\Action;

class GetTopTeacherAction extends Action
{
    public function run(){
        return Teacher::find()
            ->orderBy('star desc')
            ->limit(3)
            ->all();
    }
}