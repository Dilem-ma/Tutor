<?php
/**
 * Created by PhpStorm.
 * User: yj
 * Date: 2017/9/23
 * Time: 17:46
 */

namespace app\actions;


use yii\base\Action;
use yii\db\Query;

class GetTeacherListAction extends Action
{
    public function run(){

        $rows = (new Query())
            ->select(['user.id', 'teacher.id AS t_id', 'name', 'url', 'star', 'gender', 'education', 'major', 'describe', 'area'])
            ->from(['user', 'teacher'])
            ->where('user.id = teacher.u_id');
        return $rows->all();
    }
}