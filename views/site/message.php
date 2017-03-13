<?php

/* @var $this yii\web\View */

$this->title = 'MessagePage';
\app\assets\MessageAsset::register($this);
?>
<div class="thehead">
    <span class="title">消息</span>
</div>
<section class="list">
    <ul class="list-ul">
        <li id="li" class="list-li">
            <div class="pane1">
                <div class="pane1-1">
                    <h1 class="time">1:08 PM</h1>
                </div>
                <div class="pane1-2">

                </div>
                <div class="pane1-3">
                </div>
                <div class="pane1-4-1">
                    <span class="username">Anna Blum</span>
                </div>
                <div class="pane1-4-1">
                    <span class="text1">This sounded nonsense to Alice,so she said nothing,</span>
                </div>
            </div>
            <div class="btn">删除</div>
        </li>
    </ul>
    <div>
        <div class="bottom">
            <div class="bottompane">
                <img align="absmiddle" src="/img/ios7-home.png" class="pic_icon"/>
            </div>
            <div class="bottompane">
                <a href="login.html">
                    <img align="absmiddle" src="/img/ios7-compose-outline.png" class="pic_icon"/>
                </a>
            </div>
            <div class="bottompane">
                <a href="message1.html">
                    <img align="absmiddle" src="/img/ios7-bell-outline.png" class="pic_icon"/>
                </a>
            </div>
            <div class="bottompane">
                <a href="login.html">
                    <img align="absmiddle" src="/img/ios7-person-outline.png" class="pic_icon"/>
                </a>
            </div>
            <div class="bottomtext">
                <div class="bottompane">
                    <span class="title">主页</span>
                </div>
                <div class="bottompane">
                    <span class="title">课程</span>
                </div>
                <div class="bottompane">
                    <span class="title">消息</span>
                </div>
                <div class="bottompane">
                    <span class="title">我的</span>
                </div>

            </div>
        </div>
    </div>
