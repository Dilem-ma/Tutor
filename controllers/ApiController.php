<?php
/**
 * Created by PhpStorm.
 * User: №zero
 * Date: 2017/3/8
 * Time: 11:22
 */

namespace app\controllers;

use app\models\LoginForm;
use yii\rest\Controller;

class ApiController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionLogin(){

        $username = isset($_POST['name']) ? $_POST['name'] : NULL;
        $password = isset($_POST['password']) ? $_POST['password'] : NULL;

        $model = new LoginForm();
        $model->username = $username;
        $model->password = $password;

        if ($model->login())
        {
            $user = $model->getUser();
            $data = array();
            $data["id"] = $user["id"];
            $data["username"] = $user["username"];
            $data["password"] = $user["password"];
            $data["url"] = $user["url"];
            $data["authKey"] = $user["authKey"];
            $data["accessToken"] = $user["accessToken"];

            $response = array();
            $response["success"] = 1;
            $response["user"] = $user;

            return json_encode($response);
        } else {
            $response = array();
            $response["success"] = 0;
            $response["error"] = $model->errors;
            return json_encode($response);
        }
    }
}