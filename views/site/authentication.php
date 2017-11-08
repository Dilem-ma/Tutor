<?php

/* @var $this yii\web\View */

$this->title = 'AuthenticationPage';
\app\assets\AuthenticationAsset::register($this);
?>
<div ng-controller="AuthenCtrl" ng-cloak class="ng-cloak">

    <div class="scTop">
        <span class="title">认证信息</span>
        <a href="mine"><img src="/img/back.png" class="back"/></a>
    </div>
    <div class="pane1">
        <div class="pane1-1">
            <div class="pane1-1-1">
                <img align="absmiddle" src="{{current_url}}" class="pic_icon" height="80" width="80"/>
            </div>
            <div class="pane1-1-2">
                <div class="pane1-1-2-1">
                    <span class="name">姓名：{{current_name}}</br></br></span>
                </div>
                <div class="pane1-1-2-1">
                    <span class="tel">手机号：{{current_num}}</span>
                </div>
            </div>
        </div>
        <div class="pane1-2" ng-show = "!stu_status">
            <span class="student">学生认证 ：</span>
            <span class="red">未通过认证</span>
            <a href="stuauthen" ng-show = "!stu_status && !tea_status">（点击此处进行认证）</a>
        </div>
        <div class="pane1-2" ng-show = "!tea_status">
            <span class="student">教师认证 ：</span>
            <span class="red">未通过认证</span>
            <a href="teacherauthen" ng-show = "!stu_status && !tea_status">（点击此处进行认证）</a>
        </div>
        <div class="pane1-3" ng-show = "stu_status">
            <span class="student">学生认证 ：</span>
            <span class="green">已通过认证</br></br></span>
            <span class="text">年级：{{stu_grade}}</br></span>
            <span class="text">描述：{{stu_description}}</br></span>
        </div>
        <div class="pane1-3" ng-show = "tea_status">
            <span class="student">教师认证 ：</span>
            <span class="green">已通过认证</br></br></span>
            <span class="text">星级：{{tea_star}}</br></span>
            <span class="text">专业：{{tea_major}}</br></span>
            <span class="text">教育：{{tea_education}}</br></span>
            <span class="text">描述：{{tea_description}}</br></span>
        </div>
    </div>
</div>