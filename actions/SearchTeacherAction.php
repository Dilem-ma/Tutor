<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 15:57
 */

namespace app\actions;

use yii\base\Action;
use yii\db\Query;

class SearchTeacherAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $rows = (new Query())
            ->select(['user.id', 'name', 'url', 'star', 'gender', 'education', 'major', 'describe', 'area'])
            ->from(['user', 'teacher'])
            ->where('user.id = teacher.u_id')
            ->andWhere(['like', 'user.name', $post['name']]);
        return $rows->all();
    }
}