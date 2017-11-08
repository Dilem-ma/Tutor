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

<div class="content" ng-controller="FavoriteCtrl" ng-cloak class="ng-cloak">
    <div class="favorite" ng-repeat="x in orders">
        <div class="portrait"><a class="user"><img src={{x.url}} ></a></div>
        <div class="info"><h1>{{x.name}}</h1><p1>{{x.describe}}</p1></div>
    </div>

</div>



