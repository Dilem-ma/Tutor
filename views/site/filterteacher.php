<?php

/* @var $this yii\web\View */

$this->title = 'FilterPage';
\app\assets\FilterAsset::register($this);
?>
<div class="scTop">
    <span class="title">筛选订单</span>
    <a href="search"><img src="/img/android-arrow-back.png" class="back"/></a>
</div>
<div ng-controller="FilterteacherCtrl">

    <div class="content">
        <div class="form">
            <div class="message">
                <div class="border">
                    <div class="name"><span>擅长科目</span></div>
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
                    <div class="name"><span>教育年级</span></div>
                    <div class="ctnt">
                        <select ng-init="education = education[0]" ng-model="area" ng-options="x for x in education">
                        </select>
                    </div>
                </div>
            </div>
            <div class="message">
                <div class="border">
                    <div class="name"><span>星级</span></div>
                    <div class="ctnt">
                        <select ng-init="star = star[0]" ng-model="price" ng-options="x for x in star">
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
    <a ng-click="doFilter(tech,gender,area,star,text)">
        <div class="bottom">
            进行筛选
        </div>
    </a>
</div>