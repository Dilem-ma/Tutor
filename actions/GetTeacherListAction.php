<?php
/**
 * Created by PhpStorm.
 * User: yj
 * Date: 2017/9/23
 * Time: 17:46
 */

namespace app\actions;


use yii\rest\Action;
use yii\db\Query;

class GetTeacherListAction extends Action
{
    public function run(){

        $rows = (new Query())
            ->select(['user.id', 'name', 'url', 'star'])
            ->from(['user', 'teacher'])
            ->where('user.id = teacher.u_id');
        return $rows->all();
    }
}