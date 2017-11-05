<?php
/**
 * Created by PhpStorm.
 * User: Molly
 * Date: 17/10/28
 * Time: 下午2:59
 */


namespace app\actions;

use app\models\Order;
use app\models\user;
use yii\base\Action;

class AddToMyFavourite extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $user = new User();
        $user->load($post, '');

        $res = User::find()->where(['id' => $post['id']])->one();

        if($res->favourite == null)
        {
            $res->favourite = $post['tid'];
        }
        else
          $res->favourite = $res->favourite.",".$post['tid'];

        if ($res->save()) {
            return [
                'success' => true,
                'message' => '收藏成功',
            ];
        } else {
            $error = $user->getFirstError('favourite') ;
            return [
                'success' => false,
                'message' => '收藏失败',
                'errors' => $error,
            ];
        }
    }
}