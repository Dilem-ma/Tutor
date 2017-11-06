<?php

/* @var $this yii\web\View */

$this->title = 'OrderlistPage';
\app\assets\OrderlistAsset::register($this);
?>
<div class="scTop">
    <span class="title">我的订单</span>
    <a href="mine"><img src="/img/back.png" class="back"/></a>
</div>
<div class="pane1">
    <a href="" class="pane1-1">
        全部
    </a>
    <a href="" class="pane1-1">
        待领取
    </a>
    <a href="" class="pane1-1">
        待完成
    </a>
    <a href="" class="pane1-1">
        待评价
    </a>
</div>
<div class="pane2">
    <div class="pane2-1">
        <div class="pane2-1-1">
            数据库基础课程</br>
            <span class="text1">下单时间：2017/3/21 10:13</span></br>
            <span class="text1">课程价格：100元</span>
        </div>
        <div class="pane2-1-2">
            待评价
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-1-1">
            Java项目</br>
            <span class="text1">下单时间：2017/3/20 10:00</span></br>
            <span class="text1">课程价格：100元</span>
        </div>
        <div class="pane2-1-2">
            待评价
        </div>
    </div>
    <div class="pane2-1">
        <div class="pane2-1-1">
            数据库项目</br>
            <span class="text1">下单时间：2017/3/20 08:00</span></br>
            <span class="text1">课程价格：100元</span>
        </div>
        <div class="pane2-1-2">
            待评价
        </div>
    </div>
</div>
<div id="NotMoveDIV">
    <div class="icon-box">
        <a href="/site/index" class="botm-icon-text"><img src="/img/ios7-home-outline.png" class="botm-icon"/><br/>主页</a>
    </div>
    <div class="icon-box">
        <a href="/site/course" class="botm-icon-text"><img src="/img/ios7-compose.png" class="botm-icon"/><br/>课程</a>
    </div>
    <div class="icon-box">
        <a href="" class="botm-icon-text"><img src="/img/ios7-bell-outline.png"
                                               class="botm-icon"/><br/>消息</a>
    </div>
    <div class="icon-box">
        <a href="/site/mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br/>我的</a>

    </div>
</div>
