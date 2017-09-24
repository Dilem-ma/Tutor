<?php
/**
 * Created by PhpStorm.
 * User: Vam
 * Date: 2017/3/20
 * Time: 14:10
 */

namespace app\actions;

use yii\base\Action;
use yii\db\Query;

class GetTopTeachersAction extends Action
{
    public function run(){

        $rows = (new Query())
            ->select(['user.id', 'name', 'url', 'star', 'teacher.id'])
            ->from(['user', 'teacher'])
            ->where('user.id = teacher.u_id')
            ->orderBy('star DESC')
            ->limit(3);

        return $rows->all();
    }
}