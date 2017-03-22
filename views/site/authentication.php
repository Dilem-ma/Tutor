<?php

/* @var $this yii\web\View */

$this->title = 'AuthenticationPage';
\app\assets\AuthenticationAsset::register($this);
?>
<div class="scTop">
    <span class="title">认证信息</span>
    <a href="mine"><img src="/img/back.png" class="back"/></a>
</div>
<div class="pane1">
    <div class="pane1-1">
        <div class="pane1-1-1">
            <img align="absmiddle" src="/img/portrait.png" class="pic_icon" height="80" width="80"/>
        </div>
        <div class="pane1-1-2">
            <div class="pane1-1-2-1">
                <span class="name">姓名：张三</br></br></span>
            </div>
            <div class="pane1-1-2-1">
                <span class="tel">手机号：18966666666</span>
            </div>
        </div>
    </div>
    <div class="pane1-2">
        <span class="student">学生认证 ：</span>
        <span class="red">未通过认证</span>
        <a href="smallstudent" >（点击此处进行认证）</a>
    </div>
    <div class="pane1-3">
        <span class="student">教师认证 ：</span>
        <span class="green">已通过认证</br></br></span>
        <span class="text">性别：男</br></span>
        <span class="text">出生年月：1997.01.01</br></span>
        <span class="text">出生地：上海</br></span>
        <span class="text">学历：本科在读</br></span>
        <span class="text">专业：软件工程</br></span>


    </div>
</div>
<div id="NotMoveDIV">
    <div class="icon-box">
        <a href="/site/index" class="botm-icon-text"><img src="/img/ios7-home-outline.png" class="botm-icon"/><br/>主页</a>
    </div>
    <div class="icon-box">
        <a href="/site/course" class="botm-icon-text"><img src="/img/ios7-compose-outline.png" class="botm-icon"/><br/>课程</a>
    </div>
    <div class="icon-box">
        <a href="/site/message" class="botm-icon-text"><img src="/img/ios7-bell-outline.png"class="botm-icon"/><br/>消息</a>
    </div>
    <div class="icon-box">
        <a href="/site/mine" class="botm-icon-text"><img src="/img/ios7-person.png" class="botm-icon"/><br/>我的</a>

    </div>
</div>
