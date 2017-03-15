<?php

/* @var $this yii\web\View */

$this->title = 'MinePage';
\app\assets\MineAsset::register($this);
?>
<div class="thehead">
    <span class="title">消息</span>
</div>
<div class="pane1">
    <div class="pane1-1">
        <div class="circle">
            <img align="absmiddle" src="/img/portrait.png" class="pic_icon" height="80" width="80"/>
        </div>
        <div class="name">
            <span class="text1">昵称</span>
        </div>
    </div>
    <div class="pane1-2">
        <div class="pane1-2-1">
            <span class="text2">积分  555</span>
        </div>
        <div class="pane1-2-1">
            <span class="text2">余额  ￥50</span>
        </div>
    </div>
</div>
<div class="pane2">
    <div class="pane2-1">
        <div class="pane2-2">
            <div class="image1">
                <img align="absmiddle" src="/img/person.png" class="pic_icon" height="30" width="30"/>
            </div>
            <div class="text3">
                <span class="text4">个人资料</span>
            </div>
        </div>
        <div class="pane2-2">
            <div class="image1">
                <img align="absmiddle" src="/img/social-usd.png" class="pic_icon" height="30" width="30"/>
            </div>
            <div class="text3">
                <span class="text4">我的钱包</span>
            </div>
        </div>
        <div class="pane2-2">
            <a href="authentication">
            <div class="image1">
                <img align="absmiddle" src="/img/mailopened.png" class="pic_icon" height="30" width="30"/>
            </div>
            <div class="text3">
                <span class="text4">认证信息</span>
            </div>
            </a>
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-2">
            <div class="image1">
                <img align="absmiddle" src="/img/calendar .png" class="pic_icon" height="30" width="30"/>
            </div>
            <div class="text3">
                <span class="text4">课程管理</span>
            </div>
        </div>
        <div class="pane2-2">
            <div class="image1">
                <img align="absmiddle" src="/img/android-folder.png" class="pic_icon" height="30" width="30"/>
            </div>
            <div class="text3">
                <span class="text4">我的收藏</span>
            </div>
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-2">
            <div class="image1">
                <img align="absmiddle" src="/img/gear-b.png" class="pic_icon" height="30" width="30"/>
            </div>
            <div class="text3">
                <span class="text4">设置</span>
            </div>
        </div>
    </div>

</div>
<div id="NotMoveDIV">
    <div class="icon-box">
        <a href="index" class="botm-icon-text" ><img src="/img/ios7-home-outline.png" class="botm-icon"/><br />主页</a>
    </div>
    <div class="icon-box">
        <a href="course" class="botm-icon-text"><img src="/img/ios7-compose-outline.png" class="botm-icon"/><br />课程</a>
    </div>
    <div class="icon-box">
        <a href="message" class="botm-icon-text"><img src="/img/ios7-bell-outline.png" class="botm-icon"/><br />消息</a>

    </div>
    <div class="icon-box">
        <a href="" class="botm-icon-text"><img src="/img/ios7-person.png" class="botm-icon"/><br />我的</a>

    </div>
</div>