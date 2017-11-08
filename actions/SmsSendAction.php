<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/10/24
 * Time: 14:11
 */

namespace app\actions;

use yii\base\Action;
use app\models\SmsSingleSender;

class SmsSendAction extends Action
{
    public function run(){
        $post = \Yii::$app->request->post();

        $uid = "z308170166";
        $key = "78105db5a9b8fba48634";
        $smsMob = $post['phone'];
        $smsTest = $this->generate_code();

        $url="http://utf8.api.smschinese.cn/?Uid=".$uid."&Key=".$key."&smsMob=".$smsMob."&smsText=验证码：".$smsTest;
        return [
            'result' => $this->Get($url),
            'verification code' => $smsTest,
        ];
    }

    function generate_code($length = 6) {
        return rand(pow(10,($length-1)), pow(10,$length)-1);
    }

    function Get($url)
    {
        if(function_exists('file_get_contents'))
        {
            $file_contents = file_get_contents($url);
        }
        else
        {
            $ch = curl_init();
            $timeout = 5;
            curl_setopt ($ch, CURLOPT_URL, $url);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $file_contents = curl_exec($ch);
            curl_close($ch);
        }
        return $file_contents;
    }
}