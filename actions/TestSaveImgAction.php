<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/26
 * Time: 17:16
 */

namespace app\actions;


use app\models\User;
use yii\base\Action;

class TestSaveImgAction extends Action
{
    public function run(){

        $user = User::findOne(['id' => 1]);

        date_default_timezone_set("Asia/Shanghai");

        $file = $_FILES['file'];

        $upload_path = "../img/";

        $file['name'] = date("Y-m-d-His")."-".$file['name'];
        $url = $upload_path.$file['name'];

        if (move_uploaded_file($file['tmp_name'], $url)){
            $user->url = $url;
            if ($user->save()) {
                return [
                    'success' => true,
                    'message' => '头像上传成功',
                ];
            } else {
                return [
                    'success' => false,
                    'message' => '头像上传失败',
                    'errors' => $user->getFirstError('username'),
                ];
            }
        } else{
            return [
                'success' => false,
                'message' => '头像上传失败',
            ];
        }


    }
}