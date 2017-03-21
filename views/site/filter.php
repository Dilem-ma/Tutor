<?php

/* @var $this yii\web\View */

$this->title = 'FilterPage';
\app\assets\FilterAsset::register($this);
?>
<div class="scTop">
    <span class="title">筛选订单</span>
    <a href="search"><img src="/img/android-arrow-back.png" class="back"/></a>
</div>
<div ng-controller="FilterCtrl">

    <div class="content">
        <div class="form">
            <div class="message">
                <div class="border">
                    <div class="name"><span>技术</span></div>
                    <div class="ctnt">
                        <select ng-init="tech = techs[0]" ng-model="tech" ng-options="x for x in techs">
                        </select>
                    </div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>性别</span></div>
                    <div class="ctnt">
                        <select ng-init="gender = genders[0]" ng-model="gender" ng-options="x for x in genders">
                        </select>
                    </div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>地区</span></div>
                    <div class="ctnt">
                        <select ng-init="area = areas[0]" ng-model="area" ng-options="x for x in areas">
                        </select>
                    </div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>价格</span></div>
                    <div class="ctnt">
                        <select ng-init="price = prices[0]" ng-model="price" ng-options="x for x in prices">
                        </select>
                    </div>
                </div>
            </div>
            <div class="message">
                <div class="lastborder">
                    <div class="name"><span>关键词</span></div>
                    <div class="ctnt"><input type="text" ng-model="text"></div>
                </div>
            </div>
        </div>
    </div>
    <a ng-click="doFilter(tech,gender,area,price,text)">
        <div class="bottom">
            进行筛选
        </div>
    </a>
</div>