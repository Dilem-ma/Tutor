<?php
/**
 * Created by PhpStorm.
 * User: no1r
 * Date: 2017/10/28
 * Time: 14:03
 */

namespace app\actions;


use app\models\Order;
use app\models\Student;
use app\models\Teacher;
use yii\base\Action;

class GetUserOrdersAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $order1 = [];
        $order2 = [];

        $teacher = Teacher::findByUID($post['id']);
        if ($teacher != null){
            $order1 = Order::find()
                ->where(['like', 't_id', $teacher->id])
                ->all();
        }

        $student = Student::findByUID($post['id']);
        if ($student != null){
            $order2 = Order::find()
                ->where(['s_id' => $student->id])
                ->all();
        }

        return $order1 + $order2;

    }
}