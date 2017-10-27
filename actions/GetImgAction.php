<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 18:25
 */

namespace app\actions;


use app\models\Local;
use yii\base\Action;

class GetImgAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();
        $local = Local::findOne(['id' => $post['id']]);
        return $local->img;
    }
}