<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/5
 * Time: 14:22
 */

/* @var $this yii\web\View */

$this->title = 'Register2';
\app\assets\Register2Asset::register($this);
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
        left: 12%;
    }

    .message .icons b:nth-child(2) {
        top: 67%;
        left: 12%;
    }

    .message .icons b:nth-child(3) {
        top: 68%;
        left: 78%;
    }

    .message .icons b:nth-child(4) {
        top: 66%;
        left: 78%;
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
<script type="text/javascript">
    function show() {
        var password = document.getElementById("pwd").value;
        document.getElementById("pwd2").value = password;
        document.getElementById("pwd").style.display = "none";
        document.getElementById("vis").style.display = "none";
        document.getElementById("pwd2").style.display = "block";
        document.getElementById("invis").style.display = "block";
    }
    function hide() {
        var password = document.getElementById("pwd2").value;
        document.getElementById("pwd").value = password;
        document.getElementById("pwd").style.display = "block";
        document.getElementById("vis").style.display = "block";
        document.getElementById("pwd2").style.display = "none";
        document.getElementById("invis").style.display = "none";
    }
</script>

<div class="shortcut" ng-controller="Register2Ctrl">
    <div class="scTop">
        <span class="title">注册账号</span>
        <a href="login"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="content">
        <form>
            <div class="message">
                <input type="password" ng-model="vcode" placeholder="请输入验证码" pattern="[0-9]{6}" required/>
                <input id="pwd" type="password" ng-model="pwd" placeholder="请设置密码" pattern="[0-9A-Za-z]{6,25}" required/>
                <input id="pwd2" type="text" placeholder="请设置密码" pattern="[0-9A-Za-z]{6,25}" style="display: none" required/>
                <div class="icons">
                    <b><img src="/img/lock_2.png" class="icon" alt=""/></b>
                    <b><img src="/img/lock_2.png" class="icon" alt=""/></b>
                    <b><img id="vis" src="/img/eye.png" class="icon2" alt="" onclick="show()"/></b>
                    <b><img id="invis" src="/img/eye-disabled.png" class="icon3" alt="" onclick="hide()"/></b>
                </div>
                <a class="code" id="resend" href="" ng-click="step1_()">重新发送</a>
            </div>
            <button class="submit" ng-click="regi(vcode,pwd)">登&nbsp;&nbsp;录</button>
        </form>
    </div>
</div>