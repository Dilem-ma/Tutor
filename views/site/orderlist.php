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
