<?php
/**
 * Created by PhpStorm.
 * User: cuiyuxuan
 * Date: 2017/3/13
 * Time: 下午9:46
 */
/* @var $this yii\web\View */

$this->title = 'search';
\app\assets\SearchAsset::register($this);
?>
<div ng-controller="SearchCtrl">
    <div class="shortcut1">
        <div class="srchTop">
            <div class="srchSpan">
                <div class="back"><a href="course"><img src="/img/android-arrow-back.png" class="back"/></a></div>
                <div class="message">
                    <form class="search"><input type="text" placeholder="请输入搜索内容"></form>
                </div>
                <div class="btn-box"><a href="filter" class="select">筛选</a></div>
            </div>
            <div class="select-content" ng-hide="(gender==undefined || gender == '') && (tech==undefined || tech == '') &&(price==undefined || price == '') &&(area==undefined || area == '')"><a>{{gender}}</a><span class="pipe">|</span><a>{{tech}}</a><span
                    class="pipe">|</span><a>{{price}}</a><span class="pipe">|</span><a>{{area}}</a></div>
            </div>

    </div>
    <div class="content" ng-hide="(gender==undefined || gender == '') && (tech==undefined || tech == '') &&(price==undefined || price == '') &&(area==undefined || area == '')">
        <div class="need"  ng-repeat="x in orders">
            <div class="portrait"><a><img src="/img/portrait.png"></a></div>
            <div class="need-content">
                <h1><a>{{x.title}}</a></h1>
                <p>{{x.description}}</p>
                <div class="label"><span>{{x.area}}</span><span ng-if="x.gender == 'male'">需要：男性</span><span ng-if="x.gender == 'female'">需要：女性</span><span>价格：{{x.price}}/h</span></div>
            </div>
        </div>
    </div>
    <div class="content" ng-show="(gender==undefined || gender == '') && (tech==undefined || tech == '') &&(price==undefined || price == '') &&(area==undefined || area == '')" style="top:14%;">
        <div class="need"  ng-repeat="x in orders">
            <div class="portrait"><a><img src="/img/portrait.png"></a></div>
            <div class="need-content">
                <h1><a>{{x.title}}</a></h1>
                <p>{{x.description}}</p>
                <div class="label"><span>{{x.area}}</span><span ng-if="x.gender == 'male'">需要：男性</span><span ng-if="x.gender == 'female'">需要：女性</span><span>价格：{{x.price}}/h</span></div>
            </div>
        </div>
    </div>
    <div id="NotMoveDIV">
        <div class="icon-box">
            <a href="index" class="botm-icon-text"><img src="/img/ios7-home-outline.png" class="botm-icon"/><br/>主页</a>
        </div>
        <div class="icon-box">
            <a href="" class="botm-icon-text"><img src="/img/ios7-compose.png" class="botm-icon"/><br/>课程</a>
        </div>
        <div class="icon-box">
            <a href="message" class="botm-icon-text"><img src="/img/ios7-bell-outline.png"
                                                          class="botm-icon"/><br/>消息</a>

        </div>
        <div class="icon-box">
            <a href="mine" class="botm-icon-text"><img src="/img/ios7-person-outline.png" class="botm-icon"/><br/>我的</a>

        </div>
    </div>
</div>