<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/5
 * Time: 14:22
 */

/* @var $this yii\web\View */

$this->title = 'Shortcut';
\app\assets\LoginAsset::register($this);
?>
<style>
    .message {
        background: none;
        padding-top: 10%;
    }

    .message input {
        width: 76%;
    }

    .content form input:not(:nth-child(6)) {
        margin-bottom: 8%;
    }

    .message .icons b {
        top: 28%;
        left: 11%;
    }

    .message .icons b:nth-child(2) {
        top: 67%;
        left: 12%;
    }

    .code {
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
        <span class="title">快速登录</span>
        <a href="login"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="content">
        <form action="">
            <div class="message">
                <input type="text" placeholder="请输入手机号码" pattern="[0-9]{11}" required/>
                <input type="password" placeholder="请输入验证码" pattern="[0-9]{6}" required/>
                <div class="icons">
                    <b><img src="/img/phone.png" class="icon" alt=""/></b>
                    <b><img src="/img/lock_2.png" class="icon" alt=""/></b>
                </div>
                <a class="code" href="">获取验证码</a>
            </div>
            <button class="submit" type="submit">登&nbsp;&nbsp;录</button>
        </form>
    </div>
</div>