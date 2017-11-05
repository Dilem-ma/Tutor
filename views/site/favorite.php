<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/21
 * Time: 下午11:31
 */

$this->title = 'order';
\app\assets\FavoriteAssete::register($this);
?>


<div class="shortcut1">
    <div class="scTop">
        <span class="title">我的收藏</span>
        <a href="mine"><img src="/img/back.png" class="back"/></a>
    </div>
</div>

<div class="content" ng-controller="FavoriteCtrl">
    <div class="favorite" ng-repeat="x in orders">
        <div class="portrait"><a class="user"><img src={{x.url}} ></a></div>
        <div class="info"><h1>{{x.name}}</h1><p1>{{x.describe}}</p1></div>
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

