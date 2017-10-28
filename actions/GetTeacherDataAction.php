<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/10/28
 * Time: 14:25
 */

namespace app\actions;


use yii\base\Action;
use yii\db\Query;

class GetTeacherDataAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $rows = (new Query())
            ->select(['user.id', 'name', 'url', 'star', 'gender', 'education', 'major', 'describe', 'area'])
            ->from(['user', 'teacher'])
            ->where('user.id = teacher.u_id')
            ->andWhere(['user.id' => $post['id']]);
        return $rows->all();
    }
}