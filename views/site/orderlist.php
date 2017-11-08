<?php

/* @var $this yii\web\View */

$this->title = 'OrderlistPage';
\app\assets\OrderlistAsset::register($this);
?>
<div class="scTop">
    <span class="title">我的订单</span>
</div>
<form  ng-cloak class="ng-cloak" >
<div class="pane2" ng-controller="OrderListCtrl">
    <div class="pane2-1" ng-repeat="x in orders" ng-click="toOrder(x.id)">
        <div class="pane2-1-1">
            {{x.title}}</br>
            <span class="text1">上课时间：{{x.teach_time}}</span></br>
            <span class="text1">课程价格：{{x.price}}</span>
        </div>
        <div class="pane2-1-2">
            {{x.status}}
        </div>
    </div>
</div>
</form>
<div id="NotMoveDIV">
    <div class="icon-box">
        <a href="/site/index" class="botm-icon-text"><img src="/img/ios7-home-outline.png" class="botm-icon"/><br />主页</a>
    </div>
    <div class="icon-box">
        <a href="/site/search" class="botm-icon-text"><img src="/img/ios7-compose-outline.png" class="botm-icon"/><br />课程</a>
    </div>
    <div class="icon-box2">
        <a href="/site/studenttask"><img src="/img/plus2.png" class="botm-icon2"/></a>
    </div>
    <div class="icon-box">
        <a href="/site/orderlist" class="botm-icon-text"><img src="/img/ios7-bell.png" class="botm-icon"/><br />订单</a>
    </div>
    <div class="icon-box">
        <a href="/site/mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br />我的</a>
    </div>
</div>
