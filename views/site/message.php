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
    <div id="NotMoveDIV">
        <div class="icon-box">
            <a href="/site/index" class="botm-icon-text"><img src="/img/ios7-home-outline.png" class="botm-icon"/><br/>主页</a>
        </div>
        <div class="icon-box">
            <a href="/site/course" class="botm-icon-text"><img src="/img/ios7-compose-outline.png" class="botm-icon"/><br/>课程</a>
        </div>
        <div class="icon-box">
            <a href="" class="botm-icon-text"><img src="/img/ios7-bell.png"
                                                          class="botm-icon"/><br/>消息</a>
        </div>
        <div class="icon-box">
            <a href="/site/mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br/>我的</a>

        </div>
    </div>
</section>
