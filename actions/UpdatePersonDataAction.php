<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/9/24
 * Time: 15:44
 */

namespace app\actions;


use app\models\Pwd;
use app\models\User;
use yii\base\Action;

class UpdatePersonDataAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $user = new User();
        $user->load($post, '');

        $res = User::find()->where(['id' => $post['id']])->one();
        $res->name = $post['name'];
        $res->birthday = $post['birthday'];
        $res->area = $post['area'];
        $res->gender = $post['gender'];
        $res->url = $post['url'];

        $pwd = Pwd::findOne(['id' => $res->id]);
        $res->password = $pwd->password;

        if ($res->save()) {
            return [
                'success' => true,
                'message' => '更新成功',
            ];
        } else {
            $error = $user->getFirstError('username') ? $user->getFirstError('username') : $user->getFirstError('password');
            return [
                'success' => false,
                'message' => '更新失败',
                'errors' => $error,
            ];
        }
    }
}