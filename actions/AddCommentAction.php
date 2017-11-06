<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/11/6
 * Time: 16:36
 */

namespace app\actions;


use app\models\Comment;
use app\models\Teacher;
use yii\base\Action;

class AddCommentAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $comment = new Comment();
//        $comment->o_id = $post['o_id'];
//        $comment->t_id = $post['t_id'];
//        $comment->u_id = $post['u_id'];
//        $comment->content = $post['content'];

        $comment->load($post, '');

        $comment->date = date("Y-m-d");

        $tea = Teacher::findOne(['id' => $post['t_id']]);

        if (is_null($tea)){
            return [
                'success' => false,
                'message' => '未找到该教师',
            ];
        }

        if ($tea->star == 0){
            $tea->star = $post['star'];
        }else{
            $tea->star = ($tea->star + $post['star']) / 2;
        }

        switch ($tea->education){
            case "高中":
                $tea->education = 1;
                break;
            case "专科":
                $tea->education = 2;
                break;
            case "本科":
                $tea->education = 3;
                break;
            case "硕士":
                $tea->education = 4;
                break;
            case "博士":
                $tea->education = 5;
                break;
            default:
                break;
        }

        if ($tea->save()){
            if ($comment->save()){
                return [
                    'success' => true,
                    'message' => '评论成功',
                ];
            }else{
                return [
                    'success' => false,
                    'message' => '评论失败',
                    'errors' => $comment->errors,
                ];
            }
        }else{
            return [
                'success' => false,
                'message' => '评论失败',
                'errors' => $comment->errors,
                'teacher' => $tea,
            ];
        }


    }
}