<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/2
 * Time: 9:46
 */

namespace app\controllers;


use yii\web\Controller;

class LoginController extends Controller
{
    public $layout = 'login';

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionRegister()
    {
        return $this->render('register');
    }

    public function actionRegister2()
    {
        return $this->render('register2');
    }

    public function actionNewpassword()
    {
        return $this->render('newpassword');
    }

    public function actionNewpassword2()
    {
        return $this->render('newpassword2');
    }

    public function actionShortcut()
    {
        return $this->render('shortcut');
    }
}