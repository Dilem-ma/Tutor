<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/5
 * Time: 14:19
 */

/* @var $this yii\web\View */

$this->title = 'Register';
\app\assets\LoginAsset::register($this);
?>

<style>
    .message{
        background: none;
        padding-top: 10%;
    }
    .message input {
        width: 76%;
    }
    .content form input:not(:nth-child(6)) {
        margin-bottom: 8%;
    }
    .message .icons b{
        top: 46%;
        left: 11%;
    }
    .code{
        top: 22%;
        right: 8.4%;
        background: #64a9e9;
        color: #ffffff;
        padding: 3.45% 2%;
        border-radius: 3px;
        font-size: 0.9em;
    }
</style>

<div class="shortcut">
    <div class="scTop">
        <span class="title">注册账号</span>
        <a href="login"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="content">
        <form action="register2">
            <div class="message">
                <input type="text" placeholder="请输入手机号码" pattern="[0-9]{11}" required/>
                <div class="icons">
                    <b><img src="/img/phone.png" class="icon" alt=""/></b>
                </div>
            </div>
            <button class="submit" type="submit">获取验证码</button>
        </form>
    </div>
</div>
