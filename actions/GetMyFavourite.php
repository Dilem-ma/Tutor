<?php
/**
 * Created by PhpStorm.
 * User: Molly
 * Date: 17/10/28
 * Time: 下午3:40
 */

namespace app\actions;

use app\models\Teacher;
use app\models\User;
use yii\base\Action;
use yii\db\Query;

class GetMyFavourite extends Action
{
    public function run(){

        $post = \Yii::$app->request->post();

        $user = User::findOne(['id' => $post['id']]);

        $t_id = explode(',', $user['favourite']);

        $rows = (new Query())
            ->select(['user.id', 'name', 'url', 'star', 'gender', 'education', 'major', 'describe', 'area'])
            ->from(['user', 'teacher'])
            ->where(['in', 'teacher.id', $t_id])
            ->andWhere('user.id = teacher.u_id')
            ->all();

        return $rows;
    }
}