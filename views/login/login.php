<?php
/**
 * Created by PhpStorm.
 * User: Dilemma丶
 * Date: 2017/3/5
 * Time: 14:19
 */

/* @var $this yii\web\View */

$this->title = 'Login';
\app\assets\LoginAsset::register($this);
?>

<style>
    ::-webkit-input-placeholder { /* WebKit browsers */
        color: #ffffff;
        font-size: 1.2em;
        font-weight: 200;
    }

    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color: #ffffff;
        font-size: 1.2em;
        font-weight: 200;
    }

    ::-moz-placeholder { /* Mozilla Firefox 19+ */
        color: #ffffff;
        font-size: 1.2em;
        font-weight: 200;
    }

    :-ms-input-placeholder { /* Internet Explorer 10+ */
        color: #ffffff;
        font-size: 1.2em;
        font-weight: 200;
    }

    .pic_icon {
        height: 2.5em;
        width: auto;
        line-height: 2.5em;
        color: #ffffff;
    }

    img {
        width: 100%;
    }

    form {
        width: 80%;
        margin: 5em auto;
        text-align: left;
    }

    form div.userName, form div.passWord {
        padding: 3.5% 0 4% 0;
        height: 3em;
        line-height: 3em;
    }

    form div.userName input, form div.passWord input {
        margin-left: 1em;
        width: 68%;
        height: 3em;
        line-height: 3em;
        border: none;
        background: transparent;
        font-size: 1em;
        font-family: "Microsoft YaHei";
        color: #ffffff;
        letter-spacing: 1px;
        padding-left: 2px;
        font-weight: 200;
        vertical-align:middle;
    }

</style>
<div id="login"></div>
<div class="login_bg">
    <div id="logo">
        <!--<img src="/img/logo.png" alt=""/>-->
        <a style="color: #fff; font-family: 'Microsoft YaHei'; font-size: 4em; width: 3em;">
            Tutor
        </a>
    </div>
    <form action="/api/login" method="post">
        <div class="userName">
            <span><img align="absmiddle" src="/img/user.png" class="pic_icon"/></span>
            <input type="text" name="name" placeholder="输入账号" pattern="[0-9A-Za-z]{6,16}" required/>
        </div>
        <div class="passWord">
            <span><img align="absmiddle" src="/img/pwd.png" class="pic_icon" style="margin-left: 0.3em;margin-right: 0.3em;"/></span>
            <input type="password" name="password" placeholder="输入密码" pattern="[0-9A-Za-z]{6,25}" required/>
        </div>
        <button class="login_btn" type="submit">登&nbsp;&nbsp;录</button>
        <div class="choose_box">
            <div>
                <a href="newpassword" class="forget_pwd">忘记密码？</a>
            </div>
            <a href="shortcut" class="shortcut">快速登录</a>
        </div>
    </form>
</div>
<a class="reg" href="register">新用户？点击注册</a>
</div>
